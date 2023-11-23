<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "config.php";
    $sql = "SELECT * FROM pelanggan WHERE username='$_POST[username]'AND isActive=1 AND password='" . md5($_POST['password']) . "'";
    if ($query = $connection->query($sql)) {
        if ($query->num_rows) {
            session_start();
            while ($data = $query->fetch_array()) {
                $_SESSION["pelanggan"]["is_logged"] = true;
                $_SESSION["pelanggan"]["id"] = $data["id_pelanggan"];
                $_SESSION["pelanggan"]["username"] = $data["username"];
                $_SESSION["pelanggan"]["nama"] = $data["nama"];
                $_SESSION["pelanggan"]["no_telp"] = $data["no_telp"];
                $_SESSION["pelanggan"]["email"] = $data["email"];
                $_SESSION["pelanggan"]["alamat"] = $data["alamat"];
            }
            header('location: index.php');
        } else {
            echo alert("Username / Password tidak sesuai!", "login.php");
        }
    } else {
        echo "Query error!";
    }
}
?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <title>EcoRent</title>
</head>

<body style="background-image: linear-gradient(180deg,#e29595 10%,#60616f 100%);" class="bg-gradient-primary vh-100 d-flex align-items-center">

 <div class="container">

    <div class="container">

       
        <div class="row d-flex justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                       
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url(assets/img/page/login.jpg);"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Login!</h1>
                                    </div>

                                    
                                    <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" class="form-control" id="Username" placeholder="username" autofocus="on">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-block">Login</button>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="index.php?page=daftar">Buat Akun!</a><br>
                                       
                                        <a href="admin/index.php">Login sebagai Admin</a>
                                    </div>
                                </div>
                                 <a class="small" href="index.php">Kembali ke Halaman Utama</a>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>