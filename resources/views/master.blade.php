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
        <a class="nav-link" href="{{url('/jenis')}}">Jenis <span class="sr-only">(current)</span></a>
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


<main>
    @yield('content')

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