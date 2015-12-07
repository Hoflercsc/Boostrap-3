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

<h1 style="color:rgb(255,255,0); 
font-family: serif; font-style: italic; font-weight: lighter; text-align: 
center; font-size: 2.1em; letter-spacing: .3em; margin: 10 50 0 50 ">
  View and Search!
</h1>



<p style="font-family: serif;font-style: italic; font-weight: 
lighter; text-align: left; font-size: 1.3em; 
letter-spacing:.1em;text-align: left">
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<html>
<body>

<?php
$name=$_POST["realname"];
$pass=$_POST["mypassword"];
if ($name =="root" && $pass=="root")
   echo "Correct!
<br/>
<br/>
<br/>
<br/>Click <a href=\"table.php\"> Here</a> To view visitors table. <br><br><br>
<br/>

Search the visitors table by clicking <a href=\"search.php\">Here.</a>";

else
  echo "Worng User Name or Password";

?>
</p>


<img src="puppy6.jpg" alt="Dalmation Puppies" img style="float: right; width="250" 
height="250"margin: 10 50 0 50"/> 

</body>
</html>