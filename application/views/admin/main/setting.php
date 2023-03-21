<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/themes/header.php') ?>
	<link rel="stylesheet" href="<?= base_url('assets/css/admin/setting.css') ?>" />
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/themes/side_nav.php') ?>


		<div class="content">
			<h2>Setting</h2>
			<div class="container">
			 	<form action="/action_page.php">
			  		<div class="row">
				    	<div class="col-25">
				      		<label for="">Alamat</label>
				    	</div>
				    	<div class="col-75">
				      		<input type="text" id="fname" name="firstname" placeholder="Nama">
				    	</div>
			  		</div>
			  		<div class="row">
			    		<div class="col-25">
			      			<label for="">No Telp</label>
			    		</div>
			    		<div class="col-75">
			      			<input type="text" id="lname" name="lastname" placeholder="No Telp">
			    		</div>
			  		</div>
			  		<div class="row">
			    		<div class="col-25">
			      			<label for="">Email</label>
			    		</div>
			    		<div class="col-75">
			      			<input type="text" id="lname" name="lastname" placeholder="Email">
			    		</div>
			  		</div>
				 	<!-- <div class="row">
				    	<div class="col-25">
				      		<label for="country">Country</label>
				    	</div>
				    	<div class="col-75">
				      		<select id="country" name="country">
				        		<option value="australia">Australia</option>
				        		<option value="canada">Canada</option>
				        		<option value="usa">USA</option>
				      		</select>
				    	</div>
				  	</div> -->
				  	<div class="row">
				    	<div class="col-25">
				      		<label for="subject">Tentang Kami</label>
				    	</div>
				    	<div class="col-75">
				      		<textarea id="subject" name="subject" placeholder="" style="height:200px"></textarea>
				    	</div>
				  	</div>
			  		<br>
			  		<div class="row">
			    		<input type="submit" value="Submit">
			  		</div>
			  	</form>
			</div>

			<?php $this->load->view('admin/themes/footer.php') ?>
		</div>
	</main>
</body>

</html>