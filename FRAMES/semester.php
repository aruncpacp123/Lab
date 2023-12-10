<?php
$dbcon=mysqli_connect("localhost","root","","student");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
         if(@$_GET['q'])
        {echo'<script>alert("'.@$_GET['q'].'");</script>';}
    ?>
    <style>
        body{
            margin:auto;
        }
        table{
            width:40%;
            background-color:antiquewhite;
        }
        tr{
            width:4em;
        }
        td{
            width:9em;
            height: 2em;
            text-align:center;
            color:red;
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
            background-color: rgba(255, 255, 255, 0.377);
        }
        input[type=radio]{
            width: 1.2em;
            height: 1.2em;
            color:red;
            background-color:red;
        }
        .div2{
            width: 80%;
            margin: auto;
            margin-bottom:15px;
        }
        .div2 td{
            height: 2.2em;
            text-align:left;
        }
    </style>
</head>
<body>
    <form action="semester.php" method="post">
        <table border=1>
        <tr><td colspan=3><h2>MARK ENTRY</h2></td></tr>
        <tr><td>SELECT SEMESTER</td>
        <td><select name="sem" id="">
            <option value="0">Select</option>
            <?php
                $sql="select distinct semester from registration";
                $data=mysqli_query($dbcon,$sql);
                while($row=mysqli_fetch_assoc($data)){
                    if(isset($_POST['submit'])||isset($_POST['click'])){
                        $sem=$_POST['sem'];
                        echo "<option value=".$sem." selected>".$sem."</option>";
                        break;
                    }
                    echo "<option value=".$row['semester'].">".$row['semester']."</option>";
                }
            ?>
        </select></td>
        <td><input type="submit" name="submit" value="select"></td>
        </tr>
    </form>

    <?php
        if(isset($_POST['submit']) || isset($_POST['click']))
        {
            echo "<form action='semester.php' method='post'>";
            echo "<tr>";
            $i=0;
            echo "<td colspan=3 >";
            echo "<br><br><table border=1 class='div2'><tr><td>KTUID</td></tr>";
            $sem=$_POST['sem'];
            $sql="select * from registration where semester=$sem";
            $data=mysqli_query($dbcon,$sql);
            if(mysqli_num_rows($data)>0){
                while($row=mysqli_fetch_array($data)){
                    if(isset($_POST['click']))
                    {
                        $ktu=$_POST['ktuid'];
                        echo "<tr>
                        <td><input type='text' name='ktuid' value=".$ktu."></td></tr></table>";
                        $i=1;
                        break;
                    }
                    echo "<tr>";
                    echo "<td><input type='radio' name='ktuid' value=".$row['ktu_id'].">      ".$row['ktu_id']."</td>";
                        // echo "<td>".$row['ktu_id']."
                        // <input type='hidden' name='ktuid' value=".$row['ktu_id']."></td>
                        // <td><input type='submit' name='click'></td>";
                    echo "</tr>";
                }//here we have to name using a variable becuase else all ktuid name become same
                if($i==0)
                    echo "<tr><input type='hidden' value=".$sem." name='sem' >
                    <td align=center><input type='submit' name='click'></td></tr>";
            }
            else
             echo "<tr><td colspan=2>NO DATA</td></tr>";
            echo "</table></td></tr>";
            echo "</form>";
        }
        echo "</table>"
    ?>
    <?php
    if(isset($_POST['click']))
    {
        $dbcon=mysqli_connect("localhost","root","","student");
        $ktuid=$_POST['ktuid'];
        $sql="select * from registration where ktu_id='$ktuid'";
        $data=mysqli_query($dbcon,$sql);
        $row=mysqli_fetch_assoc($data);
        $sem=$row['semester'];
        $name=$row['name'];
        $sql="select * from subject where semester=$sem and subject_id not in (select subject_id from mark where ktu_id='$ktuid')";
        $data=mysqli_query($dbcon,$sql);
    ?>
    <form action="reg.php" method="post">
        <table border=1>
            <tr>
                <td>ktu_id</td>
                <td>
                    <input type="text" value=<?=$ktuid?> name="ktuid" readonly>
                    <input type="hidden" value=<?=$ktuid?> name="ktuid" >
                    <input type="hidden" value=<?=$sem?> name="sem" >
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" value=<?=$name?> readonly></td>
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
    <?php
    }
?>
</body>