<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Home</title>
  <style>
        body{
        padding: 0;
        margin: 0;
        padding-top:90px ;
        }

        header{
        position: fixed;
        color:white;
        font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 30px;
        text-align: center;
        background: hsl(204, 90%, 53%);
        width: 100%;
        height: 90px;
        padding: 20px;
        top: 0;
        z-index: 9999;
        }
      .box1
        {
        position: fixed;
        width: 100%;
        
        }
        @media (max-width: 470px)
        {
          .box1
          {
            width: 100%;
          }
        }
        .dropdown:hover .dropdown-menu
        {
          display: block;
          background-color:black;
          opacity: 0.5;
          border-radius: 5px;
        
        }
        .dropdown:hover .dropdown-menu a
        {
          color:#fff;
        }
        .dropdown .dropdown-menu a:hover
        {
          background-color:grey;
        }
 
        .nav-item:hover
        {
          background-color: green;
          border-radius: 5px;
        }
        .btn-group:hover .dropdown-menu
        {
          display: block;
          background-color:black;
          opacity: 0.5;
          border-radius: 5px;
          margin-top: 40px;
        }
        .btn-group:hover .dropdown-menu a
        {
          color:#fff;
        }
        .btn-group .dropdown-menu a:hover
        {
          background-color:grey;
        }


  </style>
</head>
<body>
   <header>
    ONLINE  HOSTEL RECORD SYSTEM
  </header>
 
  <!-- navbar -->

<div class="box1"> 
<nav class="navbar navbar-expand-lg bg-dark ">
  <div class="container-fluid ">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="home.php">Home</a>
        </li>
 
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="shownoitce.php">Hostel Notice</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="Hostel_warden.php">Hostel Warden</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hostel Registration
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./ugregistration.php">UG Registration</a></li>
            <li><a class="dropdown-item" href="./pgregistration.php">PG Registration</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Portals
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="pyment_form.php">Submit Hostel Fee</a></li>
          <li><a class="dropdown-item" href="downloadfeereceipt.php">Download Hostel Fee Reciept</a></li>
            <li><a class="dropdown-item" href="download-application-reciept.php">Download Application Reciept</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="contact_us.php">Contact Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="about_us.php">About Us</a>
        </li>
      </ul>
      <form class="d-flex">
      <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle me-5" data-bs-toggle="dropdown" aria-expanded="false">
    User Login
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="./uglogin.php">UG Login</a></li>
    <li><a class="dropdown-item" href="./pglogin.php">PG Login</a></li>
  </ul>
</div>
      
   <a class="btn btn-success me-3" href="./adminlogin.php" role="button">Admin Login</a>
      </form>
    </div>
  </div>
</nav>
</div> 

