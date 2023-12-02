<?php
$dbcon=mysqli_connect("localhost","root","","student");
if(isset($_POST['submitted']))
{
    $ktu=$_POST['ktuid'];
    $roll=$_POST['rollno'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $sem=$_POST['sem'];
    $add=$_POST['address'];
    $pno=$_POST['phno'];
    $email=$_POST['email'];
    $sql="insert into registration values('$ktu','$roll','$name','$gender','$age','$sem','$add','$pno','$email')";
    $data=mysqli_query($dbcon,$sql);
    if($data)
    {
        echo "<script>alert('Succesfully Inserted');</script>";
    }
    else
    {
        echo "<script>alert('Some Error Occured');</script>";
    }
}
?>