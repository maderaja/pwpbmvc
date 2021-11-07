<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= BASE_URL ?>/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Halaman | <?= $data['judul']; ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= BASE_URL ?>">R.MVC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>/user">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>/user/profile">Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>