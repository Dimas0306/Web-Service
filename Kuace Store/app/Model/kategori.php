<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
	protected $guarded = ['id'];
    public $table = 'kategori';

    public function produk(){
    	return $this->hasMany('App\Model\produk');
    }
}
