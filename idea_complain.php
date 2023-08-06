<?php
    @include 'config.php';

    session_start(); 

    $registerNum=$_SESSION['admin_regnum'];
    
    if(isset($_POST['submit'])){

      $regnum = $_POST['regnum'];
      $complain = mysqli_real_escape_string($conn, $_POST['complain']);

      $insert = "INSERT INTO idae_complains(regnum,idea_complain) VALUES('$regnum','$complain')";
      mysqli_query($conn, $insert);

      header('location:user_home.php');
    }

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
        <h3 style="margin-right:680px;">Idea And Complains</h3>
      </div>

      <a href="user_home.php"><input type="button" name="back" value="back to home" class="backbtn"></a>
      
   </header>

   <div class="idea">
      <div class="form-container">

      <form action="" method="post">
         <h3>submit your idea/complains now</h3>
         
         <input type="text" name="regnum" required placeholder="enter your reg.number">
         <input type="text" name="complain" required placeholder="tell us your idea/complains here">
        
         <input type="submit" name="submit" value="submit" class="form-btn">
        
      </form>

      </div>

   </div>  
   

   <footer class="footer">
     
   </footer>

</body>
</html>