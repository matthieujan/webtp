<?php
header("Content-type: text/plain");
$file_path = "/php/potato.txt"
if (isset($POST['parameters'])){
    $potatoFile = fopen($potatoPath,"w");
    fwrite($potatoFile,$POST['parameters']);
    fclose($potatoFile);
}else{
    $potatoPath = "/php/potato.txt";
    $potatoFile = fopen($potatoPath,"r");
    echo fread($potatoFile,filesize($potatoPath));
    fclose($potatoFile);
}
?>
