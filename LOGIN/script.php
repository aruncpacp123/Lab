<?php
$dbcon=mysqli_connect('localhost','root','','user');
if(isset($_POST['login']))
{
    $ref=@$_GET['q'];
    $email=$_POST['login_email'];
    $password=$_POST['login_password'];
    $sql="select * from user where email='$email' and password='$password'";
    $data=mysqli_query($dbcon,$sql);
    if(mysqli_num_rows($data))
    {
        header("location:../regstration.php");
    }
    else
        header("location:$ref?w=Wrong Username or Password");
}
if(isset($_POST['signup']))
{
    $name=$_POST['studname'];
    $email=$_POST['studemail'];
    $phn=$_POST['studphone'];
    $password=$_POST['studpasswd'];
    $sql="INSERT INTO `user` (`id`, `Name`, `email`, `phone_no`, `password`) VALUES (NULL, '$name', '$email', '$phn', '$password')";
    $data=mysqli_query($dbcon,$sql);
    if($data)
    {
        header("location:login.php?w=Succesfully registered");
    }
}
?>