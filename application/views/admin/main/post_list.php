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
	<main class="main">

		<div class="content">
			<h1>List Artikel</h1>

			<div class="toolbar">
				<a href="#" class="button button-primary" role="button">+ Tulis Artikel</a>
			</div>

			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th style="width: 15%;" class="text-center">Status</th>
						<th style="width: 25%;" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div>Hello World!</div>
							<div class="text-gray"><small>12 Jan 2021<small></div>
						</td>
						<td class="text-center text-gray">Draft</td>
						<td>
							<div class="action">
								<a href="#" class="button button-small" role="button">View</a>
								<a href="#" class="button button-small" role="button">Edit</a>
								<a href="#" class="button button-small button-danger" role="button">Delete</a>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div>Hello World!</div>
							<div class="text-gray"><small>12 Jan 2021<small></div>
						</td>
						<td class="text-center text-green">Published</td>
						<td>
							<div class="action">
								<a href="#" class="button button-small" role="button">View</a>
								<a href="#" class="button button-small" role="button">Edit</a>
								<a href="#" class="button button-small button-danger" role="button">Delete</a>
							</div>
						</td>
					</tr>
				</tbody>
			</table>

		</div>
	</main>
</body>
	<script src="<?= base_url('assets/admin/bower_components/jquery/dist/jquery.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/fastclick/lib/fastclick.js') ?>"></script>

	<script src="<?= base_url('assets/admin/dist/js/adminlte.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/dist/js/demo.js') ?>"></script>

	<script src="<?= base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/ckeditor/ckeditor.js') ?>"></script>

	<script>
		$(function () {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('editor1')
			//bootstrap WYSIHTML5 - text editor
			$('.textarea').wysihtml5()
		})
	</script>
</html>