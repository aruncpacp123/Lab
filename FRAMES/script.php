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
if(isset($_POST['signup']))//it is from signup.php of LOGIN directory
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
if(isset($_POST['passbtn']))//it is from signup.php of LOGIN directory
{
    $email=$_POST['email'];
    $phn=$_POST['phone'];
    $user=$_POST['user'];
    $password=$_POST['passwd'];
    if($user=='student'){
        $sql="select * from registration where email='$email' and phone_no='$phn'";
    }
    else{
        $sql="select * from user where email='$email' and phone='$phn'";
    }
    $data=mysqli_query($dbcon,$sql);
    if(mysqli_num_rows($data)){
        if($user=='student'){
            $sql="update registration set password='$password' where email='$email'";
        }
        else{
            $sql="update user set password='$password' where email='$email'";
        }
        $data=mysqli_query($dbcon,$sql);
        header("location:home.php?w=password changed");
    }
    else{
        echo "<script>alert('Email and Phone Number Not Match');</script>";
        header("location:forgot.php?w=Email and Phone Number Not Match");
    }
}
?>