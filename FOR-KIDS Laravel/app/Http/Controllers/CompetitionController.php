<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Competition_detail;
use Illuminate\Http\Request;
use Auth;
class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Competition::all();
        return view('admin.competition.index',compact('list'));
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
        array_chunk($data,5,5);
            $file_name = time().$file->getClientOriginalName();
            $data['foto'] = $file_name;
            $file->move(public_path('img/competition'),$file_name); 
        Competition::create($data);
        return redirect()->back()->with('success','Berhasil Tambah Data !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competition  $Competition
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Competition::findOrFail($id);
        // dd($data->getTanggal());
        return view('admin.competition.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competition  $Competition
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Competition::findOrFail($id);
        return view('admin.competition.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competition  $Competition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file('foto');
        $data = $request->all();
        array_chunk($data,5,5);
        if($file == TRUE) {
            $file_name = time().$file->getClientOriginalName();
            $data['foto'] = $file_name;
            $file->move(public_path('img/competition'),$file_name); 
        }
        Competition::findOrFail($id)->update($data);
        return redirect()->back()->with('success','Berhasil Ubah Data !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competition  $Competition
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Competition::findOrFail($id)->delete();
        return redirect()->back()->with('error','Berhasil Hapus Data !');
    }

    public function evaluation() {
        $list = Competition_detail::all();
        return view('admin.competition.detail',compact('list'));
    }

    public function evaluation_action($id,Request $request) {
        Competition_detail::findOrFail($id)->update($request->all());
        return redirect()->back()->with('success','Berhasil Update Data !');
    }

    // child area 

    public function join($id) {
        Competition_detail::create([
            'competition_id' => $id,
            'user_id' => Auth::user()->id
        ]);
        return redirect(route('my.competition'));
    }

    public function submission($id) {
        $data = Competition::findOrFail($id);
        return view('child.competition.file',compact('data'));
    }

    public function submission_action($id,Request $request) {
        $file = $request->file('file');
        $file_name = time().$file->getClientOriginalName();
        $data = Competition_detail::findOrFail($id);
        $data->file = $file_name;
        $data->save();
        $file->move(public_path('file/competition'),$file_name);
        return redirect(route('my.competition'));
    }


    public function history() {
        $competition = Competition_detail::where('user_id',Auth::user()->id)->get();
        return view('child.competition.index',compact('competition'));
    }
}
