<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>


<body>
<div class="container">
  <div class="card">
    <h2>Login Form</h2>
    <form action="<?= base_url('/user/store') ?>" method="POST">
    <div>
      <input type="text" class="form-control <?=(empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" id="nama" name="nama" placeholder="Masukan Nama" value="<?= old('nama') ?>">
      <div class="invalid-feedback">
          <?= validation_show_error('nama') ?>
      </div>
    </div>
    <div>
      <input type="text" class="form-control <?=(empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" id="npm" name="npm" placeholder="Masukan NPM" value="<?= old('npm') ?>">
      <div class="invalid-feedback">
          <?= validation_show_error('npm') ?>
    </div>
      <select class="form-select <?= (empty(validation_show_error('kelas'))) ? '' : 'is-invalid' ?>" name="kelas" id="kelas">
        <?php
        foreach ($kelas as $item) {
          ?>
          <option value="<?= $item['id'] ?>" <?= ($item['id'] == old('kelas')) ? 'selected' : '' ?>>
          <?= $item['nama_kelas'] ?>
        </option>
        <?php
        }
        ?>
        </select>
      <!-- <input type="text" name="kelas" placeholder="Masukan Kelas"> -->
      </br>
      <button type="submit">Login</button>
    </form>
  </div>

  
</div>


<?= $this ->endSection() ?>