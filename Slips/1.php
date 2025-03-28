//.Write a PHP script to keep track of number of times the web
  page has been accessed (Use Session Tracking).
<?php
//start the session
session_start();
//check if the count' session variable is set
if(isset($_SESSION['count']))
{
    $_SESSION['count']++ ;
}
else
{
    $_SESSION['count'] = 1;
}

echo "This page has been accessed " . $_SESSION['count'] ." times.";

?>

//localhost refused to connect. (ensure apache start or not)
// The requested URL was not found on this server.(ensure file is created in htdocs folder)
