<?php include('./header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board</title>
    <style>
        .box 
        {
            max-width: 1500px;
            width: 100%;
            height: 1500px;
            background-color:white;
            margin: 200px auto;
            padding: 35px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.5);
            
                    
        }
        .box .title
        {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 25px;
            color: white;
            text-transform: uppercase;
            text-align: center;
        }
        .link
        {
            text-decoration: none;
            color: blue;

        }
        .link:hover
        {
            color:tomato;
        }
        .circle
        {
            background-color:blueviolet;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 1px solid;
            position: relative;
            top: 50px;
        }
        .circle p
        {
            color: white;
            position: relative;
            left: 10px;
            bottom: 1px;
            
        }

        h4
        {
            margin-left:60px;
            position: relative;
            top: 20px;
        }
        h6
        {
            margin-top: 30px;
        }


    </style>
</head>
<body>
    <div class="box">
        <div class="title">
            <marquee behavior="alternate" direction="" scrollamount="10" bgcolor="red"  > Hostel Notice Board</marquee>
           
            <hr>
    </div>
    <?php
    include('./connect.php');
    $query="select * from notice";
    $result=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_assoc($result))
    {?>
      
    
      
      <div class="circle">
        <p ><?php $wop = $row['post_date']; print date("d M",strtotime($wop))?></p>      
 
      </div>
      <h4 style="color:black"><?php echo $row['title']?><img src="../image/new1.gif" style="width: 40px;"></h4>
    
       
        <h6 style="color:silver"><?php $wop = $row['post_date']; print date("d M Y : ",strtotime($wop))?><?php echo $row['description']?></h6>
        <?php echo"<a href='".$row['file']."'target='blank'  class='link' ><p>Click here for : ".$row['link_title']."</p></a>" ?>
        

   <?php
    }
    ?>
  
    </div>
</body>
</html>
<?php include('./footer.php');?>

