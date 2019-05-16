    <main>
      <!-- Intro Header -->
      <header class="intro-header">
        <img src="img/background-intro.jpg" alt="Background intro" class="img-responsive">
        <!-- Carousel -->
        <div id="intro-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators"> <!-- data-target mora da se slaze sa id-em -->
          <li data-target="#intro-slider" data-slide-to="0" class="active"></li>
          <li data-target="#intro-slider" data-slide-to="1"></li>
          <li data-target="#intro-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/slide-1.jpg" alt="Slide 1">
          </div>
          <div class="item"> <!-- za ostaleslike brise se "active" -->
            <img src="img/slide-2.jpg" alt="Slide 2">
          </div>
          <div class="item">
            <img src="img/slide-3.jpg" alt="Slide 3">
          </div>
          </div>

          <!-- Controls --> <!-- kod komandi href mora da se slozi sa id-em  -->
          <a class="left carousel-control" href="#intro-slider" role="button" data-slide="prev">
            <span class="arrow-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#intro-slider" role="button" data-slide="next">
            <span class="arrow-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Carousel End -->
        <h2 class="frame"><span>Shop</span> kolekcija jesen / zima</h2>
      </header>
      <!-- Intro Header End -->