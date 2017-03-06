<?php
header("Content-type: text/plain");
$potatoPath = "potato.txt";
if (isset($POST['parameters'])){
}else{
    echo file_get_content($potatoPath);
}
?>
