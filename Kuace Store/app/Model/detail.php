<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $guarded = ['id'];
    public $table = 'penjualandetail';

    public function penjualan()
    {
    	return $this->belongsTO('App\Model\penjualan');
    }

    public function produk()
    {
    	return $this->belongsTO('App\Model\produk');
    }

}
