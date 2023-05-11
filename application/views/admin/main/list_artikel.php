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
  
  <link rel="stylesheet" href="<?= base_url('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
  
  <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/AdminLTE.min.css"') ?>">
  
  <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/skins/_all-skins.min.css') ?>">
  
	<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Artikel
        <small>List Table</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Artikel</a></li>
        <li class="active">Data Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Artikel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  	<th>ID</th>
                    <th>Judul</th>
                    <th>Artikel</th>
                    <th>Tanggal</th>
					<th>Vidio</th>
					<th>Foto</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $judul_id = 1;
                    foreach($art as $u) {
                  ?>
                  <tr>
                  	<td><?php echo $u->id_artikel ?></td>
                    <td><?php echo $u->judul ?></td>
                    <td><?php echo $u->artikel ?></td>
                    <td><?php echo $u->tanggal ?></td>
                    <td><?php echo $u->Video ?></td>
					<td><?php echo $u->Foto ?></td>
										<td><a href="" class="btn btn-primary">Update</a></td>
	      						<td><a href="<?= base_url('admin/Artikel/delete/'.$u->id_artikel) ?>" class="btn btn-danger">Delete</a></td>
	      						</td>
                  </tr>
                  <?php } ?>
          
                </tbody>
              </table>
            </div>
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
  <!-- /.content-wrapper -->




	<!-- <div class="content">
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

		</div> -->
</body>
<script src="<?= base_url('assets/admin/bower_components/jquery/dist/jquery.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?= base_url('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>

	<script src="<?= base_url('assets/admin/bower_components/fastclick/lib/fastclick.js') ?>"></script>

	<script src="<?= base_url('assets/admin/dist/js/adminlte.min.js') ?>"></script>
	<script>
		$(function () {
			$('#example1').DataTable()
			$('#example2').DataTable({
			'paging'      : true,
			'lengthChange': false,
			'searching'   : false,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : false
			})
		})
</script>
</html>