<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
	<title>Selamat Datang!</title>

	<style>
		div.container4 {
    height: 10em;    position: relative ;
    margin: 0;
    position: absolute;
    top: 25%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }

	</style>
	
</head>

<body>
<div class="container4">
<div class="card border-primary mb-3" style="max-width: 35rem;">
  <div class="card-header">Login</div>
  <div class="card-body">

    <form action="<?php echo base_url('index.php/Login/aksi_login'); ?>" method="post">
    <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    </fieldset>

    <button name="submit" class="btn btn-primary" align="center">Simpan</button>
    </form>
  </div>
</div>
</div>
</body>