<!DOCTYPE html>
<html>
<head>
    <title>AYE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="frontend/styles/main.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,600,700,800|Playfair+Display:400,700,700i,900,900i&display=swap" rel="stylesheet">
</head>

<body>


       <nav class="navbar navbar-expand-lg navbar-light navbar-right bg-light">
  <a class="navbar-brand" href="#">AYE Project</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-3">
      <li class="nav-item active mr-5">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active mr-5">
        <a class="nav-link" href="#">Berita</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-primary font-weight-bold" href="{{url('/login')}}">Login</a>
      </li>
     
    </ul>
  </div>
</nav>

    <header id="header" class="text-center">
        <h1> Lets invest your money <br> Lets Grow Up Together</h1>
        <p> investasi murah <br> media belajar investasi untuk para millenial  </p>

        <a href="" title="" class="btn btn-get-started btn-primary px-4 mt-4" >Get Started</a>
    </header><!-- /header -->

<main>
    
        <section class="section-popular-content" id="popular-content">
            <div class="container">
                <div class="row section-popular-travel justify-content-center">
                    
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column
                        " style="background-image: url('frontend/images/content/popular1.jpg');">
                            <div class="travel-country">
                                Indonesia
                            </div>
                            <div class="travel-location">
                                Jakarta,Indonesia
                            </div>
                            <div class="travel-button mt-auto">
                                
                                <a href="" title="" class="btn btn-travel-details px-4">View Details</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column
                        " style="background-image: url('frontend/images/content/popular2.jpg');">
                            <div class="travel-country">
                                Malaysia
                            </div>
                            <div class="travel-location">
                                Kuala Lumpur,Malaysia
                            </div>
                            <div class="travel-button mt-auto">
                                
                                <a href="" title="" class="btn btn-travel-details px-4">View Details</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column
                        " style="background-image: url('frontend/images/content/popular3.jpg'); background-size: cover;">
                            <div class="travel-country">
                                Saudi Arabia
                            </div>
                            <div class="travel-location">
                                Mecca,Saudi Arabia
                            </div>
                            <div class="travel-button mt-auto">
                                
                                <a href="" title="" class="btn btn-travel-details px-4">View Details</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column
                        " style="background-image: url('frontend/images/content/popular4.jpg');">
                            <div class="travel-country">
                                Germany
                            </div>
                            <div class="travel-location">
                                Hamburg,Germany
                            </div>
                            <div class="travel-button mt-auto">
                                
                                <a href="" title="" class="btn btn-travel-details px-4">View Details</a>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <section class="section-network" id="networks">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>We collaborate with trusted company</p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{asset('images/network1.png')}}"  height="200px" alt="">

                        <img src="frontend/images/content/network2.jpg" height="80px" alt="">

                        <img src="frontend/images/content/network3.jpg" height="80px" alt="">
                    </div>
                </div>
            </div>

        </section>

        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="row section-popular-travel justify-content-center">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/content/user1.jpg" class=" mb-4 rounded-circle"alt="">
                                <h3 class="mb-4">Maria</h3>
                                <p class="testimonial">" This is a wonderfull trip , good service and easy to travel everywhere "</p>

                                <hr>
                                <p class="trip-to mt-2">Trip to Bandung</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/content/user2.jpg" class=" mb-4 rounded-circle"alt="">
                                <h3 class="mb-4">Desy</h3>
                                <p class="testimonial">" This is a wonderfull trip , good service and easy to travel everywhere "</p>

                                <hr>
                                <p class="trip-to mt-2">Trip to Ubud</p>
                            </div>
                        </div>
                        
                    </div><div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/content/user3.jpg" class=" mb-4 rounded-circle"alt="">
                                <h3 class="mb-4">Melody</h3>
                                <p class="testimonial">" This is a wonderfull trip , good service and easy to travel everywhere "</p>

                                <hr>
                                <p class="trip-to mt-2">Trip to Lombok</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" title="" class="btn btn-need-help px-4 mt-4 mx-1 border-dark">I Need Help</a>

                        <a href="#" title="" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
</main>


    <footer class="section-footer mt-5 pb-4 border-top">
        <div class="container pt-5 pb-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <h5>Features</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" title="">Reviews</a></li>
                                        <li><a href="#" title="">Content</a></li>
                                        <li><a href="#" title="">Comunity</a></li>  
                                        <li><a href="#" title="">affiliate</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h5>Accounts</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" title="">Security</a></li>
                                        <li><a href="#" title="">Profile</a></li>
                                        <li><a href="#" title="">Reward</a></li>    
                                </ul>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h5>Social Media</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" title="">Twitter</a></li>
                                        <li><a href="#" title="">Facebook</a></li>
                                        <li><a href="#" title="">Instagram</a></li> 
                                        <li><a href="#" title="">Google</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h5>Get Connected</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#" title="">Jakarta Selatan</a></li>
                                        <li><a href="#" title="">Indonesia</a></li>
                                        <li><a href="#" title="">081907284634</a></li>  
                                        <li><a href="#" title="">TravelJauh@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                     </div> 
                </div>

        </div>
        <div class="container-fluid">
                <div class="border-top row justify-content-center align-items-center-center pt-4">
                    <div class="col-auto font-weight-light text-gray-dark">
                        Copyright2019.
                    </div>
                </div>
        </div>  
    </footer>

</body>
</html>