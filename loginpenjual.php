<?php
session_start();
$hasil = true;
$error = '';
if (!empty($_POST)) {
    $pdo = require 'koneksi.php';
    $sql = "select * from sellers";
    $query = $pdo->prepare($sql);
    $query->execute();
    $seller = $query->fetch();
    if (!$seller) {
        $hasil = false;
    } elseif ($_POST['no_telp'] != $seller['no_telp']) {
        $hasil = false;
        $error = "nomor telepon tidak terdaftar";
    } else {
        $hasil = true;
        $_SESSION['seller'] = array(
            'id' => $seller['id'],
            'no_telp' => $seller['no_telp'],

        );
        header("Location: homepagepenjual.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: url(windows.png) no-repeat;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .kepala {
        background: transparent;
        backdrop-filter: blur(20px);
        padding: 40px 30px;
        border-radius: 13px;
        border: solid 1px rgba(255, 255, 255, 0.4);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        width: 100%;
        max-width: 400px;
        box-sizing: border-box;
    }

    .kepala h2 {
        text-align: center;
        margin-bottom: 30px;
        color: rgb(238, 227, 227);
    }

    .kolom {
        position: relative;
        margin-bottom: 20px;
    }

    .kolom input[type="text"],
    button {
        color: white;
        width: 100%;
        padding: 12px 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        box-sizing: border-box;
        background: transparent;
    }

    .kolom input[type="text"] {
        color: white;
        width: 100%;
        padding: 12px 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        box-sizing: border-box;
        background: transparent;
    }

    .kolom input:focus+span,
    .kolom input:valid+span {
        top: -20px;
        left: 0px;
        font-size: 15px;
        color: #ededed;
        background: transparent;

    }

    .kolom span {
        position: absolute;
        left: 12px;
        top: 12px;
        padding: 0 5px;
        color: #fffbfb;
        transition: 0.3s ease;
        pointer-events: none;
    }

    button {
        background-color: #0923b7;
        color: white;
        border: none;
        cursor: pointer;
        transition: background 0.3s;
    }

    button:hover {
        background-color: #6373e0;
    }

    p {
        text-align: center;
        margin-top: 15px;
        color: #ffffff;
    }

    p .login {
        color: #91eef6;
        text-decoration: none;
    }

    .error {
        color: red;
    }
</style>

<body>
    <form action="" method="post">
        <div class="kepala">
            <h2>Login Penjual</h2>
            <?php if ($hasil == false) { ?>
                <p class="error">no telepon tidak terdaftar</p>
            <?php } ?>
            <div class="kolom">
                <input type="text" name="no_telp" required />
                <span>No. Telp</span>
            </div>
            <div class="kolom">
                <button type="submit">Masuk</button>
            </div>

        </div>
</body>

</html>