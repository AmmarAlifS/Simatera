<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/themes/header.php') ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/admin/setting.css') ?>" />
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/themes/side_nav.php') ?>
<!-- <?php echo $title ?> -->


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


			<?php $this->load->view('admin/themes/footer.php') ?>
		</div>
	</main>
</body>

</html>