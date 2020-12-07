<div class="container">
	<?php if($this->session->flashdata('pesan')): ?>
		<div class="row my-2">
			<div class="col-12 text-center">
				<?= $this->session->flashdata('pesan'); ?>
			</div>
		</div>
	<?php endif; ?>
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
								<a href="#" class="badge badge-primary" data-toggle="modal" data-target="#editModal" id_user="<?= $user['id'] ?>" onclick="tampilData(this)">Edit</a>
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

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Main/App/ubah_user') ?>" method="post">
	      <div class="modal-body">
	      	<input type="hidden" name="id" id="id_edit">
	        <div class="form-group">
	        	<label>Nama Pengguna</label>
	        	<input type="text" name="nama" class="form-control" id="nama_edit">
	        </div>
	        <div class="form-group">
	        	<label>Username</label>
	        	<input type="text" name="username" class="form-control" id="username_edit">
	        </div>
	        <!-- <div class="form-group">
	        	<label>Password</label>
	        	<input type="password" name="password" class="form-control" id="password_edit">
	        </div> -->
	        <div class="form-group">
	        	<label>Role</label>
	        	<select class="form-control" name="role" id="role_edit">
	        		<option value="sekolah">Sekolah</option>
	        		<option value="admin">Admin</option>
	        	</select>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ga jadi</button>
	        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
	const mintaData = async (id) => {
		return await axios.get('<?= base_url() ?>API/get_data/user/'+id).then(res => res.data);
	}

	const tampilData = async (x) => {
		let id = x.getAttribute('id_user');

		let id_edit = document.getElementById('id_edit');
		
		let nama_edit = document.getElementById('nama_edit');
		let username_edit = document.getElementById('username_edit');
		// let password_edit = document.getElementById('password_edit');
		let role_edit = document.getElementById('role_edit');

		let result = await mintaData(id).then(res => res);

		id_edit.value = result.id;

		nama_edit.value = result.nama;
		username_edit.value = result.username;
		password_edit.value = result.password;
		role_edit.value = result.role;
	}
</script>