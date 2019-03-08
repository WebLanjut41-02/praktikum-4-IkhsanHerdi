<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/leftbar') ?>
<head>
  <title>DATA KONSUMEN</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA KONSUMEN
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
                    <a href="<?php echo site_url('admin/konsumen/inputkonsumen'); ?>"><button type="submit" class="btn btn-primary"> (+) ADD NEW KONSUMEN</button></a>
                </div>
              <!--<h3 class="box-title">Data Table With Full Features</h3>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Profile Pict</th>
                  <th>Id Konsumen</th>
                  <th>Nama Konsumen</th>
                  <th>No Tlp Konsumen</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                $dataKonsumen = $this->session->all_data;
                foreach ($dataKonsumen as $data) { 
            ?>
 
            <tr>
                <td><?php echo "<img src='".base_url(substr($data->Foto_Profil, 32))."' width='70' height='70'>";?></td>
                <td><?php echo $data->Id_Konsumen; ?></td> 
                <td><?php echo $data->Nama; ?></td>
                <td><?php echo $data->Email; ?></td>
               <td><?php echo $data->No_Telfon; ?></td>
                <td>
                  <center>
                    <a href="<?php echo base_url(); ?>admin/konsumen/detailkonsumen?Id_Konsumen=<?php echo $data->Id_Konsumen ?>" class="btn btn-sm btn-success">Detail</a>
                    <a href="<?php echo base_url(); ?>admin/konsumen/editkonsumen?Id_Konsumen=<?php echo $data->Id_Konsumen ?>" class="btn btn-sm btn-success">Edit</a>
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

</body>
</html>