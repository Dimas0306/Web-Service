@extends('layout.app')

@section('content')                 
<div id="page-wrapper">
    <!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
            Daftar Produk</div>
        </div>
        <div class="clearfix">
        </div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
    <!--BEGIN CONTENT-->
    <div class="page-content">
        <div id="tab-general">
            <div class="row mbl">   
                <div class="panel panel-grey">
                    <div class="panel-heading">PRODUK YANG TERSEDIA</div>
                    <div class="panel-body">
                        <table class="table table-hover table-bordered">
                            <a href="{{ route('produk.create') }}"><button name="tambah" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"> Tambah produk</i></button></a>

                            <thead>
                                <tr>
                                    <th>Id produk</th>
                                    <th>Nama produk</th>
                                    <th>Stok</th>
                                    <th>Harga beli</th>
                                    <th>Harga jual</th>
                                    <th>Kategori produk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $p)      
                                <tr>             
                                    <td>{{ $p->id }}</td>       
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->qty }}</td>
                                    <td>Rp. {{ number_format($p->harga_beli) }}</td>
                                    <td>Rp. {{ number_format($p->harga_jual) }}</td>
                                    <td>{{ $p->kategori->nama_kategori }}</td>
                                    <td>

                                        <form method="post" action="{{ route('produk.destroy',$p->id) }}">
                                            <a href="{{ route('produk.edit',$p->id) }}" class="btn btn-primary"><span class="fa fa-pencil"></span></a>
                                            {{ csrf_field() }}

                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger" type="button" onclick="if (confirm('Anda yakin ?')) this.form.submit();"><span class="fa fa-trash-o"></span></button> 
                                        </form>    
                                    </td>             
                                </tr>    
                                @endforeach 

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
<!--END CONTENT-->


</html>
@endsection
