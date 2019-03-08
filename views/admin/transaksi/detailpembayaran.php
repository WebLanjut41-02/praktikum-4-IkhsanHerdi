<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DETAIL DATA PEMBAYARAN</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
       <a href="<?php echo site_url('admin/transaksi/pembayaran'); ?>"><button type="submit" class="btn btn-primary"> <- Back</button></a>
       <br>
      <h1>
        DETAIL DATA PEMBAYARAN
        <!--<small>advanced tables</small>-->
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <!--<h3 class="box-title">Data Table With Full Features</h3>-->
               <div class="col-md-6">
            <div class="panel with-nav-tabs panel-primary">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tabDataSiswa" data-toggle="tab">DATA PEMBAYARAN</a></li>                            
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tabDataSiswa">
                        
      <div class="row">

        <div class="col-sm-5">
          <h3>DATA PEMBAYARAN</h3><br>
         
          <table class="table  table-striped">
    <thead>
      <tr>
        <th width="50%">Id Pesanan</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Pesanan))echo $data[0]->Id_Pesanan; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th width="50%">Id Konsumen</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Konsumen))echo $data[0]->Id_Konsumen; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="50%">Nama Konsumen</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Nama))echo $data[0]->Nama; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th width="50%">Nama Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Nama_Vendor))echo $data[0]->Nama_Vendor; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th width="50%">Id Paket</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Paket))echo $data[0]->Id_Paket; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th width="50%">Nama Paket</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Nama_Paket))echo $data[0]->Nama_Paket; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="50%">Harga Paket</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Harga_Paket))echo $data[0]->Harga_Paket; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="50%">Jumlah Kotak</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Jumlah_Kotak))echo $data[0]->Jumlah_Kotak; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="50%">Total Harga</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Total_Harga))echo $data[0]->Total_Harga; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="50%">Tanggal Pesan</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Tanggal_Pesan))echo $data[0]->Tanggal_Pesan; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th width="50%">Tanggal Kegiatan</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Tanggal_Kegiatan))echo $data[0]->Tanggal_Kegiatan; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th width="50%">Tanggal Diteriman</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Tanggal_Diterima))echo $data[0]->Tanggal_Diterima; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th width="50%">Status Pesanan</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Status_Pesanan))echo $data[0]->Status_Pesanan; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th width="50%">Id Kurir</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Kurir))echo $data[0]->Id_Kurir; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="50%">Nama Kurir</th>
        <th>:</th>
        <td><?php if(isset($datak[0]->Nama_Kurir))echo $datak[0]->Nama_Kurir; else echo "Masih Kosong"; ?></td>
      </tr>

      
    </thead>
  </table>
  </div>
      </div>
                        </div>
                       
      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            <!-- /.box-header -->





          

            <!-- /.box-body -->
          </div>

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <?php $this->load->view('admin/footer') ?>

</body>
</html>