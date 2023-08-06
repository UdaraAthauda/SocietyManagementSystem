<?php

@include 'config.php';

session_start(); 

$sname = $_GET['name'];
$regnum = $_SESSION['user_regnum'];

if(isset($_POST['submit'])){
   
   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = $_POST['gender'];
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);

  

    $insert = "INSERT INTO $sname(regnum,Fname,Lname,email,gender,faculty) VALUES('$regnum','$fname','$lname','$email','$gender','$faculty')";
    mysqli_query($conn, $insert);
    

    $sql = "SELECT * FROM societies WHERE name = '$sname';";
    $res = mysqli_query($conn, $sql);
    $row= mysqli_fetch_assoc($res);

    if($row['name'] == $sname){

        $name = $row['name'];
        $image = $row['image'];

        $insert = "INSERT INTO membership(regnum,name,image) VALUES('$regnum','$name','$image')";
        mysqli_query($conn, $insert);

        header('location:user_memberships.php');

    }
   

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      
      <input type="text" name="fname" required placeholder="enter your first name">
      <input type="text" name="lname" required placeholder="enter your last name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="text" name="faculty" required placeholder="enter your faculty">
      <select name="gender">
         <option value="male">male</option>
         <option value="female">female</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      
   </form>

</div>

   <footer class="footer">
     
   </footer>

</body>
</html>