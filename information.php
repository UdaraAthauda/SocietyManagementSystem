<?php
     @include 'config.php';

     session_start();
  
    
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
<body class="info">

   <header class="header">
      
      <div class="logo">
         <img src="./images/logo.png" alt="uni logo">
      </div>
      
      <div class="home-header">
        <h3 style="margin-right:700px;">Society Informations</h3>
      </div>
      
      <a href="user_home.php"><input type="button" name="back" value="back to home" class="backbtn"></a>
      
   </header>

   <div class="prnt-scty">

        <?php
            $sql="SELECT name,image from societies" ;
            $result = mysqli_query($conn,$sql);
            if($result){
                $count=mysqli_num_rows($result);

                if($count>0){
                    while($row= mysqli_fetch_assoc($result)){
                        $name=$row['name'];
                        $image=$row['image'];
        ?>

                        <div class="prnt-sctyin">
                            <a href="society_home.php?name=<?php echo $name?>"><img src="<?php echo './images/'.$image ?>" alt="Slogo"></a>
                            <h3><?php echo $name ?></h3>
                        </div>

        <?php
                    }
                    
                }
            }
            
           

        ?>
       
   </div>

   

   <footer class="footer">
     
   </footer>

</body>
</html>