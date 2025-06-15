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
        background-color:rgb(255, 255, 255)
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
  background-color:rgb(29, 205, 229);
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
  padding: 20px 20px ;
  margin-left: 40px;
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
        </div>
        <div>
        <hr>
        </div>
 </header>
 
  <h2>Keranjang</h2>
  <div class="container">
      <div class="left">
        <div class="item-wo">
          <img src="etal1.png">
          <div class="item">
            <h4>Adis</h4>
            <p class="desk">Free Install | Garansi 1 Tahun</p>
            <p class="price">Rp9.155.000</p>
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