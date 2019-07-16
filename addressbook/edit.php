<?php

mysqli_connect("localhost", "root", "") 
  or die(mysqli_error());
   mysqli_select_db("addressbook") or die(mysqli_error()); 
   $id=$_GET['id'];
 
   $result = mysqli_query("select * from address where id=$id");
  	$row=mysqli_fetch_array($result);
  

	?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="addcontact.php">
<table width="345" height="302" border="1" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="2"> <div align="center"><strong>Add Contract </strong></div></td>
  </tr>
  <tr>
    <td>Name:</td>
    <td><input type="text" name="name" id="name" value="<?php echo $row['name']?>"></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="text" name="email" id="email" value="<?php echo $row['email']?>"></td>
  </tr>
  <tr>
    <td>Phone:</td>
    <td><input type="text" name="phone" id="phone" value="<?php echo $row['phone']?>"><input type="hidden" id="id" name="id" value="<?php echo $row['id']?>""</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="Submit" value="Update Contract"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
