   
<body>
  <section class="content-header" style="margin-top: 30px">
      <h1 style="margin-left: 10px">
        <i class="fa fa-globe"> Penjualan Detail</i>
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('detail.index') }}"><i class="fa fa-dashboard"></i>Detail</a></li>
      </ol>
    </section>

    <section class="invoice">
      <h6>Nama Pelanggan : {{ $data->pelanggan->nama_pelanggan }}</h6>
      <h6>Tanggal : {{ $data->tanggal }}</h6>
        <form method="post" action="{{ route('detail.store') }}">
            {{ csrf_field () }}
        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Detail Penjualan</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                
                    <label>Nama Barang</label>
                    <select name="pilihan" class="form-control">
                        <option>Pilih barang</option>
                        @foreach($produk as $pro)
                            <option value="{{ $pro -> id }}">{{ $pro -> nama }} - {{ $pro -> harga_jual }}</option>
                        @endforeach
                    </select>
                    <label style="margin-top: 10px">Jumlah beli</label>
                    <input type="number" name="jumlah" class="form-control">
                    <input type="hidden" name="idpenjualan" value="{{ $data->id }}">
                </div>
                
                
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal" style="color: white">Tutup</button>
                </div>
            </div>
        </div>
        </div>
        </form>
        
   
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
              <th>Nama Barang</th>
              <th>Jumlah</th>
              <th>Sub Total</th>
            </tr>
            </thead>
            <tbody>
                <?php $total = 0; ?>
                @foreach($data->detail as $p)
                  <tr>
                    <td>{{ $p->produk->nama }}</td>
                    <td>{{ $p->jumlah }}</td>
                    <td>Rp. {{ number_format($p->produk->harga_jual * $p->jumlah)}}</td>
                  </tr>
                <?php $total += $p->produk->harga_jual * $p->jumlah ?>
                @endforeach
                
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-lg-6">
          <p class="lead">Payment Methods:</p>
          <img src="{{ asset('assets/images/payment/visa.png') }}" alt="Visa">
          <img src="{{ asset('assets/images/payment/mastercard.png') }}" alt="Mastercard">
          <img src="{{ asset('assets/images/payment/american-express.png') }}" alt="American Express">
          <img src="{{ asset('assets/images/payment/paypal2.png') }}" alt="Paypal">
        </div>
        <!-- /.col -->
        <div class="col-lg-6">
            <strong><h3>Total Harga : Rp. {{ number_format($total)}}</h3></strong>
        </div>
        <!-- /.col -->
      </div>

      <!-- /.row -->
    </section>
           
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

