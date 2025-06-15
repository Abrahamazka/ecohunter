<?php
session_start();

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
      gap: 20px;
      margin-bottom: 30px;
      padding: 0 190px;
      position: sticky;
      top: 9%;
      z-index: 1;
    }

    .menu button {
      background: none;
      border: none;
      cursor: pointer;
      padding: 8px 20px;
    }

    .menu button.active {
      border-bottom: 2px solid forestgreen;
      color: forestgreen;
    }

    .etlse {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 20px;
      padding: 0 180px;
      overflow:;
    }
    #Kategori1 {
  display: flex;
  overflow-x: auto;
  padding: 0 180px;
  gap: 20px;
  scroll-behavior: smooth;
}

#Kategori1 .produk {
  min-width: 200px;
  flex-shrink: 0;
}

    .produk {
      background: #fff;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 10px;
      text-align: center;
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

    .main-content {
      display: none;
    }
    .tomboool {
   display: inline-block;
   background-color:rgb(0, 153, 255);
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

  <div class="splash-screen">
    <div class="app-container" aria-label="App opening animation">
      <div class="circle"></div>
      <div class="logo" role="img">
        <img src="keranj.jpg" alt="Logo" />
      </div>
      <div class="app-name">Smeasmart</div>
    </div>
  </div>

  <div class="main-content">
    <header>
      <div class="kepala">
        <div class="smeas">
          <a href="#promo">
            <span style="color: green;">Smea$</span><span style="color:darkblue">mart</span>
          </a>
        </div>
        <div class="search">
          <input type="text" placeholder="Cari di SmeasMart...">
        </div>
        <div class="gambar">
          <img src="keranjang.png" alt="keranjang" width="40px">
          <?php
          if (isset($_SESSION['user'])) {
            $pdo = require 'koneksi.php';
            $sql = 'SELECT profil FROM users WHERE id=:id';
            $query = $pdo->prepare($sql);
            $query->execute(['id' => $_SESSION['user']['id']]);
            $data = $query->fetch();
            $base64 = base64_encode($data['profil']);
            echo "<img src= 'data:image/*;base64, $base64' alt='profil' width='40px' style='border-radius: 50%;''>";
          } else { ?>
            <a href="register.php" class="tomboool">Register</a>
            <a href="login.php" class="tomboool">Login</a>
          <?php } ?>
        </div>
      </div>
      <hr>
    </header>


    <section id="etalase">
      <div class="menu">
        <button>Terlaris</button>
      </div>
      <?php
      $pdo = require 'koneksi.php';
      $sqlLaris = 'SELECT * FROM products
      ORDER BY terjual DESC';
      $queryLaris = $pdo->prepare($sqlLaris);
      $queryLaris->execute();

      while($dataLaris = $queryLaris->fetch()) {
      $base64 = base64_encode($dataLaris['gambar_produk']); ?>

      <div id="Kategori1" class="etlse">
        <div class="produk">
          <?php echo "<img src= 'data:image/*;base64, $base64'  alt=''>" ?>
          <div class="title"><?php echo $dataLaris['nama_produk'] ?></div>
          <div class="price">RP.<?php echo number_format($dataLaris['harga'], 2, ",", ".") ?></div>
          <div><span><?php echo $dataLaris['terjual'] ?> Terjual</span></div>
        </div>
        <div class="produk">
          <?php echo "<img src= 'data:image/*;base64, $base64'  alt=''>" ?>
          <div class="title"><?php echo $dataLaris['nama_produk'] ?></div>
          <div class="price">RP.<?php echo number_format($dataLaris['harga'], 2, ",", ".") ?></div>
          <div><span><?php echo $dataLaris['terjual'] ?> Terjual</span></div>
        </div>       
                <div class="produk">
          <?php echo "<img src= 'data:image/*;base64, $base64'  alt=''>" ?>
          <div class="title"><?php echo $dataLaris['nama_produk'] ?></div>
          <div class="price">RP.<?php echo number_format($dataLaris['harga'], 2, ",", ".") ?></div>
          <div><span><?php echo $dataLaris['terjual'] ?> Terjual</span></div>
        </div>
                <div class="produk">
          <?php echo "<img src= 'data:image/*;base64, $base64'  alt=''>" ?>
          <div class="title"><?php echo $dataLaris['nama_produk'] ?></div>
          <div class="price">RP.<?php echo number_format($dataLaris['harga'], 2, ",", ".") ?></div>
          <div><span><?php echo $dataLaris['terjual'] ?> Terjual</span></div>
        </div>
                <div class="produk">
          <?php echo "<img src= 'data:image/*;base64, $base64'  alt=''>" ?>
          <div class="title"><?php echo $dataLaris['nama_produk'] ?></div>
          <div class="price">RP.<?php echo number_format($dataLaris['harga'], 2, ",", ".") ?></div>
          <div><span><?php echo $dataLaris['terjual'] ?> Terjual</span></div>
        </div>
                <div class="produk">
          <?php echo "<img src= 'data:image/*;base64, $base64'  alt=''>" ?>
          <div class="title"><?php echo $dataLaris['nama_produk'] ?></div>
          <div class="price">RP.<?php echo number_format($dataLaris['harga'], 2, ",", ".") ?></div>
          <div><span><?php echo $dataLaris['terjual'] ?> Terjual</span></div>
        </div>
                <div class="produk">
          <?php echo "<img src= 'data:image/*;base64, $base64'  alt=''>" ?>
          <div class="title"><?php echo $dataLaris['nama_produk'] ?></div>
          <div class="price">RP.<?php echo number_format($dataLaris['harga'], 2, ",", ".") ?></div>
          <div><span><?php echo $dataLaris['terjual'] ?> Terjual</span></div>
        </div>
        
      </div>
        <?php }?>

       <div class="menu">
         <button>Terbaru</button>
       </div>
      <?php
      $pdo = require 'koneksi.php';
      $sqlBaru = 'SELECT * FROM products';
      $queryBaru = $pdo->prepare($sqlBaru);
      $queryBaru->execute();
      while($dataBaru = $queryBaru->fetch()) {
      $base64 = base64_encode($dataBaru['gambar_produk']);
      ?>
      <div id="Kategori2" class="etlse">
        <div class="produk">
          <?php echo "<img src= 'data:image/*;base64, $base64'  alt=''>" ?>
          <div class="title"><?php echo $dataBaru['nama_produk'] ?></div>
          <div class="price">RP.<?php echo number_format($dataBaru['harga'], 2, ",", ".") ?></div>
          <div><span><?php echo $dataBaru['terjual'] ?> Terjual</span></div>
        </div>
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
</body>

</html>