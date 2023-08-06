<?php

   @include 'config.php';

   session_start();

   $registerNum=$_GET['regnum'];
   $sql="SELECT regnum,name,email from user_form where regnum='$registerNum'" ;
   $result = mysqli_query($conn,$sql);
   $row= mysqli_fetch_assoc($result);

   $name=$row['name'];
   $email=$row['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>first page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

   <header class="header">
      
      <div class="logo">
         <img src="./images/logo.png" alt="uni logo">
      </div>  
      
      <div class="home-header">
        <h3 style="margin-right:850px;">My Profile</h3>
      </div>

      <a href="user_home.php"><input type="button" name="back" value="back to home" class="backbtn"></a>
      
   </header>

   <div class="profile-container" style="margin-top: 10%;">

     <h3><?php echo $registerNum;
      echo '<br>';
      echo $name;
      echo '<br>';
      echo $email;
      echo '<br>';
      echo '<br>';
     ?>

         <input type="submit" name="submit" value="Edit Now" class="profile-btn">
         <input type="submit" name="submit" value="Change Password" class="profile-btn">
     </h3>
 
   </div>


   

   <footer class="footer">
     
   </footer>

</body>
</html>

