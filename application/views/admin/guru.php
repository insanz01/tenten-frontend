<div class="container">
  <div class="row">
    <div class="col-11 mx-auto">
      <hr>
      <h2 class="text-center">DATA GURU</h2>
      <hr>
    </div>
    <?php if($this->session->flashdata('pesan')): ?>
    <div class="col-12">
      <div class="text-center">
        <?php $this->session->flashdata('pesan'); ?>
      </div>
    </div>
    <?php endif; ?>
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
            <!-- <th>Kompetensi</th> -->
          </thead>
          <tbody>
            <?php if($guru): ?>
            <?php $no = 1; ?>
            <?php foreach($guru as $g): ?>
            <tr data-toggle="modal" data-target="#aksiModal" id_guru='<?= $g['id'] ?>' onclick="tampilData(this)">
              <td><?= $no++ ?></td>
              <td><?= $g['nama_guru'] ?></td>
              <td><?= $g['NIP'] ?></td>
              <td><?= $g['jenis_kelamin'] ?></td>
              <td><?= $g['jurusan_kuliah'] ?></td>
              <td><?= $g['alamat'] ?></td>
              <td><?= $g['jabatan'] ?></td>
              <td><?= $g['gol_ruang'] ?></td>
              <td><?= $g['tempat_tugas'] ?></td>
              <!-- <td><a href="<?= base_url('Sekolah/App/kompetensi/'.$g['NIP']) ?>" class="btn btn-success">Ubah</a></td> -->
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr class="text-center">
              <td colspan="8">Tidak Ada Data</td>
            </tr>
            <?php endif; ?>
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
      <form action="<?= base_url('Sekolah/App/tambah_guru') ?>" method="post">
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
                <input type="radio" name="jenis_kelamin" value="laki-laki" checked> laki-laki
                &nbsp; &nbsp;
                <input type="radio" name="jenis_kelamin" value="perempuan"> perempuan
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
                <input type="text" class="form-control" name="jurusan_kuliah">
              </div>
              <div class="form-group">
                <label>Golongan/Ruang</label>
                <input type="text" class="form-control" name="gol_ruang">
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
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="aksiModal" tabindex="-1" role="dialog" aria-labelledby="aksiModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aksiModalLabel">Detail Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Sekolah/App/perbaharui_guru') ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <input type="hidden" id="hapus_id" name="id_guru">
              <div class="form-group">
                <button type="button" class="btn btn-primary btn-block" onclick="kompetensiGuru()">Kompetensi Guru</button>
              </div>
              <div class="form-group">
                <label>NIP</label>
                <input type="text" id="NIP" name="NIP" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama Guru</label>
                <input type="text" id="nama_guru" name="nama_guru" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin : </label>
                <br>
                <input type="radio" id="jenis_kelamin_lk" name="jenis_kelamin" value="laki-laki" checked> laki-laki
                &nbsp; &nbsp;
                <input type="radio" id="jenis_kelamin_pr" name="jenis_kelamin" value="perempuan"> perempuan
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
              </div>
              <hr>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>S1/Jurusan</label>
                <input type="text" class="form-control" name="jurusan_kuliah" id="jurusan_kuliah">
              </div>
              <div class="form-group">
                <label>Golongan/Ruang</label>
                <input type="text" class="form-control" name="gol_ruang" id="gol_ruang">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Jabatan</label>
                <input type="text" class="form-control" name="jabatan" id="jabatan">
              </div>
              <div class="form-group">
                <label>Tempat Tugas</label>
                <input type="text" class="form-control" name="tempat_tugas" id="tempat_tugas">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Ubah</button>
          <button type="button" onclick="hapusData()" class="btn btn-danger">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="<?= base_url() . 'assets/js/axios.min.js' ?>"></script>
<script type="text/javascript">
  let NIP = document.getElementById('NIP');
  let nama_guru = document.getElementById('nama_guru');
  let jenis_kelamin_lk = document.getElementById('jenis_kelamin_lk');
  let jenis_kelamin_pr = document.getElementById('jenis_kelamin_pr');
  let alamat = document.getElementById('alamat');
  let jurusan_kuliah = document.getElementById('jurusan_kuliah');
  let gol_ruang = document.getElementById('gol_ruang');
  let jabatan = document.getElementById('jabatan');
  let tempat_tugas = document.getElementById('tempat_tugas');
  
  let hapus_id = document.getElementById('hapus_id');

  const loadData = async (id) => {
    return await axios.get('http://localhost/tenten-frontend/Sekolah/App/api_tampilkan_guru/' + id).then(res => {
      return res.data;
    });
  }
  
  const tampilData = async (x) => {
    let id = x.getAttribute('id_guru');
    let data = await loadData(id).then(res => res);

    console.log(data);
    NIP.value = data.NIP;
    nama_guru.value = data.nama_guru;
    if(data.jenis_kelamin == 'perempuan') {
      jenis_kelamin_pr.checked = true;
      jenis_kelamin_lk.checked = false;
    } else if(data.jenis_kelamin == 'laki-laki') {
      jenis_kelamin_lk.checked = true;
      jenis_kelamin_pr.checked = false;
    }
    alamat.innerText = data.alamat;
    jurusan_kuliah.value = data.jurusan_kuliah;
    gol_ruang.value = data.gol_ruang;
    jabatan.value = data.jabatan;
    tempat_tugas.value = data.tempat_tugas;

    hapus_id.value = id;
  }

  const hapusData = () => {
    window.location = 'http://localhost/tenten-frontend/Sekolah/App/hapuskan_guru/' + hapus_id.value;
  }

  const kompetensiGuru = () => {
    window.location = 'http://localhost/tenten-frontend/Sekolah/App/kompetensi_guru/' + hapus_id.value;
  }
  
</script>
