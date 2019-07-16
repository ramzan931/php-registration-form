<?php
include 'ramzan.php';
?>
<table border="2">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Pass</th>
<th>Edit</th>
<th>Del</th>

</tr>
<?php
 $record =mysqli_query ($db,"SELECT * FROM `form`");
 while ($data =mysqli_fetch_array ($record))
 {
	 ?>
	 <tr>
	 
	 
	<td><?php  echo $data['id']; ?></td>
	<td><?php  echo $data['name']; ?></td>
	<td><?php  echo $data['email']; ?></td>
	<td><?php  echo $data['pass']; ?></td>
	<td><a href="edit.php?id=<?php echo $data['id']; ?>"><img src="images/edit.png" width="30px" height="30px"></a></td>
	<td><a href="del.php?id=<?php echo $data['id']; ?>"><img src="images/del.png" width="30px" height="30px"></a></td>
	<tr>
	
	 <?php
 }
  

?>
</table>
<a href="index.php">ADD Users</a>