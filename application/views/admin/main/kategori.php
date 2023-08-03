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
        List Kategori
        <small>List kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Kategori</a></li>
        <li class="active">Data Kategori</li>
      </ol>
    </section>

   <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a class="btn btn-success btn-flat" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#myModal"><span class="fa fa-plus"></span>Tambah Kategori</a>
                    </div>
                      <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>CODE</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $kategoricode = 1;
                                    foreach($kategori as $u){ 
                                    ?>
                                    <tr>
                                        <td><?php echo $kategoricode++ ?></td>
                                        <td><?php echo $u->nama_kategori ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm glyphicon glyphicon-edit" href='#' title="Edit" data-toggle="modal" data-target="#edit<?php echo $u->kategoricode;?>" data-backdrop="static">
                                            </a>
                                            <a class="btn btn-danger btn-sm glyphicon glyphicon-trash" href='<?php echo site_url('admin/Kategori/hapus/'.$u->kategoricode,''); ?>' onClick='return confirm("Anda yakin ingin menghapus data ini?")' title='Hapus'>
                                            </a>
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

<!-- Modal Input -->
  <!-- Modal Input Data -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Kateogri</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url(). 'admin/Kategori/tambah_kategori'; ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
             <div class="form-group">
              <label for="inputUserName" class="col-sm-4 control-label">CODE</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" placeholder="Enter CODE" name="kategoricode" readonly value="<?php echo $kategoricode++ ?>">
              </div>
            </div>
          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" placeholder="Masukan Kategori" name="nama_kategori">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Edit Data -->
<?php foreach($kategori as $u){ ?>
<div id="edit<?php echo $u->kategoricode;?>" tabindex="-1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data Kategori</h4>
      </div>
      
      <form class="form-horizontal" action="<?php echo base_url(). 'admin/Kategori/update_kategori'; ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="inputUserName" class="col-sm-4 control-label">Genre</label>
            <div class="col-sm-7">
              <input type="hidden" name="kategoricode" value="<?php echo $u->kategoricode ?>">
              <input type="text" class="form-control" name="nama_kategori" value="<?php echo $u->nama_kategori ?>">
            </div>
          </div>

          <button type="submit" class="btn btn-info" value="Simpan">Simpan</button>
        </form>

      </div>
    </div>
  </div>
</div>
<?php } ?>



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