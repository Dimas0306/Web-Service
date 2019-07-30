<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\produk;
use App\Model\detail;


class apiController extends Controller
{
    public function getProduk()
    {
    	$data = produk::with('kategori')->get();
    	return $data;
    }
    public function getProduks($id)
    {
    	$data = produk::where('id',$id)
    		->with('kategori')
    		->first();
    	return $data;
    }
    public function postProduk(Request $request)
    {
    	
    	$save = detail::create($request->all());
    //	return $request->all();
    //	$status = produks::create($request->all());
    	if ($save) {
    		$res = array(
    			'status' => true,
    			'message' => 'produk berhasil di simpan'
    		);
    	}else{
    		$res = array(
    			'status' => false,
    			'message' => 'gagal menyimpan'
    		);

    	}
    	return response()->json($res);
    	
    }
    public function updateProduk($id, Request $request) 
    {
    	$save = produk::where('id', $id)
    	->update($request->all());
    	if ($save) {
    		$res = array(
    			'status' => true,
    			'message' => 'produk berhasil di ubah'
    		);
    	}else{
    		$res = array(
    			'status' => false,
    			'message' => 'gagal menyimpan'
    		);

    	}
    	return response()->json($res);
    }
}
