<?php 

require_once 'db_connect.php';

if ($_POST) {
   $car_id = $_POST['car_id'];

   $sql = "DELETE FROM car WHERE car_id = {$car_id}";
    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='../index.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>