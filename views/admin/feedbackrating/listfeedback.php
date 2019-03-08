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
                    <a href="<?php echo site_url('admin/feedback/inputfeedback'); ?>"><button type="submit" class="btn btn-primary"> (+) ADD NEW FEEDBACK</button></a>
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
                  <th>Jumlah Feedback</th>
                  <th>Rating</th>
                  
                </tr>
                </thead>
                <tbody>

                 <?php
                $dat = $this->session->all_datajf;
                foreach ($dat as $data) {
            ?>

            <tr>
                <td><?php echo $data->Id_Vendor; ?></td>
                <td><?php echo $data->Nama_Vendor; ?></td>
                <td> <?php echo $data->Jumlah_Feedback?>  </td>
                <td> <?php echo $data->Jumlah_Rating?>  </td>
                
                <td>
                  <center>
                    <a href="<?php echo base_url(); ?>admin/feedback/detailfeedbackvendor?Id_Vendor=<?php echo $data->Id_Vendor ?>" class="btn btn-sm btn-success">Detail</a>
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
