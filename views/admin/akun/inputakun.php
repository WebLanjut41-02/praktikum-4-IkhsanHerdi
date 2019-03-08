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
              <form role="form" action="<?php echo base_url(); ?>admin/akun/prosesinputakun" method="post">

                 <div class="form-group">
                  <?php
                    $i = 1;
                    $v = "AKN-";
                    $last_id = 0;
                     $dataAkun = $this->session->all_data;
                     foreach ($dataAkun as $data) {
                       $last_id = substr($data->Id_Akun, 4,3);
                     }

                    $arr = array($v,$last_id+1);
                    $newest_id = implode("", $arr);

                  ?>
                  <label for="Id_Vendor">Id Akun</label>
                  <input type="text" class="form-control" id="Id_Akun" name="Id_Akun" value="<?php echo $newest_id; ?>" readonly>
                </div>
                
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" id="Username" name="Username" placeholder="Username" required>
                </div>

                 <div class="form-group">
                  <label>Password</label>
                  
                  <input type="text" class="form-control" id="Password" name="Password" placeholder="Password" required>
                </div>
              
                  <div class="form-group">
                      <label>Role</label>
                      <select name="Role" class="form-control select2" style="width: 100%;" required="">
                        <option value="">==PILIH===</option>
                        <option value="Admin">Admin</option>
                        <option value="Bg_Keuangan">Bagian Keuangan</option>
                        <option value="CS">Customer Service</option>
                        <option value="Vendor">Vendor</option>
                      </select>
                    </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> INPUT</button>
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