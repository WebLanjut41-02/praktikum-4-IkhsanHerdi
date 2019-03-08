<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DATA PESANAN</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA PESANAN
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
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Pemesanan</th>
                  <th>Id Konsumen</th>
                  <th>Nama Konsumen</th>
                  <th>Id_Paket</th>
                  <th>Tanggal Pesan</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                $dataPesanan = $this->session->all_data;
                foreach ($dataPesanan as $data) { 
            ?>
 
            <tr>
                
                <td><?php echo $data->Id_Pesanan; ?></td> 
                <td><?php echo $data->Id_Konsumen; ?></td> 
                <td><?php echo $data->Nama; ?></td>
                <td><?php echo $data->Id_Menu_Paket; ?></td>
               <td><?php echo $data->Tanggal_Pesan; ?></td>
               <td><?php echo $data->Status_Pesanan; ?></td>
                <td>
                  <center>
                    <a href="<?php echo base_url(); ?>admin/transaksi/detailpesanan?Id_Pesanan=<?php echo $data->Id_Pesanan ?>&&Id_Kurir=<?php echo $data->Id_Kurir ?>" class="btn btn-sm btn-success">Detail</a>
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