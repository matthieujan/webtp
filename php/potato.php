<?php
header("Content-type: text/plain");
// ...
$parts = "moustache eyes";
if (isset($POST['parameters'])){
    $parts = $POST['parameters'];
}else{
    echo $parts;
}
?>
