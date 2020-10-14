<!DOCTYPE html>
<html lang="en">
<head>

	<title>BLOOD BANK</title>
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="icon" href="images/ico.png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Transition from external source -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- transition ends -->

    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>

    <style type="text/css">

      html
 {
  font-variant: small-caps;
  scroll-behavior: smooth;
 }


/* Make the image fully responsive */
.carousel-inner img{
  width:100%;
  height: 579px !important;
}


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
  padding: 15px 30px;
  font-size: 23px;
  width: 30px;
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

.heading
 {
  color:#50BFE6;
 }


     
    </style>

</head>
<body style="background-color: #343a40">

<!-- navbar begins -->

<nav  class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#"> Blood Donation System <img src="images/ico2.png" width="30" height="30"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
     <li class="nav-item"><a class="nav-link" href="#home" style="padding: 5px 40px">Home</a></li>
           <li class="nav-item"> <a class="nav-link" href="#why" style="padding: 5px 30px">Why Donor</a></li>
           <li class="nav-item"> <a class="nav-link" href="#become" style="padding: 5px 30px">Become Donor</a></li>
           <li class="nav-item"> <a class="nav-link" href="#Search" style="padding: 5px 30px">Search Blood</a></li>
           <li class="nav-item"> <a class="nav-link" href="#nearby" style="padding: 5px 30px">Nearby Hospitals</a></li>
           <li class="nav-item"> <a class="nav-link" href="#contact" style="padding: 5px 30px">Contact Us</a></li>      
           <a href="login.html"><button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="padding: 5px 45px">Login</button></a>   
  
    </ul>
  </div>  
</nav>

<!-- nav bar ends -->




<!-- carousal begins -->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/c1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/c2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/c3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- carousel ends -->


<!-- page contents begins -->
<section id=home style="padding: 20px;">
 <div class="container">
   <div class="row card-deck">
      <div class="card  text-white bg-dark col-md-4" data-aos="fade-right" data-aos-duration="1500"> 
         <div class="card-header"><b>The Need For Blood</b></div>
           <div class="card-body">
            <ul>
              <li>Blood brings oxygen and nutrients to all the parts of the body so they can keep working.</li>
              <br>
              <li> Blood carries carbon dioxide and other waste materials to the lungs, kidneys, and digestive system to be removed from the body.</li>
              <br>
              <li> Blood also fights infections, and carries hormones around the body.</li>
            </ul>
             </div> 

            </div>

            <div class="card text-white bg-dark col-md-4" data-aos="fade-up" data-aos-duration="1500">
         <div class="card-header"><b>Blood Tips</b></div>
           <div class="card-body">
             <ul>
               <li>The reason to donate is simple…it helps save lives.</li>
               <br>
               <li> In fact, every two seconds of every day, someone needs blood. </li>
               <br>
                <li>Since blood cannot be manufactured outside the body and has a limited shelf life, the supply must constantly be replenished by generous blood donors.</li>
             </ul>
             </div> 
    
            </div>

            <div class="card text-white bg-dark col-md-4" data-aos="fade-left"  data-aos-duration="1500">
         <div class="card-header"><b>Who you could Help</b></div>
           <div class="card-body">
            <ul>
              <p>There are many reasons patients need blood,people needing the most blood include those:</p>
                <br>
               <li> Being treated for cancer </li>
               <li> Undergoing orthopedic surgeries </li>
               <li> Undergoing cardiovascular surgeries </li>
               <li> Being treated for inherited blood disorders</li>
            </ul>
             </div> 
    
            </div>

        </div>
  </div>

<div class="container" style="padding: 20px;">
  <div class="card text-white bg-dark mb-12" style="padding:50px">
       <h3 align="center" class="heading" data-aos="fade-down" data-aos-duration="1500">Bood Groups</h3>
           <p data-aos="fade-up-right" data-aos-duration="1500">  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul data-aos="fade-up-right" data-aos-duration="1500">    
                  <li>A positive or A negative</li>
                  <li>B positive or B negative</li>
                  <li>O positive or O negative</li>
                  <li>AB positive or AB negative.</li>
                </ul>
                <hr>
             <h4 align="center" class="heading" data-aos="fade-left"  data-aos-duration="1500">Universal Donors And Recipients</h4>
               <p data-aos="fade-up-left" data-aos-duration="1500"> The most common blood type is O, followed by type A.

               Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type.Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
           <p data-aos="fade-up-left" data-aos-duration="1500" >A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended things prior to your donation. <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#myModal">
   Do's and Dont's
  </button></p>
     </div>

    
  </div>



  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Do's and Dont's before Blood Donation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="row">
              <div class="col-md-6">
                <h5 style="text-align:center;"> <b> Do's </b> </h5>
                <ul>
                  <li>
                    <b> Do </b> donate with a buddy.
                  </li> <br>
                                        
                  <li>
                    <b> Do </b> eat a low fat healthy meal before you donate.
                  </li> <br>
                  <li>
                    <b> Do </b> drink plenty of fluids one day before, the day of and one day after your donation.
                  </li> <br>

                </ul>
              </div>

              <div class="col-md-6">
                <h5 style="text-align:center;"> <b> Dont's </b>  </h5>
                <ul>
                  <li>
                    <b> Do not </b> smoke immediately before or within one hour after your donation to avoid light-headedness.</li> <br>
                  <li>
                                      <b> Do not </b> rush through juice and cookies.
                  </li> <br>
                  <li>
                    <b> Do not </b> donate if you are not feeling well for any reason.
                  </li> <br>
                </ul>
              </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
 </section>


