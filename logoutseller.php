<?php
session_start();
unset($_SESSION['seller']);
header('location:homepagepenjual.php');