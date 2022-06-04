<?php
   $db_hostname="127.0.0.1";
   $db_username="root";
   $db_password="";
   $db_name="freshcorner";

   $conn=mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
   if(!$conn)
   {
       echo "Connection failed" . mysqli_connect_error();
       exit;
   }

   
   $name=$_POST['name'];
   $em=$_POST['email'];
   $ph=$_POST['phone'];
   $pa=$_POST['pass'];

   $sql="INSERT INTO login (name,email,phone,pass) VALUES ('$name','$em','$ph','$pa')";

   $result=mysqli_query($conn,$sql);
   if(!$result)
   {
       echo "Error" . mysqli_error($cann);
       exit;
   }

   echo "Successfull";
   mysqli_close($conn);
?>