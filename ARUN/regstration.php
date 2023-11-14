<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:cyan">
    <form action="display.php" method="post">
    <h1 style="color:red;text-align:center;">WELCOME TO FRESHERS WORLD!!!</h1>
    <table border="2" align="center" width="80%">
        <tr rowspan="2">
            <td colspan="2"><h3><center>Registration Form</center></h3></td>
        </tr>
        <tr>
            <td width="30%">Name</td>
            <td><input type="text" style="width:50%" name="fname"></td>
        </tr>
        <tr>
            <td width="30%">Age</td>
            <td>
                <select name="age">
                    <option value="0">SELECT</option>
                    <?php
                        for($i=1;$i<=100;$i++)
                            echo "<option value='".$i."'>".$i."</option>";
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td width="30%">Password</td>
            <td><input type="password" style="width:50%" name="password"></td>
        </tr>
        <tr>
            <td width="30%">Reenter Password</td>
            <td><input type="password" style="width:50%"></td>
        </tr>
        <tr>
            <td rowspan="5">Select your security Question</td>
        </tr>
        <tr>
            <td><input type="radio" name="rad" value="What is your pet Name?">What is your pet Name?</td>
        </tr>
        <tr>
            <td><input type="radio" name="rad" value="Who is your Best Friend?">Who is your Best Friend?</td>
        </tr>
        <tr>
            <td><input type="radio" name="rad" value="What is your favourite colour?">What is your favourite colour?</td>
        </tr>
        <tr>
            <td><input type="radio" name="rad" value="Who is your favourite teacher?">Who is your favourite teacher?</td>
        </tr>
        <tr>
            <td width="30%">Answer of Secuirity Question</td>
            <td><input type="text" style="width:50%"name="sq"></td>
        </tr>
        <tr>
            <td width="30%">Email Id</td>
            <td><input type="email" style="width:50%" name="email"></td>
        </tr>
        <tr>
            <td width="30%">Languages Known</td>
            <td>
                <input type="checkbox" name="lang[]" value="Malayalam"> Malayalam
                <input type="checkbox" name="lang[]" value="English"> English
                <input type="checkbox" name="lang[]" value="Hindi"> Hindi
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
                    <td><input type="text" style="width:98%" name="hph"></td>
                    <td><input type="text" style="width:98%" name="oph"></td>
                </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td width="30%">Upload CV</td>
            <td><input type="File" style="width:50%"></td>
        </tr>
        <tr>
            <td align="center"><input type="reset"></td>
            <td align="center"><input type="Submit" name="submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>