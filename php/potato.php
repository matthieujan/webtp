<?php
header("Content-type: text/plain");
$potatoPath = "/php/potato.txt";
if (isset($POST['parameters'])){
}else{
    $potatoFile = fopen($potatoPath,"r") or die ();
    echo fread($potatoFile,filesize($potatoPath));
    fclose($potatoFile);
}
?>
