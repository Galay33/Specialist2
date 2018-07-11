<?php
	echo "<pre>";
	if (file_exists(PATH_LOG)) {
		$fullFileArr = file(PATH_LOG);
		foreach ($fullFileArr as $value) {
			$line = explode("|", $value);
			echo "$line[0] $line[1] ==> $line[2]";
		}		
	}
	echo "</pre>";