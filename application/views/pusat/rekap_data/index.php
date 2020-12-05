<div class="container">
	<div class="row">
		<div class="col-12">
			<table class="table table-hover table-striped">
				<thead class="text-center">
					<th>No</th>
					<th>NIP</th>
					<th>Nama Sekolah</th>
					<th>Nama Guru</th>
					<th>Loyalitas</th>
					<th>Kedisiplinan</th>
					<th>Pendidikan</th>
					<th>Sertifikasi</th>
					<!-- <th>Tugas</th> -->
					<th>Keterangan</th>
				</thead>
				<tbody>
					<?php $no = 0; ?>
					<?php if($guru): ?>
						<?php foreach($guru as $g): ?>
							<tr class="text-center">
								<td><?= ++$no ?></td>
								<td><?= $g['NIP'] ?></td>
								<td><?= $g['nama_sekolah'] ?></td>
								<td><?= $g['nama_guru'] ?></td>
								<td><?= $g['loyalitas'] ?></td>
								<td><?= $g['disiplin'] ?></td>
								<td><?= $g['pendidikan'] ?></td>
								<td><?= $g['sertifikasi'] ?></td>
								<!-- <td><?= $g['tugas'] ?></td> -->
								<td class="text-center">-</td>
							</tr>
						<?php endforeach; ?>
					<?php else: ?>
						<tr>
							<td colspan="9" class="text-center">Tidak ada data disini</td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>