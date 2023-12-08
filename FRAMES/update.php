<?php
$dbcon=mysqli_connect("localhost","root","","student");
?>
<body>
    <form action="update.php" method="post">
        select you semester
        <select name="sem" id="">
            <option value="0">Select</option>
            <?php
                $sql="select distinct semester from registration";
                $data=mysqli_query($dbcon,$sql);
                while($row=mysqli_fetch_assoc($data)){
                    if(isset($_POST['submit'])){
                        $sem=$_POST['sem'];
                        echo "<option value=".$sem." selected>".$sem."</option>";
                        break;
                    }
                    echo "<option value=".$row['semester'].">".$row['semester']."</option>";
                }
            ?>
        </select>   
        <input type="submit" name="submit" value="select">
    </form>

    <?php
        if(isset($_POST['submit']) || isset($_POST['ktubutton'])|| isset($_POST['subjectbutton']))
        {
            echo "<form action='update.php' method='post'>";
            $sem=$_POST['sem'];
            $sql="select * from registration where semester=$sem";
            $data=mysqli_query($dbcon,$sql);
            echo "select KTU ID";
            echo "<select name='ktuid'>";
            echo "<option value=0>Select</option>";
            while($row=mysqli_fetch_array($data)){
                if(isset($_POST['ktubutton'])){
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
            echo "</select>";
            echo "<input type='hidden' name='sem' value=".$sem.">";
            echo "<input type='submit' name='ktubutton' value='select'>";
            echo "</form>";
        }
        if(isset($_POST['ktubutton'])|| isset($_POST['subjectbutton']))
        {
            echo "<form action='update.php' method='post'>";
            $ktu=$_POST['ktuid'];
            $sem=$_POST['sem'];
            $sql="select * from mark where ktu_id='$ktu'";
            $data=mysqli_query($dbcon,$sql);
            echo "select SUBJECT";
            echo "<select name='sub'>";
            echo "<option value=0>Select</option>";
            while($row=mysqli_fetch_array($data)){
                if(isset($_POST['subjectbutton'])){
                    $sub=$_POST['sub'];
                    echo "<option value=".$sub." selected>".$sub."</option>";
                    break;
                }
                $id=$row['subject_id'];
                $s="select * from subject where subject_id='$id'";
                $d=mysqli_query($dbcon,$s);
                $r=mysqli_fetch_array($d);
                echo "<option value=".$id.">".$r['subject']."</option>";
            }
            echo "</select>";
            echo "<input type='hidden' name='ktuid' value='".$ktu."'>";
            echo "<input type='hidden' name='sem' value='".$sem."'>";
            echo "<input type='submit' name='subjectbutton' value='select'>";
            echo "</form>";
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
            echo "<table border=1>";
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

            echo "</table>";
            echo "<input type='submit' name='final' value='SUBMIT'>";
            echo "</form>";
        }
        
    ?>
</body>