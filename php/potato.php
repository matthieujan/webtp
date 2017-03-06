<?php
header("Content-type: text/plain");
    $content = file_get_contents('/php/potato.txt');
    echo $content;
?>
