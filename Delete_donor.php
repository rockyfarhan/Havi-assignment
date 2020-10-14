

          <!-- php  to delete the donors -->


 <?php 
      
      include 'Db_connect.php';

      if (isset($_POST['id']))

        // Assigning POST values to variables.
          $id = $_POST['id'];

        $query = $connection->query("SELECT *from donors WHERE id = '$id'");
        
        if(!empty($query) && $query->num_rows > 0)
           {
                   while($row = $query->fetch_assoc())
                     {
    
                       mysqli_query($connection, "UPDATE donors set Status=0 WHERE id = '$id'");
          
                         $statusMsg = "Donor Deleted";
                         echo "<script type='text/javascript'>alert('$statusMsg');</script>";

                      
                      }
             }

        header("Location: search_donor.php");
               
  ?>