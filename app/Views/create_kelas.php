<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>


<body>
<div class="container">
  <div class="card">
    <h2>Tambah Kelas</h2>
    <form action="<?= base_url('/kelas/kelasstore') ?>" method="POST" enctype="multipart/form-data">
      <input type="text" class="form-control <?=(empty(validation_show_error('kelas'))) ? '' : 'is-invalid' ?>" id="kelas" name="kelas" placeholder="Masukan Kelas" value="<?= old('kelas') ?>">
      <div class="invalid-feedback">
          <?= validation_show_error('kelas') ?>
    </div>

      <!-- <input type="text" name="kelas" placeholder="Masukan Kelas"> -->
      </br>
      <button type="submit">Tambah</button>
    </form>
  </div>

  
</div>


<?= $this ->endSection() ?>