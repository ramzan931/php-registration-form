<?php
 include "ramzan.php";
 if (isset($_POST['done']))
 {
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$insert = mysqli_query($db,"INSERT INTO form(`name`, `email`, `pass`) VALUES ('$name','$email','$pass')");
if (!$insert)
{
	echo "not inserted";
}
else
{
	echo "inserted";
}
 }
 ?>
 <form method="POST">
 <input type="text" name="name" placeholder="user name">
 <input type="text" name="email"  placeholder="email">
 <input type="text" name="pass"  placeholder="******">
 <input type="submit" name="done">
 </form>
 <a href="record.php">Records</a>