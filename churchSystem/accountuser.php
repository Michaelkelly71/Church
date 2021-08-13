<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Church</title>
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>

<body id="page-top">
<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="color:#08A0CA; background-color:#08A0CA">
    <div class="container">
        <a id="logo" class="navbar-brand js-scroll-trigger" href="profileuser.php"><img src="adventist-en-centered--denim.png",top left no-repeat, width="100" height="70" alt= "logo">&nbsp; G S W C</a>

        <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive"
                type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-align-justify"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#services" style="color: #ffffff;">Services</a></li>

                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#portfolio" style="color: #ffffff;">Gallery</a></li>

                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact" style="color: #ffffff;">Contact</a></li>

                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="profileuser.php" style="color: #ffffff;">Account</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
      <!----------===================------------->
        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
             <p style="color:#F4BF55; margin-left:40px">Welcome
             <strong style="font-size:20px; color:#ffffff;" > <?php echo $_SESSION['username']; ?></strong>
             
            <button style="background-color: #F4BF55; height: 30px; width: 90px; border-radius: 16px; border:none">
                 <a href="index.php?logout='1'" style="color:#ffffff;">Log-out</a>
            </button>
        </p>
             

        
        <?php endif ?>
    </div>
</nav>
<!-------------======================================--------------------->
<header class="masthead text-center text-black d-flex" style="background-color:#08A0CA; color:#ffffff">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="text-uppercase">Glorious saints worship center<br>(G S W C)</h2>
                <hr>
            </div>
        </div>
        <div class="col-lg-8 mx-auto">
            <p style="color:black;">"The Church is not a gallery for the better exhibition of eminent Christians, but a school for the education of imperfect ones."</p>
            <p>-Henry Ward Beecher</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="#services" style="background-color: rgb(74,76,143);">Find Out More</a>
        </div>
    </div>
</header>
<!-------------======================================--------------------->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Services</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="color: rgb(0,0,0);">
            <div class="col-md-6 col-lg-3 text-center">
                <div class="mx-auto service-box mt-5"><i class="fa fa-diamond fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-once="true" style="color: rgb(82,52,52);"></i>
                    <h3 class="mb-3">Sunday Bible Sudies. Time: 7:30pm - 8:30pm</h3>
                    <p class="text-muted mb-0">Come and let us share the words of God together growing as one family</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
                <div class="mx-auto service-box mt-5">
                    <i class="fa fa-paper-plane fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
                    <h3 class="mb-3">Wednesday Prayer Sessions. Time: 7:30pm - 9:00pm</h3>
                    <p class="text-muted mb-0">We sought the Lord in prayer evey wednesday. He did pray without season</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
                <div class="mx-auto service-box mt-5">
                    <i class="fa fa-newspaper-o fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true"></i>
                    <h3 class="mb-3">Friday Vesper Service. Time: 5:30pm - 9:00pm</h3>
                    <p class="text-muted mb-0">Lets initaite ourselves's into the Sabbath</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center">
                <div class="mx-auto service-box mt-5">
                    <i class="fa fa-heart fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i>
                    <h3 class="mb-3">Saturday Church Service. Time: 8:30am - 12:30pm</h3>
                    <p class="text-muted mb-0">The Sabbath is upon us. Come lets listen to the words of God</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------------======================================--------------------->
<section id="portfolio" class="p-0">
    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            <div class="col-sm-6 col-lg-4">
                <a href="assets/img/fullsize/1.jpg" class="portfolio-box" style="background-image: url(&quot;assets/img/IMAGE%202019-12-06%20101120.jpg&quot;);">
                    <img class="img-fluid" src="assets/img/thumbnails/1.jpg" alt="fluid">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div
                class="col-sm-6 col-lg-4">
                <a href="assets/img/fullsize/2.jpg" class="portfolio-box">
                    <img class="img-fluid" src="assets/img/thumbnails/2.jpg" alt="fluid">
                    <div class="portfolio-box-caption"><div class="portfolio-box-caption-content">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="assets/img/fullsize/3.jpg" class="portfolio-box">
                    <img class="img-fluid" src="assets/img/thumbnails/3.jpg" alt="fluid">
                    <div class="portfolio-box-caption">
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="assets/img/fullsize/4.jpg" class="portfolio-box">
                    <img class="img-fluid" src="assets/img/thumbnails/4.jpg" alt="fluid">
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="assets/img/fullsize/5.jpg" class="portfolio-box">
                    <img class="img-fluid" src="assets/img/thumbnails/5.jpg" alt="fluid">
                    <div class="portfolio-box-caption">
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="assets/img/fullsize/6.jpg" class="portfolio-box">
                    <img class="img-fluid" src="assets/img/thumbnails/6.jpg" alt="fluid">
                    <div class="portfolio-box-caption">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-------------======================================--------------------->
<section id="contact">
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="my-4">
                <p class="mb-5">Ready to join the church of God ? Give us a call or send us an email and we shall invite you into the fold of God!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                <p><a href="tel:+233307011832">+233 307011832</a></p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                <p><a href="mailto:your-email@your-domain.com">vvuchurch@gmail.com</a></p>
            </div>
        </div>
    </div>
</section>
<!-------------======================================--------------------->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="assets/js/creative.js"></script>
<script src="assets/js/bs-animation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>