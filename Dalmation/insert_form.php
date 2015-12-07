<html>
<head>
<link href="links.css" rel="stylesheet" type="text/css"/>
<title> Confirmation</title>
</head>


<body style="color: rgb(255,255,0);background-color: darkred; font-family:
 serif,arial;margin: 10 50 0 50;">

<!-- change link colors using body tags in html attach right after margin
"link="white" vlink="white" alink="white"-->

<h1 style="color:rgb(255,255,0); background-color: rgb(139,0,0); 
font-family: serif; font-style: bold; font-weight: lighter; text-align:
left; font-size: 1.1em; ">

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "guestbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//the following 4 lines are needed if your server has register_globals set to Off
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$sql = "INSERT INTO visitors (firstname, lastname, city, state, country, email, comments ) 
VALUES ('$firstname','$lastname','$city','$state','$country','$email','$comments')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br> 
<br>
<a href="DalmationCareBooklet.htm">Home Page</a>
</h1>
</html>
