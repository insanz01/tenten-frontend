<div class="container">
	<div class="row">
		<div class="col-6 my-3">
			<div class="card p-4 bg-primary text-white" onclick="pindahHalaman('user')">
				<div class="card-body">
					<h3 class="text-center font-weight-bold">User</h3>
				</div>
			</div>
		</div>
		<div class="col-6 my-3">
			<div class="card p-4 bg-success text-white" onclick="pindahHalaman('informasi')">
				<div class="card-body">
					<h3 class="text-center font-weight-bold">Informasi</h3>
				</div>
			</div>
		</div>
		<div class="col-6 my-3">
			<div class="card p-4 bg-danger text-white" onclick="pindahHalaman('data')">
				<div class="card-body">
					<h3 class="text-center font-weight-bold">Data</h3>
				</div>
			</div>
		</div>
		<div class="col-6 my-3">
			<div class="card p-4 bg-info text-white" onclick="pindahHalaman('rekap_data_guru')">
				<div class="card-body">
					<h3 class="text-center font-weight-bold">Rekap Data Guru</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	const pindahHalaman = (lokasi) => {
		window.location = '<?= base_url("Main/App/") ?>' + lokasi
	}
</script>