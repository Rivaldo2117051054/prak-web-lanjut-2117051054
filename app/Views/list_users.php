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
      <td  class="d-flex justify-content-center"> 
                    <a href="<?= base_url('user/'.$user['id']) ?>" class="btn btn-info">Detail</a>
                    <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>" class="btn btn-warning">Edit</a>
                    <form id="delete-form-<?= $user['id'] ?>" action="<?= base_url('user/'.$user['id']) ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="button" class="btn btn-danger" onclick="confirmDelete(<?= $user['id'] ?>)">Delete</button>
                    </form>
      </td>
      <script>
                    function confirmDelete(userId) {
                        if (confirm("Are you sure you want to delete this item?")) {
                            document.getElementById("delete-form-" + userId).submit();
                        }
                    }
                </script>
    </tr>
    
    <?php
            }
            ?>
  </tbody>
</table>
</div>

<?= $this->endSection() ?>