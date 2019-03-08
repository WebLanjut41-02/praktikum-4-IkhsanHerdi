<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<head>
  <title>DETAIL KONTEN STATIS</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php $this->load->view('admin/header') ?>
    <?php $this->load->view('admin/leftbar') ?>

   <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
       <a href="<?php echo site_url('admin/konten_statis'); ?>"><button type="submit" class="btn btn-primary"> <- Back</button></a>
       <br>
      <h1>
        DETAIL DATA KONTEN STATIS
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
                            <li class="active"><a href="#tabDataSiswa" data-toggle="tab">DATA KONTEN STATIS</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tabDataSiswa">

      <div class="row">

        <div class="col-sm-5">
          <h3>DATA KONTEN STATIS</h3><br>
          <table class="table  table-striped">
    <thead>
      <tr>
        <th width="100%">Id Konten Statis</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Id_Konten_Statis))echo $data[0]->Id_Konten_Statis; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="100%">Judul</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Judul))echo $data[0]->Judul; else echo "Masih Kosong"; ?></td>
      </tr>

      <tr>
        <th width="100%">Konten</th>
        <th>:</th>
        <td><?php if(isset($data[0]->Konten))echo $data[0]->Konten; else echo "Masih Kosong"; ?></td>
      </tr>

    </thead>
  </table>
  <br><a href="<?php echo base_url(); ?>admin/konten_statis/editkontenstatis?Id_Konten_Statis=<?php echo $data[0]->Id_Konten_Statis ?>" class="btn btn-sm btn-success">Edit</a>
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
