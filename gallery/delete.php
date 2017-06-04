<?php
$path = "gallery/";
$val = htmlentities($_GET['fname']);
$deleteOk = 0;

$file = ($path.$val);

if (file_exists($file)) {
	$deleteOk= 1;
}


if ($deleteOk== 0) {
	echo "Sorry, your file was not deleted. Try checking the file name";
	// if everything is ok, try to upload file
} else {
	echo "$val was deleted!";
	echo unlink($file);
	
}

?>