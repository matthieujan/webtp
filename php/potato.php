<?php
header("Content-type: text/plain");
echo "eyes";
$path = "potato.txt";
$file = fopen($path,"w");
fwrite($file,"Blabla");
fclose($file);
>
