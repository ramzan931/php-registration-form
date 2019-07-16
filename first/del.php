<?php
include "ramzan.php";

 $id = $_GET['id'];
 $del = mysqli_query($db,"DELETE  FROM `form` WHERE id ='$id'");
 header("location:record.php");

?>