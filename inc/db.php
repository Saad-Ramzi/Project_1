<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'project-1');
if(!$conn){
    echo 'Error: ' .mysqli_connect_error();
}
?>