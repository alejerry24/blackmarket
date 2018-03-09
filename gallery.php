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
        <a href="services.php"><li>Services</li></a>
        <a href="gallery.php"><li>Gallery</li></a>
        <a href="contact.php"><li>Contact</li></a>
      </div>
  </nav>

  <header class="subheader">
      <div class="text-vertical-center">
        <h1>Gallery</h1>
      </div>
  </header>


<section class="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Nav tabs -->
        <ul class="nav nav-pills">
            <li class="active"><a class="btn" href="#home-pills" data-toggle="tab" aria-expanded="true">Digital Prints</a>
            </li>
            <li class=""><a class="btn" href="#profile-pills" data-toggle="tab" aria-expanded="false">Photography</a>
            </li>
            <li class=""><a class="btn" href="#messages-pills" data-toggle="tab" aria-expanded="false">Drone Shots</a>
            </li>
        </ul>


        <!-- Tab panes -->

        <div class="tab-content">
            <div class="tab-pane fade active in" id="home-pills">
                <?php include('content/digital.php');?>
            </div>
            <div class="tab-pane fade" id="profile-pills">
              <?php include('content/photography.php');?>
          </div>
            <div class="tab-pane fade" id="messages-pills">
              <?php include('content/drone.php');?>
            </div>
        </div>
      </div>

    </div>

  </div>

</section>



  <!-- Portfolio -->
  <section id="portfolio" class="portfolio">
      <div class="container">
          <div class="row">

              <!-- /.col-lg-10 -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container -->
  </section>
<?php include('inc/footer.php'); ?>
</body>
<?php include('inc/functions.php'); ?>
</html>
