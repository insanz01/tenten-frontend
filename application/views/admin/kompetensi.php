<div class="container">
	<div class="row">
		<div class="col-5 mx-auto">
			<div class="card">
				<div class="card-header">
					Sertifikasi
				</div>
				<div class="card-body">
					<form action="<?= base_url('Sekolah/App/kompetensi_guru/') . $id_guru ?>" method="post">
						<input type="hidden" name="id_guru" value=<?= $id_guru ?>>
						<div class="form-group">
							<label>Loyalitas</label>
							<select class="form-control" name="loyalitas">
								<option <?= ($kompetensi['loyalitas'] == 0) ? 'selected' : '' ?>></option>
								<option value="1" <?= ($kompetensi['loyalitas'] == 1) ? 'selected' : '' ?>>Sangat Tidak Sesuai</option>
								<option value="2" <?= ($kompetensi['loyalitas'] == 2) ? 'selected' : '' ?>>Tidak Sesuai</option>
								<option value="3" <?= ($kompetensi['loyalitas'] == 3) ? 'selected' : '' ?>>Cukup Sesuai</option>
								<option value="4" <?= ($kompetensi['loyalitas'] == 4) ? 'selected' : '' ?>>Sesuai</option>
								<option value="5" <?= ($kompetensi['loyalitas'] == 5) ? 'selected' : '' ?>>Sangat Sesuai</option>
							</select>
						</div>
						<div class="form-group">
							<label>Disiplin</label>
							<select class="form-control" name="disiplin">
								<option <?= ($kompetensi['disiplin'] == 0) ? 'selected' : '' ?>></option>
								<option value="1" <?= ($kompetensi['disiplin'] == 1) ? 'selected' : '' ?>>Sangat Tidak Sesuai</option>
								<option value="2" <?= ($kompetensi['disiplin'] == 2) ? 'selected' : '' ?>>Tidak Sesuai</option>
								<option value="3" <?= ($kompetensi['disiplin'] == 3) ? 'selected' : '' ?>>Cukup Sesuai</option>
								<option value="4" <?= ($kompetensi['disiplin'] == 4) ? 'selected' : '' ?>>Sesuai</option>
								<option value="5" <?= ($kompetensi['disiplin'] == 5) ? 'selected' : '' ?>>Sangat Sesuai</option>
							</select>
						</div>
						<div class="form-group">
							<label>Sertifikasi</label>
							<select class="form-control" name="sertifikasi">
								<option></option>
								<option value="0" <?= ($kompetensi['sertifikasi'] == 1) ? 'selected' : '' ?>>Belum</option>
								<option value="1" <?= ($kompetensi['sertifikasi'] == 2) ? 'selected' : '' ?>>Ya</option>
								<option value="2" <?= ($kompetensi['sertifikasi'] == 3) ? 'selected' : '' ?>>Iya ngga ya...</option>
							</select>
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