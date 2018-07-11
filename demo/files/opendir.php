<HTML>
<HEAD>
<TITLE>opendir</TITLE>
</HEAD>
<BODY>
    <pre>
<?php
    print_r(scandir("../../", 1));
	/* $dir = opendir(".");
	    echo readdir($dir) . '<br>';
	
	while($name = readdir($dir)){
		
		if(is_dir($name))
			echo '[<b>'.$name.'</b>]<br>';
		else
			echo $name.'<br>';
	}
	
	closedir($dir);
	
	*/
?>
</pre>
</BODY>
</HTML>