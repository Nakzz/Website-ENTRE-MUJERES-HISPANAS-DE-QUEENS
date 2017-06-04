<html>
<script src="../js/random.js" type="text/javascript"></script>
<link href="../css/userIMG.css" rel="stylesheet">
<body>
	<div class="center">
	<form action="upload.php" method="post" enctype="multipart/form-data">
		Select image to upload: <input type="file" name="fileToUpload"
			id="fileToUpload"> <input type="submit" value="Upload Image"
			name="submit">
	</form>

	<form action="delete.php">
		Delete: <input type="text" name="fname"> <input type="submit"
			value="Submit">
	</form>




	<button onclick="showHide()">Show images</button>

	<div id="myDIV" style="display: none;">
		<?php
echo "Here are our files "; 

$path = "slider";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
	if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
		echo "<br /><a href='$path/$file'>$file</a>";
		$i++;
	}
}
closedir($dh);
?>
	</div>
</div>
</body>
</html>