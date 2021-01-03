<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Video::all();
        return view('admin.video.index',compact('list'));
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
        array_chunk($data,4,4);
        if($file == TRUE) {
            $file_name = time().$file->getClientOriginalName();
            $data['foto'] = $file_name;
            $file->move(public_path('img/video'),$file_name); 
        }   
        Video::create($data);
        return redirect()->back()->with('success','Berhasil Tambah Data !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $Video
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Video::findOrFail($id);
        return view('admin.video.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $Video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Video::findOrFail($id);
        return view('admin.video.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $Video
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
            $file->move(public_path('img/video'),$file_name); 
        }
        Video::findOrFail($id)->update($data);
        return redirect()->back()->with('success','Berhasil Ubah Data !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $Video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::findOrFail($id)->delete();
        return redirect()->back()->with('error','Berhasil Hapus Data !');
    }

    public function child_index() {
        $video = Video::all();
        return view('child.video.index',compact('video'));
    }

    public function detail($id) {
        $data = Video::findOrFail($id);
        return view('child.video.show',compact('data'));
    }
}
