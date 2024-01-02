<?php
$name=$_POST['fname'];
$age=$_POST['age'];
$password=$_POST['password'];
$rad=$_POST['rad'];
$sq=$_POST['sq'];
$email=$_POST['email'];
$hph=$_POST['hph'];
$oph=$_POST['oph'];
$lang=$_POST['lang']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESUME</title>
</head>
<body>
    <h1 style="color:red;text-align:center;font-size:2em;">WELCOME <?=$name;?></h1>
    <marquee style="color:green;font-size:1em;">YOUR RESUME IS READY</marquee>
    <br><br>
    <table border="2" align="center" width="80%">
        <tr rowspan="2">
            <td colspan="2"><h3><center>DATA</center></h3></td>
        </tr>
        <tr>
            <td width="30%">Name</td>
            <td><?=$name;?></td>
        </tr>
        <tr>
            <td width="30%">Age</td>
            <td><?=$age;?></td>
        </tr>
        <tr>
            <td width="30%">Password</td>
            <td><input type="password" style="width:50%" value=<?=$password;?> readonly></td>
        </tr>
        <tr>
            <td colspan=2 align=center>Security Question</td>
        </tr>
        <tr>
            <td width="50%"><?=$rad;?></td>
            <td><?=$sq;?></td>
        </tr>
        <tr>
            <td width="30%">Email Id</td>
            <td><?=$email;?></td>
        </tr>
        <tr>
            <td width="30%">Languages Known</td>
            <td>
            <?php
                for($i=0;$i<=2;$i++)
                    echo $lang[$i]." ";
            ?>
            </td>
        </tr>
        <tr>
            <td rowspan="2">Phone number</td>
        </tr>
        <tr>
            <td>
            <table border="2" width="100%">
                <tr>
                    <td>Home</td>
                    <td>Office</td>
                </tr>
                <tr>
                    <td><?=$hph;?></td>
                    <td><?=$oph;?></td>
                </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td colspan=2 align=center>
                <button onclick="window.print()">PRINT</button>
            </td>
        </tr>
    </table>
</body>
</html>