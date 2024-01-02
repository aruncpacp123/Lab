<?php
$dbcon=mysqli_connect("localhost","root","","student");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:40%;
            background-color:antiquewhite;
            border:4px black solid;
        }
        tr{
            width:4em;
        }
        td{
            width:9em;
            height: 2em;
            text-align:center;
            color:red;
            border:2px black solid;
        }
        select{
            width: 80%;
            height: 2em;
            border: 2px rgb(114, 55, 55) solid;
            border-radius: 5px;
            padding-left: 10px;
        }
        input[type=text]{
            width: 80%;
            height: 2em;
            border: 2px rgb(114, 55, 55) solid;
            background-color: rgba(255, 255, 255, 0.377);
            border-radius: 5px;
            padding-left: 10px; 
        }
        input[type=submit]{
            width: 80%;
            min-height: 2em;
           
            border-radius: 5px;
            /* background-color: rgba(255, 255, 255, 0.377); */
        }
    </style>
</head>

<body>
    <form action="password.php?w=<?=@$_GET['q']?>" method="post">
        
        <table border=1>
        <tr><td colspan=2><h2>CHANGE PASSWORD</h2></td></tr>
        <tr>
            <td>ENTER OLD PASSWORD</td>
            <td><input type='text' name='password1'></td>
        </tr>
        <tr>
            <td>ENTER NEW PASSWORD</td>
            <td><input type='text' name='password2'></td>
        </tr>
        <td colspan=2><input type="submit" name="submitpass" value="SUBMIT"></td>
        </tr>
    </form>
<?php

        if(isset($_POST['submitpass']))
        {
            $user=@$_GET['w'];
            $old=$_POST['password1'];
            $new=$_POST['password2'];
            if($user=='s'|| isset($_SESSION['ktu'])){
                $ktu=$_SESSION['ktu'];
                $sql="select * from registration where ktu_id='$ktu' and password='$old'";
            }
            else{
                $email=$_SESSION['email'];
                $sql="select * from user where email='$email' and password='$old'";
            }
            $data=mysqli_query($dbcon,$sql);  
            if(mysqli_num_rows($data)<=0)
            {
                echo "<script>alert('old password is invalid');</script>";
            }
            else{
                if($user=='s' || isset($_SESSION['ktu'])){
                    $ktu=$_SESSION['ktu'];
                    $sql="update registration set password='$new' where ktu_id='$ktu'";
                }
                else{
                    $email=$_SESSION['email'];
                    $sql="update user set password='$new' where email='$email'";
                }
                
                $data=mysqli_query($dbcon,$sql);
                if($data){
                    echo "<script>alert('Password Changed');</script>";
                }
            }
            
        }
        
    ?>
</body>
</html>