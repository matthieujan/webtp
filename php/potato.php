<?php
header("Content-type: text/plain");
// ...
$parts = "moustache eyes";
if (isset($POST)){
    $parts = $POST['parameters'];
}

if (isset($GET)){
    echo $parts;
}
?>
