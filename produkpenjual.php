<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Smeasmart</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff;
    }

    /* Header */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #ffffff;
      padding: 15px 30px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #77dd77;
    }

    .logo span {
      color: #3399ff;
    }

    .search-container input {
      width: 300px;
      padding: 8px 15px;
      border-radius: 25px;
      border: 1px solid #ccc;
    }

    .icons span {
      font-size: 22px;
      margin-left: 15px;
      cursor: pointer;
    }

    /* Main Content */
    .container {
      background-color: #7de2db;
      min-height: calc(100vh - 70px);
      padding: 40px;
    }

    /* Product Section */
    .product-section {
      display: flex;
      gap: 30px;
      align-items: center;
      margin-bottom: 30px;
    }

    .product-image {
      background-color: white;
      width: 300px;
      height: 300px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    .product-image:hover {
      transform: scale(1.05);
    }

    .product-image img {
      max-width: 90%;
      max-height: 90%;
      border-radius: 10px;
    }

    .product-title h1 {
      font-size: 28px;
      color: #222;
    }

    /* Description Box */
    .product-description {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      font-size: 16px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      line-height: 1.6;
      max-width: 700px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .product-section {
        flex-direction: column;
        align-items: center;
      }

      .search-container input {
        width: 100%;
      }

      .product-description {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <!-- HEADER -->
  <header>
    <div class="logo">smeas<span>mart</span></div>
    <div class="search-container">
      <input type="text" placeholder="Cari produk...">
    </div>
    <div class="icons">
      <span>👤</span>
      <span>🛒</span>
    </div>
  </header>

  <!-- CONTENT -->
  <main class="container">
    <div class="product-section">
      <div class="product-image">
        <img src="etal1.png" alt="Gambar Produk">
      </div>
      <div class="product-title">
        <h1>Adis Ibad Bacicar</h1>
      </div>
    </div>

    <div class="product-description">
      <p>Orang ini namanya Adis, dia sangat mahir bermain robalok</p>
    </div>
  </main>

  <script>
    // JS opsional untuk interaktivitas tambahan di masa depan
    console.log("Etalase Smeafmart aktif.");
  </script>
</body>
</html>