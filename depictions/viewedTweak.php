<?php
	if($_GET["p"]) {
		$fname = "bruh.txt";
		$file = fopen($fname, 'w');
		fwrite($file, "fsdfsdf");
		fclose($file);
	}
?>