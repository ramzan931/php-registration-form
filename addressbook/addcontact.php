<?php

  mysqli_connect("localhost", "root", "") 
  or die(mysqli_error());
   mysqli_select_db("addressbook") or die(mysql_error()); 
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $id=$_POST['id'];
   if($id=="")
   {
   $sql="insert into address (NAME,phone,email) values('$name','$phone','$email')";
  // echo $sql;
 $var= mysqli_query($sql);
 echo $var." record added<br>"; 
 echo '<a href="index.php">go to home page</a> ';
 }
 else
 {
 $sql="update  address set NAME='$name',email='$email', phone='$phone' where id=$id";
  // echo $sql;
 $var= mysqli_query($sql);
 echo $var." record has been updated<br>"; 
 echo '<a href="index.php">Update Other Record</a> ';
 
 }
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
