<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RR MIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href={{asset('css/index.css')}}>
</head>

<body>

    <!-- <header class="navbar navbar-dark bg-primary fixed-top">  -->
        <header class="navbar navbar-dark  fixed-top fixed-top"> 
        <div  class="logo" > <a href="/">
            <img src="{{asset('img/logo.png')}}" alt="College Logo" class="img-fluid">
        </div></a>
        <div class="college-info">
            <h1 class="h3">Ratna Rajyalaxmi Campus</h1>
            <p class="lead">Pradashanimarga, Kathmandu</p>
        </div>
      
       
          
        <div class="paste-button">
            <button class="button">Login &nbsp; ▼</button>
            <div class="dropdown-content">
              <a id="top" href="/student_login">Student</a>
              <a id="middle" href="/Teacher_login">Teacher</a>
              <a id="bottom" href="Admin-Dashboard\admindashboard.html">Admin</a>
            </div>
          </div>
          
          
            <div class="login-box">
                
                <a href="/registration" class="btn btn-light signup">Signup</a>
                <!-- <a href="login.html" class="btn btn-light login">Login </a> -->
            </div>


    </header>

    <div class="background-section">
        <div class="background-overlay"></div>
        <div class="container main-content text-center">
            <h2>Welcome to Ratna Rajyalaxmi Campus</h2>
            <p class="lead">Ratna RajyaLaxmi campus is well known as the center of Humanities and Social Sciences.</p>
            <br>
            <br>
            <a href="/registration" class="btn btn-primary cta-button">Register</a>
        </div>
  
    </div>
    <footer class="footer">
        <!-- <footer class="bg-primary text-white"> -->
        <div class="container">
            <div class="footer-section row">
                
                <div class="col-sm-6 col-md-3">
                    <p class="text-sizes"> Campus</p>
                    <p><a href="#" class="text-white">Privacy Policy</a></p>
                    <p><a href="#" class="text-white">Terms and Condition</a></p>
                    <p><a href="#" class="text-white">Affiliates</a></p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <p class="text-sizes">Related Links</p>
                    <p><a href="#" class="text-white">Notices</a></p>
                    <p><a href="#" class="text-white">Help</a></p>
                    <p><a href="#" class="text-white">FAQs</a></p>
                </div>
                
                <div class="col-sm-6 col-md-3">
                    <p class="text-sizes">Social Profile</p>
                    <p><a href="https://www.facebook.com" target="_blank" class="text-white"><i class="bi bi-facebook"></i></a>    
                        <a href="https://rrlc.tu.edu.np/" target="_blank" class="text-white ml-3"><i class="bi bi-globe-americas"></i></a></p>
                    <p> Developed By:</p>
                    <p> BCA 2019<sup>th</sup> Batch </p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <p class="text-sizes">Contact Details</p>
                    <p ><i class="fas fa-phone"></i><i class="bi bi-telephone"></i> <a href="tel:+9779812345678" class="text-white">0125325819</a></p>
                    <p><a href="https://g.co/kgs/vGCvDo1" target="_blank" class="text-white"><i class="fas fa-map-marker-alt"></i><i class="bi bi-search"></i> Pradashanimarga, Kathmandu</a></p>
                    <p><i class="bi bi-envelope"></i><a href="mailto:rrlc@gmail.com" class="text-white"> info@rrlc.tu.edu.np</a></p>
                </div>
            </div>
            <hr class="bg-light">
            <div class="text-center">
                <p class="small" style="color: rgb(194, 187, 187)">Copyright<i class="bi bi-c-circle"></i> 2024 Ratna Rajyalaxmi Campus or its affiliate(s).All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    
    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
