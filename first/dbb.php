<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$conn = mysql_connect($server,$username,$password,$dbname);
if($conn)
{
echo "connected";
}
else
{
die(" not connected".mysqli_connect_error()); 
}
?>