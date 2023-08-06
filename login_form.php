<?php

@include 'config.php';

session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($_SESSION['sign'])){
         echo $_SESSION['sign'];
         unset($_SESSION['sign']);
      }
      ?>
      <input type="regnum" name="regnum" required placeholder="enter your registration number">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

   <footer class="footer">
     
   </footer>

</body>
</html>

<?php

if(isset($_POST['submit'])){

  
   $regnum = $_POST['regnum'];
   $pass = md5($_POST['password']);
  
   $sql = "SELECT * FROM user_form WHERE regnum = '$regnum' and password='$pass';";

   $result = mysqli_query($conn,$sql);
   $row= mysqli_fetch_assoc($result);
   $count = mysqli_num_rows($result);
   if($count == 1 ){

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_regnum'] = $row['regnum'];

         header('location:admin_home.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_regnum'] = $row['regnum'];

   
         header('location:user_home.php');

      }
     
   }else{
      $_SESSION['sign']="<span class='error-msg'>incorrect regnum or password!</span>";
   }

}
?>