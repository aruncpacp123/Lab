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
    <form action="internal.php" method="post">
        
        <table border=1>
        <tr><td colspan=3><h2>INTERNAL MARK</h2></td></tr>
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
        if(isset($_POST['submit'])|| isset($_POST['subjectbutton']))
        {
            echo "<form action='internal.php' method='post'>";
            $sem=$_POST['sem'];
            $sql="select * from subject where semester='$sem'";
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
            echo "<input type='hidden' name='sem' value='".$sem."'>";
            echo "<td><input type='submit' name='subjectbutton' value='select'></td></tr>";
            echo "</form>";
            echo "</table>";
        }
        if(isset($_POST['subjectbutton']))
        {
            $sub=$_POST['sub'];
            $sem=$_POST['sem'];
            $sql="select * from mark where subject_id=$sub";
            $data=mysqli_query($dbcon,$sql);  
            echo "<br><br><table border=1>";
            echo "<tr>
                    <th>KTU ID</th>
                    <th>Name</th>
                    <th>Internal Mark</th>
                    </tr>";
            if(mysqli_num_rows($data)<=0)
            {
                echo "<tr><td colspan=3>NO DATA</td></tr>";
            }
            else{
                while($row=mysqli_fetch_array($data)){
                    $ktu=$row['ktu_id'];
                    $sql2="select * from registration";
                    $data2=mysqli_query($dbcon,$sql2);
                    while($row2=mysqli_fetch_assoc($data2)){
                        if($row2['ktu_id']==$ktu){
                            $name=$row2['name'];
                            break;
                        }
                    }
                    // $sql3="select name from registration where ktu_id=$ktu";
                    // $data3=mysqli_query($dbcon,$sql3);
                    // $row3=mysqli_fetch_assoc($data3);
                    // $n=$row3['name'];
                    echo "<tr>
                    <td><input type='text' name='ktuid' value='".$ktu."' readonly></td>
                    <td><input type='text' name='subid' value=".$row2['name']." readonly></td>
                    <td><input type='text' name='subid' value=".$row['internal']." readonly></td>
                    </tr>";
                   
                }
            }
            echo "</table>";
        }
        
    ?>
</body>
</html>