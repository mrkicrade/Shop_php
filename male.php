<?php
require('connection.php');
require('header.php');
$coll=$_GET['coll'];
// var_dump($coll);
$sql = "SELECT * FROM products WHERE collection = '$coll'";
$query = mysqli_query($db,$sql);
$result = mysqli_fetch_all($query,MYSQLI_ASSOC);
// var_dump($result);
require('products_categories.php');
require('products_section.php');
require('footer.php');