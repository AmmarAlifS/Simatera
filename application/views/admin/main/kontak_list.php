<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/themes/header.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/themes/side_nav.php') ?>

		<div class="content">
			<h1>Kontak</h1>
		<?php foreach($hsl as $feedback): ?>

				<div class="card">
				<div class="card-header">
					<div>
						<b><?= $feedback->nama?></b> <small class="text-gray"><?= $feedback->email?></small>
					</div>
					<div><small class="text-gray"><?= $feedback->created_at ?></small></div>
				</div>
				<p><?= $feedback->pesan ?>
				</p>
				<a href="#" 
					data-delete-url="<?= site_url('admin/kontak/delete/'.$feedback->id_kontak) ?>" 
					class="button button-danger button-small" 
					role="button"
					onclick="deleteConfirm(this)">Delete</a>
			</div>
		<?php endforeach ?>

			<?php $this->load->view('admin/themes/footer.php') ?>
		</div>
	</main>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Konfirmasi Delete!',
				text: 'Apa Kamu Yakin Ingin Menghapus data ini?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if($this->session->flashdata('message')): ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>
</body>

</html>