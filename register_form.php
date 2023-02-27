<html> 
    <head>
        <meta charset="UTF-8">
        <title>Top films of ktoś</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div id="container">
            <div id="header">
            <center><img src="logo.png" height="200px" width="200px"></center>
            </div>
            
            <div id="menu">
                <ol>
                    <li><a href="Strona_glowna.html">Strona główna</a></li>
                    <li><a href="#">Reżyserzy</a>
                        <ul>
                            <li><a href="Reżyser.html">Kubrick</a></li>
                            <li><a href="nolan.html">Nolan</a></li>
                            <li><a href="tarantino.html">Tarantino</a></li>
                        </ul>
                    </li>
                    <li><a href="Galeria.html">Galeria</a>
                    </li>
                    <li><a href="panel.php">Panel logowania</a></li>
                    <li><a href="o_nas.html">O nas</a></li></li>
                </ol>
            
            </div>
            <?php>


<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
  

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'użytkownik o podanym emailu już istnieje';

   }else{

      if($pass != $cpass){
         $error[] = 'Podane hasła nie są takie same!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password) VALUES('$name','$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:panel.php');
      }
   }

};


?>


   
<div class="form-container">

   <form action="" method="post">
      <h3>Rejestracja</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Wprowadź imię">
      <input type="email" name="email" required placeholder="Wprowadź email">
      <input type="password" name="password" required placeholder="Wprowadź hasło">
      <input type="password" name="cpassword" required placeholder="Potwierdź hasło">
      
      <input type="submit" name="submit" value="Zarejestruj się" class="form-btn">
      <p>Masz już konto? <a href="panel.php">Zaloguj się</a></p>
   </form>

</div>

</body>
</html>