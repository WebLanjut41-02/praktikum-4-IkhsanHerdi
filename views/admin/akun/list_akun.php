<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DATA AKUN</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Feedback Konsumen
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
                  <th>ID FeedBack</th>
                  <th>ID Konsumen</th>
                  <th>Nama Konsumen</th>
                  <th>Komentar</th>
                  <th>Rating</th>
                  <th>Tanggal Feedback</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                $dataAkun = $this->session->all_data;
                foreach ($dataAkun as $data) { 
            ?>
 
            <tr>
                <td><?php echo $data->Id_Feedback; ?></td> 
                <td><?php echo $data->Id_Konsumen; ?></td>
                <td><?php echo $data->Nama_Konsumen; ?></td>
                <td><?php echo $data->Komentar; ?></td>
                <td><?php echo $data->Rating; ?> / 10</td>
                <td><?php echo $data->Tanggal_Feedback; ?></td>
              
                <td>
                  <center>
                     <a href="<?php echo site_url(); ?>admin/feedback_konsumen/detailakun?Id_Feedback=<?php echo $data->Id_Feedback ?>" class="btn btn-sm btn-success"> <i class="fa fa-newspaper-o"></i>Detail</a>
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