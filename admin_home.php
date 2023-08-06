<?php
    @include 'config.php';

    session_start(); 

    $registerNum=$_SESSION['admin_regnum'];
    

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
<body class="home">

   <header class="header">
      
      <div class="logo">
         <img src="./images/logo.png" alt="uni logo">
      </div>

      <div class="home-header">
        <h3>University Of Vavuniya<br>Society Management System</h3>
      </div>

      <div class="user-type">
        <h2>Admin</h2>
        <a href="logout.php"><input type="button" name="sign" value="sign out" class="signbtn"></a>
      </div>
      
   </header>

   <nav>

      <div class="list_logo">
         <img src="./images/logo1.png" alt="uni logo">
      </div>


        <ul>
            <li>
                <a href="./user_profile.php?regnum=<?php echo $registerNum; ?>">
                    <span class="navitem">my profile</span>
                </a>
            </li>
            <li>
                <a href="./society-admin.php">
                    <span class="navitem">societys</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="navitem">add members</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="navitem">ideas/complains</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="navitem">notifications</span>
                </a>
            </li>
        </ul>
   </nav>
   

   <footer class="footer">
     
   </footer>

</body>
</html>