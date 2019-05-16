<div id="mainRow" class="row">
              <!-- <script id="template" type="template"> -->
                <?php foreach($result as $arr => $ass): ?>
                <div class="col-xs-6 col-md-4 col-lg-3 article-clear">
                <!-- Product -->
                  <article class="product">
                    <!-- Image Holder -->
                    <div class="product-image-holder">
                      <a href="detailed.php?id=<?php echo $ass['id']; ?>">
                        <img src="<?php echo $ass['imgSrc']; ?>" alt="{{title}}" class="img-responsive"></a>
                        <!-- Hover List -->
                        <ul class="hover-list list-reset">
                          <li><a href="#"><img src="img/shop-icon.png" alt="Shop Icon"></a></li>
                          <li><a href="#"><img src="img/view-icon.png" alt="View Icon"></a></li>
                          <li><a href="#"><img src="img/like-icon.png" alt="Like Icon"></a></li>
                        </ul>
                        <!-- Hover List End -->
                    </div>
                    <!-- Image Holder End -->
                    <!-- Product Title -->
                    <div class="product-title clearfix">
                      <h3><?php echo $ass['productTitle']; ?><span><?php echo $ass['model']; ?></span></h3>
                      <span><?php echo $ass['price']; ?> rsd</span>
                    </div>
                    <!-- Product Title End -->
                    <!-- Color Picker -->
                    <ul class="color-picker list-reset clearfix">
                      <li><a href="#" class="<?php echo $ass['color1']; ?>">Purple</a></li>
                      <li><a href="#" class="<?php echo $ass['color2']; ?>">Green</a></li>
                      <li><a href="#" class="<?php echo $ass['color3']; ?>">Dark gray</a></li>
                    </ul>
                    <!-- Color Picker End -->
                  </article>
                <!-- Product End -->
                </div>
                <?php endforeach; ?>
                
                
              <!-- </script> -->
            </div>
          </div>
          <!-- Products Holder End -->
        </section>

        <!-- Prouct section End -->
      </div>

      <!-- Main container End -->
    </main>