<!-- <div class="container">
  <div class="row">
    <div class="col-6 my-2">
      <div class="card" onclick="link('<?= base_url('Sekolah/App/sekolah') ?>')">
        <div class="card-body py-4">
          <h4 class="text-center">Data Sekolah</h4>
        </div>
      </div>
    </div>
    <div class="col-6 my-2">
      <div class="card" onclick="link('<?= base_url('Sekolah/App/guru') ?>')">
        <div class="card-body py-4">
          <h4 class="text-center">Data Guru</h4>
        </div>
      </div>
    </div>
    <div class="col-6 my-2">
      <div class="card">
        <div class="card-body py-4" onclick="link('<?= base_url('Sekolah/App/siswa') ?>')">
          <h4 class="text-center">Data Siswa</h4>
        </div>
      </div>
    </div>
    <div class="col-6 my-2">
      <div class="card">
        <div class="card-body py-4" onclick="link('<?= base_url('Sekolah/App/informasi') ?>')">
          <h4 class="text-center">Informasi</h4>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const link = (url) => {
    console.log(url)
    window.location = `${url}`;
  }
</script> -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
      <!-- Content Row -->

      <div class="row">

        <!-- Bimbingan KP -->
        <div class="col-xl-3 col-md-6 mb-4">
          <a href="<?= base_url('Sekolah/App/sekolah'); ?>">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Sekolah</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Nilai UTS/UAS -->
        <div class="col-xl-3 col-md-6 mb-4">
                  <a href="<?= base_url('Sekolah/App/guru'); ?>">
                    <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Guru</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-sticky-note fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

        <!-- Download Berkas KP -->
        <div class="col-xl-3 col-md-6 mb-4">
                  <a href="<?= base_url('Sekolah/App/siswa'); ?>">
                    <div class="card border-left-danger shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Siswa</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

       
        <!-- Informasi -->
        <div class="col-xl-3 col-md-6 mb-4">
          <a href="<?= base_url('Sekolah/App/informasi'); ?>">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Informasi</div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-info fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>

    </div>
    <!-- /.container-fluid -->