<?php
header("Content-type: text/plain");

$file_path = "/php/potato.txt"
if (isset($POST['parameters'])){
    // Write the contents back to the file
    file_put_contents($file_path, $POST['parameters']);

}else{
    echo file_get_contents($file_path);
}
?>
