<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DATA FEEDBACK VENDOR</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA FEEDBACK VENDOR
        <!--<small>advanced tables</small>-->
      </h1>
      
     <a href="<?php echo site_url('admin/feedback'); ?>"><button type="submit" class="btn btn-primary"> <- Back</button></a>
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Feedback</th>
                  <th>Id Konsumen</th>
                  <th>Id Vendor</th>
                  <th>Komentar</th>
                  <th>Rating</th>
                  <th>Tanggal Feedback</th>
                  <th>Status Feedback</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                $dat = $this->session->all_datadf;
                foreach ($dat as $data) {
            ?>

            <tr>
                <td><?php echo $data->Id_Feedback; ?></td>
                <td><?php echo $data->Id_Konsumen; ?></td>
                <td> <?php echo $data->Id_Vendor?>  </td>
                <td> <?php echo $data->Komentar?>  </td>
                <td> <?php echo $data->Rating?>  </td>
                <td> <?php echo $data->Tanggal_Feedback?> </td>
                <td> <?php echo $data->Status_Feedback?>  </td>
                <td>
                    <center>
                      <a href="<?php echo base_url(); ?>admin/feedback/editFeedback?Id_Feedback=<?php echo $data->Id_Feedback ?>" class="btn btn-sm btn-success">Edit</a>
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
