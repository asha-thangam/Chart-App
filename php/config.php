<?php
   /* $conn=mysqli_connect("localhost","root","","chat");
    if(!$conn){
        echo "Database connected",mysqli_connect_error();
    }*/
?>
<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
