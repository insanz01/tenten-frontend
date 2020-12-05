<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="jumbotron">
				<h1 class="display-1">INFORMASI</h1>
				<p class="lead">Belum ada info</p>
			</div>
		</div>
	</div>
</div>

<?php if($this->session->flashdata('bermasalah')): ?>
	<script>
		Swal.fire('Ops..', 'Bermasalah pada akun anda', 'warning');
	</script>
<?php endif; ?>