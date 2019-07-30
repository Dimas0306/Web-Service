@section('content')
@extends('layout.app')

<tbody>
	<div class="form-group">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h3 align="center" style="font-family: arial; margin-top: 30px; margin-bottom: 20px">TAMBAH PELANGGAN</h3>
				<form method="post" action="{{route('pelanggan.store')}}">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="pelanggannama">Nama Pelanggan</label>
						<input type="text" class="form-control" id="pelanggannama" aria-describedby="emailHelp" name="namapelanggan">
						<small id="namakategorihelp" class="form-text text-muted">Tulis nama pelanggan</small>
					</div>
					<div class="form-group">
						<label for="pelangganalamat">Alamat</label>
						<textarea id="pelangganalamat" class="form-control" name="alamat"></textarea>
						<small id="namakategorihelp" class="form-text text-muted">Tulis alamat pelanggan</small>
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