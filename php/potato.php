<?php
header("Content-type: text/plain");
$potatoPath = "potato.txt";
if (isset($_POST['parts'])){
    file_put_contents($potatoPath,$_POST['parts']);
}else{
    $parts = file_get_contents($potatoPath);
    echo $parts;
}
?>
