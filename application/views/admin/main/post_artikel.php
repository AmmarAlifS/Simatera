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
            <div class="row">
                <div class="col-md-12">
                    <div class="box-body">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title"></h3>
                            </div>
                            <form class="form-horizontal" action="<?php echo base_url(). 'admin/setting/simpan'; ?>" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputTitle" class="col-sm-1 control-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="Title" class="form-control" name="judul">
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid DeepSkyBlue; border-radius: 5px;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputTitle" class="col-sm-2 control-label">Gambar</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="gambar" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputTitle" class="col-sm-2 control-label">Vidio</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="vidio" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-6">
                    <div class="box-body">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title"></h3>
                            </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputTitle" class="col-sm-2 control-label">Gambar</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="gambar" required>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-body">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title"></h3>
                            </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputTitle" class="col-sm-2 control-label">Vidio</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="vidio" required>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-md-12">
                    <div class="box-body">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Artikel</h3>
                            </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea id="content" name="content"></textarea>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" value="Submit"class="btn btn-info pull-right">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

	<script>
		CKEDITOR.replace('content');
    </script>
</html>

