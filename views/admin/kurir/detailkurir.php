<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DATA KURIR</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA KURIR
        <!--<small>advanced tables</small>-->
      </h1>

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
                  <th>Id Kurir</th>
                  <th>Id Vendor</th>
                  <th>Nama Kurir</th>
                  <th>No Telfon Kurir</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                $dat = $this->session->all_datadf;
                foreach ($dat as $data) {
            ?>

            <tr>
                <td><?php echo $data->Id_Kurir; ?></td>
                <td><?php echo $data->Id_Vendor; ?></td>
                <td> <?php echo $data->Nama_Kurir?>  </td>
                <td> <?php echo $data->No_Telfon_Kurir?>  </td>
                <td>
                    <center>
                      <a href="<?php echo base_url(); ?>admin/kurir/editkurir?Id_Kurir=<?php echo $data->Id_Kurir ?>" class="btn btn-sm btn-success">Edit</a>
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
