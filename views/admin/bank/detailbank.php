<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DETAIL DATA BANK</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
       <a href="<?php echo site_url('admin/bank'); ?>"><button type="submit" class="btn btn-primary"> <- Back</button></a>
       <br>
      <h1>
        DETAIL DATA BANK
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
               <div class="col-md-6">
            <div class="panel with-nav-tabs panel-primary">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tabDataSiswa" data-toggle="tab">DATA BANK</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tabDataSiswa">

      <div class="row">

        <div class="col-sm-5">
          <h3>DATA BANK</h3><br>
          <center>
          <b>Logo Bank</b><br>
          <?php if(isset($data[0]->Logo_Bank))echo "<img src='".base_url(substr($data[0]->Logo_Bank, 32))."' width='150' height='150'>"; else echo "Masih Kosong"; ?>
          </center><br>
          <table class="table  table-striped">
    <thead>
      <tr>
        <th width="100%">Id Bank</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Bank))echo $data[0]->Id_Bank; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="100%">Nama Bank</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Nama_Bank))echo $data[0]->Nama_Bank; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="100%">No Rekening</th>
        <th>:</th>
        <td><?php if(isset($data[0]->No_Rekening))echo $data[0]->No_Rekening; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="100%">Deskripsi</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Deskripsi))echo $data[0]->Deskripsi; else echo "Masih Kosong"; ?></td>
      </tr>

    </thead>
  </table>
  <br><a href="<?php echo base_url(); ?>admin/bank/editbank?Id_Bank=<?php echo $data[0]->Id_Bank ?>" class="btn btn-sm btn-success">Edit</a>
        </div>
      </div>
                        </div>

      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            <!-- /.box-header -->







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
