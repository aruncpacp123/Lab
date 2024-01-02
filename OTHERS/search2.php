<?php

include "connection.php";

    $rno=$_POST['rollno'];
    $sql="select * from stud where Roll_No=$rno";
    $data=mysqli_query($dbcon,$sql);
    if(mysqli_num_rows($data))
    {
        echo "<table border=1><tr><th>Roll No</th><th>Name</th><th>Mark</th></tr>";
        $row=mysqli_fetch_assoc($data);
        echo "<tr>";
            echo "<td>".$row['Roll_No']."</td>";//$row[0]
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['Mark']."</td>";
        echo "</tr>";
    }
    else
        echo "No such Roll No";

?>
