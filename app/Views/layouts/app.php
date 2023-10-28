<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>"></head>
    <style>
  .navbar-nav .nav-item {
    margin-right: 20px; /* Sesuaikan sesuai kebutuhan Anda */
  }
  .navbar-brand{
    margin-right: 20px;
  }
</style>
<body>
<div class="container-md">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
      <a class="nav-link" href="<?= base_url('user/create') ?>">Add User </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/') ?>">User </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?= base_url('kelas/createkelas') ?>">Add Kelas </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?= base_url('kelas/') ?>">Kelas </a>
      </li>
    </ul>
  </div>
</nav>
    <?= $this->renderSection('content') ?>
    
</div>
</body>
</html>