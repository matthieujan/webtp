<?php
header("Content-type: text/plain");
echo "eyes";
$path = "potato.txt";
$file = fopen($path,"w") or die ("Unable to open file");
fwrite($file,"Blabla");
fclose($file);
>
