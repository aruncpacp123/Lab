<?php
$dbcon=mysqli_connect('localhost','root','','student');
if(isset($_POST['login']))
{
    $ref=@$_GET['q'];
    $email=$_POST['login_ktu_id'];
    $password=$_POST['login_password'];
    $user=$_POST['user'];
    if($user==1){
        $sql="select * from registration where ktu_id='$email' and password='$password'";
        $data=mysqli_query($dbcon,$sql);
        if(mysqli_num_rows($data))
        {
            session_start();
            $row=mysqli_fetch_assoc($data);
            $_SESSION['ktu']=$email;
            $_SESSION['sem']=$row['semester'];
            header("location:frame2.html");
        }
        else
            header("location:home.php?w=Wrong Username or Password");
    }
    else{
        $sql="select * from user where email='$email' and password='$password'";
        $data=mysqli_query($dbcon,$sql);
        if(mysqli_num_rows($data))
        {
            session_start();
            $row=mysqli_fetch_assoc($data);
            $_SESSION['email']=$email;
            header("location:frame.html");
        }
        else
            header("location:home.php?w=Wrong Username or Password");
    }
}
if(isset($_POST['signup']))
{
    $name=$_POST['studname'];
    $email=$_POST['studemail'];
    $phn=$_POST['studphone'];
    $password=$_POST['studpasswd'];
    $sql="INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`) VALUES (NULL, '$name', '$email', '$phn', '$password')";
    $data=mysqli_query($dbcon,$sql);
    if($data)
    {
        header("location:login.php?w=Succesfully registered");
    }
}
?>