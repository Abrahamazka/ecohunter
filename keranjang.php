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
        background-color:white;
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
        background-color:rgba(237, 237, 224, 0.255)
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
        border:none ;
    }
    .gambar {
        display: flex;
        align-items: center;
        gap: 20px;
        padding-right: 10px;
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
  background-color: #00aa5b;
  color: white;
  padding: 10px;
  border: none;
  width: 100%;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
}
</style>
<body>
 <header>
        <div class="kepala">
            <div class="smeas">
            <a href="#promo">
            <span style="color: green;">Smea$</span><span style="color:darkblue">mart</span>
            </a>
            </div>
            <div class="search">
            <input type="text" placeholder="Cari di SmeasMart..." style="font-size: 17px ; margin-left: 20px; margin-top: 9px;">
            </div>
            <div class="gambar">
            <img src="keranjang.png" alt="keranjang" width="40px" style="border:0px solid; border-radius: 0%;">   
            <img src="INIFURINA.jpg" alt="profil" width="40px" style="border:0px solid; border-radius: 50%;">   
            </div>
        </div>
        <div>
        <hr>
        </div>
 </header>
   
<div class="container">
    <div class="left">
      <h2>Keranjang</h2>
      <div class="item-wo">
        <input type="checkbox">
        <img src="etal1.png">
        <div class="item">
          <h4>Adis</h4>
          <p class="desk">Free Install | Garansi 1 Tahun</p>
          <p class="price">Rp9.155.000</p>
        </div>
        <div class="item-actions">
          <input type="number" value="1" min="1">        
        </div>
      </div>
    </div>

    <div class="right">
      <h3>Ringkasan belanja</h3>
      <p>Total: <strong>Rp-</strong></p>
      <button class="buy-btn">Beli</button>
    </div>
  </div>





</body>
</html>