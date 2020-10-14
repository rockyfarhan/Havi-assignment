<!DOCTYPE html>
<head>
	<title>
		LOGIN
	</title>
</head>

<body>

  <?php  
  session_start();
 



 require('Db_connect.php');
  
if (isset($_POST['username']) and isset($_POST['password']))

{
	
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['user']=$username;


// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `admin_user` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);


if ($count == 1)
     
	include 'dashboard.php';
  
else
  {   
	$statusMsg = "INVALID USER CREDENTIAL";
    echo "<script type='text/javascript'>alert('$statusMsg');</script>";
    include 'login.html';
  }

}

?>

</body>
</html>
