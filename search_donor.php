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

     <link rel="icon" href="images/ico.png">

  	 <link rel="stylesheet" type="text/css" href="css/dashboard.css">
     <!-- link for sidebar -->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <!-- Transition from external source -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- transition ends -->

     <style type="text/css">


      /*make place holder to same color as the background color*/
  input[type="text"],input[type="number"] 
           {
             background-color : #343a40; 
              border: 2px solid #ccc;
              color: #ccc;
            }

            select.form-control,option
             {
                background-color: #343a40;
                 border: 2px solid #ccc;
                color: #6c757d;
              }
 /*ending of color matching */
 
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



</head>
<body style="background-color: black">

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

<div style="margin-left:250px">

<div class="w3-container">
  <br>
  <br>
  <br>  

  <!-- search section  -->
<section id="Search">
  <div class="container">
       <div class="card text-white bg-dark mb-12" style="padding: 50px;"> 
         <h3 align="center" class="heading" data-aos="fade-right" data-aos-duration="1500">Search Donors</h3>

     <form name="donarsearch" method="post">
       <div class="row">
       <div class=" col-md-6">
        <label for="group" data-aos="fade-right" data-aos-duration="1500">Blood group</label>
     <select name="bgroup" class="form-control" id="bgroup" data-aos="fade-right" data-aos-duration="1500">
      <option value="">Select</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
     </select>
     </div>

     <div class="col-md-6" data-aos="fade-left" data-aos-duration="1500">
      <label> Location</label>
         <textarea style="border: 2px solid #ccc; border-radius: 4px; background-color: #343a40;" class="form-control" name="location" placeholder="Enter The Location"></textarea>    
     </div> 
  </div>
<div align="center" data-aos="fade-left" data-aos-duration="1500">
    <br>
    <button name="submit"  type="submit" class=" btn btn-primary col-md-6">Submit</button>
  </div>
</form>
</div> 

<!-- php code for searching the donors -->
<div>
   <?php

    require('Db_connect.php');

   if(isset($_POST['submit']))
   {
      $bloodgroup=$_POST['bgroup'];
      $location=$_POST['location'];
      

      $query = "SELECT * FROM `donors` WHERE Bloodgroup='$bloodgroup'  AND Status=1 AND Address LIKE '%$location%' AND Status=1";
       // $query2 = "SELECT * FROM `donors` WHERE  Address LIKE '%$location%' AND Status=1";


       $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
       // $result = mysqli_query($connection, $query2) or die(mysqli_error($connection));


         if (($result) && $result->num_rows > 0)
           { 
              while($row = $result->fetch_assoc()) 
               { 
                  ?>
                  <br>
                  <div class="row card-deck" align="center">

                  <div class="card  text-white bg-dark col-md-12" data-aos="fade-right" data-aos-duration="1500"> 
                      <div class="card-header"><b>Name: <?php echo $row["Name"] ?></b>
                        <div style="float: right">
                              <form action="Delete_donor.php" method="POST">
                                  <button type="submit" class="btn btn-outline-danger" >Delete</button> 
                                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                              </form>
                           </div>  
                      </div>
                        <div class="card-body">
                          <p>Mobile Number: <?php echo $row["Mobilenumber"] ?></p>
                          <p>Email Address: <?php echo $row["Email"] ?></p>
                          <p>Gender: <?php echo $row["Gender"] ?></p>
                          <p>Age: <?php echo $row["Age"] ?></p>
                          <p>Bloodgroup: <?php echo $row["Bloodgroup"] ?></p>
                          <p>Address: <?php echo $row["Address"] ?></p>
                       </div> 
                       <div class="card-footer bg-transparent border-success"><?php echo $row["Message"] ?></div>
                      </div>             
                  </div>

                  <?php 
               }
                
            }

            else
            {
              ?>
              <br>
              <div class="row card-deck" align="center">

                  <div class="card  text-white bg-dark col-md-12" data-aos="fade-right" data-aos-duration="1500"> 
                     <div class="card-header" style="color: red;font-size: 20px"> No Records Found</div>
                <?php
            }
      }
   ?>
</div>
</div> 
<br>
</section>

</div>
 
</div>


<footer style=" flex-shrink: 0;width: 114%">

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



