<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>page</title>
  <link rel="stylesheet" type="text/css" href="dento.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cinzel+Decorative:wght@900&family=Ewert&family=Josefin+Sans:wght@100&family=Raleway:wght@700&family=Rubik+Beastly&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abel&family=Abril+Fatface&family=Cinzel&family=Cinzel+Decorative:wght@900&family=Cormorant+Garamond:ital,wght@1,300&family=Ewert&family=Josefin+Sans:wght@100&family=Moon+Dance&family=Raleway:wght@700&family=Rubik+Beastly&display=swap"
    rel="stylesheet">
  <style>
    .form-control {
      background-color: transparent;
      color: white;
      border-radius: 20px;
    }

    .form-control:focus {
      background: transparent;
      color: white;
    }

    .form-control::placeholder {
      color: white;
    }


    .card_icon {
      position: absolute;
      bottom: 20%;
      color: rgb(17, 155, 235);
    }

    .card_icon ul {
      display: inline-block;
      list-style-type: none;
      margin-left: 10px;
      font-size: 15px;
    }

    .card_icon li {
      background-color: white;
      height: 30px;
      width: 30px;
      padding: 5px;
      border-radius: 50px;
      display: none;
    }

 .card{
     
     transition: 0.7s ease-in-out;
 }
 .card:hover{
     box-shadow:  0px 7px 7px 7px rgba(0, 0, 0,0.3);
     transform: translateY(5px);
 }
 .btn{
     
     transition: 0.7s ease-in-out;
 }
 .btn:hover{
     box-shadow:  0px 7px 7px 7px rgba(0, 0, 0,0.3);
     transform: translateY(5px);
     color: cyan;
 }
  </style>
</head>

