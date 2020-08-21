<div class="container">
	<div class="row">
		<div class="col-11 mx-auto">
			<hr>
			<h2 class="text-center">DATA SEKOLAH</h2>
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
						<th>Nama SD</th>
						<th>Kepsek</th>
						<th>Rombel</th>
						<th>Guru Kelas</th>
						<th>Guru PAI</th>
						<th>Guru PSOK</th>
						<th>Penjaga</th>
						<th>Total</th>
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
        <h5 class="modal-title" id="exampleModalLabel">Data Sekolah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-12">
        		<div class="form-group">
        			<label>Nama Sekolah Dasar</label>
        			<input type="text" name="nama_sd" class="form-control">
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
        			<input type="number" class="form-control" name="guru_pai">
        		</div>
        	</div>
        	<div class="col-6">
        		<div class="form-group">
        			<label>Jumlah Guru PJOK</label>
        			<input type="number" class="form-control" name="guru_pjok">
        		</div>
        		<div class="form-group">
        			<label>Jumlah Penjaga</label>
        			<input type="number" class="form-control" name="penjaga">
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