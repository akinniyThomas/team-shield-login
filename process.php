<?php

if(!$_SESSION["loggedIn")//if user is not an authenticated user then take user to signin/signup page
{
  header("location: index.html");
}

//if(!isset($_SESSION["username"]))
if($_SERVER["REQUEST_METHOD"] == "POST")//if request is post request
{
  $name = convertText($_POST["name"]);//collect the username
  $pass = convertText($_POST["pass"]);//collect the password
  if($name == "name" && $pass == "pass")//if password and username are correct
  {
    $_SESSION["loggedIn"] = TRUE; //set loggedIn State to True
    header("location: index.html");//take user to home page
  }
}

//for converting and formating content of post request form
function convertText($text)
{
  $text = trim($text);
  $text = stripslashes($text);
  $text = htmlspecialchars($text);
  return $text;
}

?>