<body>
  <header class="bg-light">
    <div class="container">
      <div class="row p-2">
        <div class="col-2 col-lg-4 mt-2">
          <p><i class="fa fa-map-marker text-primary mr-2"></i><span class="d-none d-md-inline-block">JeevanRang Sonevadi,Ahmednagar</span></p>
        </div>

        <div class="col-2 col-lg-4 mt-2">
          <p><i class="fa fa-envelope text-primary mr-2"></i><span class="d-none d-md-inline-block">
              vishalkamble375@gmail.com</span></p>
        </div>

        <div class="col-8 col-lg-4 mt-2 text-right">
          <ul class="social-media pb-0">
            <li><i class="fab fa-facebook" title="facebook"></i></li>
            <li><i class="fab fa-twitter" title="twitter"></i></li>
            <li><i class="fab fa-google-plus" title="google Plus"></i></li>
            <li><i class="fab fa-linkedin" title="linkedin"></i></li>
            <li><i class="fab fa-pinterest" title="pinterest"></i></li>
          </ul>
        </div>


      </div>
    </div>


  </header>
  <header class="bg-white sticky-top">
    <div class="container p-2">
      <div class="row">
        <div class="col-5 col-md-2">
          <img
            src="image/video.png"
            alt="" class="card bg-transparent border-0 p-1" style="width: 40%;">
        </div>
        <div class="col-7 col-md-8 d-flex justify-content-center">
          <nav class="navbar navbar-expand-lg navbar-light ml-auto">
            <button class="navbar-toggler card" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse font-weight-bolder" style="font-size: 16px;"
              id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Pages
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Cart</a>
                    <a class="dropdown-item" href="#">bloag</a>
                    <div class="dropdown-divider">Gallery</div>
                    <a class="dropdown-item" href="#">News</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownn" role="button" data-toggle="dropdown"
                  aria-expanded="false">
                  Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownn">
                  <a class="dropdown-item" href="#">News</a>
                  <a class="dropdown-item" href="#">Blog new</a>
                </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item d-inline d-md-none">
                  <button class="btn btn-primary">Booking Now</button>

                </li>


              </ul>

            </div>
          </nav>

        </div>
        <div class="col-md-2  text-right d-none d-md-inline">
          <button class="btn btn-primary">Booking Now</button>

        </div>
      </div>
    </div>
  </header>





  <section id="sliderrr">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item slider1 slidersize active">

                <div class="carousel-caption p-4"
                  style=" background-color:hsla(230,100%,15%,0.5);top:0;bottom:0px;right:0px;left:0px;">
                  <div class="row">
                    <div class="col-12">
                      <h1 class="textsize font-weight-bolder" style="margin-top: 150px;">We Believe Everyone Should Have
                        Easy Access To Get Dream Home</h1>
                      <p class="textsize2 mt-3">As a leading industry innovator, Jeevan Rang Farmhouse is opening up exciting new
                        opportunities for professionals, investors, employees. Contact us to find out
                        what we have to
                        offer you.</p>
                    </div>
                    <div class="col-12 mt-5">
                      <a href="login.php"><button class="btn btn-info btn-lg">Get Started</button></a>
                   
                      <a href="contact.php"><button class="btn btn-outline-info btn-lg" style="color: white;">Contact Us</button> </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item slider2 slidersize">
                <div class="carousel-caption p-4"
                  style=" background-color:hsla(230,100%,15%,0.5);top:0;bottom:0px;right:0px;left:0px;">
                  <div class="row mt-5">
                    <div class="col-12">
                      <h1 class="textsize font-weight-bolder" style="margin-top: 150px;">We Believe Everyone Should Have
                        Easy Access To Get Dream Home</h1>
                      <p class="textsize2 mt-3">As a leading industry innovator, Jeevan Rang Farmhouse is opening up exciting new
                        opportunities for professionals, investors, employees. Contact us to find out
                        what we have to
                        offer you.</p>
                    </div>
                    <div class="col-12 mt-5">
                        <a href="login.php"><button class="btn btn-info btn-lg">Get Started</button></a>
                   
                        <a href="contact.php"><button class="btn btn-outline-info btn-lg" style="color: white;">Contact Us</button> </a>
                      </div>
                  </div>
                </div>

              </div>
              <div class="carousel-item slider3 slidersize">
                <div class="carousel-caption p-4"
                  style=" background-color:hsla(230,100%,15%,0.5);top:0;bottom:0px;right:0px;left:0px;">
                  <div class="row mt-5">
                    <div class="col-12">
                      <h1 class="textsize font-weight-bolder" style="margin-top: 150px;">We Believe Everyone Should Have
                        Easy Access To Great Dental Care</h1>
                      <p class="textsize2 mt-3">As a leading industry innovator, Jeevan Rang Farmhouse is opening up exciting new
                        opportunities for professionals, investors, employees. Contact us to find out
                        what we have to
                        offer you.</p>
                    </div>
                    <div class="col-12 mt-5">
                        <a href="login.php"><button class="btn btn-info btn-lg">Get Started</button></a>
                   
                        <a href="contact.php"><button class="btn btn-outline-info btn-lg" style="color: white;">Contact Us</button> </a>
                      </div>
                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12 mt-5">
          <img src="image/J2.jpg" alt=""
            style="width: 100%; margin-top: 50px;">
        </div>
        <div class="col-md-6 col-12" style="margin-top:140px;">
          <div class="col-md-12">
            <h1 class="h3 mb-4 ">About Us</h1>
            <div style="width: 70px; height: 4px; background-color: rgb(62, 144, 236);">
            </div>
            <p class="text-secondary mt-5">We Believe Everyone Should Have
                Easy Access To Great Dental Care</p>
          </div>
          <div class="cpl-md-12 mt-5">
            <span class="font-weight-bold">Cleaning</span>
            <span class="float-right font-weight-bold">100%</span>
            <div class="progress mt-2" style="height: 11px;">
              <div class="progress-bar" style="width: 100%;">100%</div>
            </div>

          </div>

          <div class="cpl-md-12 mt-5">
            <span class="font-weight-bold">Pricing</span>
            <span class="float-right font-weight-bold">65%</span>
            <div class="progress mt-2" style="height: 11px;">
              <div class="progress-bar" style="width: 65%;">65%</div>
            </div>

          </div>

          <div class="cpl-md-12 mt-5">
            <span class="font-weight-bold">Friendly Staff</span>
            <span class="float-right font-weight-bold">85%</span>
            <div class="progress mt-2" style="height: 11px;">
              <div class="progress-bar" style="width: 85%;">85%</div>
            </div>

          </div>


        </div>

      </div>
      <hr class="mt-5">
      <div class="row text-center">
        <div class="col-md-3 mt-5 card bg-transparent border-0">
          <span style="font-size: 50px; color: rgb(13, 182, 224);"><i class="bi bi-flower3"></i></span>
          <h2><span>20</span></h2>
          <h3>Years Of Experience</h3>
        </div>

        <div class="col-md-3 mt-5 card bg-transparent border-0">
          <span style="font-size: 50px;color: rgb(13, 182, 224);"><i class="bi bi-heart"></i></span>
          <h2><span>20</span>+</h2>
          <h3>Happy Owners</h3>
        </div>

        <div class="col-md-3 mt-5 card bg-transparent border-0">
          <span style="font-size: 50px;color: rgb(13, 182, 224);"><i class="bi bi-wallet"></i></span>
          <h2><span>120</span></h2>
          <h3>Certificate</h3>

        </div>

        <div class="col-md-3 mt-5 card bg-transparent border-0">
          <span style="font-size: 50px;color: rgb(13, 182, 224);"><i class="bi bi-person-lines-fill"></i></span>
          <h2><span>40</span>+</h2>
          <h3>Worker</h3>

        </div>

      </div>

    </div>


  </section>


 





  <section id=book_ap0intment class="mt-5">
    <div class="slider5">
      <div class="p-4 hsla">
        <div class="container" style="margin-top: 100px;">
          <div class="row text-center">
            <div class="col-md-12 pb-5"><span
                style="font-size: 40px;font-weight: bold; color: white;border-bottom: 5px solid rgb(55, 212, 252); padding: 10px;">Book
                An Apointment</span></div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <input type="text" class="form-control" placeholder="Your Phone">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <input type="email" class="form-control" placeholder="Your Email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <input type="text" class="form-control" placeholder="Your Address">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <select class="form-control">
                    <option disabled selected>Choose Your Scheldule</option>
                    <option class="text-info">9 AM to 10 AM</option>
                    <option class="text-info">11 AM to 12 PM</option>
                    <option class="text-info">2 PM to 4 PM</option>
                    <option class="text-info">8 PM to 10 PM</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <select class="form-control">
                    <option disabled selected>Choose Your Scheldule</option>
                    <option class="text-info">9 AM to 10 AM</option>
                    <option class="text-info">11 AM to 12 PM</option>
                    <option class="text-info">2 PM to 4 PM</option>
                    <option class="text-info">8 PM to 10 PM</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-30">
                  <textarea name="your-message" class="form-control" placeholder="Your Message"></textarea>
                </div>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Booking Now</button>
              </div>
            </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>


 
        </div>
      </div>
    </div>
  </footer>
</body>

</html>