<html> 
    <head>
        <meta charset="UTF-8">
        <title>Filmy</title>
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
                            <li><a href="Kubrick.html">Kubrick</a></li>
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

            <div id="top5">
            <?php
                    session_start();
                   if ($_SESSION['user_name'])
                   {
                    echo "Witaj ".$_SESSION['user_name']."<br><br>";
                    echo '<a href="panel.php"> Wyloguj się</a>';
                   }
                  
                ?>
                    <br><br><br><h2>Kubrick: </h2><br>
                    
                    
                    <ul class="gallery">
                        <h1>------Mechaniczna pomarańcza-------</h1><br>
                        <li class="thumbnail">
                            <img src="Kubrick/Mechaniczna pomarańcza/1.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Kubrick/Mechaniczna pomarańcza/2.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Kubrick/Mechaniczna pomarańcza/3.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Kubrick/Mechaniczna pomarańcza/4.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Kubrick/Mechaniczna pomarańcza/5.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Kubrick/Mechaniczna pomarańcza/6.jpg">
                        </li>
                    </ul>
                        
                    
                        <ul class="gallery">
                            <h1>---------------Barry Lyndon--------------</h1><br>
                        <li class="thumbnail">
                            <img src="Kubrick/Barry Lyndon/1.jpg">
                        </li>
                        <li class="thumbnail">
                            <img  src="Kubrick/Barry Lyndon/2.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Kubrick/Barry Lyndon/3.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Kubrick/Barry Lyndon/4.jpg">
                        </li>
                        <li class="thumbnail">
                            <img  src="Kubrick/Barry Lyndon/5.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Kubrick/Barry Lyndon/6.jpg">
                        </li>

                    </ul>

                    <br><h2>Nolan: </h2><br>
                    
                    
                    <ul class="gallery">
                        <h1>------------------ Incepcja ---------------</h1><br>
                        <li class="thumbnail">
                            <img src="Nolan/Incepcja/1.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Nolan/Incepcja/2.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Nolan/Incepcja/3.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Nolan/Incepcja/4.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Nolan/Incepcja/5.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Nolan/Incepcja/6.jpg">
                        </li>
                    </ul>

                    <ul class="gallery">
                        <h1>-----------------Interstellar---------------</h1><br>
                        <li class="thumbnail">
                            <img src="Nolan/Interstellar/1.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Nolan/Interstellar/2.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Nolan/Interstellar/3.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Nolan/Interstellar/4.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Nolan/Interstellar/5.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Nolan/Interstellar/6.jpg">
                        </li>
                    </ul>



                    <br><h2>Tarantino: </h2><br>
                    
                    
                    <ul class="gallery">
                        <h1>---------------------Django--------------------</h1><br>
                        <li class="thumbnail">
                            <img src="Tarantino/Django/1.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Tarantino/Django/2.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Tarantino/Django/3.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Tarantino/Django/4.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Tarantino/Django/5.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Tarantino/Django/6.jpg">
                        </li>
                    </ul>

                    <ul class="gallery">
                        <h1>---------Nienawistna ósemka----------</h1><br>
                        <li class="thumbnail">
                            <img src="Tarantino/Nienawistna ósemka/1.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Tarantino/Nienawistna ósemka/2.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Tarantino/Nienawistna ósemka/3.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Tarantino/Nienawistna ósemka/4.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Tarantino/Nienawistna ósemka/5.jpg">
                        </li>
                        <li class="thumbnail">
                            <img src="Tarantino/Nienawistna ósemka/6.jpg">
                        </li>
                    </ul>


                    
                    <div class="popup hidden">
                        <button aria-label="Zamknij popup" class="popup__close">X</button>
                        <img src="" alt="" class="popup__img" />
                        <button
                            aria-label="Poprzednie zdjęcie"
                            class="popup__arrow popup__arrow--left"
                        >
                        <
                            
                        </button>
                        <button
                            aria-label="Następne zdjęcie"
                            class="popup__arrow popup__arrow--right"
                        >
                            >
                        </button>
                    </div>
                    <script src="js.js"></script>


            </div>

        </div>
    </body>
</html>