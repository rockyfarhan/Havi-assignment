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


<section id="become">
 <div class="container">
 <div class="card text-white bg-dark mb-12" style="padding: 50px;">
   <h3 align="center" class="heading" data-aos="fade-up"
     data-aos-duration="1500">Become a Donar</h3>

  <form name="donor" action="donor.php" class="needs-validation"  method="post"   onsubmit="return allLetter()" data-aos="fade-up"
     data-aos-duration="1500">
    <div class="form-group">
      <label for="username">Name</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter name" name="username" required>
    </div>

    <div class="form-group">
      <label for="mail">Email Address</label>
      <input type="text" class="form-control" id="mail" placeholder="Enter Email Address" name="mail" required>
    </div>

     <div class="form-group">
      <label for="number">Mobile Number</label>
      <input type="number" class="form-control" id="mobileno" placeholder="Enter The Phone Number" name="mobileno" required>

    </div>


     <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="age" placeholder="Enter The Age" name="age" required>

    </div>


     <div class="form-group">
      <label for="gender">Gender</label>
     <select name="gender" class="form-control" id="gender" required>
      <option value="">Select</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Female">Other's</option>
     </select>
    </div>



     <div class="form-group">
       <label> Address</label>
         <textarea style="border: 2px solid #ccc; border-radius: 4px; background-color: #343a40;" class="form-control" name="address" placeholder="Enter The Address"></textarea>    
    </div>


    <div class="form-group">
      <label for="group">Blood group</label>
     <select name="bgroup" class="form-control" id="bgroup" required>
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

    <div class="form-group">
      <label for="message">Message</label>
      <input type="text" class="form-control" id="message" placeholder="Message" name="message" required>
    </div>

   <div align="center">
    <button  type="submit" class=" btn btn-primary col-md-6" onsubmit="fields()">Submit</button>
  </div>
  </form>
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



