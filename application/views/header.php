<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <style>
        
    body{
        font-family: 'Poppins', sans-serif;
        text-align:justify;
    }

    .container{
        padding:20px;
    }

    footer{
        position:fixed;
        left: 100;
        bottom: 0;
        width:100%
        
    }

    .container-fluid{
      background-color:#12372A;
      padding-top:10px;
      padding-bottom:0px;
      padding-left:20px;
      margin-top:-10px;
      margin-bottom:-10px;
    }

    .navbar-brand{
      font-weight:700;
    }

    .navbar-brand:hover{
      color:#FBFADA
    }

    .nav-link{
      font-weight:600;
    }

 
    .nav-link:hover{
       color: #2A3439
    }

    h1,h2{
      font-weight:600;
    }

    p{
      font-size:11px;
    }

    #navbarNav{
      margin:auto;
      justify-content:center;
      margin-left:350px;
      font-size:11px;
    }

    
    .navbar-brand img {
      max-height: 30px; 
      margin-bottom: 10px;
    }

    .nav-link {
      color: #FBFADA;
    }

    .nav-link:hover {
      color: #ADBC9F; 
    }

    .navbar-nav .nav-link[href="http://localhost/NAPWC/index.php/napwc/user_profile"] {
    background-color: #436850;
    border-radius: 20px;
    padding: 8px 18px; 
     }

     .nav-link-virtual-tour {
        position: relative;
        padding-bottom: 1px;
      }

    .nav-link-virtual-tour::after {
        content: '';
        position: absolute;
        bottom: -3px;
        left: 0;
        margin-left:13px;
        margin-top:-100px;
        width: 70%;
        height: 3px;
        background-color: #ADBC9F; 
        transition: width 0.3s ease;
    }

    .nav-link-virtual-tour:hover::after {
        width: 60px;
        margin-left:10px;
        margin-top:-100px;

      }



        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/NAPWC/index.php/napwc/index">
      <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/Ninoy_Aquino_Parks_and_Wildlife_Center_logo.png" alt="Logo">
    </a>    
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="http://localhost/NAPWC/index.php/napwc/index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/NAPWC/index.php/napwc/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/NAPWC/index.php/napwc/explore">Explore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-virtual-tour" href="http://localhost/NAPWC/index.php/napwc/virtualtour">Virtual Tour</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/NAPWC/index.php/napwc/plan">Visit Us</a>
        </li>
        </ul>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/NAPWC/index.php/napwc/user_profile">
                <img src="https://64.media.tumblr.com/3ad704a5a1513f139edfd290a79668a9/16a2ea308fe801ba-da/s1280x1920/84b52a6e21cc420428099335e2af2a50cb2ff5f9.jpg" alt="Profile Image" style="max-width: 20px; border-radius: 50%; margin-right: 5px;">
                Profile
            </a>
        </li>
    </ul>
</div>
    </div>
  </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-qNEI1mCvhE+AyT2uqB5NqkC74Kk/eOBBLj5Ugl9dCcD4Mqv9fjs5Au1fn3P3p2cy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-JvO1bVRDEEPrT9XVRXPtJLLVqVSR6S6P5xJFJDkvzAqFBy6jbB8L8EVL9a9gNfGo" crossorigin="anonymous"></script>

</body>