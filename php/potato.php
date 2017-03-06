<?php
header("Content-type: text/plain");
$potatoPath = "potato.txt";
if (isset($POST['parameters'])){
    file_put_contents($potatoPath,$POST['parameters']);
}else{
    $parts = file_get_contents($potatoPath);
    echo substr($parts,0,-1);
}
?>
