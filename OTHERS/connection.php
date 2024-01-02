<?php
$dbcon=mysqli_connect('localhost','root','','student');
if($dbcon===false){
    die("error connecting to database".mysqli_connect_error());
}
?>