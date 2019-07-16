<?php
 mysqli_connect("localhost", "root", "") 
  or die(mysql_error());
   mysqli_select_db("addressbook") or die(mysqli_error()); 
    ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form id="form1">
<table width="574" height="233" border="1" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="5"><div align="center">Address Book </div></td>
  </tr>
  <tr>
    <td width="104">Name</td>
    <td width="107">Phone</td>
    <td width="187">Email</td>
    <td colspan="2" width="140">Admin</td>
	
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td colspan="2" align="center"><a href="add.php"><img src="images/add.jpg" height="30" width="45"> </a></td>
  </tr>
  
  <?php
  $result = mysql_query("SELECT * FROM address ");
  while($row=mysql_fetch_array($result))
  {
  $id=$row['id'];
  ?>
  <tr>
    <td><?php echo $row['name'];?></td>
    <td><?php  echo $row['phone'] ;?></td>
    <td><?php  echo $row['email']; ?></td>
    <td><?php echo "<a href=edit.php?id=$id><img src='images/edit.jpg' height='30' width='45'></a>"; ?></td>
	<td><?php echo "<a href=remove.php?id=$id><img src='images/delete.jpg' height='30' width='45'></a>"; ?></td>
	</tr>
	<?php }?>
  
  <tr>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
  </tr>
 </table>
</form>
</body>
</html>
