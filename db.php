<?php  
	$conn = mysql_connect('localhost', 'root', 'usbw');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("career", $conn);
?>
