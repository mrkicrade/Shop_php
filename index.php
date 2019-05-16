<?php require('connection.php'); ?>
<?php require('header.php'); ?>
<?php
$sql = "SELECT * FROM products";
$query = mysqli_query($db , $sql);
// $result = mysqli_fetch_all($query,MYSQLI_ASSOC); //assoc je uvek samo jedan row
$result = mysqli_fetch_all($query,MYSQLI_ASSOC); //assoc je uvek samo jedan row
// var_dump($result);
// foreach ($result as $arr => $ass) {
//   echo $ass['imgSrc'];
// }

// die();
?>
<?php require('carousel.php'); ?>
<?php require('products_categories.php'); ?>
<?php require('products_section.php'); ?>
<?php require('footer.php'); ?>
