<div class="container">
  <div class="row">
    <div class="col-11 mx-auto">
      <hr>
      <h2 class="text-center">DATA SEKOLAH</h2>
      <hr>
    </div>
    <?php if($this->session->flashdata('pesan')): ?>
    <div class="col-12">
      <div class="text-center">
        <?php $this->session->flashdata('pesan'); ?>
      </div>
    </div>
    <?php endif; ?>
    
    <div class="col-12">
      <form action="<?= base_url('Sekolah/App/sekolah/') . $id_sekolah ?>" method="post">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label>Nama Sekolah Dasar</label>
              <input type="text" name="nama_sekolah" value="<?= $sekolah['nama_sekolah'] ?>" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama Kepala Sekolah</label>
              <input type="text" name="nama_kepsek" value="<?= $sekolah['nama_kepsek'] ?>" class="form-control">
            </div>
            <hr>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Jumlah Rombel</label>
              <input type="number" class="form-control" value="<?= $sekolah['rombel'] ?>" name="rombel">
            </div>
            <div class="form-group">
              <label>Jumlah Guru Kelas</label>
              <input type="number" class="form-control" value="<?= $sekolah['guru_kelas'] ?>" name="guru_kelas">
            </div>
            <div class="form-group">
              <label>Jumlah Guru PAI</label>
              <input type="number" class="form-control" value="<?= $sekolah['guru_PAI'] ?>" name="guru_PAI">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Jumlah Guru PJOK</label>
              <input type="number" class="form-control" value="<?= $sekolah['guru_PJOK'] ?>" name="guru_PJOK">
            </div>
            <div class="form-group">
              <label>Jumlah Penjaga</label>
              <input type="number" class="form-control" value="<?= $sekolah['penjaga'] ?>"  name="penjaga">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
      </form>
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
      <form action="<?= base_url('Sekolah/App/tambah_sekolah') ?>" method="post">
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
        <h5 class="modal-title" id="aksiModalLabel">Detail Sekolah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <input type="hidden" id="hapus_id">
          <div class="col-12">
            <div class="form-group">
              <label>Nama Sekolah Dasar</label>
              <input type="text" id="nama_sekolah" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama Kepala Sekolah</label>
              <input type="text" id="nama_kepsek" class="form-control">
            </div>
            <hr>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Jumlah Rombel</label>
              <input type="number" class="form-control" id="rombel">
            </div>
            <div class="form-group">
              <label>Jumlah Guru Kelas</label>
              <input type="number" class="form-control" id="guru_kelas">
            </div>
            <div class="form-group">
              <label>Jumlah Guru PAI</label>
              <input type="number" class="form-control" id="guru_PAI">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Jumlah Guru PJOK</label>
              <input type="number" class="form-control" id="guru_PJOK">
            </div>
            <div class="form-group">
              <label>Jumlah Penjaga</label>
              <input type="number" class="form-control" id="penjaga">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" onclick="hapusData()" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>

<script src="<?= base_url() . 'assets/js/axios.min.js' ?>"></script>
<script type="text/javascript">
  let nama_sekolah = document.getElementById('nama_sekolah');
  let nama_kepsek = document.getElementById('nama_kepsek');
  let rombel = document.getElementById('rombel');
  let guru_kelas = document.getElementById('guru_kelas');
  let guru_PAI = document.getElementById('guru_PAI');
  let guru_PJOK = document.getElementById('guru_PJOK');
  let penjaga = document.getElementById('penjaga');
  
  let hapus_id = document.getElementById('hapus_id');
  
  const loadData = async (id) => {
    return await axios.get('http://localhost/tenten-frontend/Sekolah/App/api_tampilkan_sekolah/' + id).then(res => {
      return res.data;
    });
  }

  const tampilData = async (x) => {
    let id = x.getAttribute('id_sekolah');
    let data = await loadData(id).then(res => res);

    console.log(data);
    nama_sekolah.value = data.nama_sekolah;
    nama_kepsek.value = data.nama_kepsek;
    rombel.value = data.rombel;
    guru_kelas.value = data.guru_kelas;
    guru_PAI.value = data.guru_PAI;
    guru_PJOK.value = data.guru_PJOK;
    penjaga.value = data.penjaga;
    hapus_id.value = id;
  }
  const hapusData = () => {
    window.location = 'http://localhost/tenten-frontend/Sekolah/App/hapuskan_sekolah/' + hapus_id.value;
  }
</script>
