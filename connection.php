<?php
$username = "root";
$password = "";
$server ='localhost';
$db = 'course_registration';
 

$con = mysqli_connect($server, $username, $password, $db);
 if($con){
   ?> <script>
      alert("Connection Successful");
   </script>
   <?php
 } else{
   ?> <script>
      alert("No Connection");
   </script>
   <?php
 }

?>