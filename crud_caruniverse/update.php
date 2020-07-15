<?php 

require_once 'actions/db_connect.php';

if ($_GET['car_id']) {
   $car_id = $_GET['car_id'];

   $sql = "SELECT * FROM car WHERE car_id = $car_id" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit Car</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-light bg-dark">
        <form class="form-inline">
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/index.php" role="button">Home</a>
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/create.php" role="button">Add Car</a>
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/contact.php" role="button">Contact</a>
        </form>
    </nav>

<fieldset>
   <legend>Update car</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">

       <tr>
               <th>Brand</th>
               <td><input  type="text" name="brand"  placeholder="brand" value="<?php echo $data['brand'] ?>" /></td >
           </tr>    
           <tr>
               <th>Cars available</th>
               <td><input  type="text" name= "available" placeholder="available" value="<?php echo $data['available'] ?>" /></td>
           </tr>
           <tr>
               <th>Image path</th>
               <td><input type="text"  name="image" placeholder ="image" value="<?php echo $data['image'] ?>" /></td>
           </tr>
           <tr>
               <th>Location</th >
               <td><input  type="text" name="location"  placeholder="location" value="<?php echo $data['location'] ?>" /></td >
           </tr>    
           <tr>
               <th>Price</th>
               <td><input  type="text" name= "price" placeholder="price" value="<?php echo $data['price'] ?>" /></td>
           </tr>
           <tr>
               <th>Year</th>
               <td><input type="text"  name="year" placeholder ="year" value="<?php echo $data['year'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "car_id" value= "<?php echo $data['car_id']?>" />
               <td><button  type= "submit">Save Changes</button></td>
               <td><a  href= "index.php"><button  type="button">Back</button ></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?>