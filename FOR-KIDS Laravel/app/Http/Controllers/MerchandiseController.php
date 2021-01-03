<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Merchandise::all();
        return view('admin.merchandise.index',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $file_name = time().$file->getClientOriginalName();
        $data = $request->all();
        array_chunk($data,4,4);
        $data['foto'] = $file_name;
        $file->move(public_path('img/merchandise'),$file_name); 
        Merchandise::create($data);
        return redirect()->back()->with('success','Berhasil Tambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Merchandise::findOrFail($id);
        return view('admin.merchandise.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Merchandise::findOrFail($id);
        return view('admin.merchandise.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file('foto');
        $data = $request->all();
        array_chunk($data,4,4);
        if($file == TRUE) {
            $file_name = time().$file->getClientOriginalName();
            $data['foto'] = $file_name;
            $file->move(public_path('img/merchandise'),$file_name); 
        }

        Merchandise::findOrFail($id)->update($data);

        return redirect()->back()->with('success','Berhasil Ubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\merchandise  $merchandise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Merchandise::findOrFail($id)->delete();
        return redirect()->back()->with('error','Berhasil Hapus Data');
    }
}
