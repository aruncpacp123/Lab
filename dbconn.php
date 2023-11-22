<?php
$con=mysqli_connect('localhost','root','','student');
if($con===false){
    die("error connecting to database".mysqli_connect_error());
}
else
    echo "connected Successfully";

?>