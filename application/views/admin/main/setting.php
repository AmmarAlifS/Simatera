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

		<div class="content">
			<h2>Setting</h2>
			<div class="row">
				<form action="<?php echo site_url('admin/Setting/simpan_data');?>">
					<h4>Kontak</h4>
					<?php foreach($setting->result() as $row): ?>
			 		<div class="column">
				  		<div class="row">
					    	<div class="">
					      		<label for="">Alamat</label>
					    	</div>
					    	<div class="">
					      		<input type="text" class="form-control" name="alamat" value="<?php echo $row->alamat; ?>">
					    	</div>
				  		</div>
				  		<div class="row">
				    		<div class="">
				      			<label for="">No Telp</label>
				    		</div>
				    		<div class="">
				      			<input type="text" id="lname" name="lastname" value="<?php echo $row->no_telp; ?>">
				    		</div>
				  		</div>
				  		<div class="row">
				    		<div class="">
				      			<label for="">Email</label>
				    		</div>
				    		<div class="">
				      			<input type="text" id="lname" name="lastname" value="<?php echo $row->email; ?>">
				    		</div>
				  		</div>
					</div>

			  		<!-- Tentang Kami -->

			 		<div class="column">
					  	<div class="row">
					    	<div class="">
					      		<label for="subject">Tentang Kami</label>
					    	</div>
					    	<div class="">
					      		<textarea name="tentang_kami" placeholder="" style="height:200px" value="<?php echo $row->tentang_kami ?>"></textarea>
					    	</div>
					  	</div>
				  		<br>	
				  		<div class="row">
				    		<input type="submit" value="Submit">
				  		</div>
			  		</div>
			  		<?php endforeach; ?>
			  	</form>
			</div>
		</div>
	</div>
</main>
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