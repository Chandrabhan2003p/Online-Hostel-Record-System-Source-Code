<?php
$host="localhost";
$username="root";
$password="";

$con=new PDO("mysql:host=$host;dbname=myhostel",$username,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// $getdata=$con->prepare("SELECT * FROM tabledata");
// $getdata->execute();
// $student=$getdata->fetchAll();
// print_r($student);
?>