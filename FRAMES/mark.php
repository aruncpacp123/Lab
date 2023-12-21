<?php
$dbcon=mysqli_connect("localhost","root","","student2");
$ktuid=$_POST['ktuid'];
$sql="select * from registration where ktu_id='$ktuid'";
$data=mysqli_query($dbcon,$sql);
$row=mysqli_fetch_assoc($data);
$sem=$row['semester'];
$name=$row['name'];
$sql="select * from subject where semester=$sem and subject_id not in (select subject_id from mark where ktu_id='$ktuid')";
$data=mysqli_query($dbcon,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MARK ENTRY</h1>
    <form action="reg.php" method="post">
        <table border=1>
            <tr>
                <td>ktu_id</td>
                <td>
                    <input type="text" value=<?=$ktuid?> name="ktuid">
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" value=<?=$name?> disabled></td>
            </tr>
            <tr>
                <td>subject</td>
                <td>
                    <select name="subject" id="">
                        <option value=0>select</option>
                        <?php
                            while($row=mysqli_fetch_assoc($data)){
                                echo "<option value=".$row['subject_id'].">".$row['subject']."</option>";
                            }
                        ?>
                    </select>

                </td>
            </tr>
            <tr>
                <td>Series1</td>
                <td><input type="text" name="series1"></td>
            </tr>
            <tr>
                <td>Series2</td>
                <td><input type="text" name="series2"></td>
            </tr>
            <tr>
                <td>Assignment1</td>
                <td><input type="text" name="assignment1"></td>
            </tr>
            <tr>
                <td>Assignment2</td>
                <td><input type="text" name="assignment2"></td>
            </tr>
            <tr>
                <td>Attendence</td>
                <td><input type="text" name="attendence"></td>
            </tr>
            <tr>
                <td colspan=2 align=center><input type="submit" name="mark" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>