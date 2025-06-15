<?php
session_start();
if(empty($_SESSION['seller'])) {
    header('location: loginpenjual.php');
}
if(!empty($_POST)) {
    $pdo = require 'koneksi.php';
    $sql = 'INSERT INTO products (nama_produk, gambar_produk, harga, stok, deskripsi, id_seller) VALUES (:nama, :gambar, :harga, :stok, :deskripsi, :id_seller)';
    $query = $pdo->prepare($sql);
    $query->execute(array(
        'nama' => $_POST['namaproduk'],
        'gambar' => file_get_contents($_FILES['gambarproduk']['tmp_name']),
        'harga' => $_POST['hargaproduk'],
        'stok' => $_POST['stok'],
        'deskripsi' => $_POST['deskripsi'],
        'id_seller' => $_SESSION['seller']['id']
    ));
}
    header('location: homepagepenjual.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
        }
        hr{
            background-color: black;
            height: 2px;
            border: none;
        }
        form{
            display: flex;
            flex-direction: column;
            border: solid 1px blue;
            border-radius: 15px;
            padding: 30px;
            background-color: aquamarine;
        }
        .form{
            height: 100%;
            border-radius:10px ;
            justify-content: center;
            align-items: center;
            display: flex;
        }
        input, textarea{
            margin-bottom: 20px;
            border-radius: 10px;
            border-color: gray;
            height: 2rem;
            width: auto;
            resize: vertical;
            padding-left: 10px ;
        }
        button{
            border-radius: 10px;
            background-color: blue;
            color: white;
            height: 2.5rem;
            font: bolder;
            font-size: 1.3rem;
        }
    </style>
</head>

<body>
    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
            <h1>Tambah Produk Anda</h1><hr><br>
            <label for="produk">Nama Produk</label>
            <input type="text" name="namaproduk">
            <label for="gambar">Gambar Produk</label>
            <input type="file" accept="image/*" name="gambarproduk">
            <label for="harga">Harga Satuan</label>
            <input type="number" name="hargaproduk">
            <label for="stok">Stok Produk</label>
            <input type="number" name="stok" id="">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id=""></textarea>
            <button type="submit">Buat Produk!</button>
        </form>
    </div>
</body> 

</html>