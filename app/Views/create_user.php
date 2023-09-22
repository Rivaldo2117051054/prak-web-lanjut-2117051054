<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
<div class="container">
  <div class="card">
    <h2>Login Form</h2>
    <form action="<?= base_url('/user/store') ?>" method="POST">
      <input type="text" name="nama" placeholder="Masukan Nama">

      <input type="text" name="npm" placeholder="Masukan NPM">

      <input type="text" name="kelas" placeholder="Masukan Kelas">

      <button type="submit">Login</button>
    </form>
  </div>

  
</div>
<!-- <form action="<?= base_url('/user/store') ?>" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label for="npm">NPM:</label>
        <input type="text" name="npm" required><br><br>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" required><br><br>

        <input type="submit" value="Submit">
    </form> -->
</body>
</html>