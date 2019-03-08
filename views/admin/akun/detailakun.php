<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/leftbar') ?>
<head>
  <title>DETAIL DATA FEEDBACK</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
       <a href="<?php echo site_url('admin/feedback_konsumen'); ?>"><button type="submit" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Back</button></a>
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
          <table class="table table-stripe">
    <thead>
      <tr>
        <th>Id Feedback</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Feedback))echo $data[0]->Id_Feedback; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th>Id Konsumen</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Konsumen))echo $data[0]->Id_Konsumen; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th>Nama Konsumen</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Nama_Konsumen))echo $data[0]->Nama_Konsumen; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th>Komentar</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Komentar))echo $data[0]->Komentar; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th>Rating</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Rating))echo $data[0]->Rating; else echo "Masih Kosong"; ?> / 10</td>
      </tr>

       <tr>
        <th>Tanggal Feedback</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Tanggal_Feedback))echo $data[0]->Tanggal_Feedback; else echo "Masih Kosong"; ?></td>
      </tr>

      

    </thead>
  </table>
  <!-- <br><a href=" <?php echo base_url(); ?>admin/akun/editakun?Id_Akun=<?php echo $data[0]->Id_Akun ?>" class="btn btn-sm btn-success"> <i class="fa fa-edit"></i>Edit</a> -->
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
</body>
</html>