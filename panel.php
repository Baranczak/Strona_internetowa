<html> 
    <head>
        <meta charset="UTF-8">
        <title>Top films of ktoś</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div id="container">
            <div id="header">
            <center><img src="obrazy/logo.png" height="200px" width="200px"></center>
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
                    <li><a href="Info.html">Galeria</a>
                    </li>
                    <li><a href="panel.php">Panel logowania</a></li>
                    <li><a href="o_nas.html">O nas</a></li></li>
                </ol>
            
            </div>
            <?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

 
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
 
  
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

     
         $_SESSION['user_name'] = $row['name'];
         header('location:Galeria.php');

      
     
   }else{
      $error[] = 'niepoprawne dane logowania!';
   }

};
?>

<div class="form-container">

   <form action="" method="post">
      <h3>logowanie</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder=" email">
      <input type="password" name="password" required placeholder="hasło">
      <input type="submit" name="submit" value="Zaloguj się" class="form-btn">
      <p>Nie masz konta? <a href="register_form.php">Zarejestruj się</a></p>
      <p>kontynuuj jako gość <a href="Info.php">Gość</a></p>
   </form>

</div>
<div id="fotter">Stronę wykonali studenci inżynieri i analizy danych:Buras Weronika Baran Kamil &copy; Wszystkie prawa zastrzeżone</div>
    </body>
</html>