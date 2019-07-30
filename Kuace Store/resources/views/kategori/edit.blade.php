@extends('layout.app')

@section('content')                 
<body>
	<div class="form-group">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h3 align="center" style="font-family: arial; margin-top: 30px; margin-bottom: 20px">EDIT KATEGORI</h3>
				<form method="post" action="{{route('kategori.update',['id'=>$kategori->id])}}">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<div class="form-group">
						<label for="kategorinama">Nama Kategori</label>
						<input type="text" class="form-control" id="kategorinama" aria-describedby="emailHelp" name="namakategori" value="{{ $kategori -> nama_kategori }}">
						<small id="namakategorihelp" class="form-text text-muted">Edit nama kategori</small>
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