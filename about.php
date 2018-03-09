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
  <nav class="navsubpage" role="navigation">
      <div class="navbar-header">
        <div class="logo">
        </div>
          <a class="navbar-brand" href="index.php">
              BlackMarket
          </a>
      </div>
      <!-- /.navbar-header -->
      <div class="navigation">
        <a href="about.php"><li>About</li></a>
        <a href="#services"><li>Services</li></a>
        <a href="gallery.php"><li>Gallery</li></a>
        <a href="gallery.php"><li>Contact</li></a>
      </div>
  </nav>

  <header class="subheader">
      <div class="text-vertical-center">
        <h1>About BlackMarket</h1>
      </div>
  </header>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="col-lg-4 about-photo">
          <img src="img/bm.jpg" height="80%" width="80%"/>
        </div>
        <div class="col-lg-8 about-content">
          <span class="line"></span>
          <h2>We are more than just a printshop!</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section>

</section>
<section class="bg-red split">
  <div class="image-half">

  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="col-lg-6">

        </div>
        <div class="col-lg-6 about-content">
          <span class="line-white"></span>
          <h2 class="headline">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h2>
        </div>
      </div>
    </div>

  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <br>
          <h3>FAQs</h3>
          <br>
          <?php include('content/accordion-about.php'); ?>
      </div>
    </div>
  </div>
</section>

<?php include('inc/footer.php'); ?>
</body>
<?php include('inc/functions.php'); ?>
</html>
