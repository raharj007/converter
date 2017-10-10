<?php
	$phpVar = $_POST['url'];
	// $content = file_get_contents($phpVar);
	// $fp = fopen("/img/image.jpg", "w");
	// fwrite($fp, $content);
	// fclose($fp);
	copy($phpVar, 'D:/image.gif');
?>