<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<?php $this->load->view('admin/header') ?>
<?php $this->load->view('admin/leftbar') ?>
<head>
  <title>INPUT DATA VENDOR</title>
  <style type="text/css">
    .tombol {
       padding: 0 0 30px 490px;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <a href="<?php echo site_url('admin/vendor'); ?>"><button type="submit" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Back</button></a>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>INPUT DATA VENDOR</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>admin/vendor/prosesinputvendor" method="post" enctype="multipart/form-data">
              <div class="col-md-6">
                <div class="box-body">
                <div class="form-group">
                  <?php
                     $i = 1;
                    $v = "VEN-";
                    $last_id = 0;
                     $dataVendor = $this->session->all_data;
                     foreach ($dataVendor as $data) {
                       $last_id = substr($data->Id_Vendor, 4,3);
                     }

                    $arr = array($v,$last_id+1);
                    $newest_id = implode("", $arr);

                  ?>
                  <label for="Id_Vendor">Id Vendor</label>
                  <input type="text" class="form-control" id="Id_Vendor" name="Id_Vendor" value="<?php echo $newest_id; ?>" readonly>
                </div>
                
                <div class="form-group">
                  <label>Nama Vendor</label>
                  <input type="text" class="form-control" id="Nama_Vendor" name="Nama_Vendor" placeholder="Nama Vendor" required>
                </div>
              
                  <div class="form-group">
                      <label>Kategori Vendor</label>
                      <select name="Kategori_Vendor" class="form-control select2" style="width: 100%;" required="">
                        <option selected="selected">==PILIH===</option>
                        <option value="Restaurant">Restaurant</option>
                        <option value="Rumah Makan">Rumah Makan</option>
                        <option value="Rumahan">Rumahan</option>
                      </select>
                    </div>

                  <div class="form-group">
                      <label>No. Tlp Vendor</label>
                      <input type="text" class="form-control"  name="No_Telfon_Vendor" placeholder="No. Tlp. Vendor" required="">
                  </div>
                     
                   <div class="form-group">
                        <label>Email Vendor</label>
                        <input type="email" class="form-control"  name="Email" placeholder="Email" required="">
                  </div>

                <div class="form-group">
                  <label>Alamat Vendor</label>
                  <textarea class="form-control" rows="3" name="Alamat_Vendor" placeholder="Alamat Vendor" required=""></textarea>
                </div>

                  <div class="form-group">
                  <label>Deskripsi Vendor</label>
                  <textarea class="form-control" rows="3" name="Deskripsi_Vendor" placeholder="Deskripsi Vendor" required=""></textarea>
                </div>

                 <?php echo form_open_multipart('upload/do_upload');?>

                <div class="form-group">
                  <label>Foto Profil Vendor</label>
                  <input type="file" class="form-control" id="Foto_Profil_Vendor" name="Foto_Profil_Vendor" required="">
                </div>

              </div>
              </div>

               <div class="col-md-6">
                <div class="box-body">
                
              

                 <div class="form-group">
                      <label>Nama Pemilik Vendor</label>
                      <input type="text" class="form-control"  name="Nama_Pemilik" placeholder="Nama_Pemilik" required="">
                    </div>

                 <div class="form-group">
                      <label>No. KTP Pemilik</label>
                      <input type="text" class="form-control"  name="No_KTP" placeholder="No. No_KTP" required="">
                    </div>


                 <div class="form-group">
                  <label>Kuota Pemesanan</label>
                  <input type="number" class="form-control"  name="Kuota_Pemesanan" placeholder="Kuota_Pemesanan" required="">
                </div>

                 <div class="form-group">
                  <label>Status Vendor</label>
                  <select name="Status_Vendor" class="form-control select2" style="width: 100%;" required="">
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Non-Aktif</option>
                  </select>
                </div>
                
                 <div class="form-group">
                  <?php
                    $i = 1;
                    $v = "AKN-";
                    $last_id = 0;
                     $dataAkun = $this->session->all_data2;
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
                  <label>Status Akun</label>
                  <select name="Status_Akun" class="form-control select2" style="width: 100%;" required="">
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Non-Aktif</option>
                  </select>
                </div>
                
              </div>
              </div>
              <!-- /.box-body -->
              
              <div class="box-footer">
             
              </div>
               <div class="tombol">
                    <button type="submit" class="btn btn-primary">INPUT DATA</button>
                </div>
            </form>
          </div>
          <!-- /.box -->


        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/template/back/plugins') ?>/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url('assets/template/back/plugins') ?>/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url('assets/template/back/plugins') ?>/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url('assets/template/back/plugins') ?>/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('assets/template/back/plugins') ?>/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/template/back/bower_components') ?>/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/template/back/dist') ?>/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //Date picker
    $('#datepicker2').datepicker({
      autoclose: true
    })
    //Date picker
    $('#datepicker3').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

</body>
</html>