<div class="container">
  <div class="row">
    <div class="col-11 mx-auto">
      <hr>
      <h2 class="text-center">DATA SISWA</h2>
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
            <th>NIS/NISN</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Alamat</th>
          </thead>
          <tbody>
            <?php if($siswa): ?>
            <?php $no = 1; ?>
            <?php foreach($siswa as $g): ?>
            <tr data-toggle="modal" data-target="#exampleModalLihat" id_siswa='<?= $g['id'] ?>' onclick="tampilData(this)">
              <td><?= $no++ ?></td>
              <td><?= $g['NIS'] ?></td>
              <td><?= $g['nama_siswa'] ?></td>
              <td><?= $g['jenis_kelamin'] ?></td>
              <td><?= $g['kelas'] ?></td>
              <td><?= $g['alamat'] ?></td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr class="text-center">
              <td colspan="9">Tidak Ada Data</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Sekolah/App/tambah_siswa') ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>NIS/NISN</label>
                <input type="text" name="NIS" class="form-control">
              </div>
              <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin : </label>
                <br>
                <input type="radio" name="jenis_kelamin" value="laki-laki" checked> laki-laki
                &nbsp; &nbsp;
                <input type="radio" name="jenis_kelamin" value="perempuan"> perempuan
              </div>
              <div class="form-group">
                <label>Kelas</label>
                <select class="form-control" name="kelas">
                  <option value=""></option>
                  <option value="1">Kelas 1</option>
                  <option value="2">Kelas 2</option>
                  <option value="3">Kelas 3</option>
                  <option value="4">Kelas 4</option>
                  <option value="5">Kelas 5</option>
                  <option value="6">Kelas 6</option>
                </select>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat"></textarea>
              </div>
              <hr>
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
<div class="modal fade" id="exampleModalLihat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Sekolah/App/ubah_siswa') ?>" method="post">
        <div class="modal-body">
          <input type="hidden" name="id_siswa" id="hapus_id">
          <div class="form-group">
            <label>NIS / NISN</label>
            <input type="text" id="NIS" name="NIS" class="form-control">
          </div>
          <div class="form-group">
            <label>Nama Siswa</label>
            <input type="text" id="nama_siswa" name="nama_siswa" class="form-control">
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <select class="form-control" name="kelas" id="kelas">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
              <option value="laki-laki">laki-laki</option>
              <option value="perempuan">perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea id="alamat" name="alamat" class="form-control"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          <button type="button" onclick="hapusData()" class="btn btn-danger">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="<?= base_url() . 'assets/js/axios.min.js' ?>"></script>
<script type="text/javascript">
  let NIS = document.getElementById('NIS');
  let nama = document.getElementById('nama_siswa');
  let kelas = document.getElementById('kelas');
  let jenis_kelamin = document.getElementById('jenis_kelamin');
  let alamat = document.getElementById('alamat');
  
  let hapus_id = document.getElementById('hapus_id');
  
  const loadData = async (id) => {
    return await axios.get('http://localhost/tenten-frontend/Sekolah/App/api_tampilkan_siswa/' + id).then(res => {
      return res.data;
    });
  }

  const tampilData = async (x) => {
    let id = x.getAttribute('id_siswa');
    let data = await loadData(id).then(res => res);

    console.log(data);
    NIS.value = data.NIS;
    nama.value = data.nama_siswa;
    kelas.value = data.kelas;
    jenis_kelamin.value = data.jenis_kelamin;
    alamat.innerText = data.alamat;
    hapus_id.value = id;
  }

  const hapusData = () => {
    window.location = 'http://localhost/tenten-frontend/Sekolah/App/hapuskan_siswa/' + hapus_id.value;
  }
</script>
