@extends('layout.app')

@section('content')  

<div class="row">
    <div class="col-md-10" >             
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <hr>
            <thead>
                <tr class="table-primary">
                    <th>Id Detail Penjualan</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $p)      
                <tr>
                    <td>{{ $p->id}}</td>            
                    <td>{{ $p->produk->nama }}</td>  
                    <td>{{ $p->jumlah}}</td>
                    <td>


                        <form method="post" action="{{ route('detail.destroy',$p->id) }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="button" onclick="if (confirm('Anda yakin ?')) this.form.submit();"><span class="fa fa-trash-o"></span></button> 
                            <a href="{{ route('penjualan.show',$p->penjualan_id) }}" class="btn btn-primary"><span class="fa fa-pencil">Lihat Detail Pembayaran</span></a>
                            {{ csrf_field() }}

                            
                        </form>    
                    </td>             
                </tr>    
                @endforeach 

            </tbody>
        </table>
    </div>
</div>
@endsection