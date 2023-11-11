<div class="container">

  <div class="row mt-3">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>


  <div class="row mt-2">
    <div class="col-lg-6">
      <!-- Modal Button -->
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formTambah">
        Tambah Data Mahasiswa
      </button>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-lg-6 ">
      <form action="<?= BASEURL ?>/mahasiswa/cari" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Masukkan nama" name="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="button-addon2">Button</button>
        </div>
    </div>
    </form>
  </div>

  <div class="row mt-3">
    <div class="col-6">
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach ($data['mhs'] as $mhs) :  ?>
          <li class="list-group-item">
            <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];  ?>" class="badge float-end  bg-primary">Detail</a>
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge float-end mx-2 bg-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];  ?>" class="badge float-end  bg-warning tampilModalUbah " data-bs-toggle="modal" data-bs-target="#formTambah" data-id="<?= $mhs['id'] ?>">Ubah</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <span class="mb-2 d-block">Jurusan</span>
          <select class="form-select" name="jurusan" id="jurusan" aria-label="Default select example">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Teknik Psikologi">Teknik Psikologi</option>
          </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>