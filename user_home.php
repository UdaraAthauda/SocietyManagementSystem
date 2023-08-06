<?php
    @include 'config.php';

    session_start(); 

    $registerNum=$_SESSION['user_regnum'];

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
        <h2>User</h2>
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
                <a href="./information.php">
                    <span class="navitem">society information</span>
                </a>
            </li>
            <li>
                <a href="./user_memberships.php">
                    <span class="navitem">membership</span>
                </a>
            </li>
            <li>
                <a href="./idea_complain.php">
                    <span class="navitem">ideas/complains</span>
                </a>
            </li>
            <li>
                <a href="./user_memberships.php">
                    <span class="navitem">notifications</span>
                </a>
            </li>
        </ul>
   </nav>

   <div class="about-div">
        <div class="about">
                <h3>about</h3><br>
                <p>This is a web application for Society Management System in University of Vavuniya. This application follows aims at making the current manual situation in the societies simple and efficient. 
                    This System reduces the conflicts that arise within the society by providing facilities such as get notifications, 
                    online complain/suggestion registration in which society member can make complain form anywhere,
                     any time and committee with the help of the system resolve the Complain as soon as possible.
                </p>
        </div>
   </div>
   

   <footer class="footer">
     
   </footer>

</body>
</html>