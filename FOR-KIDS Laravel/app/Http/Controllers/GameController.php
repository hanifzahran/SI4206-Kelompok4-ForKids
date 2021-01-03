<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Game::all();
        return view('admin.game.index',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();   
        Game::create($data);
        return redirect()->back()->with('success','Berhasil Tambah Data !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $Game
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Game::findOrFail($id);
        return view('admin.game.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $Game
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Game::findOrFail($id);
        return view('admin.game.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $Game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();   
        Game::findOrFail($id)->update($data);
        return redirect()->back()->with('success','Berhasil Ubah Data !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $Game
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Game::findOrFail($id)->delete();
        return redirect()->back()->with('error','Berhasil Hapus Data !');
    }

    public function child_index() {
        $game = Game::all();
        return view('child.game.index',compact('game'));
    }
}
