<head>
<link href="links.css" rel="stylesheet" type="text/css"/>



<!-- 

   About Dalmations
   Author: Jonathan Hofler
   Date: 06/16/2008

   Filename: DalmationCareBooklet.htm
---------------------------------------------------------------------
changing links colors using css embedded style tags with in html page
---------------------------------------------------------------------
<style = "text/css">
   
a:link {color: white; text-decoration: none;}

a:visited {color: white; text-decoration: none;}

a:hover {color: white; text-decoration: underline;}

a:active {text-decoration: none;}

</style>
----------------------------------------------------------------------
-->


<title>Visitors List</title>
</head>


<body style="color: rgb(255,255,0);background-color: darkred; font-family: 
 serif,arial;margin: 10 50 0 50;">

<!-- change link colors using body tags in html attach right after margin
"link="white" vlink="white" alink="white"-->

<h1 style="color:rgb(255,255,0); background-color: rgb(139,0,0); 
font-family: serif; font-style: italic; font-weight: lighter; text-align: 
center; font-size: 2.1em; letter-spacing: .3em; margin: 10 50 0 50 ">
  Visitors
</h1>

<br> 
<br>
<br> 
<br>

<p style="font-family: serif;font-style: italic; font-weight: 
lighter; text-align: left; font-size: 1.3em; 
letter-spacing:.1em;text-align: left">


<html>
<body>

<?php

$con = new mysqli("localhost","root","root");
if (!$con)
  {

  die('Could not connect: ' . mysqli_error());

  }

  mysqli_select_db("guestbook", $con);

$result = mysqli_query("SELECT * FROM visitors");

echo "<table border='3'cellpadding='9'>
<caption><strong>All Site Visitors<strong></caption>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>City</th>
<th>State</th>
<th>Country</th>
<th>Email</th>
<th>Comments</th>
</tr>";



while($row = mysqli_fetch_array($result))

 {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>"; 
  echo "<td>" . $row['lastname']  . "</td>"; 
  echo "<td>" . $row['city']  . "</td>";
  echo "<td>" . $row['state'] . "</td>"; 
  echo "<td>" . $row['country']  . "</td>";
  echo "<td>" . $row['email'] . "</td>"; 
  echo "<td>" . $row['comments']  . "</td>";
  echo "</tr>";
 }
echo "<table>";

mysqli_close($con);

?>

<br>
<br>
<a href="DalmationCareBooklet.htm">Home Page</a>
</body>
</html>
