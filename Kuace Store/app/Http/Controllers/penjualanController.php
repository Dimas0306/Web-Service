<?php

namespace App\Http\Controllers;

use App\Model\penjualan;
use App\Model\produk;
use App\Model\pelanggan;
use App\Model\detail;
use Illuminate\Http\Request;
use DB;

class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = penjualan::all();
        return view('penjualan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data2 = pelanggan::all();
        return view('penjualan.create',compact('data2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data = penjualan::create([
            'pelanggan_id'=>$request->idpelanggan,
            'tanggal'=>$request->tanggal
            ]);
            
            return redirect()->route('penjualan.show', ['id' => $data->id]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = penjualan::findOrFail($id);
        $produk = produk::all();
        return view('penjualan.show',compact('data','produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jual = penjualan::where('id',$id)->first();
        $data3 = pelanggan::all();
        return view('penjualan.edit',compact('jual'),compact('data3'));
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
        penjualan::where('id',$id)->update([
            'pelanggan_id'=>$request->idpelanggan,
            'tanggal'=>$request->tanggal
        ]);

        return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        penjualan::where('id',$id)->delete();

        return redirect()->route('penjualan.index');
    }
}
