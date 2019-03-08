<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DATA PEMBAYARAN</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA PEMBAYARAN
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
               <div class="tombol">
                    <a href="<?php echo site_url('admin/transaksi/inputpembayaran'); ?>"><button type="submit" class="btn btn-primary"> (+) ADD NEW PAYMENT</button></a>
                </div>
              <!--<h3 class="box-title">Data Table With Full Features</h3>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Pembayaran</th>
                  <th>Id Bank</th>
                  <th>Nama Bank</th>
                  <th>Id Pesanan</th>
                  <th>Total Tagihan</th>
                  <th width="5%">Tanggal Pembayaran</th>
                  <th>Waktu Pembayaran</th>
                  <th>Status Pembayaran</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                $dataPembayaran = $this->session->all_data;
                foreach ($dataPembayaran as $data) { 
            ?>
 
            <tr>
                
                <td><?php echo $data->Id_Pembayaran; ?></td> 
                <td><?php echo $data->Id_Bank; ?></td> 
                <td><?php echo $data->Nama_Bank; ?></td>
                <td><?php echo $data->Id_Pesanan; ?></td>
                <td><?php echo $data->Total_Tagihan; ?></td>
                <td><?php echo $data->Tanggal_Pembayaran; ?></td>
                <td><?php echo $data->Waktu_Pembayaran; ?></td>
                <td><?php echo $data->Status_Pembayaran; ?></td>
                <td>
                  <center>
                    <a href="<?php echo base_url(); ?>admin/transaksi/detailpembayaran?Id_Pembayaran=<?php echo $data->Id_Pembayaran ?>&Id_Kurir=<?php echo $data->Id_Kurir ?>" class="btn btn-sm btn-success">Detail</a>
                    <a href="<?php echo base_url(); ?>admin/transaksi/editpembayaran?Id_Pembayaran=<?php echo $data->Id_Pembayaran ?>" class="btn btn-sm btn-success">Edit</a>
                  </center>
                  </td>
              </tr>
            <?php } ?>
                </tbody>
                
              </table>
            </div>
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