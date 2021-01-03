<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
class Ajax extends Controller
{

    public function cart_view() {
        $cart_count = Cart::getContent()->count();
        $product = Cart::getContent();
        return view('ajax.checkout.show',compact('cart_count','product'));
    }

    public function cart_action($type,Request $request) {
        if($type== "add") {
            $data['foto'] = $request->foto;
            if(!empty($request->event_id)) {
                $data['isEvent'] = $request->event_id;
            }
            
            Cart::add(md5(time().$request->id), $request->name, $request->price, 1,$data);
        } else if($type == "update") {
            Cart::update($request->row_id, array(
                'quantity' => $request->quantity, 
            ));
        } else if($type == "delete") {
            $cek = Cart::get($request->row_id)->quantity;
            // dd($cek);
            if($cek < 2)
                Cart::remove($request->row_id);
            else
                Cart::update($request->row_id, array(
                    'quantity' => -1, 
                ));
        } else if($type == "clear") {
            Cart::clear();
        }
    }
}
