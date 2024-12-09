<?php session_start();?>
<?php
include ('./connect.php');
error_reporting(0);

if(isset($_SESSION['username']))
{
    $email=$_SESSION['username'];
    
    $query="select * from studentregistration where email_id='$email'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
}
else
{
    header('location:uglogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashbord</title>
  <!-- <link rel="stylesheet" href="../css/admin.css"> -->
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
    margin-left: 50px;
    margin-top: 20px;
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
  background: #11101d;
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
 background-color :green;
}

  </style>
</head>
<body>

<nav class="sidebar">
  <main>
    <div class="container">
    <img src="../image/usericon.png" class="logo">
      <div class="menu-content">
        <ul class="menu-items">
          <div class="menu-title">Student Panel</div>
          
           
          <li class="item">
            <a href="studentdashboard.php">Dashboard</a>
          </li>
          <?php 
          while($row=mysqli_fetch_assoc($data))
          {
          ?>
          <li class="item">
          <a href="ugprofile.php?id=<?php echo $row['email_id']?>">View Profie</a>
          </li>

          <li class="item">
          <a href="../report-generate/viewidcard.php?enrollno=<?php echo $row['enrollment']?>">View Id Card</a>
          </li>

          <li class="item">
            <a href="update.php?id=<?php echo $row['email_id']?>">Update Profile</a>
          </li>


          <li class="item">
            <div class="submenu-item">
            <span>Complaint</span>
            <i class="fa-solid fa-chevron-right"></i>
            </div>
            <ul class="menu-items submenu">
            
              <div class="menu-title">
              <i class="fa-solid fa-chevron-left"></i>
                Back
              </div>

              <li class="item">
                <a href="registercomplaint.php?id=<?php echo $row['email_id']?>">Complaint Registration</a>
              </li>
              <li class="item">
                <a href="viewcomplaintstatus.php?id=<?php echo $row['registration_no']?>">Registered Complaint</a>
              </li>
            </ul>
          </li>

          <li class="item">
            <a href="ugchangepass.php?id=<?php echo $row['email_id']?>">Change Password</a>
          </li>
          <?php
        }
        ?>
          

          
          


        </ul>
      </div>
    </div>
  </main>
</nav>
<nav class="navbar">
  <i class="fa-solid fa-bars " id="sidebar-close"></i>
  <div class="logout">
      <a  href="logout.php" class="btn btn-primary" >Logout</a>
    </div>
</nav>
<main class="main">





  


  
