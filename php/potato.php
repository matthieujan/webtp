<?php
header("Content-type: text/plain");
$potatoPath = "potato.txt";
if (isset($POST['parameters'])){
}else{
    $potatoFile = fopen($potatoPath,"r") or die ("Unable to open file");
    echo fread($potatoFile,filesize($potatoPath));
    fclose($potatoFile);
}
?>
