<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $guarded = ['id'];
    public $table = 'penjualan';

    public function pelanggan()
    {
    	return $this->belongsTo('App\Model\pelanggan');
    }

    public function detail()
    {
    	return $this->hasMany('App\Model\detail');
    }
}
