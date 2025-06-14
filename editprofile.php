<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Saya</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 500px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
    }

    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin: auto;
      display: block;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    h2 {
      text-align: center;
      margin-top: 15px;
    }

    .info, .edit-form {
      margin-top: 20px;
    }

    .info label, .edit-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .info p {
      background-color: #f9f9f9;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ddd;
      margin-bottom: 15px;
    }

    .edit-form input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    .edit-button, .save-button, .cancel-button {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.2s ease;
    }

    .edit-button {
      background-color: #00aa5b;
      color: white;
    }

    .edit-button:hover {
      background-color: #008b4f;
    }

    .save-button {
      background-color: #007bff;
      color: white;
    }

    .cancel-button {
      background-color: #e74c3c;
      color: white;
    }

    .edit-form {
      display: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="https://via.placeholder.com/120" alt="Foto Profil" class="profile-pic">
    <h2 id="namaDisplay">Abraham</h2>

    <div class="info" id="viewProfile">
      <label>Email</label>
      <p id="emailDisplay">abraham@example.com</p>

      <label>Nomor HP</label>
      <p id="hpDisplay">+62 823 3462 1080</p>

      <label>Alamat</label>
      <p id="alamatDisplay">Gunung Sari Indah Blok FF 49, Karangpilang, Surabaya</p>

      <button class="edit-button" onclick="toggleEdit(true)">Edit Profil</button>
    </div>

    <div class="edit" id="editProfile">
      <label>Nama</label>
      <input type="text" id="namaInput" value="Abraham">

      <label>Email</label>
      <input type="email" id="emailInput" value="abraham@example.com">

      <label>Nomor HP</label>
      <input type="text" id="hpInput" value="+62 823 3462 1080">

      <label>Alamat</label>
      <input type="text" id="alamatInput" value="Gunung Sari Indah Blok FF 49, Karangpilang, Surabaya">

      <button class="save-button" onclick="simpan()">Simpan</button>
      <button class="cancel-button" onclick="toggleEdit(false)">Batal</button>
    </div>
  </div>

  <script>
    function toggleEdit(show) {
      document.getElementById("viewProfile").style.display = show ? "none" : "block";
      document.getElementById("editProfile").style.display = show ? "block" : "none";
    }

    function simpan() {
      const nama = document.getElementById("namaInput").value;
      const email = document.getElementById("emailInput").value;
      const hp = document.getElementById("hpInput").value;
      const alamat = document.getElementById("alamatInput").value;

      document.getElementById("namaDisplay").innerText = nama;
      document.getElementById("emailDisplay").innerText = email;
      document.getElementById("hpDisplay").innerText = hp;
      document.getElementById("alamatDisplay").innerText = alamat;

      toggleEdit(false);
    }
  </script>
</body>
</html>
