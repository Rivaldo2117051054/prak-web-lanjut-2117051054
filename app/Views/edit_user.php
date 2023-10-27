<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>


<body>
<div class="container">
  <div class="card">
    <h2>Login Form</h2>
    <form action="<?= base_url('user/' . $user['id']) ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    <?= csrf_field() ?>
    <div>
      <input type="text" class="form-control <?=(empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" id="nama" name="nama" placeholder="Masukan Nama" value="<?= $user['nama'] ?>">
      <div class="invalid-feedback">
          <?= validation_show_error('nama') ?>
      </div>
    </div>
    <div>
      <input type="text" class="form-control <?=(empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" id="npm" name="npm" placeholder="Masukan NPM" value="<?= $user['npm']  ?>">
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
        <tr>
            <div class="mb-3 mt-3">
            <img src="<?= $user['foto']?? '<default-foto>' ?>">    
            <input class="form-control" type="file" name="foto" id="foto">
            </div>
        </tr>
      <!-- <input type="text" name="kelas" placeholder="Masukan Kelas"> -->
      </br>
      <button type="submit">Login</button>
    </form>
  </div>

  
</div>


<?= $this ->endSection() ?>