<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/leftbar') ?>
<head>
  <title>DETAIL DATA VENDOR</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
       <a href="<?php echo site_url('admin/vendor'); ?>"><button type="submit" class="btn btn-primary"> <- Back</button></a>
       <br>     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <!--<h3 class="box-title">Data Table With Full Features</h3>-->
              <center>
          <b>Foto Profil</b><br>
          <?php if(isset($data[0]->Foto_Profil_Vendor))echo "<img src='".base_url(substr($data[0]->Foto_Profil_Vendor, 32))."' width='150' height='150'>"; else echo "Masih Kosong"; ?>
          </center><br>
          <table class="table table-stripe">
    <thead>
      <tr>
        <th>Id Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Vendor))echo $data[0]->Id_Vendor; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th>Nama Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Nama_Vendor))echo $data[0]->Nama_Vendor; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th>Kategori Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Kategori_Vendor))echo $data[0]->Kategori_Vendor; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th>No. Tlp. Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->No_Telfon_Vendor))echo $data[0]->No_Telfon_Vendor; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th>Email Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Email))echo $data[0]->Email; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th>Alamat Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Alamat_Vendor))echo $data[0]->Alamat_Vendor; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th>Deskripsi</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Deskripsi_Vendor))echo $data[0]->Deskripsi_Vendor; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th>Nama Pemilik Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Nama_Pemilik))echo $data[0]->Nama_Pemilik; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th>No. KTP</th>
        <th>:</th>
        <td><?php if(isset($data[0]->No_KTP))echo $data[0]->No_KTP; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th>Kuota Pemesanan</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Kuota_Pemesanan))echo $data[0]->Kuota_Pemesanan; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th>Status Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Status_Vendor))echo $data[0]->Status_Vendor; else echo "Masih Kosong"; ?></td>
       </tr>

        <tr>
        <th>Id Akun Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Akun))echo $data[0]->Id_Akun; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th>Status Akun Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Status_Akun))echo $data[0]->Status_Akun; else echo "Masih Kosong"; ?></td>
      </tr>

    </thead>
  </table>
  <br><a href="<?php echo base_url(); ?>admin/vendor/editvendor?Id_Vendor=<?php echo $data[0]->Id_Vendor ?>" class="btn btn-sm btn-success">Edit</a>
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
</body>
</html>