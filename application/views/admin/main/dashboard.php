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

	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Dashboard
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-aqua">
						<div class="inner">
						<h3>150</h3>

						<p>New Orders</p>
						</div>
						<div class="icon">
						<i class="ion ion-bag"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-green">
						<div class="inner">
						<h3>53<sup style="font-size: 20px">%</sup></h3>

						<p>Bounce Rate</p>
						</div>
						<div class="icon">
						<i class="ion ion-stats-bars"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-yellow">
						<div class="inner">
						<h3>44</h3>

						<p>User Registrations</p>
						</div>
						<div class="icon">
						<i class="ion ion-person-add"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-red">
						<div class="inner">
						<h3>65</h3>

						<p>Unique Visitors</p>
						</div>
						<div class="icon">
						<i class="ion ion-pie-graph"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</section>
  	</div>


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