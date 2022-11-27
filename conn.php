<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['student_name'];
    $academic year=['academic year'];
    $CGPA=$_POST['CGPA'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    $sql="insert into crud_form(id,student_name,academic year,CGPA,email,mobile)
    values('$id','$student_name','$academic year','$CGPA',' $email','$mobile')";

    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:user.php');
        
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
<!--