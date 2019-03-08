<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DETAIL DATA VENDOR</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
       <a href="<?php echo site_url('admin/depositvendor'); ?>"><button type="submit" class="btn btn-primary"> <- Back</button></a>
       <br>
      <h1>
        DETAIL DATA VENDOR
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
                            <li class="active"><a href="#tabDataSiswa" data-toggle="tab">DATA DEPOSIT VENDOR</a></li>                            
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tabDataSiswa">
                        
      <div class="row">

        <div class="col-sm-5">
          <h3>DATA DEPOSIT VENDOR</h3>
          <table class="table  table-striped">
    <thead>
      <tr>
        <th width="40%">Id Deposit</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Deposit))echo $data[0]->Id_Deposit; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="40%">Id Vendor</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Vendor))echo $data[0]->Id_Vendor; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="40%">Nama Vendor</th>
        <th>:</th>
        <td><?php if(isset($dataV[0]->Nama_Vendor))echo $dataV[0]->Nama_Vendor; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="40%">Nominal Deposit</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Nominal_Deposit))echo $data[0]->Nominal_Deposit; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="40%">Status Deposit</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Status_Deposit))echo $data[0]->Status_Deposit; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
      <?php if (isset($data[0]->Id_Deposit)) {?>
        
        <td colspan = "2">
          <a href="<?php echo base_url(); ?>admin/depositvendor/tambahdepositvendor?Id_Vendor=<?php echo $data[0]->Id_Vendor ?>" class="btn btn-sm btn-success">Tambah</a>
          <a href="<?php echo base_url(); ?>admin/depositvendor/tarikdepositvendor?Id_Vendor=<?php echo $data[0]->Id_Vendor ?>" class="btn btn-sm btn-danger">Tarik</a>
        </td>
        
      <?php }?>
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