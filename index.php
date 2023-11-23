<?php
session_start();
require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcoRent</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
  
    <link rel="stylesheet" href="assets/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
    <script type="text/javascript" src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="assets/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="assets/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="assets/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <style>
    a{
        color: white;
    }
</style>
</head>
<body>
    <div class="container">
        <nav class="navbar"  style="background-image: linear-gradient(180deg,#6b3434 10%,#f38888 100%); }">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="assets/img/page/logo.png" style="width: 104px;"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="?page=home">Beranda <span class="sr-only">(current)</span></a></li>
                        <?php if (isset($_SESSION["pelanggan"])): ?>
                            <li><a href="?page=profil">Profil</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="#" style="font-weight: bold; color: aqua;"><?= ucfirst($_SESSION["pelanggan"]["nama"]) ?></a></li>
                            <?php else: ?>
                              <li><a href="?page=daftar">Daftar</a></li>
                              <li><a href="login.php">Login</a></li>
                          <?php endif; ?>
                      </ul>
                  </div>
              </div>
          </nav>
          <div class="row">
            <div class="col-md-12">
              <?php include page($_PAGE); ?>
          </div>
      </div>
  </div>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
