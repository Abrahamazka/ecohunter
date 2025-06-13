<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Smeasmart</title>
<style>
  /* Reset and base */
  * {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: #f0f4f8;
    color: #1e293b;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }

  /* HEADER */
  header {
    position: sticky;
    top: 0;
    background: rgba(255 255 255 / 0.97);
    backdrop-filter: saturate(180%) blur(10px);
    box-shadow: 0 1px 8px rgba(0,0,0,0.1);
    z-index: 1001;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 32px;
  }
  header h1 {
    font-size: 1.6rem;
    font-weight: 700;
  } 
    .search-bar input {
      width: 300px;
      padding: 8px 15px;
      border-radius: 25px;
      border: 1px solid #ccc;
    }

  
  #sidebarToggle {
    background: #3b82f6;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 12px;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(59,130,246,0.35);
    transition: background-color 0.3s ease;
  }
  #sidebarToggle:hover, #sidebarToggle:focus {
    background: #2563eb;
    outline: none;
  }

  /* MAIN LAYOUT */
  .layout {
    display: flex;
    flex: 1;
    height: calc(100vh - 64px);
    overflow: hidden;
  }

  /* PRODUCT GRID MAIN AREA */
  main.product-grid {
    flex: 1;
    overflow-y: auto;
    padding: 32px 40px;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(260px,1fr));
    gap: 32px;
    background: #f0f4f8;
  }

  .product-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 8px 20px rgb(0 0 0 / 0.06);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .product-card:hover, .product-card:focus-within {
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgb(0 0 0 / 0.12);
  }
  .product-image {
    position: relative;
    width: 100%;
    padding-top: 75%; /* 4:3 ratio */
    overflow: hidden;
  }
  .product-image img {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .product-details {
    padding: 20px 24px;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .product-title {
    font-weight: 700;
    font-size: 1.15rem;
    margin-bottom: 12px;
    color: #1e293b;
  }
  .product-price {
    font-weight: 600;
    font-size: 1rem;
    color: #2563eb;
  }

  /* RIGHT SIDEBAR */
  aside.right-sidebar {
    position: fixed;
    top: 64px; /* below header */
    right: 0;
    height: calc(100vh - 64px);
    width: 320px;
    max-width: 90vw;
    background: rgba(30,41,59,0.95);
    box-shadow: -5px 0 20px rgb(0 0 0 / 0.3);
    padding: 32px 28px;
    display: flex;
    flex-direction: column;
    gap: 24px;
    transform: translateX(100%);
    transition: transform 0.3s ease;
    z-index: 1000;
    border-radius: 20px 0 0 20px;
  }
  aside.right-sidebar.open {
    transform: translateX(0);
  }

  aside.right-sidebar h2 {
    color: #e0e7ff;
    font-weight: 700;
    font-size: 1.5rem;
    margin: 0 0 16px 0;
    border-bottom: 2px solid #3b82f6;
    padding-bottom: 8px;
  }

  /* Sidebar menu items */
  .sidebar-menu {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px 24px;
    flex-grow: 1;
    overflow-y: auto;
    padding-right: 8px;
  }

  .sidebar-item {
    background: rgba(71,85,105,0.3);
    padding: 16px 20px;
    border-radius: 16px;
    color: #cbd5e1;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 14px;
    cursor: pointer;
    user-select: none;
    transition: background-color 0.3s ease, color 0.25s ease;
  }
  .sidebar-item:hover, .sidebar-item:focus {
    background: #3b82f6;
    color: white;
    outline: none;
  }
  .sidebar-icon {
    flex-shrink: 0;
    width: 32px;
    height: 32px;
    background: #2563eb;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    font-size: 18px;
  }

  /* Scrollbar for sidebar */
  aside.right-sidebar::-webkit-scrollbar {
    width: 8px;
  }
  aside.right-sidebar::-webkit-scrollbar-thumb {
    background-color: #2563ebbb;
    border-radius: 10px;
  }
  aside.right-sidebar::-webkit-scrollbar-track {
    background: transparent;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    main.product-grid {
      padding: 24px 24px;
      grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
      gap: 24px;
    }
    aside.right-sidebar {
      width: 280px;
      padding: 24px 20px;
    }
  }
  @media (max-width: 480px) {
    header {
      padding: 12px 16px;
    }
    #sidebarToggle {
      padding: 10px 14px;
      font-size: 14px;
    }
    main.product-grid {
      padding: 16px 16px;
      grid-template-columns: repeat(auto-fit,minmax(160px,1fr));
      gap: 16px;
    }
    aside.right-sidebar {
      width: 100vw;
      height: calc(100vh - 64px);
      padding: 24px 20px;
      border-radius: 0;
    }
  }
</style>
</head>
<body>

<header>
      <h1>Smeasmart</h1>
    <div class="search-bar">
      <input type="text" placeholder="Cari produk...">
  <button id="sidebarToggle" aria-expanded="false" aria-controls="rightSidebar" aria-label="Toggle sidebar menu">Menu</button>
</header>

<div class="layout">
  <main class="product-grid" tabindex="0">
    <!-- Product cards -->
    <article class="product-card" tabindex="0">
      <div class="product-image">
        <img src="etal1.png" alt="maniak robalok" />
      </div>
      <div class="product-details">
        <h3 class="product-title">Adis</h3>
        <p class="product-price">500.000</p>
      </div>
    </article>
    <article class="product-card" tabindex="0">
      <div class="product-image">
        <img src="etal2.png" alt="aduh epan" />
      </div>
      <div class="product-details">
        <h3 class="product-title">epan</h3>
        <p class="product-price">1.290.000</p>
      </div>
    </article>
    <article class="product-card" tabindex="0">
      <div class="product-image">
        <img src="etal3.jpg" alt="sigma" />
      </div>
      <div class="product-details">
        <h3 class="product-title">fadil</h3>
        <p class="product-price">699.000</p>
      </div>
    </article>
    <article class="product-card" tabindex="0">
      <div class="product-image">
        <img src="etal4.png" alt="gemoy" />
      </div>
      <div class="product-details">
        <h3 class="product-title">rafif</h3>
        <p class="product-price">1.000.000</p>
      </div>
    </article>
    <article class="product-card" tabindex="0">
      <div class="product-image">
        <img src="" alt="ya yaa" />
      </div>
      <div class="product-details">
        <h3 class="product-title">dupan</h3>
        <p class="product-price">600.000</p>
      </div>
    </article>
    <article class="product-card" tabindex="0">
      <div class="product-image">
        <img src="" alt="ya yaa" />
      </div>
      <div class="product-details">
        <h3 class="product-title">azka</h3>
        <p class="product-price">10.000.000</p>
      </div>
    </article>
  </main>

  <aside id="rightSidebar" class="right-sidebar" role="complementary" aria-label="Sidebar navigation menu">
    <h2>Menu</h2>
    <nav class="sidebar-menu" aria-label="Sidebar navigation links">
      <button class="sidebar-item" tabindex="0" type="button">
        <span class="sidebar-icon" aria-hidden="true">🏠</span>
        <span>Halaman</span>
      </button>
      <button class="sidebar-item" tabindex="0" type="button">
        <span class="sidebar-icon" aria-hidden="true">🛒</span>
        <span>Orderan</span>
      </button>
      <button class="sidebar-item" tabindex="0" type="button">
        <span class="sidebar-icon" aria-hidden="true">💬</span>
        <span>Pesan</span>
      </button>
      <button class="sidebar-item" tabindex="0" type="button">
        <span class="sidebar-icon" aria-hidden="true">⚙️</span>
        <span>Pengaturan</span>
      </button>
      <button class="sidebar-item" tabindex="0" type="button">
        <span class="sidebar-icon" aria-hidden="true">📦</span>
        <span>Tambahkan Produk</span>
      </button>
      <button class="sidebar-item" tabindex="0" type="button">
        <span class="sidebar-icon" aria-hidden="true">❓</span>
        <span>Bantuan</span>
      </button>
    </nav>
  </aside>
</div>

<script>
  (() => {
    const toggleBtn = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('rightSidebar');

    function toggleSidebar() {
      const isOpen = sidebar.classList.toggle('open');
      toggleBtn.setAttribute('aria-expanded', isOpen);
    }

    toggleBtn.addEventListener('click', toggleSidebar);

    // Close sidebar when Escape pressed and sidebar is open
    document.addEventListener('keydown', event => {
      if (event.key === 'Escape' && sidebar.classList.contains('open')) {
        sidebar.classList.remove('open');
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.focus();
      }
    });
  })();
</script>

</body>
</html>

