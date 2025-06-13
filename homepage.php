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
    html, body {
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
      background-color: rgba(237, 237, 224, 0.255);
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
          <input type="text" placeholder="Cari di SmeasMart..." style="font-size: 17px ; margin-left: 20px; margin-top: 9px;">
        </div>
        <div class="gambar">
          <img src="keranjang.png" alt="keranjang" width="40px">
          <img src="INIFURINA.jpg" alt="profil" width="40px" style="border-radius: 50%;">
        </div>
      </div>
      <hr>
    </header>

    <section id="promo">
      <div class="difka"></div>
    </section>

    <section id="etalase">
      <div class="menu">
        <button class="active" onclick="showCategory('Kategori1')">Kategori1</button>
        <button onclick="showCategory('Kategori2')">Kategori2</button>
      </div>

      <div id="Kategori1" class="etlse">
        <div class="produk">
          <img src="etal1.png">
          <div class="title">Adis</div>
          <div class="price">Rp3.999.000</div>
        </div>
      </div>

      <div id="Kategori2" class="etlse hidden">
        <div class="produk">
          <img src="etal3.jpg">
          <div class="title">Siapa ini jir</div>
          <div class="price">Rp3.999.000</div>
        </div>
      </div>
    </section>

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

    function showCategory(categoryId) {
      document.querySelectorAll('.etlse').forEach(el => el.classList.add('hidden'));
      document.querySelectorAll('.menu button').forEach(btn => btn.classList.remove('active'));
      document.getElementById(categoryId).classList.remove('hidden');
      event.target.classList.add('active');
    }
  </script>
</body>
</html>
