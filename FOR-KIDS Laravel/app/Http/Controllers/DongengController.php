<?php

namespace App\Http\Controllers;

use App\Models\Dongeng;
use Illuminate\Http\Request;

class DongengController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Dongeng::all();
        return view('admin.dongeng.index',compact('list'));
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
        $data = $request->all();  
        array_chunk($data,3,3);
        if($file == TRUE) {
            $file_name = time().$file->getClientOriginalName();
            $data['foto'] = $file_name;
            $file->move(public_path('img/dongeng'),$file_name); 
        }
        Dongeng::create($data);
        return redirect()->back()->with('success','Berhasil Tambah Data !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dongeng  $Dongeng
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Dongeng::findOrFail($id);
        return view('admin.dongeng.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dongeng  $Dongeng
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Dongeng::findOrFail($id);
        return view('admin.dongeng.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dongeng  $Dongeng
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file('foto');
        $data = $request->all();   
        array_chunk($data,3,3);
        if($file == TRUE) {
            $file_name = time().$file->getClientOriginalName();
            $data['foto'] = $file_name;
            $file->move(public_path('img/dongeng'),$file_name); 
        } 
        Dongeng::findOrFail($id)->update($data);
        return redirect()->back()->with('success','Berhasil Ubah Data !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dongeng  $Dongeng
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dongeng::findOrFail($id)->delete();
        return redirect()->back()->with('error','Berhasil Hapus Data !');
    }

    public function child_index() {
        $dongeng = Dongeng::all();
        return view('child.dongeng.index',compact('dongeng'));
    }

    public function detail($id) {
        $data = Dongeng::findOrFail($id);
        return view('child.dongeng.show',compact('data'));
    }

}
