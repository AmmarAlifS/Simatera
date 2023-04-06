<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin | Dashboard</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/Ionicons/css/ionicons.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/AdminLTE.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/skins/_all-skins.min.css') ?>">

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
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Artikel</h3>
                    </div>
                    <div class="box-body pad">
                        <form action="" method="POST">
                                <textarea id="content" name="content"></textarea>
                                <br>
                                <button type="submit" class="btn btn-info">Simpan</button>
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
		CKEDITOR.replace('conten2');
        </script>
</html>