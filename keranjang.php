<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    background-color: rgb(255, 255, 255)
  }


  .container {
    display: flex;
    justify-content: space-between;
    gap: 30px;
    margin-top: 20px;
  }

  .left {
    flex: 3;
    background: white;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
  }

  .right {
    flex: 1;
    background: white;
    padding: 20px;
    border-radius: 10px;
    height: fit-content;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  }

  .item-wo {
    display: flex;
    gap: 15px;
    align-items: center;
    margin-top: 20px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 15px;
  }

  .item-wo img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin: 0 15px;
  }

  .item {
    flex: 1;
  }

  .item h4 {
    margin: 0;
  }

  .item .desk {
    color: gray;
    font-size: 14px;
  }

  .item .price {
    font-weight: bold;
    color: green;
    font-size: 18px;
  }

  .item-actions {
    display: flex;
    align-items: center;
    gap: 5px;
  }

  .item-actions input[type="number"] {
    width: 40px;
    text-align: center;
  }

  .buy-btn {
    background-color: rgb(29, 205, 229);
    color: white;
    padding: 10px;
    border: none;
    width: 100%;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
  }

  .smeas {
    font-size: 30px;
    margin-left: 20px;
    cursor: pointer;
  }

  .smeas a {
    text-decoration: none;
  }

  h2 {
    margin-bottom: 0px;
    padding: 20px 20px;
    margin-left: 40px;
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
    </div>
    <div>
      <hr>
    </div>
  </header>
  <h2>Keranjang</h2>
  <div class="container">
    <div class="left">
      <?php
      $pdo = require 'koneksi.php';
      $total = 0;
      foreach ($_SESSION['keranjang'] as $id => $hrg) {
        $total += $hrg;
        $sql = 'SELECT products.*, sellers.nama_toko FROM products
     INNER JOIN sellers ON products.id_seller = sellers.id
     WHERE products.id = :id';
        $query = $pdo->prepare($sql);
        $query->execute(['id' => $id]);
        while ($data = $query->fetch()) {
          $base64 = base64_encode($data['gambar_produk']);
      ?>

          <div class="item-wo">
            <?php echo "<img src= 'data:image/*;base64, $base64' class='image' alt=''>" ?>
            <div class="item">
              <h4><?php echo $data['nama_produk'] ?></h4>
              <p class="desk"><?php echo $data['nama_toko'] ?></p>
              <p class="price">RP. <?php echo number_format($data['harga'], 2, ",", ".") ?></p>
            </div>
          </div>
      <?php }
      } ?>

    </div>
    <form action="beli.php" method="post">
      <div class="right">
        <h3>Ringkasan belanja</h3>
        <p>Total: <strong>RP. <?php echo number_format($total, 2, ",", ".") ?></strong></p>
        <button type="submit" class="buy-btn">Beli</button>
      </div>
    </form>
  </div>



</body>

</html>