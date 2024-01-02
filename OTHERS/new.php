<?php
include('connection.php');
$sql="select * from stud";
$data=mysqli_query($dbcon,$sql);
if($data)
{
    echo "<table border=1><tr><th>Roll No</th><th>Name</th><th>Mark</th></tr>";
    if(mysqli_num_rows($data))
    {
        while($row=mysqli_fetch_assoc($data))
        {
            echo "<tr>";
            echo "<td>".$row['Roll_No']."</td>";//$row[0]
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Mark']."</td>";
            echo "</tr>";
        }

    }
    else
    {

        echo "<tr><td colspan=3>Empty</td></tr>";
    }
    echo "</table>";
}
?>