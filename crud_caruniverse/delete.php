<?php 

require_once 'actions/db_connect.php';

if ($_GET['car_id']) {
   $car_id = $_GET['car_id'];

   $sql = "SELECT * FROM car WHERE car_id = {$car_id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <title >Delete Car</title>
</head>
<body>
<nav class="navbar navbar-light bg-dark">
        <form class="form-inline">
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/index.php" role="button">Home</a>
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/create.php" role="button">Add Car</a>
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/contact.php" role="button">Contact</a>
        </form>
    </nav>

<h3>Do you really want to delete this car?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "car_id" value="<?php echo $data['car_id'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="index.php"><button type="button">No, go back!</button ></a>
</form>

</body>
</html>

<?php
}
?>