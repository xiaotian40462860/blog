<?php 
	$src = $_GET['s'];
	error_log($src.'-----------------');
	if(@exif_imagetype($src)) {
		 //header('Content-Type:image/png');
		 echo file_get_contents($src);
	 } else{
		 echo 'not img';
	 }
?>