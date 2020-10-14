<?php 
 session_start();

 require('Db_connect.php');

 if(isset($_POST['username']))
  {
     $name=$_POST['username'];
     $email=$_POST['mail'];
     $mobile=$_POST['mobileno'];
     $age=$_POST['age'];
     $gender=$_POST['gender'];
     $address=$_POST['address'];
     $blodgroup=$_POST['bgroup']; 
     $message=$_POST['message'];
     $status=1;


$query = "INSERT INTO `donors` (`Name`, `Mobilenumber`, `Email`, `Gender`, `Age`, `Bloodgroup`, `Address`, `Message`,`Status`) VALUES ('$name','$mobile', '$email','$gender',  '$age', '$blodgroup', '$address',  '$message', '$status')";

     $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
   

      if ($result)
       { 
      
          $statusMsg = "Successfully Registered";
     echo "<script type='text/javascript'>alert('$statusMsg');</script>";
     include 'index.php';

       } 

       else
       	 {
       	 	$statusMsg = "Registration unsuccessful";
       	 
       	  echo "<script type='text/javascript'>alert('$statusMsg');</script>";
       	 }
  }

 ?>