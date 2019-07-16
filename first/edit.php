<?php
include "ramzan.php";

$id = $_GET['id'];
$m =mysqli_query($db,"select * from form where id ='$id'");
$check = mysqli_fetch_array($m);
 if (isset($_POST['done']))
 {
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$edit =mysqli_query($db,"UPDATE `form` SET `name`='$name',`email`='$email' ,`pass`='$pass' WHERE id='$id'");
if (!$edit)
{
	echo mysqli_error();
}
else
{
	 header("location:record.php");
}
 }




?>
 <form method="POST">
 <input type="text" name="name" value="<?php echo $check['name'];?>" placeholder="user name">
 <input type="text" name="email"  value="<?php echo $check['email'];?>" placeholder="email">
 <input type="text" name="pass" value="<?php echo  $check['pass'];?>"  placeholder="******">
 <input type="submit" name="done">
 </form>