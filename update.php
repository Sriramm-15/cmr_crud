<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$student_name=$row['student_name'];
$academic year=$row['academic year'];
$CGPA=$row['CGPA'];
$email=$row['email'];
$mobile=$row['mobile'];
if(isset($_POST['submit'])){
  $id=$_POST['id'];
  $name=$_POST['student_name'];
  $academic year=['academic year'];
  $CGPA=$_POST['CGPA'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $sql="update crud set id=$id,student_name='$student_name',academic year='$academic year,CGPA='$CGPA',email='$email'mobile='$mobile', where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
   header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" 
                placeholder="Enter your name" 
                name="name" autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" 
                placeholder="Enter your email" 
                name="email" autocomplete="off" value=<?php echo $email;?> >
            </div>
            <div class="form-group">
                <label >Mobile</label>
                <input type="text" class="form-control" 
                placeholder="Enter your mobile number" 
                name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="text" class="form-control" 
                placeholder="Enter your password" 
                name="password" value=<?php echo $password;?>>
            </div>
  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>
      </div>


  </body>
</html>