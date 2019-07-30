<?php

namespace App\Http\Controllers;

use App\Model\produk;
use App\Model\kategori;
use Illuminate\Http\Request;
use DB;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = produk::all();
        return view('produk.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data2 = kategori::all();
        return view('produk.create',compact('data2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        produk::create([
            'nama'=>$request->namaproduk,
            'qty'=>$request->stok,
            'harga_beli'=>$request->beli,
            'harga_jual'=>$request->jual,
            'kategori_id'=>$request->kategori
        ]);

        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = TbBlog::find($id);
        return view('site.show',compact('blog'))->renderSections()['content'];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data3 = kategori::all();
        $produk = produk::where('id',$id)->first();

        return view('produk.edit',compact('produk'),compact('data3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        produk::where('id',$id)->update([
            'nama'=>$request->namaproduk,
            'qty'=>$request->stok,
            'harga_beli'=>$request->beli,
            'harga_jual'=>$request->jual,
            'kategori_id'=>$request->kategori
        ]);

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        produk::where('id',$id)->delete();
        return redirect()->route('produk.index');
    }
}
