<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DATA DOMPET</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA DOMPET
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
                    <a href="<?php echo site_url('admin/dompet/inputdompet'); ?>"><button type="submit" class="btn btn-primary"> (+) ADD NEW DOMPET</button></a>
                </div>
              <!--<h3 class="box-title">Data Table With Full Features</h3>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Dompet</th>
                  <th>Id Konsumen</th>
                  <th>Nominal Deposit</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                $dat = $this->session->all_data;
                foreach ($dat as $data) {
            ?>

            <tr>
                <td><?php echo $data->Id_Dompet; ?> </td>
                <td><?php echo $data->Id_Konsumen; ?> </td>
                <td> <?php echo $data->Nominal_Dompet ?> </td>
                <td>
                  <center>
                    <a href="<?php echo base_url(); ?>admin/dompet/editdompet?Id_Dompet=<?php echo $data->Id_Dompet ?>" class="btn btn-sm btn-success">Edit</a>
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
