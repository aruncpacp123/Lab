<?php
$dbcon=mysqli_connect("localhost","root","","student2")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARK ENTRY</title>
</head>
<body>
    <form action="ktuid.php" method="post">
    Select Semester
    <select name="sem" id="">
        <option value="0">SELECT YOUR OPTION</option>
        <?php
            $sql="select distinct semester from registration ";
            $data=mysqli_query($dbcon,$sql);
            while ($row=mysqli_fetch_assoc($data))
            {
                echo "<option value='".$row['semester']."'>".$row['semester']."</option>";
            }
        ?>
    </select>   
    <input type="submit" name="sembutton">
    </form>
    
</body>
</html>