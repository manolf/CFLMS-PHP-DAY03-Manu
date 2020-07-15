<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <title>PHP CRUD CAR</title>

    <style type="text/css">
        .manageCar {
            width: 50%;
            margin: auto;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }
    </style>

</head>

<body>

    <!-- bootstrap version -->
    <nav class="navbar navbar-light bg-dark">
        <form class="form-inline">
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/index.php" role="button">Home</a>
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/create.php" role="button">Add Car</a>
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/contact.php" role="button">Contact</a>
        </form>
    </nav>

        <div class="jumbotron jumbotron-fluid bg-dark text-white">
            <div class="container">
                <h1 class="display-4">CarUniverse</h1>
                <p class="lead">Here you can find the matching car to your dreams.</p>
            </div>
        </div>

        <div class="container autos row row-cols-1 row-cols-md-2 row-cols-lg-3 mx-auto">

        <?php
		$servername = "localhost";
		$username   = "root";
		$password   = "";
		$dbname     = "caruniverse";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		   die("Connection failed: " . mysqli_connect_error() . "\n");
		}
		$sql = "SELECT * FROM car";
		$result = mysqli_query($conn, $sql);
		// fetch the next row (as long as there are any) into $row
		while($row = mysqli_fetch_assoc($result)) {
			$available =  $row["available"];
            $brand =  $row["brand"];
            $price =  $row["price"];
            $image =  $row["image"];
            $year = $row["year"];
            $location = $row["location"];

    ?>

	<div class="col mb-4 ">
		<div class="card px-1 py-1 bg-light" >
			<img src="img/<?= $image?>" class="card-img-top" alt="..." style="height: 30vh"	>
			<div class="card-body">
				<h4 class="card-title"><?php 
				if ($available == 0) {
                        echo "<b>available:</b> " . "<span style='color:red'>No</span>";
                    } else {
                        echo "<b>available:</b> " . "<span style='color:green'>Yes</span>";
                    } 
                    ?></h4>
				<h4 class="card-text">Brand: <?= $brand?>, <span  ></span></h4>
				<h4 class = "card-text text-info">Price: <?= $price?></h4>
				<h5 class="card-text">Year: <?= $year?></h5>
			</div>
			<div class="card-footer text-center">
				<span class="">
					<h5>Location: <?= $location?></h5>
                </span>
				<a href="delete.php?car_id=<?= $row['car_id'];?>" class="btn btn-outline-danger btn-block">Delete the car</a>
				<a href="update.php?car_id=<?= $row['car_id'];?>" class="btn btn-outline-success btn-block">Update car details</a>
			</div>
		</div>
    </div>	
    
	<?php	
		}
		
		// Free result set
		mysqli_free_result($result);
		// Close connection
		mysqli_close($conn);
	?>





        <!-- pure crude version -->
        <!-- <div class ="manageCar">
   <a href= "create.php"><button type="button" >Add Car</button></a>
   

  <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Brand</th>
               <th>Pieces available</th>
               <th>Image</th>
               <th>Location</th>
               <th>Price</th>
               <th>Year</th>
           </tr>
       </thead>
       <tbody>

      <?php
        // $sql = "SELECT * FROM car"; // WHERE active = 0";
        //    $result = $connect->query($sql);
        //     if($result->num_rows > 0) {
        //         while($row = $result->fetch_assoc()) {
        //            echo  "<tr> -->
        //                <td>" .$row['brand']."</td>
        //                <td>" .$row['available']."</td>
        //                <td><img class= 'foto'src='img/" .$row['image']. "'> </td>
        //                <td>" .$row['location']."</td>
        //                <td>" .$row['price']."</td>
        //                <td>" .$row['year']."</td>
        //                <td>
        //                    <a href='update.php?car_id=" .$row['car_id']."'><button type='button'>Edit</button></a>
        //                    <a href='delete.php?car_id=" .$row['car_id']."'><button type='button'>Delete</button></a>
        //                </td>
        //            </tr>" ;
        //        }
        //    } else  {
        //        echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
        //    }
        ?>    
       </tbody>
   </table> -->






        </div>

</body>

</html>