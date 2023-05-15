<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin | List Artikel</title>
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
                    <td><img width="100" height="100" src="<?= base_url('assets/img/')?><?php echo $u->Foto ?>"></td>
										<td>
                      <a href="<?php echo base_url().'admin/Artikel/get_update/'.$u->id_artikel;?>"><span class="fa fa-pencil"></span></a>
                      &nbsp;&nbsp;&nbsp;
                      <a href='<?php echo site_url('admin/Artikel/hapus/'.$u->id_artikel,''); ?>' onClick='return confirm("Anda yakin ingin menghapus data ini?")'><span class="fa fa-trash"></a>
	      						  <!-- <a href="<?= base_url('admin/Artikel/hapus/'.$u->id_artikel) ?>"><span class="fa fa-trash"></span></a> -->
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
</main>
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