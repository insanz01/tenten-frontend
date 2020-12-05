<div class="container">
	<div class="row">
		<div class="col-12 mb-2">
      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Sekolah</button>
    </div>
		<div class="col-12">
			<table class="table table-hover table-striped">
				<thead class="text-center">
					<th>No</th>
					<th>Nama Sekolah</th>
					<th>Jumlah Rombel</th>
					<th>Guru Kelas</th>
					<th>Guru Agama</th>
					<th>Guru PJOK</th>
					<th>Penjaga</th>
					<th>Kekurangan Guru</th>
				</thead>
				<tbody>
					<?php $no = 0; ?>
					<?php if($sekolah): ?>
						<?php foreach($sekolah as $s): ?>
							<tr class="text-center">
								<td><?= ++$no ?></td>
								<td><?= $s['nama_sekolah'] ?></td>
								<td><?= $s['rombel'] ?></td>
								<td><?= $s['guru_kelas'] ?></td>
								<td><?= $s['guru_PAI'] ?></td>
								<td><?= $s['guru_PJOK'] ?></td>
								<td><?= $s['penjaga'] ?></td>
								<td>-</td>
							</tr>
						<?php endforeach; ?>
					<?php else: ?>
						<tr>
							<td colspan="8" class="text-center">Tidak ada data disini</td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Sekolah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Main/App/tambah_sekolah') ?>" method="post">
	      <div class="modal-body">
	        <div class="row">
	            <div class="col-12">
	              <div class="form-group">
	                <label>Nama Sekolah Dasar</label>
	                <input type="text" name="nama_sekolah" class="form-control">
	              </div>
	              <div class="form-group">
	                <label>Nama Kepala Sekolah</label>
	                <input type="text" name="nama_kepsek" class="form-control">
	              </div>
	              <hr>
	            </div>
	            <div class="col-6">
	              <div class="form-group">
	                <label>Jumlah Rombel</label>
	                <input type="number" class="form-control" name="rombel">
	              </div>
	              <div class="form-group">
	                <label>Jumlah Guru Kelas</label>
	                <input type="number" class="form-control" name="guru_kelas">
	              </div>
	              <div class="form-group">
	                <label>Jumlah Guru PAI</label>
	                <input type="number" class="form-control" name="guru_PAI">
	              </div>
	            </div>
	            <div class="col-6">
	              <div class="form-group">
	                <label>Jumlah Guru PJOK</label>
	                <input type="number" class="form-control" name="guru_PJOK">
	              </div>
	              <div class="form-group">
	                <label>Jumlah Penjaga</label>
	                <input type="number" class="form-control" name="penjaga">
	              </div>
	              <div class="form-group">
	                <label>Kekurangan Guru</label>
	                <input type="number" class="form-control" name="kekurangan">
	              </div>
	            </div>
	            <div class="col-12">
	            	<div class="form-group">
	            		<label>Admin Sekolah</label>
	            		<select class="form-control" name="id_user" required>
	            			<option>Belum dipilih</option>
	            			<?php foreach($users as $user): ?>
	            				<option value="<?= $user['id'] ?>"><?= $user['nama'] ?></option>
	            			<?php endforeach; ?>
	            		</select>
	            	</div>
	            </div>
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Tambah</button>
	      </div>
	    </form>
    </div>
  </div>
</div>