<?php
mysql_connect("localhost","root","");
$db = mysql_select_db ("data");
if (!$db)
{
	echo "not connected";
}
else
{
	echo "connected";
}
	



?>