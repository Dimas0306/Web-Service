<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $guarded = ['id'];
    public $table = 'pelanggan';

    public function jual()
    {
    	return $this->hasMany('App\Model\penjualan');
    }
}
