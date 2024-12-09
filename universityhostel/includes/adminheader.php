<?php 
session_start();
include('./connect.php');
error_reporting(0);//avoid warnning 
$_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashbord</title>
  <!-- <link rel="stylesheet" href="../css/admin.css"> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<!-- box icon cdb link -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
  <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
          *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family:"Poppins",sans-serif;
        } 
        .sidebar
        {
          position: fixed;
          height: 100%;
          width: 260px;
          background:  #11101d;
          top: 0;
          padding: 15px;
      
        }
        .sidebar a
        {
          color: #fff;
          text-decoration: none;

        }
        .logo 
        {
          width:100px;
          margin-left: 25px;
          padding: 0 15px;
        }
        .menu-content
        {
          position:relative;
          height: 100%;
          width: 100%;
          margin-top:40px;
          overflow-y: scroll;
        
        }
        .submenu-active .menu-items
        {
          transform: translateX(-56%);
        }
        .menu-title
        {
          color: #fff;
          font-size: 14px;
          padding: 15px 20px;
        }
        .item a,
        .submenu-item
        {
          padding: 16px;
          display: inline-block;
          width: 100%;
          border-radius: 12px;
        }
        .item i{
          font-size: 12px;

        }
        .item a:hover,
        .submenu-item:hover,
        .submenu .menu-item:hover
        {
          background: rgba(225,255,225 ,0.1);
        }
        .submenu-item
        {
          display:flex;
          justify-content:space-between;
          align-items: center;
          color:#fff;
          cursor: pointer;
        }
        .menu-content::-webkit-scrollbar{
          display: none;
        }
        .menu-items
        {
          width: 100%;
          height: 100%;
          list-style: none;
          transition: all 0.4s ease;
        }
      
        .submenu
        {
          position: absolute;
          margin-right: 10px;
          height: 100%;
          width: 100%;
          top: 0;
          right: calc(-100% - 26px);
          height: calc(100% + 100vh);
          background: #11101d;
          display: none;
        }

      .show-submenu ~ .submenu
      {
      display: block;
      }
      .submenu .menu-title
      {
      border-radius: 12px;
      cursor: pointer;

      }
      .submenu .menu-title i
      {
      margin-right: 10px;
      }
      .navbar,
      .main
      {
        left: 260px;
        width: calc(100% - 260px); 
        transition: all 0.5s ease;
        z-index: 1000;

      }
      .sidebar.close ~ .navbar,
      .sidebar.close ~ .main{
        left: 0;
        width: 100%; 
      }
      .navbar
      {
        position: fixed;
        color: #fff;
        padding:15px 20px;
        font-size: 25px;
        background: #4070f4;
        cursor: pointer;
      }
      .navbar #sidebar-close
      {
        cursor: pointer;
      }
      .main{
        position: relative;
        display: flex;
        align-items:center;
        justify-content: left;
        height: 220vh;
        z-index: 100;
        background: #e7f2fd;
      }
      /* .main h1
      {
        color: #11101d;
        font-size: 40px;
        text-align: center;
      } */
      .main .content
      {
          margin-left: 10%;
          margin-top: 5%;  
          width: 80%;
      }
      .logout a:hover
      {
      background-color :red;
      }


  </style>
</head>
<body>

<nav class="sidebar">
  <main>
    <div class="container">
    <img src="../image/admin_icon.png" class="logo">
      <div class="menu-content">
        <ul class="menu-items">
          <div class="menu-title">Admin Panel</div>

          <li class="item">
            <a href="admindashboard.php">Dashboard</a>
          </li>

          <li class="item">
            <a href="studentregister.php">Students Register</a>
          </li>
          <li class="item">
            <a href="managestudent.php">Manage Students</a>
          </li>

          <li class="item">
            <a href="manageroom.php">Manage Rooms</a>
          </li>

          <li class="item">
            <a href="manageidcard.php">Manage Id Cards</a>
          </li>

          <li class="item">
            <a href="showusers.php">Show Users</a>
          </li>

          
          <li class="item">
            <a href="viewfeedetails.php">Fee Details</a>
          </li>
          <li class="item">
            <a href="noticeboard.php">Notice Board</a>
          </li>

          <li class="item">
            <div class="submenu-item">
            <span>Complaints</span>
            <i class="fa-solid fa-chevron-right"></i>
            </div>
            <ul class="menu-items submenu">
            
              <div class="menu-title">
              <i class="fa-solid fa-chevron-left"></i>
                Back
              </div>

              <li class="item">
                <a href="adminviewcomplaint.php">New</a>
              </li>
              <li class="item">
                <a href="progress-complaint.php">In Progress</a>
              </li>
              <li class="item">
                <a href="close-complaint.php">Close</a>
              </li>
              <li class="item">
                <a href="all-complaints.php">All</a>
              </li>

            </ul>
          </li> 


          <li class="item">
            <div class="submenu-item">
            <span>Application</span>
            <i class="fa-solid fa-chevron-right"></i>
            </div>
            <ul class="menu-items submenu">
            
              <div class="menu-title">
              <i class="fa-solid fa-chevron-left"></i>
                Back
              </div>

              <li class="item">
                <a href="ugapplication.php">UG Students</a>
              </li>
              <li class="item">
                <a href="pgapplication.php">PG Students</a>
              </li>
              <li class="item">
                <a href="ugallotedstudent.php">UG Alloted Students</a>
              </li>
              <li class="item">
                <a href="pgallotedstudent.php">PG Alloted Students</a>
              </li>

            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  </main>
</nav>
<nav class="navbar">
  <i class="fa-solid fa-bars " id="sidebar-close"></i>
  <div class="logout">
      <a href="logout.php" class="btn btn-success" >Logout</a>
    </div>
</nav>
<main class="main">






  


  
