<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/dcf78cbd5c.js" crossorigin="anonymous"></script>

    <!-- LIGHTBOX JQUERY -->
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">

    <title>SPARTAN GYM</title>
  </head>
  <body>
    <!-- START HEADER -->
    <nav class="navbar navbar-expand-lg" id="header">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="images/logo-transparent1.png" class="img-fluid"></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <a href="#testimony" class="nav-item nav-link menu mr-3">HOME</a>
                  <a href="#pricing" class="nav-item nav-link menu mr-3">PRICING</a>
                  <a href="#gallery" class="nav-item nav-link menu mr-3">GALLERY</a>
                  <a href="#trainer" class="nav-item nav-link menu mr-3">TRAINER</a>
                  <a href="#products" class="nav-item nav-link menu mr-3">PRODUCTS</a>
                  <a href="register.php" class="nav-item nav-link menu mr-3">REGISTER</a>
                  <a href="member/login.php" class="nav-item nav-link menu mr-3">LOGIN</a>  
                </ul>
            </div>
        </div>
    </nav>
    <!-- END HEADER -->

    <!-- START BANNER -->
    <div class="jumbotron jumbotron-fluid bg-telorasin" id="banner">
        <div class="container">
            <h1 class="display-4">"BETTER SLOW PROGRESS" <br>THAN NO PROGRESS</h1>
            <a href="register.php"><button type="button" class="btn btn-secondary">JOIN NOW</button></a>
        </div>
    </div>
    <!-- END BANNER -->

    <!-- START TESTIMONY -->
    <div class="container-fluid bg-telorasin" id="testimony">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="pb-5">HAPPY MEMBER</h3>
                </div>
            </div>
            <!-- START CAROUSEL FOR TESTIMONY -->
            <div class="row justify-content-center pb-5">
                <div class="col-md-10">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="images/2.jpg" class="d-block w-100 img-fluid" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Nama Member</h5>
                            <p>Caption</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="images/3.jpg" class="d-block w-100 img-fluid" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Nama Member</h5>
                            <p>Caption</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="images/2.jpg" class="d-block w-100 img-fluid" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Nama Member</h5>
                            <p>Caption</p>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
            <!-- END CAROUSEL FOR TESTIMONY -->    
        </div>
    </div>
    <!-- END TESTIMONY -->

    <!-- START PRICING -->
    <div class="container-fluid bg-telorasin" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>PUBLIC PRICING</h3>    
                </div>
            </div>

            <!-- START PRICES -->
            <div class="row prices justify-content-center mt-5">
                <div class="col-md-3 bg-lightgray pb-4">
                    <h1>1 MONTH <br> Rp. 175.000</h1>
                    <p class="text-left">- Free 2x Personal Trainer</p>
                </div>

                <div class="col-md-3 bg-lightgray pb-4  ml-5 mr-5">
                    <h1>3 MONTH <br> Rp. 520.000</h1>
                    <p class="text-left">- Free 4x Personal Trainer</p>
                    <p class="text-left">- Free 2x Pre-workout</p>
                </div>

                <div class="col-md-3 bg-lightgray pb-4">
                    <h1>12 MONTH <br> Rp. 1.900.000</h1>
                    <p class="text-left">- Free 12x Personal Trainer</p>
                    <p class="text-left">- Free 12x Pre-wokrout Sachet</p>
                    <p class="text-left">- Free 12x Whey Protein Sachet</p>
                </div>
            </div>
            <!-- END PRICES -->


            <div class="row">
                <div class="col-md-12">
                    <h3>STUDENT PRICING</h3>    
                </div>
            </div>
            <!-- START PRICES -->
            <div class="row prices justify-content-center mt-5 pb-5">
                <div class="col-md-3 bg-lightgray pb-4">
                    <h1>1 MONTH <br> Rp. 150.000</h1>
                    <p class="text-left">- Free 2x Personal Trainer</p>
                </div>

                <div class="col-md-3 bg-lightgray pb-4  ml-5 mr-5">
                    <h1>3 MONTH <br> Rp. 450.000</h1>
                    <p class="text-left">- Free 4x Personal Trainer</p>
                    <p class="text-left">- Free 2x Pre-workout</p>
                </div>

                <div class="col-md-3 bg-lightgray pb-4">
                    <h1>12 MONTH <br> Rp. 1.800.000</h1>
                    <p class="text-left">- Free 12x Personal Trainer</p>
                    <p class="text-left">- Free 12x Pre-wokrout Sachet</p>
                    <p class="text-left">- Free 12x Whey Protein Sachet</p>
                </div>
            </div>
            <!-- END PRICES -->
        </div>
    </div>
    <!-- END PRICING -->

    <!-- START GALLERY -->
    <div class="container-fluid bg-telorasin" id="gallery">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-12">
                    <h3 class="text-center">GALLERY</h3>    
                </div>
            </div>
            <!-- START LIGHTBOX -->
            <div class="row pb-5">
                <div class="container d-flex justify-content-center">
                    <div class="col-md-2">
                          <a class="example-image-link" href="images/layout1.PNG" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image img-fluid" src="images/thumb-layout1.PNG" alt=""/></a>
                    </div>
                    <div class="col-md-2">
                          <a class="example-image-link" href="images/layout2.PNG" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image img-fluid" src="images/thumb-layout2.PNG" alt=""/></a>
                    </div>
                    <div class="col-md-2">
                          <a class="example-image-link" href="images/layout3.PNG" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image img-fluid" src="images/thumb-layout3.PNG" alt=""/></a>
                    </div>
                    <div class="col-md-2">
                          <a class="example-image-link" href="images/layout1.PNG" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image img-fluid" src="images/thumb-layout1.PNG" alt=""/></a>
                    </div>
                </div>
            </div>
            <!-- END LIGHTBOX -->

            <!-- START LIGHTBOX -->
            <div class="row pb-5">
                <div class="container d-flex justify-content-center">
                    <div class="col-md-2">
                          <a class="example-image-link" href="images/layout1.PNG" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/thumb-layout1.PNG" alt=""/></a>
                    </div>
                    <div class="col-md-2">
                          <a class="example-image-link" href="images/layout2.PNG" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/thumb-layout2.PNG" alt=""/></a>
                    </div>
                    <div class="col-md-2">
                          <a class="example-image-link" href="images/layout3.PNG" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/thumb-layout3.PNG" alt=""/></a>
                    </div>
                    <div class="col-md-2">
                          <a class="example-image-link" href="images/layout1.PNG" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/thumb-layout1.PNG" alt=""/></a>
                    </div>
                </div>
            </div>
            <!-- END LIGHTBOX -->
        </div>    
    </div>
    <!-- END GALLERY -->

    <!-- START TRAINER -->
    <div class="container-fluid bg-telorasin" id="trainer">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-12">
                    <h3 class="text-center">TRAINER</h3>    
                </div>
            </div>

            <div class="row pb-5 text-center">
                    <!-- START TRAINER CARDS -->
                    <div class="col-md-3">
                        <img src="images/ava.png" class="img-fluid pb-3">
                        <p class="pt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                    <div class="col-md-3">
                        <img src="images/ava.png" class="img-fluid pb-3">
                        <p class="pt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                    <div class="col-md-3">
                        <img src="images/ava.png" class="img-fluid pb-3">
                        <p class="pt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>

                    <div class="col-md-3">
                        <img src="images/ava.png" class="img-fluid pb-3">
                        <p class="pt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <!-- END TRAINER CARDS -->
            </div>
        </div>    
    </div>
    <!-- END TRAINER -->

    <!-- START PRODUCTS -->
    <div class="container-fluid bg-telorasin" id="products">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-12">
                    <h3 class="text-center pt-3">PRODUCTS</h3>    
                </div>
            </div>
            <!-- START SHOWCASE -->
            <div class="row pb-5 text-center">
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">
                        <img src="images/prod1.jpg" class="img-fluid img-thumbnail">
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp 15.000 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>10 users included</li>
                          <li>2 GB of storage</li>
                          <li>Email support</li>
                          <li>Help center access</li>
                        </ul>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">
                        <img src="images/prod1.jpg" class="img-fluid img-thumbnail">
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp 15.000 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>10 users included</li>
                          <li>2 GB of storage</li>
                          <li>Email support</li>
                          <li>Help center access</li>
                        </ul>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">
                        <img src="images/prod1.jpg" class="img-fluid img-thumbnail">
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp 15.000 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>10 users included</li>
                          <li>2 GB of storage</li>
                          <li>Email support</li>
                          <li>Help center access</li>
                        </ul>
                      </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">
                        <img src="images/prod1.jpg" class="img-fluid img-thumbnail">
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp 15.000 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>10 users included</li>
                          <li>2 GB of storage</li>
                          <li>Email support</li>
                          <li>Help center access</li>
                        </ul>
                      </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a class="btn btn-lg btn-primary btn-block" href="order.php">Order Now</a>
                </div>
            <!-- END SHOWCASE -->
            </div>
        </div>    
    </div>
    <!-- END PRODUCTS -->
    
    <!-- START CONTACTS -->
    <div class="container-fluid bg-telorasin" id="contacts">
        <div class="container">
            <div class="row justify-content-center pt-5">
                <!-- START CONTACT -->
                <div class="col-md-4">
                    <h5>CONTACT US</h5>
                    <p><a href=""><img src="images/icon-ig.png" class="img-fluid pr-3 ">spartangym_bekasi</a></p>
                    <p><a href=""><img src="images/icon-yt.png" class="img-fluid pr-3 ">SPARTAN GYM</a></p>
                    <p><a href=""><img src="images/icon-loc.png" class="img-fluid pr-3 ">RT 005/RW 004 Jatirasa,Jatiasih Bekasi City</a></p>
                    <p><a href=""><img src="images/icon-phone.png" class="img-fluid pr-3 ">021-123456</a></p>
                </div>
                <!-- END CONTACT -->

                <!-- START REGISTER -->
                <div class="col-md-4 text-center pt-3 register">
                    <h5>WANT BECOME OUR MEMBER? <br>CLICK THIS BUTTON <br>&#8595;</h5>
                    <a href="register.php" class="btn btn-secondary">REGISTER</a>
                </div>
                <!-- END REGISTER -->

                <!-- START FACILITIES -->
                <div class="col-md-4 pl-5">
                    <h5>FACILITIES</h5>
                    <p class="text-left">- BATHROOM</p>
                    <p class="text-left">- LOCKER</p>
                    <p class="text-left">- GYM EQUIPMENT (BELT,STRAP,etc)</p>
                </div>
                <!-- END FACILITIES -->
            </div>
        </div>
    </div>
    <!-- END CONTACTS -->

    <!-- START FOOTER -->
    <div class="container-fluid" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center pt-4 pb-2">COPYRIGHT 2021 | &copy; ADWITYO BHAGASKARA</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- LIGHTBOX JQUERY -->
    <script src="js/lightbox-plus-jquery.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <!-- <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    -->
  </body>
</html>