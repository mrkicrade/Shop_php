<?php
  $id = $_GET['id'];
  // var_dump($id);
  require('connection.php');
  require('header.php');
  $sql = "SELECT * FROM products WHERE id = '$id'";
  $query = mysqli_query($db,$sql);
  $result = mysqli_fetch_assoc($query);
  // var_dump($result);



  // die();
?>



    <!-- Main -->
    <main>
      <!-- Product Title -->
      <div class="product-title2">
        <img src="img/arrow-left2.png" alt="Arrow left" class="img-responsive">
        <h4><?php echo $result['productTitle']; ?></h4>
      </div>
      <!-- Product Title End -->
      <!-- Product 2 -->     
      <div class="product2">
        <div class="row">          
          <div class="col-sm-5 col-md-5 col-lg-5">    
            <img src="<?php echo $result['imgSrc']; ?>" alt="Product 1" class="img-responsive">
          </div>  
          <!-- Info -->
          <div class="col-sm-7 col-md-7 col-lg-7"> 
            <div class="info2 clearfix">           
              <h4><?php echo $result['productTitle'].' '. $result['model']; ?></h4>
              
              <p>
                <?php echo $result['description']; ?>
              </p><br>
            </div>
          </div>
          <div class="col-sm-1 col-md-1 col-lg-1">
            <div class="description1">          
              <ul class="list-reset">
                <li>Boja:</li>
                <li>Cena:</li>
                <li>Dostava:</li>
                <li>Količina:</li>
              </ul>
            </div>
          </div>    
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="description2">
              <ul class="list-reset">
                <li>
                  <ul class="color-picker list-reset">
                    <li><a href="#" class="blue"></a></li>
                    <li><a href="#" class="green"></a></li>
                    <li><a href="#" class="dark-gray"></a></li>
                  </ul>
                </li>
                <li class="price2"><?php echo $result['price'] ?></li>
                <li>Besplatna</li>
                <li>
                  <input type="number" class="input">
                </li>
              </ul>
            </div>
          </div> 
          <!-- Info End -->  
            <button type="submit" class="btn1">Ubaci u korpu</button> 
        </div>
      </div>
      <!-- Product2 End -->
      <article class="product21">      
        <div class="row">          
          <div class="hidden-xs col-sm-1 col-md-1 col-lg-1">
            <img src="<?php echo $result['imgSrc']; ?>" alt="Product 1" class="img-responsive">
          </div>  
          <div class="hidden-xs col-sm-1 col-md-1 col-lg-1">
            <img src="<?php echo $result['imgSrc']; ?>" alt="Product 1" class="img-responsive">
          </div>
          <div class="hidden-xs col-sm-1 col-md-1 col-lg-1">
            <img src="<?php echo $result['imgSrc']; ?>" alt="Product 1" class="img-responsive">
          </div>
          <div class="hidden-xs col-sm-1 col-md-1 col-lg-1">
            <img src="<?php echo $result['imgSrc']; ?>" alt="Product 1" class="img-responsive">
          </div>
          <div class="hidden-xs col-sm-1 col-md-1 col-lg-1">
            <img src="<?php echo $result['imgSrc']; ?>" alt="Product 1" class="img-responsive">
          </div>
        </div>
      </article>  
      <?php require('our_bid.php'); ?>
 