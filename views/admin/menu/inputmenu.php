<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>INPUT DATA MENU</title>
  <style type="text/css">
    .tombol {
       padding: 0 0 30px 490px;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/leftbar') ?>
     <?php $this->load->view('admin/header') ?>
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <a href="<?php echo site_url('admin/menu'); ?>"><button type="submit" class="btn btn-primary"> <- Back</button></a>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>INPUT DATA MENU</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>admin/menu/prosesinputmenu" method="post" enctype="multipart/form-data">
              <div class="col-md-12">
                <div class="box-body">
                <div class="form-group">
                  <?php
                    $i = 1;
                    $v = "P111";
                    $last_id =0;
                     $dataMenu = $this->session->all_data2;
                     foreach ($dataMenu as $data) {
                       $last_id = substr($data->Id_Paket, 4,1);
                     }
                    $arr = array($v,$last_id+1);
                    $newest_id = implode("", $arr);

                  ?>
                  <label for="Id_Feedback">Id Paket</label>
                  <input type="text" class="form-control" id="Id_Paket" name="Id_Paket" value="<?php echo $newest_id; ?>" readonly>
                </div>

                <div class="form-group">
                  <label>Nama Paket</label>
                  <input class="form-control" id="Nama_Paket" name="Nama_Paket" placeholder="Nama Paket" required=""></input>
                </div>

                <div class="form-group">
                  <label>Gambar Paket</label>
                  <input type="file" class="form-control" id="Foto_Profil_Vendor" name="Gambar_Paket" required="">
                </div>

                <div class="form-group">

                  <div class="form-group">
                    <label>Harga_Paket</label>
                    <input class="form-control" id="Harga_Paket" name="Harga_Paket" placeholder="Rp.-" required=""></input>
                  </div>

                  <div class="form-group">
                    <label>Deskripsi_Paket</label>
                    <textarea class="form-control" rows="3" name="Deskripsi_Paket" placeholder="Deskripsi" required=""></textarea>
                  </div>

                  <div class="form-group">
                        <label>Kategori_Paket</label>
                        <input class="form-control" id="Kategori_Paket" name="Kategori_Paket"  placeholder="Kategori_Paket">
                  </div>

                  <div class="form-group">
                    <label>Id Vendor</label>
                    <select name="Id_Vendor" class="form-control">
                      <option value="">==PILIH==</option>
                      <?php

                            $dataVendor = $this->session->all_data;
                            //print_r($dataSiswa);

                            foreach ($dataVendor as $data) { //ngabsen data
                              echo "<option value='". $data->Id_Vendor."'>".$data->Id_Vendor."-". $data->Nama_Vendor."</option>";
                            }
                        ?>

                      ?>
                    </select>
                  </div>
                    <!-- /.input group -->
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
 <?php $this->load->view('admin/footer') ?>


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
