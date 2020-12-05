<div class="container">
	<div class="row">
		<div class="col-12 mb-2">
      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah User</button>
    </div>
		<div class="col-12">
			<table class="table table-hover table-striped">
				<thead>
					<th>No</th>
					<th>Nama Pengguna</th>
					<th>Username</th>
					<th>Status</th>
					<th>Role</th>
					<th>Tanggal Dibuat</th>
					<th>Aksi</th>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php if($users): ?>
						<?php foreach($users as $user): ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $user['nama'] ?></td>
							<td><?= $user['username'] ?></td>
							<td><?= ($user['aktif']) ? 'Aktif' : 'Mati' ?></td>
							<td><?= $user['role'] ?></td>
							<td><?= date('d/m/Y', strtotime($user['created_at'])) ?></td>
							<td>
								<a href="<?= base_url('Main/App/hapus_user/') . $user['id'] ?>" class="badge badge-danger">Hapus</a>
								<a href="#" class="badge badge-primary">Edit</a>
								<?php if($user['aktif'] == 1): ?>
									<a href="<?= base_url('Main/App/ubah_aktivasi/') . $user['id'] ?>" class="badge badge-info">Aktif</a>
								<?php else: ?>
									<a href="<?= base_url('Main/App/ubah_aktivasi/') . $user['id'] ?>" class="badge badge-danger">Mati</a>
								<?php endif; ?>
							</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Main/App/tambah_user') ?>" method="post">
	      <div class="modal-body">
	        <div class="form-group">
	        	<label>Nama Pengguna</label>
	        	<input type="text" name="nama" class="form-control">
	        </div>
	        <div class="form-group">
	        	<label>Username</label>
	        	<input type="text" name="username" class="form-control">
	        </div>
	        <div class="form-group">
	        	<label>Password</label>
	        	<input type="text" name="password" class="form-control">
	        </div>
	        <div class="form-group">
	        	<label>Role</label>
	        	<select class="form-control" name="role">
	        		<option value="sekolah">Sekolah</option>
	        		<option value="admin">Admin</option>
	        	</select>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ga jadi</button>
	        <button type="submit" class="btn btn-primary">Tambah</button>
	      </div>
      </form>
    </div>
  </div>
</div>