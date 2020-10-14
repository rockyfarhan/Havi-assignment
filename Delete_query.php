

          <!-- php  to delete the queries -->


 <?php 
      
      include 'Db_connect.php';

      if (isset($_POST['id']))

        // Assigning POST values to variables.
          $id = $_POST['id'];

        $query = $connection->query("SELECT *from contactus WHERE Slno = '$id'");
        
        if(!empty($query) && $query->num_rows > 0)
           {
                   while($row = $query->fetch_assoc())
                     {
    
                       mysqli_query($connection, "UPDATE contactus set Status=0 WHERE Slno = '$id'");
          
                         $statusMsg = "Queries attended";
                         echo "<script type='text/javascript'>alert('$statusMsg');</script>";

                      
                      }
             }

             include 'queries.php';
               
  ?>