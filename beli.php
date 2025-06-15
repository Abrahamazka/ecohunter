<?php
session_start();

$pdo = require 'koneksi.php';
$id = array_keys($_SESSION['keranjang']);
$idid = implode(',', array_map('intval', $id));
$sql = "UPDATE products SET terjual = terjual + 1, stok = stok - 1 WHERE id IN ($idid)";
$pdo->exec($sql);

unset($_SESSION['keranjang']);
header('location:homepage.php');
