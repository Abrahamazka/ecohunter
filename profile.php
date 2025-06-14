<?php
session_start();
if (empty($_SESSION['user'])) {
  header("location: login.php");
}
$pdo = require 'koneksi.php';
if(isset($_POST['submit'])){
  if(!empty($_FILES['profil']['tmp_name'])){
    $sql = 'UPDATE users SET nama=:nama, email=:email, alamat=:alamat, profil=:profil WHERE id=:id';
    $query = $pdo->prepare($sql);
    $query->execute(array(
      'nama' => $_POST['nama'],
      'email' => $_POST['email'],
      'alamat' => $_POST['alamat'],
      'profil' => file_get_contents($_FILES['profil']['tmp_name']),
      'id' => $_SESSION['user']['id']
    ));
  } else {
    $sql = 'UPDATE users SET nama=:nama, email=:email, alamat=:alamat WHERE id=:id';
    $query = $pdo->prepare($sql);
    $query->execute(array(
      'nama' => $_POST['nama'],
      'email' => $_POST['email'],
      'alamat' => $_POST['alamat'],
      'id' => $_SESSION['user']['id']
    ));
  }
}

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Profil Saya</title>
  <style>
    * {
      margin: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: rgba(237, 237, 224, 0.255);
    }

    header {
      padding: 10px 0 0 0;
      background-color: white;
      position: sticky;
      top: 0;
      z-index: 1;
    }

    .kepala {
      display: flex;
      justify-content: space-between;
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
      width: 100%;
      height: 100%;
      border: none;
      padding-left: 20px;
      font-size: 17px;
      outline: none;
      background: none;
    }

    .gambar {
      display: flex;
      align-items: center;
      gap: 20px;
      padding-right: 10px;
    }

    hr {
      margin-top: 12px;
      border: 0.5px solid rgba(0, 0, 0, 0.1);
    }

    .container {
      max-width: 500px;
      margin: 50px auto 20px;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
    }

    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      margin: auto;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    h2 {
      text-align: center;
      margin-top: 15px;
    }

    .info label {
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

    .edit-button,
    .save-button,
    .cancel-button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.2s ease;
    }

    .edit-button {
      background-color: #00aa5b;
      color: white;
      margin-top: 10px;
    }

    .edit-button:hover {
      background-color: #008b4f;
    }

    .save-button {
      background-color: #007bff;
      color: white;
      margin-top: 10px;
    }

    .cancel-button {
      background-color: #e74c3c;
      color: white;
    }

    .edit-form {
      display: none;
      max-width: 500px;
      margin: 20px auto;
      padding: 30px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
  </style>
</head>

<body>
  <header>
    <div class="kepala">
      <div class="smeas">
        <a href="#promo" style="text-decoration: none;">
          <span style="color: green;">Smea$</span><span style="color:darkblue">mart</span>
        </a>
      </div>
      <div class="search">
        <input type="text" placeholder="Cari di SmeasMart...">
      </div>
      <div class="gambar">
        <img src="keranjang.png" alt="keranjang" width="40px">
        <img src="INIFURINA.jpg" alt="profil" width="40px" style="border-radius: 50%;">
      </div>
    </div>
    <hr>
  </header>
<?php $pdo = require 'koneksi.php';
$sql = 'SELECT * FROM users';
$query = $pdo->prepare($sql);
$query->execute();
$data = $query->fetch();
$base64 = base64_encode($data['profil']); ?>
  <div class="container">
    <?php echo "<img src= 'data:image/*;base64, $base64' class='profile-pic' alt=''>" ?>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="info" id="ViewProfile">
        <label for="">Username</label>
        <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $data['email'] ?>">
        <label>Alamat</label>
        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
        <label>Foto profil</label>
        <input type="file" accept="image/*" name="profil">
        <button class="edit-button" name="submit" type="submit">Edit Profil</button>
      </div>
    </form>
  </div>
  </div>
</body>

</html>