
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>EDIT DATA PEMBAYARAN</title>
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
     <a href="<?php echo site_url('admin/transaksi/pembayaran'); ?>"><button type="submit" class="btn btn-primary"> <- Back</button></a>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>EDIT DATA PEMBAYARAN</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>admin/transaksi/proseseditpembayaran" method="post" enctype="multipart/form-data">
              <div class="col-md-12">
                <div class="box-body">
                <div class="form-group">
                  <label for="Id_Konsumen">Id Pembayaran</label>
                  <input type="text" class="form-control" id="Id_Pembayaran" name="Id_Pembayaran" value="<?php echo $data[0]->Id_Pembayaran ?>" readonly>
                </div>

                 <div class="form-group">
                  <label> Id Bank</label>
                  <select name="Id_Bank" class="form-control">
                    <option>==PILIH==</option>
                    <?php

                          $dataBank = $this->session->all_data_bank;

                          foreach ($dataBank as $data2) { //ngabsen data
                            ?>
                           <option value="<?php echo $data2->Id_Bank ?>"  <?php if($data[0]->Id_Bank==$data2->Id_Bank) echo "selected" ?> >
                            <?php echo $data2->Id_Bank."-".$data2->Nama_Bank ?>

                            </option>
                            <?php
                          }
                      ?>

                    ?>
                  </select>
                </div>

                 <div class="form-group">
                  <label>Id Pesanan</label>
                  <select name="Id_Pesanan" class="form-control">
                    <option value="">==PILIH==</option>
                     <?php

                          $dataPesanan = $this->session->all_data_pesanan;

                          foreach ($dataPesanan as $data2) { //ngabsen data
                            ?>
                           <option value="<?php echo $data2->Id_Pesanan ?>" <?php if($data[0]->Id_Pesanan==$data2->Id_Pesanan) echo "selected" ?> >
                            <?php echo $data2->Id_Pesanan."-".$data2->Nama ?>

                            </option>
                            <?php
                          }
                      ?>

                  
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Total Tagihan</label>
                  <input type="text" class="form-control" id="Total_Tagihan" name="Total_Tagihan" value="<?php echo $data[0]->Total_Tagihan ?>" required>
                </div>

                  <div class="form-group">
                  <label>Tanggal Pembayaran</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="Tanggal_Pembayaran" value="<?php echo $data[0]->Tanggal_Pembayaran ?>">
                  </div>
                  <!-- /.input group -->
                </div>
              
                <div class="form-group">
               
                    <div class="form-group">
                      <label>Waktu_Pembayaran</label>
                      <input type="text" class="form-control"  name="Waktu_Pembayaran" value="<?php echo $data[0]->Waktu_Pembayaran ?>">
                    </div>

                      <div class="form-group"> 
                      <label for="exampleInputPassword1">Status Pembayaran</label>
                      <select name="Status" class="form-control">

                         <option value="Lunas" <?php if($data[0]->Status_Pembayaran=='Lunas') echo 'selected' ?> >Lunas</option>
                         <option value="DP" <?php if($data[0]->Status_Pesanan=='DP') echo 'selected' ?> >DP</option>
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