<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DATA PENARIKAN DEPOSIT</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA PENARIKAN DEPOSIT
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
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Id Penarikan Deposit</th>
                  <th>Id Vendor</th>
                  <th>Nama Vendor</th>
                  <th>Nominal Penarikan</th>
                  <th>Tanggal Penarikan</th>
                  <th>Waktu Penarikan</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                 $i = 1;
                $dataVendor = $this->session->all_data;
                foreach ($dataVendor as $data) { 
            ?>
 
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data->Id_Penarikan_Deposit; ?></td> 
                <td><?php echo $data->Id_Vendor; ?></td> 
                <td><?php echo $data->Nama_Vendor; ?></td>
                <td><?php echo $data->Nominal_Penarikan; ?></td>
                <td><?php echo $data->Tanggal_Penarikan; ?></td>
                <td><?php echo $data->Waktu_Penarikan; ?></td><!-- 
                <td>
                  <center>
                    <a href="<?php echo site_url(); ?>admin/deposit/detaildeposit?Id_Vendor=<?php echo $data->Id_Vendor ?>" class="btn btn-sm btn-success">Detail</a>
                    <a href="<?php echo base_url(); ?>admin/deposit/editdeposit?Id_Vendor=<?php echo $data->Id_Vendor ?>" class="btn btn-sm btn-success">Edit</a>
                  </center>
                  </td> -->
              </tr>
            <?php $i++;} ?>
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