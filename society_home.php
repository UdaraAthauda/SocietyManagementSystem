<?php 
   
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
<body class="bkcolor">

   <header class="header">
      
      <div class="logo">
         <img src="./images/logo.png" alt="uni logo">
      </div>  

    <div class="home-header" style="margin-right:150px;">
        <h3>
                <?php 
                    echo $_GET['name'];
                    $name = $_GET['name'];
                ?>
        </h3>
    </div>
      
      <a href="information.php"><input type="button" name="back" value="back to info" class="backbtn"></a>
      
   </header>

   <nav class="styHome-nav">


        <ul>
            <li style="margin-top: 30px;">
                <a>
                    <span class="navitem">society panel</span>
                </a>
            </li>
            <li>
                <a href="./information.php">
                    <span class="navitem">society information</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="navitem">membership</span>
                </a>
            </li>
           
        </ul>

        <a href="society_register.php?name=<?php echo $name?>">
            <input type="submit" name="submit" value="Register Now" class="styhome-btn">
        </a>
    </nav>

    <div class="about-div" style="margin-left: 25%; margin-top: 3%;" >
        <div class="about">
                <h3>INFO</h3><br>
                <p>Society Management System follows aims at making the current situation in the society simple and efficient for Uviversity of Vavuniya. 
                    This System reduces the conflicts that arise within the society by providing facilities such as get notifications, 
                    online complain/suggestion registration in which society member can make complain form anywhere,
                     any time and committee with the help of the system resolve the Complain as soon as possible, etc.
                </p>
        </div>
   </div>


   

   <footer class="footer">
     
   </footer>

</body>
</html>