<?php


if(isset($_POST['save'])){

    $cId = $_POST['cId'];
    $cName= $_POST['cName'];
    $cAdress= $_POST['cAddress'];
    $cTp= $_POST['cTp'];

//     $host = "sql12.freemysqlhosting.net";
//     $user = "sql12345546";
//     $password = "Wxh2nXJAi8";
//     $database = "sql12345546";
   
$host = "localhost";
$user = "root";
$password = "";
$database = "test";



   $conn = mysqli_connect($host, $user, $password, $database);
   
   if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
   }
    
   echo "Connected successfully";
    
   $sql = "INSERT INTO  customer (cName,cAddress,cTp) VALUES ('$cName', '$cAddress','$cTp')";
   
   if (mysqli_query($conn, $sql)) {
   
         echo "New record created successfully";
   
   } else {
   
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   mysqli_close($conn);


}