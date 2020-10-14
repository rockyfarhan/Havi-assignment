<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>

	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

       <!-- Transition from external source -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- transition ends -->

     <link rel="icon" href="images/ico.png">

  	 <link rel="stylesheet" type="text/css" href="css/dashboard.css">
     <!-- link for sidebar -->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <style type="text/css">
     	/*social media icons begins*/
  .fa 
  {
  padding: 5px 10px;
  font-size: 23px;
   text-align: center;
  text-decoration: none;
  margin: none;
  border-radius: 50%;
}

.fa:hover
 {
   color: black;
 }

.fa-facebook, .fa-google, .fa-linkedin, .fa-instagram
{
 
  color: white;
}

/*social media ends*/
     </style>



     <script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;
currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
}   
return output;
}
</script>



</head>
<body style="background-color: black">

  <?php session_start(); ?>

<!-- nav bar begins -->
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Blood Donation System <img src="images/ico2.png" width="30" height="30"></a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    	<!-- space to make the logout button to the right of the webpage -->
    </ul>
    <div class="form-inline my-2 my-lg-0">
     <a href="LOGOUT.php"><button class="btn btn-outline-danger my-2 my-sm-0">Logout</button></a>
    </div>
  </div>
</nav>
<!-- nav bar ends -->

<!-- side bar begins -->
<div class="w3-sidebar w3-bar-block w3-black w3-xxlarge" style="width:250px">
  <div align="center">
    <span><u>Main </u></span>
  </div>

  <a href="dashboard.php" class="w3-bar-item w3-button"><i class="fa fa-home" style="font-size:25px;"><span> &nbsp;Dashboard</span></i></a> 

  <a href="search_donor.php" class="w3-bar-item w3-button"><i class="fa fa-search" style="font-size:25px;"><span> &nbsp; Search Donor</span></i></a> 

  <a href="add donor.php" class="w3-bar-item w3-button"><i class="fa fa-plus" style="font-size:25px;"><span> &nbsp; Add Donor</span></i></a> 

  <a href="queries.php" class="w3-bar-item w3-button"><i class="fa fa-globe" style="font-size:25px;"><span> &nbsp; Queries</span></i></a>
  
  <a href="password.php" class="w3-bar-item w3-button"><i class="fa fa-wrench" style="font-size:25px;"><span> &nbsp; Change Password</span></i></a> 

</div>

 <?php 
      
      include 'Db_connect.php';


      
      $id=$_SESSION['user'];
      
      
      if (count($_POST) > 0)
      {
        $query = $connection->query("SELECT *from admin_user WHERE username = '$id'");
        
        
        
        if(!empty($query) && $query->num_rows > 0)
               {
         while($row = $query->fetch_assoc())
         {
        if ($_POST["currentPassword"] == $row["password"])
         {
          mysqli_query($connection, "UPDATE admin_user set password='". $_POST["newPassword"]."' WHERE username = '$id'");
          
           $statusMsg = "Successfully changed the password";
                      echo "<script type='text/javascript'>alert('$statusMsg');</script>";

                       
        }
        else
              {
                          $statusMsg = "Please check again, old password incorrect!";
                      echo "<script type='text/javascript'>alert('$statusMsg');</script>";

                       
        }
      }
               }
               }
  ?>

<div style="margin-left:250px">

<div class="w3-container">
  <br>
  <br>
        
      <form name="frmChange" method="post" action="" onsubmit="return validatePassword()">
        <div class="message"> <?php if(isset($message)) {
          echo $message; } ?> </div>
        
        <table border ="0" cellpadding="10" cellspacing="20" width="500" align="center" class="tblSaveForm">
          <tr class="tableheader">
          <td colspan="2" style="text-align: center;"><h3 class="heading"  data-aos="fade-down" data-aos-duration="1500" style="color: white">Change Password</h3></td>
          </tr>
          <tr><td><br></td></tr>
          <tr  data-aos="fade-right" data-aos-duration="1500">
            <td width="40%"><label style="color: white" >Current Password</label></td>
            <td width="60%"><input type="password" name="currentPassword" class="txtField" style= "width:250px"/><span id="currentPassword"  class="required"></span></td>
            </tr>
          <tr  data-aos="fade-left" data-aos-duration="1500">
          <td><label style="color: white">New Password</label></td>
          <td><input type="password" name="newPassword" class="txtField" style= "width:250px"/><span id="newPassword" class="required"></span></td>
          </tr>
          <tr  data-aos="fade-right" data-aos-duration="1500">
          <td ><label style="color: white">Confirm Password</label></td>
          <td><input type="password" name="confirmPassword" class="txtField" style= "width:250px"/><span id="confirmPassword" class="required"></span></td>
          </tr>
          <tr  data-aos="fade-left" data-aos-duration="1500">
            <td><br><br><br><br></td>
          <td colspan="2" style="text-align: center"><input type="submit" name="submit" value="Submit" class="btn btn-primary col-md-6"></td>
          </tr>
          </table>
          </div>
      </form>
      

</div>
 
</div>


<footer style=" position: absolute;
 bottom: 0;width: 114%">

  <div class="container">
    <hr>
    <div align="center">
       <a href="#" class="fa fa-facebook"></a>
       <a href="#" class="fa fa-google"></a>
       <a href="#" class="fa fa-linkedin"></a>
       <a href="#" class="fa fa-instagram"></a>
       <br>
        <h6 align="center" style="padding: 10px;"> Copyright &copy; 2020 Dream Killers </h6>
    </div>
  </div>
</footer>

<script>
  AOS.init();
</script>

</body>
</html>



