<?php
      // Lê o arquivo JSON
      $dadosJson = file_get_contents("dados.json");
      $usuarios = json_decode($dadosJson, true);
  
      // Pega o nome do primeiro usuário do array
      $NOME = $usuarios[0]["nome"];
      $especializado = $usuarios[0]["Especi"];
      $email = $usuarios[0]["email"];
      $insta = $usuarios[0]["insta"];
      $github = $usuarios[0]["git"];
      $moradia = $usuarios[0]["moradia"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curriculum Vitae|Fernando Sanches</title>
        <link rel="stylesheet" href="cv.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <body class="cv_body">
            <ul class="menu">
                <li><a href="index.html">Back</a></li>
            </ul>
            <div class="container">
                <div class="top">
                    <div class="imgBx">
                        <div class="box">
                            <img src="imgs/20250725_224449312_iOS.jpg" alt="">
                        </div>
                    </div>
                    <div class="profileText">
                    <h3><?= $NOME ?></h3><br><span><?= $especializado?></span></h3>
                    </div>
                </div>
                <div class="contentBox">
                    <div class="leftSide">
                        <h3>Contact Info</h3>
                        <ul>
                            <li>
                                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                                <span class="text"><?= $email ?></span>
                            </li>
                            <li>
                                <span class="icon"><ion-icon name="logo-instagram"></ion-icon></span>
                                <span class="text"><?= $insta ?></span>
                            </li>
                            <li>
                                <span class="icon"><ion-icon name="compass-outline"></ion-icon></span>
                                <span class="text"><?= $github ?></span>
                            </li>
                            <li>
                                <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                                <span class="text"><?= $moradia ?></span>
                            </li>
                        </ul>
                        <h3>Education</h3>
                        <ul class="education">
                            <li>
                                <h5><?= $usuarios[0]["estudos"]["estudo1"]["data"] ?></h5>
                                <h4><?= $usuarios[0]["estudos"]["estudo1"]["oque"] ?></h4>
                                <h6><?= $usuarios[0]["estudos"]["estudo1"]["onde"] ?></h6>                            
                            </li>
                            <li>
                                <h5><?= $usuarios[0]["estudos"]["estudo2"]["data"] ?></h5>
                                <h4><?= $usuarios[0]["estudos"]["estudo2"]["oque"] ?></h4>
                                <h6><?= $usuarios[0]["estudos"]["estudo2"]["onde"] ?></h6>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="rightSide">
                    <h3>Hard Skills</h3>
                        <ul class="language">
                            <li>
                                <span class="text"><?= $usuarios[0]["linguas"]["lingua1"]["lingua"] ?></span>
                                <span class="percent">
                                    <div style="width: 80%;"></div> 
                                </span>
                            </li>
                            
                            <li>
                                <span class="text"><?= $usuarios[0]["linguas"]["lingua2"]["lingua"] ?></span>
                                <span class="percent"><div style="width: 80%;"></div></span>
                            </li>
                            
                            <li>
                                <span class="text"><?= $usuarios[0]["linguas"]["lingua3"]["lingua"] ?></span>
                                <span class="percent"><div style="width: 35%;"></div></span>
                            </li>
                            
                            <li>
                                <span class="text"><?= $usuarios[0]["linguas"]["lingua4"]["lingua"] ?></span>
                                <span class="percent"><div style="width: 25%;"></div></span>
                            </li>
                        </ul>
                        
                        
                    <h3>Languages</h3>
                        <ul class="Language">
                            <li>
                                <span class="text"><?= $usuarios[0]["linguages"]["lingua1"]["lingua"] ?>:</span>
                                <p><?= $usuarios[0]["linguages"]["lingua1"]["nivel"] ?></p>
                            </li>
                            
                            <li>
                                <span class="text"><?= $usuarios[0]["linguages"]["lingua2"]["lingua"] ?>:</span>
                                <p><?= $usuarios[0]["linguages"]["lingua2"]["nivel"] ?></p>
                            </li>
                            
                            <li>
                                <span class="text"><?= $usuarios[0]["linguages"]["lingua3"]["lingua"] ?>:</span>
                                <p><?= $usuarios[0]["linguages"]["lingua3"]["nivel"] ?></p>
                            </li>
                            
                            <li>
                                <span class="text"><?= $usuarios[0]["linguages"]["lingua4"]["lingua"] ?>:</span>
                                <p><?= $usuarios[0]["linguages"]["lingua4"]["nivel"] ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>