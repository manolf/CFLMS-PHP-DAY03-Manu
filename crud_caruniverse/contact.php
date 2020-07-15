<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-light bg-dark">
        <form class="form-inline">
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/index.php" role="button">Home</a>
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/create.php" role="button">Add Car</a>
            <a class="btn btn-outline-success" href="http://localhost/codefactory/day3/crud_caruniverse/contact.php" role="button">Contact</a>
        </form>
    </nav>

    <div container>

<h1>We are here for you! </h1>
<p>Drop us a line and we will contact you</p>
<form action="contact.php" method ="POST">

Name*: <input type ="text" name="name" /><br><br>
email*: <input type="text"  name="email" /><br><br>
telephone: <input type="text"  name="phone" /> <br><br>
message: <input type="text"  name="message" rows="2" style="width: 480px; height:50px" />
<input  type="submit" name="submit"  />
</form>

    </div>

<?php

if( isset($_POST['submit']))
{
if( $_POST["name" ] && $_POST["email"] )

//Connection part start
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caruniverse";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error(). "\n");
}
//echo "Connected successfully<br>";
//Connection part end


// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST[ 'phone']);
$message = mysqli_real_escape_string($conn, $_POST[ 'message']);

// attempt insert query execution
//$sql = "INSERT INTO Users (firstname, lastname, email) VALUES ('John', 'Doe', 'john@doe.com')";

$sql = "INSERT INTO contact (name, email, phone, message) VALUES ('$name', '$email', '$phone','message')";
//$sql = "INSERT INTO Users (firstname, lastname, email) VALUES ($first_name, $last_name, $email)";
if (mysqli_query($conn, $sql)) {
    echo "<p class='text-success'>Thank you for your message, $name! <br> We will contact you as soon as possible.<p>";
} else {
    echo "<h1 class='text-danger'>Record creation error for: </h1>" .
         "<p>"  . $sql . "</p>" .
         mysqli_error($conn);
}

//Closing Database Connection
mysqli_close($conn);






}
?>
    
</body>
</html>