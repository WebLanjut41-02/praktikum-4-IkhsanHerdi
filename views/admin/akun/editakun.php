<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DATA AKUN</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA AKUN
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
              <div class="tombol">
                    <a href="<?php echo site_url('admin/akun'); ?>"><button type="submit" class="btn btn-primary">  <i class="fa fa-arrow-left"></i> Back</button></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="<?php echo base_url(); ?>admin/akun/proseseditakun" method="post">

                 <div class="form-group">
                  <label for="Id_Vendor">Id Akun</label>
                  <input type="text" class="form-control" id="Id_Akun" name="Id_Akun" value="<?php echo $data[0]->Id_Akun ?>" readonly>
                </div>
                
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" id="Username" name="Username" value="<?php echo $data[0]->Username ?>" required>
                </div>
              
                  <div class="form-group">
                      <label>Role</label>
                      <select name="Role" class="form-control select2" style="width: 100%;" required="">
                        <option value="">==PILIH===</option>
                        <option value="Admin" <?php if($data[0]->Role=="Admin") echo "selected" ?>>Admin</option>
                        <option value="Bg_Keuangan"  <?php if($data[0]->Role=="Bg_Keuangan") echo "selected" ?>>Bagian Keuangan</option>
                        <option value="CS"  <?php if($data[0]->Role=="CS") echo "selected" ?>>Customer Service</option>
                        <option value="Vendor"  <?php if($data[0]->Role=="Vendor") echo "selected" ?>>Vendor</option>
                      </select>
                    </div>

                  <div class="form-group">
                  <label>Status Akun</label>
                  <select name="Status_Akun" class="form-control select2" style="width: 100%;" required="">
                    <option value="aktif" <?php if($data[0]->Status_Akun=="aktif") echo "selected" ?>>Aktif</option>
                    <option value="nonaktif" <?php if($data[0]->Status_Akun=="nonaktif") echo "selected" ?>>Non-Aktif</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> EDIT </button>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <?php $this->load->view('admin/footer') ?>

</body>
</html>