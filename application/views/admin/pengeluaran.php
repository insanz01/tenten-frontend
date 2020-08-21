<div class="container">
	<div class="row">
		<div class="col-11 mx-auto">
			<a href="#" class="btn btn-primary float-right">Lihat Rekap & Cetak</a>
		</div>
		<div class="col-7 mx-auto">
			<hr>
			<form action="#" method="post">
				<div class="row">
					<div class="col-8">
						<div class="form-group">
							<label>Jenis Anggaran</label>
							<select class="form-control" name="amggaran">
								<option value=""></option>
								<option value="anggaran_gaji">Anggaran Gaji</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" name="keterangan_anggaran" class="form-control">
						</div>
					</div>
				</div>
				<br>
				<div class="form-group">
					<label>Kode Kegiatan</label>
					<input type="text" name="kode_kegiatan" class="form-control">
				</div>
				<div class="form-group">
					<label>Kode Program</label>
					<input type="text" name="kode_program" class="form-control">
				</div>
				<div class="form-group">
					<label>Nama Kegiatan</label>
					<input type="text" name="nama_kegiatan" class="form-control">
				</div>
				<div class="form-group">
					<label>Tanggal Kegiatan</label>
					<input type="date" name="tanggal_kegiatan" class="form-control">
				</div>
				<div class="form-group">
					<label>Jumlah</label>
					<input type="text" name="jumlah" class="form-control">
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" name="keterangan"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">BUAT</button>
				</div>
			</form>
		</div>
	</div>
</div>