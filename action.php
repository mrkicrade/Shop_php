<?php
require('connection.php');
require('header.php');
$sql = "SELECT * FROM products WHERE action = 'true'";
$query = mysqli_query($db,$sql);
$result = mysqli_fetch_all($query,MYSQLI_ASSOC);
// var_dump($result);
require('products_categories.php');
require('products_section.php');
require('footer.php');