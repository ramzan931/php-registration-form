<?php
 mysqli_connect("localhost", "root", "") 
  or die(mysql_error());
   mysqli_select_db("addressbook") or die(mysqli_error()); 
   $id=$_GET['id'];
  // echo $id;
   mysqli_query("delete from address where id=$id");
    echo "record has been deleted<br>";
	 echo '<a href="index.php">go to home page</a> ';
   //header ('Location:index.php'
 //  return;
   
    ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

</body>
</html>
