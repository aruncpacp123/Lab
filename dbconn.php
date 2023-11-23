<?php
$con=mysqli_connect('localhost','root','','student');
if($con===false){
    die("error connecting to database".mysqli_connect_error());
}
else
{
    $rno=$_POST['rollno'];
    $name=$_POST['name'];
    $mark=$_POST['mark'];
    $sql="insert into stud values($rno,'$name',$mark)";
    $data=mysqli_query($con,$sql);
    if($data)
    {
        echo "<script>alert('one row inserted');</script>";
        echo "<a href='form.php'>Back</a>";
    }
    else
    {
        echo "<script>alert('Some Error Occured');</script>";
    }
}
?>