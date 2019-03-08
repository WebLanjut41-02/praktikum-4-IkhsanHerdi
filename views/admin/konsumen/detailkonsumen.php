<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DETAIL DATA KONSUMEN</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
       <a href="<?php echo site_url('admin/vendor'); ?>"><button type="submit" class="btn btn-primary"> <- Back</button></a>
       <br>
      <h1>
        DETAIL DATA KONSUMEN
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
                            <li class="active"><a href="#tabDataSiswa" data-toggle="tab">DATA KONSUMEN</a></li>                            
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tabDataSiswa">
                        
      <div class="row">

        <div class="col-sm-5">
          <h3>DATA KONSUMEN</h3><br>
          <center>
          <b>Foto Profil</b><br>
          <?php if(isset($data[0]->Foto_Profil))echo "<img src='".base_url(substr($data[0]->Foto_Profil, 32))."' width='150' height='150'>"; else echo "Masih Kosong"; ?>
          </center><br>
          <table class="table  table-striped">
    <thead>
      <tr>
        <th width="100%">Id Konsumen</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Konsumen))echo $data[0]->Id_Konsumen; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="100%">Nama Konsumen</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Nama))echo $data[0]->Nama; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th width="100%">No. Tlp.</th>
        <th>:</th>
        <td><?php if(isset($data[0]->No_Telfon))echo $data[0]->No_Telfon; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th width="100%">Email</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Email))echo $data[0]->Email; else echo "Masih Kosong"; ?></td>
      </tr>
    </thead>
  </table>
  <br><a href="<?php echo base_url(); ?>admin/konsumen/editkonsumen?Id_Konsumen=<?php echo $data[0]->Id_Konsumen ?>" class="btn btn-sm btn-success">Edit</a>
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