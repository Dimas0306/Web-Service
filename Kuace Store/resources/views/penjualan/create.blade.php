
@section('content')
@extends('layout.app')
<body>
	<div class="form-group">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3 align="center" style="font-family: arial; margin-top: 30px; margin-bottom: 20px">TAMBAH PENJUALAN</h3>
			<form method="post" action="{{route('penjualan.store')}}">
				{{ csrf_field() }}
			   <div class="form-group">
			    <label for="pelanggannama">Nama Pelanggan</label>
			    <select class="form-control" name="idpelanggan" id="pelanggannama">
			    	@foreach($data2 as $pen)
			    		<option value="{{ $pen -> id  }}">{{ $pen -> nama_pelanggan }}</option>
			    	@endforeach
			    </select>
			    <small id="namakategorihelp" class="form-text text-muted">Pilih nama pelanggan</small>
			  </div>
			  <div class="row">
				 <div class="col-lg-12">
				  <div class="form-group">
				   <label>Tanggal Penjualan</label>
				   <div class="input-group date">
				    <div class="input-group-addon">
				           <span class="glyphicon glyphicon-th"></span>
				    </div>
				       <input type="text" class="form-control datepicker" name="tanggal">
				       
				   </div>
				  </div>
				 </div>
				</div>
			  <button type="submit" class="btn btn-primary">SIMPAN</button>
			  <button type="reset" class="btn btn-danger">HAPUS</button>
			</form>
		</div>
		<div class="col-md-4"></div>	
	</div>
	</div>
</body>
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>
@endsection