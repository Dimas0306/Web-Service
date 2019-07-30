@extends('layout.app')

@section('content')                 
<div id="page-wrapper">
    <!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
            Daftar Pelanggan</div>
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
                    <div class="panel-heading">Data - data pelanggan toko</div>
                    <div class="panel-body">
                        <table class="table table-hover table-bordered">
                            <a href="{{ route('pelanggan.create') }}"><button name="tambah" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"> Tambah pelanggan</i></button></a>

                            <thead>
                                <tr>
                                    <th>Id Pelanggan</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>Riwayat Penjualan ( id )</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $p)      
                                <tr>             
                                    <td>{{ $p->id }}</td>       
                                    <td>{{ $p->nama_pelanggan }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>
                                        @foreach($p->jual as $jual)
                                        {{ $jual->id }}  
                                        @endforeach
                                    </td>
                                    <td>

                                        <form method="post" action="{{ route('pelanggan.destroy',$p->id) }}">
                                            <a href="{{ route('pelanggan.edit',$p->id) }}" class="btn btn-primary"><span class="fa fa-pencil"></span></a>
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
