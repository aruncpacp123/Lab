<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:cyan">
    <form  action="dbconn.php" method="post">
    <h1 style="color:red;text-align:center;">WELCOME TO FRESHERS WORLD!!!</h1>
    <table border="2" align="center" width="80%">
        <tr rowspan="2">
            <td colspan="2"><h3><center>Registration Form</center></h3></td>
        </tr>
        <tr>
            <td width="30%">Roll No</td>
            <td><input type="text" style="width:50%" name="rollno"></td>
        </tr>
        <tr>
            <td width="30%">Name</td>
            <td><input type="text" style="width:50%" name="name"></td>
        </tr>
        <tr>
            <td width="30%">Mark</td>
            <td><input type="text" style="width:50%" name="mark"></td>
        </tr>
        <tr>
            <td align="center"><input type="reset"></td>
            <td align="center"><input type="Submit" name="submit"></td>
        </tr>
    </table>
    </form>
</body>
</html>
