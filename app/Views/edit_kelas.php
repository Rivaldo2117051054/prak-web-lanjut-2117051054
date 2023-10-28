<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>


<body>
<div class="container">
  <div class="card">
    <h2>Edit Kelas</h2>
    <form method="post" action="<?=base_url('/kelas/'. $kelas['id'])?>" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">    
            <?= csrf_field() ?>

                <div class="mb-3 gap-4 mt-5">
                    <input type="text" class="form-control <?=(empty(validation_show_error('nama_kelas'))) ? '' : 'is-invalid' ?>" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>" placeholder="nama kelas">
                    <div class="invalid-feedback">
                        <?= validation_show_error('nama_kelas') ?>
                    </div>
                </div>
                
                <div class="d-grid gap-2 mx-auto" style="width: 50%;">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
  </div>

  
</div>


<?= $this ->endSection() ?>