<?php
session_start();
if (empty($_GET['id'])) {
  header('location: homepage.php');
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SmeasMart</title>
</head>
<style>
  * {
    margin: 0%;
    background-color: white;
    scroll-behavior: smooth;
    font-family: Arial, sans-serif;
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
    position: sticky;
    align-items: center;
  }

  #promo {
    min-height: 60vh;
    padding: 10px;
  }

  #etalase {
    min-height: 100vh;
  }

  #support {
    min-height: 40vh;
  }

  #copyright {
    min-height: 7vh;
  }

  hr {
    margin-top: 12px;
    border: 0.5px solid rgba(0, 0, 0, 0.1);
  }

  body {
    background-color: rgba(237, 237, 224, 0.255)
  }

  .smeas {
    font-size: 30px;
    margin-left: 20px;
    cursor: pointer;
  }

  .search {
    height: 40px;
    width: 1000px;
    border-radius: 50px;
    border: 1px solid;
  }

  .search input {
    background: none;
    border: none;
  }

  .gambar {
    display: flex;
    align-items: center;
    gap: 20px;
    padding-right: 10px;
  }

  .container {
    max-width: 1090px;
    margin: auto;
    padding: 35px;
  }

  .product-page {
    display: flex;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    gap: 0 15px;
  }

  .left {
    flex: 1;
    overflow: hidden;
    max-width: 300px;
    max-height: 300px;
  }

  .image {
    width: 100%;
    border-radius: 8px;
  }

  .deskripsi {
    max-width: 400px;
    flex-wrap: wrap;
    border-radius: 8px;
    width: 100%;
  }

  .subtitle {
    color: #666;
    margin-bottom: 10px;
  }

  .price {
    color: #27ae60;
    font-size: 28px;
    margin: 10px 0;
  }

  .stock {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 15px 0;
  }

  .stock input {
    width: 60px;
    padding: 5px;
  }

  .right {
    display: flex;
    flex-direction: column;
    justify-self: right;
  }


  .tombol {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
  }

  .keranjang,
  .balik {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
  }

  .keranjang {
    background-color: #f0c14b;
  }
  
  .detail h3 {
    margin-top: 20px;
    font-size: 18px;
  }
  
  .detail ul {
    padding-left: 20px;
  }
  .balik{
    background-color: #28a745;
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
  }
</style>

<body>
  <header>
    <div class="kepala">
      <div class="smeas">
        <a href="homepage.php">
          <span style="color: green;">Smea$</span><span style="color:darkblue">mart</span>
        </a>
      </div>
      <div class="gambar">
        <a href="keranjang.php"><img src="keranjang.png" alt="keranjang" width="40px" style="border:0px solid; border-radius: 0%;"></a>
      </div>
    </div>
    <div>
      <hr>
    </div>
  </header>
  <?php
  if (isset($_GET['id']) && !empty($_GET['id'])) {
    $pdo = require 'koneksi.php';
    $sql = 'SELECT products.*, sellers.nama_toko FROM products
     INNER JOIN sellers ON products.id_seller = sellers.id
     WHERE products.id=:id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $_GET['id']]);
    $data = $query->fetch();
    $base64 = base64_encode($data['gambar_produk']);
  ?>
    <div class="container">
      <div class="product-page">
        <div class="left">
          <?php echo "<img src= 'data:image/*;base64, $base64' class='image' alt=''>" ?>
        </div>
        <div class="deskripsi">
          <p><?php echo $data['deskripsi'] ?></p>
        </div>

        <div class="right">
          <h1> <?php echo $data['nama_produk'] ?></h1>
          <p class="subtitle"><?php echo $data['nama_toko'] ?></p>
          <h2 class="price">RP. <?php echo number_format($data['harga'], 2, ",", ".") ?></h2>

          <div class="stock">
            <span>Stok: <?php echo $data['stok'] ?></span>
          </div>
          <?php
          if (isset($_POST['keranjang'])) {
            $id = (int) ($_GET['id'] ?? 0);
            if (!isset($_SESSION['keranjang'][$id])) {
              $_SESSION['keranjang'][$id] = $data['harga'];
              echo '<p>Produk telah ditambah ke keranjang.</p>';
              
          ?>
              <?php
            } else {
              if (isset($_POST['keranjang'])) { ?>

                <p>Hanya boleh 1 produk yang sama dalam keranjang.</p>
          <?php }
            }
          } ?>
          <form action="" method="post">
            <div class="tombol">
              <button type="submit" name="keranjang" class="keranjang">+ Keranjang</button>
              <a class="balik" href="homepage.php">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php }
  ?>

</body>

</html>