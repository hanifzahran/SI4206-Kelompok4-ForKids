<?php

namespace App\Http\Controllers;

use App\Models\ActivityChild;
use Illuminate\Http\Request;
use Auth;
class ActivityChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = ActivityChild::where('user_id',Auth::user()->id)->get();
        return view('child.activity.index',compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('child.activity.create');
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
            $file_name = time().$file->getClientOriginalName();
            $data['foto'] = $file_name;
            $data['user_id'] = Auth::user()->id;
            $file->move(public_path('img/ActivityChild'),$file_name); 
        ActivityChild::create($data);
        return redirect(route('activity.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActivityChild  $ActivityChild
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ActivityChild::findOrFail($id);
        return view('child.activity.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActivityChild  $ActivityChild
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ActivityChild::findOrFail($id);
        return view('child.activity.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ActivityChild  $ActivityChild
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
            $file->move(public_path('img/ActivityChild'),$file_name); 
        }
        ActivityChild::findOrFail($id)->update($data);
        return redirect(route('activity.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActivityChild  $ActivityChild
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ActivityChild::findOrFail($id)->delete();
        return redirect()->back()->with('error','Berhasil Hapus Data !');
    }
}
