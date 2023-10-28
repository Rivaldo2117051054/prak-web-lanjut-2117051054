<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container table-responsive py-5"> 
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr class="table-primary">
      <th scope="col">ID</th>
      <th scope="col">Nama Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
        foreach ($kelas as $kelas){
                ?>
    <tr>
      <th><?= $kelas['id'] ?></th>
      <td><?= $kelas['nama_kelas'] ?></td>
      <td  class="d-flex justify-content-center"> 
                    <a href="<?=base_url('kelas/'.$kelas['id'].'/edit') ?>" class="btn btn-warning">Edit</a>
                    <form id="delete-form-<?= $kelas['id'] ?>" action="<?= base_url('kelas/'.$kelas['id']) ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="button" class="btn btn-danger" onclick="confirmDelete(<?= $kelas['id'] ?>)">Delete</button>
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