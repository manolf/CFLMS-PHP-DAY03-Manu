<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <title>PHP CARUNIVERSE  |  Add Car</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<nav class="navbar navbar-light bg-dark">
        <form class="form-inline">
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/index.php" role="button">Home</a>
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/create.php" role="button">Add Car</a>
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/contact.php" role="button">Contact</a>
        </form>
    </nav>

<fieldset >
   <legend>Add User</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Brand</th >
               <td><input  type="text" name="brand"  placeholder="Brand" /></td >
           </tr>    
           <tr>
               <th>Cars available</th>
               <td><input  type="text" name= "available" placeholder="available" /></td>
           </tr>
           <tr>
               <th>Image path</th>
               <td><input type="text"  name="image" placeholder ="image" /></td>
           </tr>
           <tr>
               <th>Location</th >
               <td><input  type="text" name="location"  placeholder="location" /></td >
           </tr>    
           <tr>
               <th>Price</th>
               <td><input  type="text" name= "price" placeholder="price" /></td>
           </tr>
           <tr>
               <th>Year</th>
               <td><input type="text"  name="year" placeholder ="year" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert car</button></td>
               <td ><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>