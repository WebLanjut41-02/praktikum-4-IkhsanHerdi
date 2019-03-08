<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DATA MENU VENDOR</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA MENU VENDOR
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
                  <th>Id Paket</th>
                  <th>Nama Paket</th>
                  <th>Gambar Paket</th>
                  <th>Harga Paket</th>
                  <th>Deskripsi Paket</th>
                  <th>Kategori Paket</th>
                  <th>Id Vendor</th>
                </tr>
                </thead>
                <tbody>

                 <?php
                $dat = $this->session->all_datadf;
                foreach ($dat as $data) {
            ?>

            <tr>
                <td><?php echo $data->Id_Paket; ?></td>
                <td><?php echo $data->Nama_Paket; ?></td>
                <td><center><?php if(isset($data->Gambar_Paket))echo "<img src='".base_url(substr($data->Gambar_Paket, 32))."' width='50' height='50'>"; else echo "Masih Kosong"; ?></center></td>
                <td> <?php echo $data->Harga_Paket?>  </td>
                <td> <?php echo $data->Deskripsi_Paket?>  </td>
                <td> <?php echo $data->Kategori_Paket?> </td>
                <td> <?php echo $data->Id_Vendor?> </td>
                <td>
                    <center>
                      <a href="<?php echo base_url(); ?>admin/menu/editmenu?Id_Paket=<?php echo $data->Id_Paket ?>" class="btn btn-sm btn-success">Edit</a>
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
