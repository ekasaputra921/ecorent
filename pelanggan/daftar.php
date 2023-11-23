<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$sql = "INSERT INTO pelanggan VALUES (NULL, '$_POST[nama]', '$_POST[email]', '$_POST[no_telp]', '$_POST[alamat]', '$_POST[username]', '".md5($_POST["password"])."',1)";
	
	if ($connection->query($sql)) {
		echo alert("Berhasil! Silahkan login", "login.php");
	} else {
		echo alert("Gagal!", "?page=pelanggan");
	}
}
?>
<div class="container">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="page-header">
					<h2>Daftar <small>sebagai pelanggan!</small></h2>
			</div>
			<form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" class="form-control" autofocus="on">
				</div>
				<div class="form-group">
					<label for="no_telp">No Telp</label>
					<input type="text" name="no_telp" class="form-control" >
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea rows="2" name="alamat" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="email">email</label>
					<input type="email" name="email" class="form-control" >
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control" >
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
					<button type="submit" class="btn btn-primary btn-block">Register</button>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
