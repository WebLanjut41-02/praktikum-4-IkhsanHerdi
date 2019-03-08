<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DATA VENDOR</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA VENDOR
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
                    
                </div>
              <!--<h3 class="box-title">Data Table With Full Features</h3>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Vendor</th>
                  <th>Nama Vendor</th>
                  <th>Username</th>
                  <th>No Tlp Vendor</th>
                  <th>Kategori Vendor</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                $dataVendor = $this->session->all_data;
                foreach ($dataVendor as $data) { 
            ?>
 
            <tr>
                <td><?php echo $data->Id_Vendor; ?></td> 
                <td><?php echo $data->Nama_Vendor; ?></td>
                <td><?php echo $data->Username; ?></td>
                <td><?php echo $data->No_Telfon_Vendor; ?></td>
                <td><?php echo $data->Kategori_Vendor; ?></td>
                <td><?php echo $data->Status_Vendor; ?></td>
                <td>
                  <center>
                    <a href="<?php echo site_url(); ?>admin/depositvendor/detaildepositvendor?Id_Vendor=<?php echo $data->Id_Vendor ?>" class="btn btn-sm btn-success">Detail</a>
                    <a href="<?php echo base_url(); ?>admin/depositvendor/inputdepositvendor?Id_Vendor=<?php echo $data->Id_Vendor ?>" class="btn btn-sm btn-success">(+) Deposit</a>
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