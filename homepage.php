<?php
session_start();
if (!isset($_SESSION['keranjang'])) {
  $_SESSION['keranjang'] = [];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SmeasMart</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html,
    body {
      height: 100%;
      font-family: Arial, sans-serif;
    }

    .splash-screen {
      position: fixed;
      width: 100%;
      height: 100%;
      background-color: #2e86c1;
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      color: white;
    }

    .circle {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0.4);
      width: 150px;
      height: 150px;
      border-radius: 50%;
      box-shadow:
        0 0 20px rgba(237, 0, 0, 0.7),
        inset 0 0 15px rgba(255, 0, 0, 0.9);
      animation: circleExpand 1.2s ease forwards;
      animation-delay: 0.2s;
    }

    .logo {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 120px;
      height: 120px;
      transform: translate(-50%, -50%) scale(0);
      animation: logoScaleIn 1s ease forwards;
      animation-delay: 1.5s;
    }

    .logo img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      border-radius: 50%;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }


    .app-name {
      position: absolute;
      bottom: -50px;
      width: 100%;
      text-align: center;
      color: rgb(255, 255, 255);
      font-weight: 700;
      font-size: 1.8rem;
      letter-spacing: 0.1em;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeUpIn 1s ease forwards;
      animation-delay: 2.9s;
    }

    @keyframes circleExpand {
      to {
        transform: translate(-50%, -50%) scale(1);
        box-shadow:
          0 0 40px rgba(255, 255, 255, 0.9),
          inset 0 0 30px rgb(255, 255, 255);
      }
    }

    @keyframes logoScaleIn {
      to {
        transform: translate(-50%, -50%) scale(1);
      }
    }

    @keyframes fadeUpIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /*PEMBATAS OI*/

    body {
      background-color: rgb(255, 255, 255);
    }

    header {
      padding: 10px 0 0 0;
      background-color: white;
      position: sticky;
      z-index: 1;
      top: 0%;
    }

    .kepala {
      justify-content: space-between;
      display: flex;
      align-items: center;
    }

    .smeas {
      font-size: 30px;
      margin-left: 20px;
      cursor: pointer;
    }

    .smeas a {
      text-decoration: none;
    }

    .search {
      height: 40px;
      width: 1000px;
      border-radius: 50px;
      border: 1px solid #ccc;
      background-color: #f2f2f2;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0px 20px;
      overflow: hidden;

    }

    .search input {
      background: none;
      border: none;
      outline: none;
      font-size: 20px;
      flex: 1;
    }

    .form {
      display: flex;
    }

    .cari {
      font-size: 30px;
      border: none;
      background-color: white;

    }

    .gambar {
      display: flex;
      align-items: center;
      gap: 20px;
      padding-right: 10px;
    }

    .difka {
      background-color: bisque;
      height: 275px;
      margin: 70px 200px 0 200px;
      border-radius: 15px;
    }

    .menu {
      background-color: white;
      display: flex;
      margin: 30px 50px;
    }

    .menu button {
      background: none;
      border: none;
      cursor: pointer;
      padding: 8px 20px;
    }


    section {
      display: flex;
      flex-direction: column;
    }

    .etlse {
      display: flex;
      flex-direction: row;
      overflow-x: scroll;
      margin-left: 30px;
      row-gap: 21px;
      scrollbar-width: none;
    }

    .etlse2 {
      margin-left: 30px;
      display: flex;
      flex-wrap: wrap;
      row-gap: 30px;
    }


    .produk {
      min-width: 220px;
      background: #fff;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 10px;
      text-align: center;
      margin: 0 30px;
    }

    .produk img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    .produk .title {
      font-weight: bold;
    }

    .produk .price {
      color: #e91e63;
      font-weight: bold;
    }

    .hidden {
      display: none;
    }

    .bawah {
      padding-left: 40px;
      padding-top: 40px;
    }

    .bawah h4 {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .bawah ul {
      list-style: none;
      padding: 0;
    }

    .bawah ul li {
      margin-bottom: 6px;
    }

    .bawah ul li a {
      color: #333;
      text-decoration: none;
    }

    .kopikanan {
      text-align: center;
      padding-top: 18px;
      color: #777;
    }

    hr {
      margin-top: 12px;
      border: 0.5px solid rgba(0, 0, 0, 0.1);
    }

    

    .tomboool {
      display: inline-block;
      background-color: rgb(0, 153, 255);
      color: white;
      padding: 10px 20px;
      margin-left: 10px;
      border-radius: 8px;
      gap: 20px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
      outline: none;
    }

    .tomboool:hover {
      background-color: #21669d;
    }
  </style>
</head>

<body>
  <?php
  if (!isset($_SESSION['intro'])) {
    $_SESSION['intro'] = true;
    $intro = true;
  } else {
    $intro = false;
  }
  ?>
  <?php if ($intro) : ?>
    <div class="splash-screen">
      <div class="app-container" aria-label="App opening animation">
        <div class="circle"></div>
        <div class="logo" role="img">
          <img src="keranj.jpg" alt="Logo" />
        </div>
        <div class="app-name">Smeasmart</div>
      </div>
    </div>
  <?php endif;
  ?>
  <div class="main-content">
    <header>
      <div class="kepala">
        <div class="smeas">
          <a href="">
            <span style="color: green;">Smea$</span><span style="color:darkblue">mart</span>
          </a>
        </div>
        <!-- cari berdasarkan nama prdukkkkk -->
        <form class="form" action="" method="post">
          <div class="search">
            <input type="text" name="cari" placeholder="Cari di SmeasMart...">
          </div>
          <button type="submit" class="cari" name="go">&#128269;</button>
        </form>
        <div class="gambar">
          <a href="keranjang.php"><img src="keranjang.png" alt="keranjang" width="40px"></a>
          <?php
          if (isset($_SESSION['user'])) {
            $pdo = require 'koneksi.php';
            $sql = 'SELECT profil FROM users WHERE id=:id';
            $query = $pdo->prepare($sql);
            $query->execute(['id' => $_SESSION['user']['id']]);
            $data = $query->fetch();
            $base64 = base64_encode($data['profil']);
            echo "<a href='profile.php'><img src= 'data:image/*;base64, $base64' alt='profil' width='40px' style='border-radius: 50%;''></a>";
          } else { ?>
            <a href="register.php" class="tomboool">Register</a>
            <a href="login.php" class="tomboool">Login</a>
          <?php } ?>
        </div>
      </div>
      <hr>
    </header>
    <?php if (!empty($_POST['cari'])) { ?>
      <section>
        <div class="menu">
          <h1>Pencarian</h1>
        </div>
        <?php
        $pdo = require 'koneksi.php';
        $sqlCari = 'SELECT * FROM products
        WHERE nama_produk LIKE :nama';
        $queryCari = $pdo->prepare($sqlCari);
        $queryCari->execute(['nama' => '%' . $_POST['cari'] . '%' ]);
        ?>
        <div id="Kategori1" class="etlse2">
          <?php while ($dataCari = $queryCari->fetch()) {
            $base64 = base64_encode($dataCari['gambar_produk']); ?>

            <div class="produk">
              <a href="etal.php?id=<?php echo $dataCari['id'] ?>"><?php echo "<img src= 'data:image/*;base64, $base64'  alt=''>" ?></a>
              <div class="title"><?php echo $dataCari['nama_produk'] ?></div>
              <div class="price">RP.<?php echo number_format($dataCari['harga'], 2, ",", ".") ?></div>
              <div><span><?php echo $dataCari['terjual'] ?> Terjual</span></div>
            </div>



          <?php } ?>
        </div>
      </section>
    <?php } else { ?>
      <section id="etalase">
        <div class="menu">
          <h1>Terlaris</h1>
        </div>
        <?php
        $pdo = require 'koneksi.php';
        $sqlLaris = 'SELECT * FROM products
          ORDER BY terjual DESC';
        $queryLaris = $pdo->prepare($sqlLaris);
        $queryLaris->execute();
        $sqlBaru = 'SELECT * FROM products';
        $queryBaru = $pdo->prepare($sqlBaru);
        $queryBaru->execute();
        ?>
        <div id="Kategori1" class="etlse">
          <?php while ($dataLaris = $queryLaris->fetch()) {
            $base64 = base64_encode($dataLaris['gambar_produk']); ?>

            <div class="produk">
              <a href="etal.php?id=<?php echo $dataLaris['id'] ?>"><?php echo "<img src= 'data:image/*;base64, $base64'  alt=''>" ?></a>
              <div class="title"><?php echo $dataLaris['nama_produk'] ?></div>
              <div class="price">RP.<?php echo number_format($dataLaris['harga'], 2, ",", ".") ?></div>
              <div><span><?php echo $dataLaris['terjual'] ?> Terjual</span></div>
            </div>



          <?php } ?>
        </div>

        <div class="menu">
          <h1>Terbaru</h1>
        </div>
        <div id="Kategori2" class="etlse2">
          <?php while ($dataBaru = $queryBaru->fetch()) {
            $base64 = base64_encode($dataBaru['gambar_produk']);
          ?>

            <div class="produk">
              <a href="etal.php?id=<?php echo $dataBaru['id'] ?>"><?php echo "<img src= 'data:image/*;base64, $base64'  alt=''>" ?></a>
              <div class="title"><?php echo $dataBaru['nama_produk'] ?></div>
              <div class="price">RP.<?php echo number_format($dataBaru['harga'], 2, ",", ".") ?></div>
              <div><span><?php echo $dataBaru['terjual'] ?> Terjual</span></div>
            </div>

          <?php } ?>
        </div>
      </section>
    <?php } ?>
    <hr>

    <section id="support">
      <div class="bawah">
        <h4>Dukung kami</h4>
        <ul>
          <li><a href="#">Fahmi</a></li>
          <li><a href="#">Azka</a></li>
          <li><a href="#">Dava</a></li>
          <li><a href="#">Fakhri</a></li>
        </ul>
      </div>
    </section>

    <hr>

    <section id="copyright">
      <div class="kopikanan">
        <p>©2025, Kelompok. All Rights Reserved.</p>
      </div>
    </section>
  </div>

  <script>
    setTimeout(() => {
      document.querySelector('.splash-screen').style.display = 'none';
      document.querySelector('.main-content').style.display = 'block';
    }, 4000);
  </script>
  <?php if (!$intro || (!empty($_POST['cari']) || empty($_POST['cari']))) : ?>
    <script>
      document.querySelector('.main-content').style.display = 'block';
    </script>
  <?php endif; ?>

</body>

</html>