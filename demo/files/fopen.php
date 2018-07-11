<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?php
	$f = fopen("data.txt", "r") or die("Немогу открыть файл");
    echo fread($f, "r");
    echo fread($f, 10);
    
fclose($f);
?>
</BODY>
</HTML>