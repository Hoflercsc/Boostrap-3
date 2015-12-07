<html>
<body>


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


<title>Visitor</title>
</head>


<body style="color: rgb(255,255,0);background-color: darkred; font-family: 
 serif,arial;margin: 10 50 0 50;">

<!-- change link colors using body tags in html attach right after margin
"link="white" vlink="white" alink="white"-->

<h1 style="color:rgb(255,255,0); background-color: rgb(139,0,0); 
font-family: serif; font-style: italic; font-weight: lighter; text-align: 
center; font-size: 2.1em; letter-spacing: .3em; margin: 10 50 0 50 ">
  View and Search!
</h1>

<br> 
<br>
<br> 
<br>

<p style="font-family: serif;font-style: italic; font-weight: 
lighter; text-align: left; font-size: 1.3em; 
letter-spacing:.1em;text-align: left">

<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {

  die('Could not connect: ' . mysql_error());

  }mysql_select_db("guestbook", $con);


//$date1 = $_post['date1']; since globals are on I don't need these to variables.
//$date2 = $_post['$date2']; since globals are on I don't need these to variables.

$result = mysql_query ("SELECT * FROM visitors


WHERE Visitdate >= \"$date1\" AND date <= \"$date2\"");

echo "<table border='3'cellpadding='9'>
<caption><strong>Date of Visitors<strong></caption>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Date</th>
<th>City</th>
<th>State</th>
<th>Country</th>
<th>Email</th>
<th>Comments</th>
</tr>";

while($row = mysql_fetch_array($result))
  
 {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>"; 
  echo "<td>" . $row['LastName']  . "</td>"; 
  echo "<td>" . $row['Date'] . "</td>"; 
  echo "<td>" . $row['City']  . "</td>";
  echo "<td>" . $row['State'] . "</td>"; 
  echo "<td>" . $row['Country']  . "</td>";
  echo "<td>" . $row['Email'] . "</td>"; 
  echo "<td>" . $row['Comments']  . "</td>";
  echo "</tr>";
 }
echo "<table>";

mysql_close($con);
?>
<br>
<br>
<a href="DalmationCareBooklet.htm">Home Page</a>
</body>
</html>