<?php 

require_once 'db_connect.php';

if ($_POST) {
   $brand = $_POST['brand'];
   $available = $_POST['available'];
   $image = $_POST['image'];
   $location = $_POST['location'];
   $price = $_POST['price'];
   $year = $_POST['year'];

   $car_id = $_POST['car_id'];

   $sql = "UPDATE car SET brand = '$brand', available = '$available', image = '$image', location = '$location', price = '$price', location = '$location' WHERE car_id = {$car_id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?car_id=" .$car_id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>