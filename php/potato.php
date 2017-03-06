<?php
header("Content-type: text/plain");
$potatoPath = "/php/potato.txt";
if (isset($POST['parameters'])){
    $potatoFile = fopen($potatoPath,"w") or die ("Unable to open file");
    fwrite($potatoFile,$POST['parameters']);
    fclose($potatoFile);
}else{
    $potatoFile = fopen($potatoPath,"r") or die ("Unable to open file");
    echo fread($potatoFile,filesize($potatoPath));
    fclose($potatoFile);
}
?>
