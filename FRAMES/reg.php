<?php
$dbcon=mysqli_connect("localhost","root","","student2");
if(isset($_POST['submitted']))
{
    $ktu=$_POST['ktuid'];
    $roll=$_POST['rollno'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $sem=$_POST['sem'];
    $add=$_POST['address'];
    $pno=$_POST['phno'];
    $email=$_POST['email'];
    $sql="insert into registration values('$ktu','$roll','$name','$gender','$age','$sem','$add','$pno','$email')";
    $data=mysqli_query($dbcon,$sql);
    if($data)
    {
        echo "<script>alert('Succesfully Inserted');</script>";
        header("location:homes.php");
    }
    else
    {
        echo "<script>alert('Some Error Occured');</script>";
    }
}
if(isset($_POST['mark']))
{
    $ktuid=$_POST['ktuid'];
    $subject=$_POST['subject'];
    $series1=$_POST['series1'];
    $series2=$_POST['series2'];
    $assignment1=$_POST['assignment1'];
    $assignment2=$_POST['assignment2'];
    $attendence=$_POST['attendence'];
    $sql="insert into mark values('$ktuid','$subject','$series1','$series2','$assignment1','$assignment2','$attendence')";
    $data=mysqli_query($dbcon,$sql);
    if($data)
    {
        echo "<script>alert('Succesfully Inserted');</script>";
        header("location:semester.php?q=Successfully Inserted");
    }
    else
    {
        echo "<script>alert('Some Error Occured');</script>";
    }
}
if(isset($_POST['final']))
{
    $ktuid=$_POST['ktuid'];
    $subject=$_POST['subid'];
    $series1=$_POST['series1'];
    $series2=$_POST['series2'];
    $assignment1=$_POST['assignment1'];
    $assignment2=$_POST['assignment2'];
    $attendence=$_POST['attendence'];
    $sql="update mark set series1=$series1,series2=$series2,assignments3=$assignment1,assignment4=$assignment2,attendence=$attendence where ktu_id='$ktuid' and subject_id=$subject";
    $data=mysqli_query($dbcon,$sql);
    if($data)
    {
        echo "<script>alert('Succesfully Updated');</script>";
        header("location:homes.php?w=Succesfully Updated");
    }
    else
    {
        echo "<script>alert('Some Error Occured');</script>";
    }
}
?>