<!-- WHY DONAR SECTION -->

<section id="why">
  <div class="container" style="padding: 20px;">
    <div class="card text-white bg-dark mb-12" style="padding: 50px;">
      <h5 align="center" class="heading" data-aos="zoom-in" data-aos-duration="1500">Why To Become A Donar</h5>
      <br>
        <p data-aos="zoom-in" data-aos-duration="1500"> Donating blood regularly has proved beneficial not only for the recipient but also the donor. It is helpful for the vital organs, and it reduces risk for chronic diseases such as cancer and stroke.
          <br>
          <br>

For certain treatments like chemotherapy, blood is required on a daily basis, whereas victims of accident may require up to 100 units of blood transfusion. In India, blood shortage is more than 2 million pint and counting.</p>

        <!-- contents and images to be added -->
  </div>
  </div>
</section>
 

 <!-- become a donar -->


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
      

      $query = "SELECT * FROM `donors` WHERE Bloodgroup='$bloodgroup'  AND Status=1 AND  Address LIKE '%$location%' AND Status=1";
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
                      <div class="card-header"><b>Name: <?php echo $row["Name"] ?></b></div>
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


<!-- find hospitals -->
<section id="nearby">
<div class="container">
<div class="card text-white bg-dark mb-12" style="padding: 50px;"> 
         <h3 align="center" class="heading" data-aos="fade-right" data-aos-duration="1500">Nearby Hospitals</h3>

    <div>
      <br>
        <p style="text-align:center;" data-aos="fade-left" data-aos-duration="1500"> Click here to find the hospitals near to your current location. Best Hospitals near me in my city. </p>

        <div align="center">
          <br>
     <button onclick="getLocation();" data-aos="fade-right" data-aos-duration="1500" name="hospitals"  type="submit" class=" btn btn-primary col-md-4">Hospitals</button>
      </div>
    </div>
    </div>
  </div>
  <br> 
</section>
    
  
  
  <script>
    function getLocation() {
      if (navigator.geolocation)

      {
        navigator.geolocation.getCurrentPosition(showPosition);
      }
    }

    function showPosition(position) {
      x = "@" + position.coords.latitude + "," + position.coords.longitude + ",15.40z";

      url = "https://www.google.com/maps/search/Hospitals/" + x
      window.open(url, '_blank');


    }
  </script>



<!-- Contact us Section -->
<Section id="contact">
<form name="contact"  method="post" action="contact.php"  onsubmit="return allLetter2()">
  <div class="container" data-aos="fade-right" data-aos-duration="1500">
    <div class="card text-white bg-dark mb-12" style="padding: 50px;">
    <h3 align="center" class="heading" >Contact Us</h3>
    <div  class="col-md-12">
      <label>Full Name:</label>
      <input type="text" class="form-control" id="name" name="fullname" placeholder="Enter Your Name" required>
    </div>
    <br>

    <div  class="col-md-12">
      <label>Phone Number:</label>
      <input type="number" class="form-control" id="number" name="Phonenumber" placeholder="Enter Your Phone number" required>
    </div>
    <br>

     <div  class="col-md-12">
      <label>Email Address:</label>
      <input type="text" class="form-control" id="mail" name="emailaddress" placeholder="Enter Your Email Address" required>
    </div>
    <br>

    <div  class="col-md-12">
      <label>Message:</label>
      <textarea style="border: 2px solid #ccc; border-radius: 4px; background-color: #343a40;"rows="5" cols="60" class="form-control" id="message" name="message" placeholder="Enter The Message" required></textarea> 
    </div>
    <br>

    <div align="center">
     <button  type="submit" name="send"  class="btn btn-primary col-md-6 " >Send Message</button>
    </div>
  </div>   
  </div>               
 </form>
            
<!-- Footer Section -->

<footer>

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