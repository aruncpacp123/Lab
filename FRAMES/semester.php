<?php
$dbcon=mysqli_connect("localhost","root","","student");
?>
<body>
    <form action="semester.php" method="post">
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
        </select>   `
        <input type="submit" name="submit" value="select">
    </form>

    <?php
        if(isset($_POST['submit']))
        {
            echo "<form action='mark.php' method='post'>";
            echo "<table border=1><tr><td>ktuid</td><td></td></tr>";
            $sem=$_POST['sem'];
            $sql="select * from registration where semester=$sem";
            $data=mysqli_query($dbcon,$sql);
            if(mysqli_num_rows($data)>0){
                while($row=mysqli_fetch_array($data)){
                    echo "<tr>
                        <td>".$row['ktu_id']."
                        <input type='hidden' name='ktuid' value=".$row['ktu_id']."></td>
                        <td><input type='submit' name='click'></td>
                    </tr>";
                }//here we have to name using a variable becuase else all ktuid name become same
            }
            else
             echo "<tr><td colspan=2>NO DATA</td></tr>";
            echo "</form>";
        }
    
    ?>
</body>