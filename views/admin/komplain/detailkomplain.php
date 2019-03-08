<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DETAIL KOMPLAIN</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
       <a href="<?php echo site_url('admin/komplain'); ?>"><button type="submit" class="btn btn-primary"> <- Back</button></a>
       <br>
      <h1>
        DETAIL DATA KOMPLAIN
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
                            <li class="active"><a href="#tabDataSiswa" data-toggle="tab">DATA KOMPLAIN</a></li>                            
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tabDataSiswa">
                        
      <div class="row">

        <div class="col-sm-5">
          <h3>DATA KOMPLAIN</h3>
          <table class="table  table-striped">
    <thead>
      <tr>
        <th width="40%">Id Komplain</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Komplain))echo $data[0]->Id_Komplain; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="40%">Id Konsumen</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Konsumen))echo $data[0]->Id_Konsumen; else echo "Masih Kosong"; ?></td>
      </tr>

       <tr>
        <th width="40%">Nama Konsumen</th>
        <th>:</th>
        <td><?php if(isset($data1[0]->Nama))echo $data1[0]->Nama; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="40%">Isi Komplain</th>
        <th>:</th>
        <td><?php if(isset($data[0]->isi_komplain))echo $data[0]->isi_komplain; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="40%">Tanggal Komplain</th>
        <th>:</th>
        <td><?php if(isset($data[0]->tanggal_komplain))echo $data[0]->tanggal_komplain; else echo "Masih Kosong"; ?></td>
      </tr>
    
    </thead>
  </table>
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