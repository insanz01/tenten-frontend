<div class="container">
	<div class="row">
		<div class="col-11 mx-auto">
			<hr>
			<h2 class="text-center">DATA GURU</h2>
			<hr>
		</div>
		<div class="col-12 mb-2">
			<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
		</div>
		<div class="col-12">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<th>No</th>
						<th>Nama Guru</th>
						<th>NIP</th>
						<th>Jenis Kelamin</th>
						<th>S1/Jurusan</th>
						<th>Alamat</th>
						<th>Jabatan</th>
						<th>Gol/Ruang</th>
						<th>Tempat Tugas</th>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-12">
        		<div class="form-group">
        			<label>NIP</label>
        			<input type="text" name="NIP" class="form-control">
        		</div>
        		<div class="form-group">
        			<label>Nama Guru</label>
        			<input type="text" name="nama_guru" class="form-control">
        		</div>
                <div class="form-group">
                    <label>Jenis Kelamin : </label>
                    <br>
                    <input type="radio" name="jenis_kelamin" checked> laki-laki 
                    &nbsp; &nbsp;
                    <input type="radio" name="jenis_kelamin"> perempuan
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat"></textarea>
                </div>
        		<hr>
        	</div>
        	<div class="col-6">
        		<div class="form-group">
        			<label>S1/Jurusan</label>
        			<input type="text" class="form-control" name="jurusan">
        		</div>
        		<div class="form-group">
        			<label>Golongan/Ruang</label>
        			<input type="text" class="form-control" name="golongan_ruang">
        		</div>
        	</div>
        	<div class="col-6">
        		<div class="form-group">
        			<label>Jabatan</label>
        			<input type="text" class="form-control" name="jabatan">
        		</div>
        		<div class="form-group">
        			<label>Tempat Tugas</label>
        			<input type="text" class="form-control" name="tempat_tugas">
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tambah Data</button>
      </div>
    </div>
  </div>
</div>