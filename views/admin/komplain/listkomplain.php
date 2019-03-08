<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DATA FEEDBACK</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA FEEDBACK
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
                    <a href="<?php echo site_url('admin/komplain/inputkomplain'); ?>"><button type="submit" class="btn btn-primary"> (+) ADD NEW KOMPLAIN</button></a>
                </div>
              <!--<h3 class="box-title">Data Table With Full Features</h3>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Komplain</th>
                  <th>Nama Konsumen</th>
                  <th>Tanggal Komplain</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                $dat = $this->session->all_data;
                foreach ($dat as $data) {
            ?>

            <tr>
                <td><?php echo $data->Id_Komplain; ?></td>
                <td><?php echo $data->Id_Konsumen; ?></td>
                <td> <?php echo $data->tanggal_komplain?>  </td>
                
                <td>
                  <center>
                    <a href="<?php echo base_url(); ?>admin/komplain/detailkomplain?Id_Komplain=<?php echo $data->Id_Komplain ?>&Id_Konsumen=<?php echo $data->Id_Konsumen ?>" class="btn btn-sm btn-success">Detail</a>
                    <a href="<?php echo base_url(); ?>admin/komplain/hapuskomplain?Id_Komplain=<?php echo $data->Id_Komplain ?>" class="btn btn-sm btn-success">Hapus</a>
                    
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
