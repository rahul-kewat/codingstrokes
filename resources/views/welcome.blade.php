<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coding Strokes | Learn and enhance your skills to find the perfect job</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light mb-3">
    <div class="container-fluid">
        <a href="#" class="navbar-brand mr-3"><img src="../images/CodingStrokes_logo_image.png" height="40px"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link">Donate Us <i class="fa fa-heart"></i> </a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="nav-item nav-link">About Us</a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" class="nav-item nav-link">Pricing</a> &nbsp;&nbsp;&nbsp;&nbsp;
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}"  class="nav-item nav-link">Home</a>
                    @else
                        <a href="{{ route('login') }}"  class="nav-item nav-link">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"  class="nav-item nav-link">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>    
</nav>
<div class="container">
    <div class="jumbotron bg-white">
        <div class="row">
            <div class="col-sm-6">
                <img src="../images/watering_plant_home_page_image.png">
            </div>
            <div class="col-sm-6">
            <br>
                <h4>Learn & Enjoy the community of developers with best in class tutorials written by us.</h4>
                <br>
                <p>
                    We are pleased to offer you the best quality tutorials so that you can learn and enhance your skills. <br><br>
                    Developers are the backbone of this digital world. Thus we pledged to make this more stronger by giving proper training to the geeks. It will be so pleasurable for us to help other geeks struggling to grab some complex concepts.
                </p>
                <a class="btn" href="/login" style="background-color: rgb(193, 9, 88); color: white;">Start Journey Now </a>
                <br>
            </div>
        </div>
    </div>
<hr>
<footer>
    <div class="row">
        <div class="col-md-6">
            <p>Copyright &copy; 2020 Coding Strokes</p>
        </div>
        <div class="col-md-6 text-md-right">
            <a href="#" class="text-dark">Terms of Use</a> 
            <span class="text-muted mx-2">|</span> 
            <a href="#" class="text-dark">Privacy Policy</a>
        </div>
    </div>
</footer>
</div>
</body>
</html>
