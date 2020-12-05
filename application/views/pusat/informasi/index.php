<div class="container">
	<div class="row">
		<div class="col-12 my-2">
			<div class="card">
				<div class="card-body">
					<h3>Informasi</h3>
					<br>
					<form action="<?= base_url('Main/App/simpan_kabar/informasi') ?>" method="post">
						<div class="form-group">
							<textarea class="form-control" placeholder="Ketik informasi di sini" rows="10" name="informasi"><?= $berita['informasi'] ?></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="col-12 my-2">
			<div class="card">
				<div class="card-body">
					<h3>Pemberitahuan</h3>
					<br>
					<form action="<?= base_url('Main/App/simpan_kabar/pemberitahuan') ?>" method="post">
						<div class="form-group">
							<textarea class="form-control" placeholder="Ketik pemberitahuan di sini" rows="10" name="pemberitahuan"><?= $berita['pemberitahuan'] ?></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>