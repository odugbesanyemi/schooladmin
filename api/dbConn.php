<?php 
// headers for all applications
header("Access-Control-Allow-Origin:SiteA.com");
header("Access-Control-Allow-Methods:GET,POST,PUT");
header("Access-Control-Allow-Headers:Content-Type");

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "schooldb";
$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
if($conn){
  echo json_encode([
        "status","success"
    ]); 
}
?>