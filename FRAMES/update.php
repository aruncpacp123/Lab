<?php
$dbcon=mysqli_connect("localhost","root","","student");
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
    <form action="update.php" method="post">
        
        <table border=1>
        <tr><td colspan=3><h2>MARK UPDATE</h2></td></tr>
        <tr>
        <td>SELECT SEMESTER</td>
        <td><select name="sem" id="" required>
            <option value="0">Select</option>
            <?php
                $sql="select distinct semester from registration";
                $data=mysqli_query($dbcon,$sql);
                while($row=mysqli_fetch_assoc($data)){
                    if(isset($_POST['submit']) || isset($_POST['subjectbutton'])){
                        $sem=$_POST['sem'];
                        echo "<option value=".$sem." selected>".$sem."</option>";
                        break;
                    }
                    echo "<option value=".$row['semester'].">".$row['semester']."</option>";
                }
            ?>
        </select> 
        </td>  
        <td><input type="submit" name="submit" value="select"></td>
        </tr>
    </form>

    <?php
        if(isset($_POST['submit']) || isset($_POST['ktubutton'])|| isset($_POST['subjectbutton']))
        {
            echo "<form action='update.php' method='post'>";
            $sem=$_POST['sem'];
            $sql="select * from registration where semester=$sem";
            $data=mysqli_query($dbcon,$sql);
            echo "<tr><td>SELECT KTU ID</td>";
            echo "<td><select name='ktuid' required>";
            echo "<option value=0>Select</option>";
            while($row=mysqli_fetch_array($data)){
                if(isset($_POST['ktubutton']) || isset($_POST['subjectbutton'])){
                    $ktu=$_POST['ktuid'];
                    echo "<option value=".$ktu." selected>".$ktu."</option>";
                    break;
                }
                $id=$row['ktu_id'];
                $s="select * from mark where ktu_id='$id'";
                $d=mysqli_query($dbcon,$s);
                if(mysqli_num_rows($d)>0)
                    echo "<option value=".$row['ktu_id'].">".$row['ktu_id']."</option>";
            }
            echo "</select></td>";
            echo "<input type='hidden' name='sem' value=".$sem.">";
            echo "<td><input type='submit' name='ktubutton' value='select'></td></tr>";
            echo "</form>";
        }
        if(isset($_POST['ktubutton'])|| isset($_POST['subjectbutton']))
        {
            echo "<form action='update.php' method='post'>";
            $ktu=$_POST['ktuid'];
            $sem=$_POST['sem'];
            $sql="select * from mark where ktu_id='$ktu'";
            $data=mysqli_query($dbcon,$sql);
            echo "<tr><td>SELECT SUBJECT</td>";
            echo "<td><select name='sub' required>";
            echo "<option value=0>Select</option>";
            while($row=mysqli_fetch_array($data)){
                if(isset($_POST['subjectbutton'])){
                    $sub=$_POST['sub'];
                    $s="select * from subject where subject_id='$sub'";
                    $d=mysqli_query($dbcon,$s);
                    $r=mysqli_fetch_array($d);
                    echo "<option value=".$sub." selected>".$r['subject']."</option>";
                    break;
                }
                $id=$row['subject_id'];
                $s="select * from subject where subject_id='$id'";
                $d=mysqli_query($dbcon,$s);
                $r=mysqli_fetch_array($d);
                echo "<option value=".$id.">".$r['subject']."</option>";
            }
            echo "</select></td>";
            echo "<input type='hidden' name='ktuid' value='".$ktu."'>";
            echo "<input type='hidden' name='sem' value='".$sem."'>";
            echo "<td><input type='submit' name='subjectbutton' value='select'></td></tr>";
            echo "</form>";
            echo "</table>";
        }
        if(isset($_POST['subjectbutton']))
        {
            echo "<form action='reg.php' method='post'>";
            $sub=$_POST['sub'];
            $ktu=$_POST['ktuid'];
            $sem=$_POST['sem'];
            $sql="select * from mark where ktu_id='$ktu' and subject_id=$sub";
            $data=mysqli_query($dbcon,$sql);
            $row=mysqli_fetch_array($data);
                
            echo "<br><br><table border=1>";
            if(mysqli_num_rows($data)<=0)
            {
                echo "<tr><td colspan=2>NO DATA</td></tr>";
            }
            else{
                echo "<tr><td>KTU ID</td><td><input type='text' name='ktuid' value='".$ktu."' readonly></td></tr>";
                echo "<tr><td>SUBJECT_ID</td><td><input type='text' name='subid' value=".$sub." readonly></td></tr>";
                echo "<tr>
                <td>Series1</td>
                <td><input type='text' name='series1' value=".$row['series1']."></td>
                </tr>";
                echo "<tr>
                <td>Series2</td>
                <td><input type='text' name='series2' value=".$row['series2']."></td>
                </tr>";
                echo "<tr>
                <td>Assignment1</td>
                <td><input type='text' name='assignment1' value=".$row['assignments3']."></td>
                </tr>";
                echo "<tr>
                <td>Assignment2</td>
                <td><input type='text' name='assignment2' value=".$row['assignment4']."></td>
                </tr>";
                echo "<tr>
                <td>Attendence</td>
                <td><input type='text' name='attendence' value=".$row['attendence']."></td>
                </tr>";
                echo "<tr><td colspan=2 align=center><input type='submit' name='final' value='SUBMIT'></td></tr>";
            }
            echo "</table>";
            
            echo "</form>";
        }
        
    ?>
</body>
</html>