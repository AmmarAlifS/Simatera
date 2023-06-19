<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/Ionicons/css/ionicons.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/AdminLTE.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/skins/_all-skins.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/morris.js/morris.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/jvectormap/jquery-jvectormap.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>

    <div class="content-wrapper">
        <section class="content-header">
        <h1>
            Post Artikel
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Post</li>
        </ol>
        </section>

        <section class="content">
            <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Post Artikel</h3>
      </div>

      <form action="<?php echo base_url().'admin/Artikel/simpan_artikel'?>" method="post" enctype="multipart/form-data">

        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-10">
              <input type="text" name="judul" class="form-control" placeholder="Judul artikel" required/>
            </div>
            <!-- /.col -->
            <div class="col-md-2">
              <div class="form-group">
                <button type="submit" id="simpan" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Publish</button>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->

        </div>
      </div>
      <!-- /.box -->

      <div class="row">
        <div class="col-md-8">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Artikel</h3>
            </div>
            <div class="box-body">

              <textarea id="post" name="artikel"  required></textarea>
              <!-- optional cols="25" rows="3" -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Pengaturan Lainnya</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <input type="text" name="video" class="form-control" placeholder="Link Video" required/>
              </div>

             <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="filefoto" name="foto" style="width: 100%;" required>
            </div>

            <div class="form-group">
              <label>Gambar 2</label>
              <input type="file" name="filefoto2" name="foto2" style="width: 100%;" required>
            </div>

            <div class="form-group">
              <label>Gambar 3</label>
              <input type="file" name="filefoto3" name="foto3" style="width: 100%;" required>
            </div>

            <div class="form-group">
              <select  class="form-control" name="kategori">
                  <option selected="selected">Pilih Kategori</option>
                  <?php foreach($dd as $u) { ?>
                  <option value="<?= $u->nama_kategori ?>"><?= $u->nama_kategori ?></option>
                  <?php } ?>
                </select>
              </div>
            <!-- /.form group -->
            <div class="form-group">
              <!--<label>
                  <input type="checkbox" class="minimal" name="ximgslider" value="1">
                   Tampilkan pada Image Slider
                </label>
              </div>-->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </form>

        <!-- /.box -->
      </div>
      <!-- /.col (right) -->
    </div>
    <!-- /.row -->
        </section>
    </div>
</body>
	<script src="<?= base_url('assets/admin/bower_components/jquery/dist/jquery.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/fastclick/lib/fastclick.js') ?>"></script>

	<script src="<?= base_url('assets/admin/dist/js/adminlte.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/dist/js/demo.js') ?>"></script>

	<script src="<?= base_url('assets/admin/plugins/ckeditor/ckeditor.js') ?>"></script>

	<script type="text/javascript">

  CKEDITOR.replace('post', {
      filebrowserImageBrowseUrl : "<?php echo base_url('assets/admin/plugins/kcfinder/browse.php'); ?>",
      height: '250px'
  });

    </script>
</html>

