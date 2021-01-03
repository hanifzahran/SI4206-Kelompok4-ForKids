<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Event_detail;
use Illuminate\Http\Request;
use Cart;
use Auth;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $list = Transaksi::select('no_unik')->distinct()->get();
        return view('admin.transaksi.index',compact('list'));
    }

    public function show($id)
    {
        $data = Transaksi::findOrFail($id);
        return view('admin.transaksi.show',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Transaksi::findOrFail($id);
        $data->status = $request->status;
        \DB::transaction(function () use($request,$id,$data) {
            $event = Event_detail::create([
                'event_id' => $data->isEvent,
                'user_id' => $data->user_id
            ]);
            $data->save();
        });
        return redirect()->back()->with('success','Status Pesanan #'.$id.' Diubah Menjadi '.$request->status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checkout() {
        $no_unik = no_unik(10);
        foreach(Cart::getContent() as $cart) {
            $data = [
                'user_id' => Auth::user()->id,
                'no_unik' => $no_unik,
                'produk' => $cart->name,
                'harga' => $cart->price,
                'foto' => $cart->attributes->foto,  
            ];
            if(!empty($cart->isEvent)) {
                $data['isEvent'] = $cart->isEvent;
            }
            Transaksi::create($data);
        }
        return redirect(route('transaksi.invoice',$no_unik));
    }

    public function invoice($no_unik) {
        $transaksi = Transaksi::where('no_unik',$no_unik)->get();
        return view('transaksi.invoice',compact('transaksi'));
    }
    

}
