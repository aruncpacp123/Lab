<?php
$dbcon=mysqli_connect("localhost","root","","student");
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
    $sql="insert into registration values('$ktu','$roll','$name','$gender','$age','$sem','$add','$pno','$email','$ktu')";
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
    $total_assign=$assignment1+$assignment2;
    if($attendence>90)
        $total_attend=8;
    else if($attendence >80)
        $total_attend=7;
    else if($attendence >70)
        $total_attend=6;
    else
        $total_attend=0;
    $total_ser=(($series1+$series2)/100)*20;
    $total=$total_assign+$total_attend+$total_ser;
    if($total_attend==0)
        $total=0;
    $sql="insert into mark values('$ktuid','$subject','$series1','$series2','$assignment1','$assignment2','$attendence','$total')";
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
    $total_assign=$assignment1+$assignment2;
    if($attendence>90)
        $total_attend=8;
    else if($attendence >80)
        $total_attend=7;
    else if($attendence >70)
        $total_attend=6;
    else
        $total_attend=0;
    $total_ser=(($series1+$series2)/100)*20;
    $total=$total_assign+$total_attend+$total_ser;
    if($total_attend==0)
        $total=0;
    $sql="update mark set series1=$series1,series2=$series2,assignments3=$assignment1,assignment4=$assignment2,attendence=$attendence,internal=$total where ktu_id='$ktuid' and subject_id=$subject";
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