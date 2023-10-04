<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr class="table-primary">
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
        foreach ($users as $user){
                ?>
    <tr>
      <th><?= $user['id'] ?></th>
      <td><?= $user['nama'] ?></td>
      <td><?= $user['npm'] ?></td>
      <td><?= $user['nama_kelas'] ?></td>
      <td> </td>
    </tr>
    
    <?php
            }
            ?>
  </tbody>
</table>
</div>

<?= $this->endSection() ?>