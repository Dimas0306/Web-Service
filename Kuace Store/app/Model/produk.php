<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $guarded = ['id'];
    public $table = 'produk';

    public function kategori(){
    	
    	return $this->belongsTo('App\Model\kategori');
    }
}
