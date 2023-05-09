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

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/morris.js/morris.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/jvectormap/jquery-jvectormap.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">

	<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Setting Web
				<small>Preview</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Setting</li>
			</ol>
		</section>

		<section class="content">
      		<div class="row">
			  	<?php foreach($setting->result() as $row): ?>
					<div class="col-md-12">
						<div class="box box-info">
							<div class="box-header with-border">
								<h3 class="box-title">Setting Web</h3>
							</div>
							<form class="form-horizontal" action="<?php echo base_url(). 'admin/setting/simpan'; ?>" method="post">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

										<div class="col-sm-10">
											<input type="hidden" name="id_setting" value="<?php echo $row->id_setting ?>">
											<input type="address" class="form-control" name="alamat" value="<?php echo $row->alamat; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword3" class="col-sm-2 control-label">Email</label>

										<div class="col-sm-10">
											<input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword3" class="col-sm-2 control-label">No Telp</label>

										<div class="col-sm-10">
											<input type="no Telp" class="form-control" name="no_telp" value="<?php echo $row->no_telp; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>

										<div class="col-sm-10">
											<input type="sm" class="form-control" name="facebook" value="<?php echo $row->facebook; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword3" class="col-sm-2 control-label">Twitter</label>

										<div class="col-sm-10">
											<input type="sm" class="form-control" name="twitter" value="<?php echo $row->twitter; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword3" class="col-sm-2 control-label">Instagram</label>
										<div class="col-sm-10">
											<input type="sm" class="form-control" name="instagram" value="<?php echo $row->instagram; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword3" class="col-sm-2 control-label">Tentang Kami</label>
										<div class="col-sm-10">
											<textarea style="width:750px; height:250px" id="tentang_kami" name="tentang_kami"><?php echo $row->tentang_kami; ?></textarea>
											
										</div>
									</div>
								</div>
								<div class="box-footer">
									<button type="submit" value="Submit"class="btn btn-info pull-right">Simpan</button>
								</div>
								</div>
							
							</form>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
	</div>
</body>
	<script src="<?= base_url('assets/admin/bower_components/jquery/dist/jquery.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>

	<script>
	$.widget.bridge('uibutton', $.ui.button);
	</script>

	<script src="<?= base_url('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
	<script src="<?= base_url('assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>

	<script src="<?= base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/fastclick/lib/fastclick.js') ?>"></script>

	<script src="<?= base_url('assets/admin/dist/js/adminlte.min.js') ?>"></script>
</html>