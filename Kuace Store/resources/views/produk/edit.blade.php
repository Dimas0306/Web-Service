@extends('layout.app')

@section('content')                 
<body>
	<div class="form-group">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3 align="center" style="font-family: arial; margin-top: 30px; margin-bottom: 20px">TAMBAH PRODUK</h3>
			<form method="post" action="{{route('produk.update',['id'=>$produk->id])}}">
				{{ csrf_field() }}
				{{ method_field('PUT')}}
			  <div class="form-group">
			    <label for="produknama">Nama Produk</label>
			    <input type="text" class="form-control" id="produknama" aria-describedby="emailHelp" name="namaproduk" value="{{ $produk -> nama }}">
			    <small id="namakategorihelp" class="form-text text-muted">Tulis nama produk</small>
			  </div>
			  <div class="form-group">
			    <label for="quantity">Quantity/Stok</label>
			    <input type="text" class="form-control" id="quantity" aria-describedby="emailHelp" name="stok" value="{{ $produk -> qty }}">
			    <small id="namakategorihelp" class="form-text text-muted">Tulis jumlah stok yang tersedia</small>
			  </div>
			  <div class="form-group">
			    <label for="hargabeli">Harga Beli</label>
			    <input type="text" class="form-control" id="hargabeli" aria-describedby="emailHelp" name="beli" value="{{ $produk -> harga_beli }}">
			    <small id="namakategorihelp" class="form-text text-muted">Tulis harga beli</small>
			  </div>
			  <div class="form-group">
			    <label for="hargajual">Harga Jual</label>
			    <input type="text" class="form-control" id="hargajual" aria-describedby="emailHelp" name="jual" value="{{ $produk -> harga_jual }}">
			    <small id="namakategorihelp" class="form-text text-muted">Tulis harga jual</small>
			  </div>
			  <div class="form-group">
			    <label for="kategorilbl">Kategori</label>
			    <select name="kategori" class="form-control">
			    	@foreach($data3 as $kat)
			    		<option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
			    	@endforeach
			    </select>
			    <small id="namakategorihelp" class="form-text text-muted">Pilih kategori</small>
			  </div>
			  <button type="submit" class="btn btn-primary">SIMPAN</button>
			  <button type="reset" class="btn btn-danger">HAPUS</button>
			</form>
		</div>
		<div class="col-md-4"></div>	
	</div>
	</div>
</body>
@endsection