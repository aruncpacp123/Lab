<?php
$dbcon=mysqli_connect("localhost","root","","student2");

if(isset($_POST['sembutton']))
{
    $sem=$_POST['sem'];
    $sql="select * from registration where semester=$sem";
    $data=mysqli_query($dbcon,$sql);
    echo "ktuid<br><br><br>";
    if(mysqli_num_rows($data)>0)
    {
        while($row=mysqli_fetch_assoc($data))
        {
            echo $row['ktu_id']."<br>";
        }
    }
    else{
        echo "Empty";
    }
?>

<?php
}
?>