<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jaunpur Silai Center Best Designer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="script.js"></script> -->
<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
</head>
<?php 
error_reporting(0);
require("config/db.php");
session_start();
 $user_key=$_SESSION['user_key'];
 $data=mysqli_query($way,"SELECT `f_name`,`email_id`,`pic` FROM `sign_up` WHERE `email_id`='$user_key'");
 $row=mysqli_fetch_array($data,MYSQLI_ASSOC);
 // echo "<pre>";
 // print_r($row);
 $f_name=$row['f_name'];
  $email_id=$row['email_id'];
  $pic=$row['pic'];


?>

<body>

<!-- Start Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top shadow-5-strong">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="#">
      <img src="images/tailor_girl.JPG" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
      <span style="text-shadow: 5px 5px red;text-decoration: underline;font: bold 25px monospace;">Tailor </span>
    </a>
    <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
        <a class="nav-link active text-primary" href="#">Home</a>
      </li>
     <li class="nav-item">
        <a class="nav-link text-success" href="#about" title="Go to About Us">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-secondary" href="#letest_design" title="Go to letest design">Letest Design</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning" href="#contact">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">Login/Logout</a>
      </li>
      <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle text-info" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#services">Services</a></li>
    <li><a class="dropdown-item" href="#">Another link</a></li>
    <li><a class="dropdown-item" href="#">A third link</a></li>
  </ul>
</li>
<li class="scroll active">
                             <img src="assets/uploads/<?php echo $pic; ?>" style="border-style: solid; width: 40px; height: 40px; border-radius: 50rem;">
                             <span style="box-sizing: border-box;"> <?php echo $f_name; ?></span>
                         </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Carousel -->
<div id="demo" class="carousel slide mt-4" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
   <div class="carousel-item active">
        <img alt="Bajaj Machine" class="d-block w-100" src="images/111.jpg" style="width:100%;height: 900px">
        <div class="carousel-caption">
              <h5 class="text-center fw-bold display-1 mb-5">Jaunpur Silai Center</h5>
                              <p class="text-center text-danger" style="font: italic 25px monospace;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
      </div>
    <div class="carousel-item">
      <img src="images/222.jpg" alt="Bajaj Machine" class="d-block" style="width:100%;height: 900px">
      <div class="carousel-caption">
              <h5 class="text-center fw-bold display-1 mb-5">Jaunpur Silai Center</h5>
                              <p class="text-center text-danger" style="font: italic 25px monospace;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
       </div> 
    </div>
    <div class="carousel-item">
      <img src="images/333.jpg" alt="Bajaj Machine" class="d-block" style="width:100%;height: 900px">
     <div class="carousel-caption">
              <h5 class="text-center fw-bold display-1 mb-5">Jaunpur Silai Center</h5>
                              <p class="text-center text-danger" style="font: italic 25px monospace;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- about section starts -->

      <section id="about" class="about section-padding">
        <h5 class="text-center fw-bold display-1 mb-5"> <span class="text-info">About </span><span class="text-warning"> Us</span></h5>

          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="images/tailor_girl1.JPG" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="about-text">
                            <h2>The Art of Measuring <br/> Step 1</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora, explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis porro doloribus obcaecati placeat natus iste odio est non earum?</p>
                            <a href="#" class="btn btn-warning">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row">
                  
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="about-text">
                            <h2>The Art of Measuring <br/> Step 2</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda eos quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora, explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum explicabo ipsum dolor, ipsa perferendis porro doloribus obcaecati placeat natus iste odio est non earum?</p>
                            <a href="#" class="btn btn-warning">Learn More</a>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="images/tailor_girl2.JPG" alt="" class="img-fluid">
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- about section Ends -->


<!-- Start Owl_Carousel -->
<div id="letest_design" class="container-fluid my-5">
        <h3 class="text-center fw-bold display-1 mb-5">Letest <span class="text-danger">Design</span></h3>
        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <img src="images/design (0).jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Design 1</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="images/design (1).jpeg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Design 2</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="images/design (2).jpeg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Design 3</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="images/design (3).jpeg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Design 4</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="images/design (4).jpeg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Design 5</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="images/design (6).jpeg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Design 6</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="images/design (11).jpeg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Design 7</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="images/design (7).jpeg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Design 8</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="images/design (8).jpeg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                   <h4>Design 9</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="images/design (9).jpeg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Design 10</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="images/design (10).jpeg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h4>Design 11</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
 <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
<!-- End Owl_Carousel -->

<!-- Services Start -->
<section id="services" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                         <h6 class="text-center fw-bold display-1 mb-5"> <span class="text-secondary">Our </span><span class="text-primary"> Services</span></h6>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="https://i.pinimg.com/originals/c4/26/4b/c4264b6f6957cb9dd173e2968e3d51b9.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="https://i.ytimg.com/vi/pWXwZ_xsKe0/maxresdefault.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            <button class="btn bg-warning text-dark">learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="https://i.ytimg.com/vi/pKDyDJ7zJIM/maxresdefault.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
<!-- Services end -->
     
<!-- Contact starts -->
      <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                         <h6 class="text-center fw-bold display-1"> <span class="text-danger">Contact </span><span class="text-dark"> Us</span></h6>
                        
                    </div>
                </div>
            </div>
      <div class="row m-0">
        <div class="col-md-12 p-0 pt-4 pb-4">
          <form action="#" class="bg-light p-4 m-auto">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <input class="form-control" placeholder="Full Name" required="" type="text">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <input class="form-control" placeholder="Email" required="" type="email">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <textarea class="form-control" placeholder="Message" required="" rows="3"></textarea>
                </div>
              </div><button class="btn btn-warning btn-lg btn-block mt-3" type="button">Send Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </section>
      <!-- contact ends -->              
</body>
</html>


