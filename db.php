

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="veg";


$conn=mysqli_connect($servername,$username,$password,$dbname);

 if (!$conn)
  {
 	die("<h3>connection failed..</h3>" .mysqli_connect_error());
 }


?>