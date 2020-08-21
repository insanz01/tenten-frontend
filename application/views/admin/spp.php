<div class="container">
	<div class="row">
		<div class="col-4">
			<div class="form-group">
				<select name="filter_kelas" class="form-control">
					<option value="">Pilih Kelas</option>
					<option value="x">Kelas X</option>
					<option value="xi">Kelas XI</option>
					<option value="xii">Kelas XII</option>
				</select>
			</div>
		</div>
		<div class="col-4">
			<div class="form-group">
				<select name="filter_semester" class="form-control">
					<option value="">Pilih Semester</option>
					<option value="gasal">Gasal</option>
					<option value="genap">Genap</option>
				</select>
			</div>
		</div>
		<div class="col-4"></div>
	</div>
	<div class="row">
		<div class="col-12">
			<table class="table table-striped">
				<thead>
					<th>NIS</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Semester</th>
					<th>Alamat</th>
					<th>Keterangan</th>
					<th>Opsi</th>
					<th>Aksi</th>
				</thead>
				<tbody>
					<tr>
						<td>36165</td>
						<td>Firdaus</td>
						<td>XI</td>
						<td>Ganjil</td>
						<td>Jl Solo</td>
						<td>Lunas</td>
						<td>
							<input type="checkbox" name="aksi[]">
						</td>
						<td>
							<a href="#" class="btn btn-primary">EDIT</a>
						</td>
					</tr>
					<tr>
						<td>61131</td>
						<td>Arda</td>
						<td>XI</td>
						<td>Ganjil</td>
						<td>Jl Selokan</td>
						<td>Lunas</td>
						<td>
							<input type="checkbox" name="aksi[]">
						</td>
						<td>
							<a href="#" class="btn btn-primary">EDIT</a>
						</td>
					</tr>
					<tr>
						<td>31313</td>
						<td>Adnan</td>
						<td>XI</td>
						<td>Ganjil</td>
						<td>Jl Bantul</td>
						<td>Belum Lunas</td>
						<td>
							<input type="checkbox" name="aksi[]">
						</td>
						<td>
							<a href="#" class="btn btn-primary">EDIT</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>