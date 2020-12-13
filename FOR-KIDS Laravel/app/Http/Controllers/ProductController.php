<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
        // dd($data);
        array_splice($data,5,5);
        // dd($data);
        $image = $request->file('image_path');
        $data['img_path'] = time().$image->getClientOriginalName();
        $data['slug'] = Str::slug($data['name']);
        // dd($data);
        $image->move('img-product',$data['img_path']);
        Product ::create($data);
        return redirect(route('product.index'))->with('success','Berhasil Tambah !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::findOrFail($id);
        return view('product.show',compact('data'));
    }

    public function showSlug($slug) {
        $data = Product::where('slug',$slug)->firstOrFail();
        return view('order.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::findOrFail($id);
        return view('product.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        array_splice($data,5,5);
        $image = $request->file('image_path');
        $data['slug'] = Str::slug($data['name']);
        if($image == TRUE){ 
            $data['img_path'] = time().$image->getClientOriginalName();
            $image->move('img-product',$data['img_path']);
        } 
        Product::findOrFail($id)->update($data);
        return redirect(route('product.index'))->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        unlink('img-product/'.$data->img_path);
        $data->delete();
        return redirect(route('product.index'))->with('error','Berhasil hapus data !');
    }
}
