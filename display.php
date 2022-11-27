<?php
  include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5"><a href ="user.php" class="text-light">Add User</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">student_name</th>
      <th scope="col">academic year</th>
      <th scope="col">CGPA</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from crud";
        $result=mysqli_query($con,$sql);
    if($result)
    {
        while($row=mysqli_fetch_assoc($result))
        {
          $id=$_POST['id'];
          $name=$_POST['student_name'];
          $academic year=['academic year'];
          $CGPA=$_POST['CGPA'];
          $email=$_POST['email'];
          $mobile=$_POST['mobile'];

            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$stdent_name.'</td>
            <td>'.$academic year.'</td
            <td>'.$CGPA.'</td
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>
              <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
              <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"class="text-light">Delete</a></button>
            </td>
            </tr>';

        }
    }
    ?>
</table>
</div>
</body>
</html>