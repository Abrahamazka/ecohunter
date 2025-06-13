<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        background-color: rgb(255, 255, 255);
    }
    .kepala {
        justify-content: space-between;
        display: flex;
        position: sticky;
        align-items: center;
        background-color: rgb(255, 255, 255, 0.59);
    }
    #promo {
        min-height: 60vh;
        padding: 10px;
    }
    body {
      font-family: Arial, sans-serif;
      background-color:rgb(255, 255, 255);
      margin: 0;
    }
    .smeas {
        font-size: 30px;
        margin-left: 20px;
        cursor: pointer;
    }


    .container {
      padding-top: 50px;
      max-width: 700px;
      margin: auto;
    }
    .sama {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
    }
    .title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .alamat span {
      font-weight: bold;
      color: green;
    }
    .product {
      display: flex;
      gap: 15px;
      margin-top: 15px;
    }
    .product img {
      width: 100px;
      border-radius: 6px;
    }
    .info {
      flex-grow: 1;
    }
    .judul {
      font-weight: bold;
      font-size: 14px;
    }
    .harga{
      color: green;
      font-weight: bold;
      font-size: 16px;
      margin-top: 10px;
    }
    .alamat2 input {
      width: 96%;
      height: 100%;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-top: 5px;
    }

    .kolom button {
    background-color:rgb(14, 178, 249);
    color: white;
    border: none;
    margin-top:20px;
    padding: 12px 19rem;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.2s ease;
    }
.kolom button:hover {
  background-color:rgb(18, 169, 159);
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
   </header>

<div class="container">

    <div class="sama">
      <div class="title">Checkout</div>
      <div class="alamat2">
        <p>Isi alamat</p>
        <input type="text" placeholder="Isi alamat...">
      </div>
    </div>

    <div class="sama">
      <div class="title">Smeas Official Store</div>
      <div class="product">
        <img src="etal1.png">
        <div class="info">
          <div class="judul">
            Adis <br>
            sebuah produk yang sangat amat kece <br>
            bla bla bla bla bla
          </div>
          <div class="harga">Rp9.499.000</div>
        </div>
      </div>
       <div class="kolom">
                <button type="submit">Bayar</button>
            </div>
    </div>
    
  </div>




</body>
</html>