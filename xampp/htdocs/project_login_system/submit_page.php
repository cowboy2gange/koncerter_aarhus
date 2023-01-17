<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $artist = mysqli_real_escape_string($conn, $_POST['artist']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $bar = mysqli_real_escape_string($conn, $_POST['bar_name']);
    $insert = "INSERT INTO submitted_music(artist, date, bar_name) VALUES('$artist','$date','$bar')";
    mysqli_query($conn, $insert);
    header('location:login_form.php');

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
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register new concert</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="artist" required placeholder="enter artist name">
      <input type="date" name="date" required placeholder="enter date">
      <input type="location" name="location">

      <input type="submit" name="submit" value="register concert" class="form-btn">
      <!-- <p>already have an account? <a href="login_form.php">login now</a></p> -->
   </form>

</div>

</body>
</html>