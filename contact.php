<?php 
 session_start();

 require('Db_connect.php');

 if(isset($_POST['fullname']))
  {
     $name=$_POST['fullname'];
     $mobile=$_POST['Phonenumber'];
     $email=$_POST['emailaddress'];
     $message=$_POST['message'];
     $status=1;


$query = "INSERT INTO `contactus` (`Name`, `Phonenumber`, `Email`, `Message`,`Status`) VALUES ('$name','$mobile', '$email','$message', '$status')";

     $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
   

      if ($result)
       { 
      
          $statusMsg = "Successfully Registered";
     echo "<script type='text/javascript'>alert('$statusMsg');</script>";
     include 'index.php';

       } 

       else
       	 {
       	 	$statusMsg = "Error Not Able To Send Message";
       	 
       	  echo "<script type='text/javascript'>alert('$statusMsg');</script>";
       	 }
  }

 ?>