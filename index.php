<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BlackMarket</title>
    <?php include('stylesheets.php'); ?>
</head>

<body>
      <?php include('inc/navigation.php');?>

        <?php include('inc/sidebar.php'); ?>
      <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>BlackMarket</h1>
            <h3>Prints and Photography</h3>
            <br>
              <a class="ctaarrow" href="#about"> <button type="button" name="button" class="mycta"><i class="fa fa-long-arrow-down fa-1x"></i></button> </a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center about-photo">
                <div class="content text-center">
                    <img src="img/fynarts.jpg" class="profile"/>
                    <br><br>
                    <h4>Junito S. Ale</h4>
                      <h6><em>Founder / Photographer / Graphic Layout Artist</em></h6>

                      <button type="button" class="circle outline red"><i class="fa fa-facebook"></i></button>
                      <button type="button" class="circle outline red"><i class="fa fa-phone"></i></button>
                      <button type="button" class="circle outline red"><i class="fa fa-envelope"></i></button>
                </div>
            </div>
            <div class="col-md-8 text-left about-content">
                <span class="line"></span>
                <h2>We are more than just a printshop!</h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  <a href="about.php" class="btn outline red">Know more about us <i class="fa fa-long-arrow-right"></i></a>
                  <a href="team.php" class="btn inverse white">Meet the team <i class="fa fa-long-arrow-right"></i></a>
      </div>
          </div>
            <!-- /.row -->
      </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-red">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Our Services</h2>
                    <hr class="small">
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="service-item">
                                <img class="rndimage" src="img/bm.jpg">
                                <h4>
                                    <strong>Digital Printing</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-item">
                            <img class="rndimage" src="img/bm.jpg">
                                <h4>
                                    <strong>Photography</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-item">
                            <img class="rndimage" src="img/bm.jpg">
                                <h4>
                                    <strong>Drone Videography </strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <br>
                    <a href="#" class="btn inverse white">See more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


<section>
  <div class="videoplay">
              <div class="thevideo">
              <span class="vidcontent">
                    <div class="text-center">
                      <h1 class="videotext">Watching from above</h1>
                      <br>
                      <a href="#" class="btn inverse white">View clips <i class="fa fa-long-arrow-right"></i></a>
                    </div>
              </span>
              <span class="vidcrop"></span>
                  <video class="dispvideo" preload="auto" autoplay="true" loop="loop" muted="muted">
                    <source src="video/playback1.mp4" type="video/mp4">
                  </video>
            </div>
        </div>
</section>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive port-image" src="img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive port-image" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive port-image" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive port-image" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <br>
                    <a href="gallery.php" class="btn outline red"> View Gallery <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


    <!-- About -->
    <section id="photography" class="photography">
    <div class="container about-content">
            <div class="row">
              <div class="col-lg-12 text-center">
                <div class="col-lg-8 text-left about-content">
                  <span class="line"></span>
                  <h2>We are more than just a printshop!</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <a class="btn inverse white">Read more  <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="col-md-4 text-center">
                    <div class="content text-center">
                        <img src="img/portfolio-2.jpg" class="photo">
                    </div>
                </div>

              </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


<section>
  <div class="container" >
    <div class="row" height="500">


    </div>
  </div>
</section>
<?php include('inc/footer.php'); ?>

</body>
<?php include('inc/functions.php'); ?>
</html>
