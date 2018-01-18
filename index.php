<?php

$bdd = new PDO('mysql:host=localhost;dbname=flibustier_paris;charset=utf8', 'root', 'root');

include "fonctions.php";

$res = appel_image($bdd);


?>


<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

<div align="center" class="col">
    <img src="image/logo_fr.jpg">
</div>

<header>


</header>

<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1">
            <div class="tof">
                <div class="barre" style="border: 1px solid #969A99">
                    <a class="btn btn-default white btn-circle " role="button" data-toggle="collapse"
                       href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        ?
                    </a>
                    <div class="collapse" id="collapseExample">
                        <div class="well">
                            <p>Étape 1 : Choix des tailles</p>

                            <p>Sélectionner le modèle voulu, puis la tailles des perles
                                ainsi que la tailles du bracellet.</p>

                            <p>Étape 2 : Choix des perles</p>

                            <p>Vous pouvez selectionnez (nbr perles) parmis 3 catégoris :
                                basique , premium, et rares. Le prix varie en fonction de la
                                perles et de la catégorie.</p>
                        </div>
                    </div>
                    <div>
                        <img src="image/bracelets/6S.png" style="display: none" data-bracelet="6mmS" class="image-bracelets" width="100%">
                        <img src="image/bracelets/6M.png" style="display: none" data-bracelet="6mmM" class="image-bracelets" width="100%">
                        <img src="image/bracelets/6L.png" style="display: none" data-bracelet="6mmL" class="image-bracelets" width="100%">
                        <img src="image/bracelets/6XL.png" style="display: none" data-bracelet="6mmXL" class="image-bracelets" width="100%">
                    </div>
                    <div>
                        <img src="image/bracelets/8S.png" style="display: none" data-bracelet="8mmS" class="image-bracelets" width="100%">
                        <img src="image/bracelets/8M.png" style="display: none" data-bracelet="8mmM" class="image-bracelets" width="100%">
                        <img src="image/bracelets/8L.png" style="display: none" data-bracelet="8mmL" class="image-bracelets" width="100%">
                        <img src="image/bracelets/8XL.png" style="display: none" data-bracelet="8mmXL" class="image-bracelets" width="100%">
                    </div>
                    <div id="pearlContainer"></div>
                </div>
            </div>
            <div class="row bas">
                <div class="col-md-6 col-lg-6 hidden-sm hidden-xs">
                    <button type="button" class="btn black btn-lg btn-block" style="color: white">Prix</button>
                </div>
                <div class="col-md-6 col-lg-6 hidden-sm hidden-xs">
                    <button type="button" class="btn black btn-lg btn-block" style="color: white">Finalisation</button>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
            <div>
                <ul class="tabs">
                    <li class="active">
                        <a href="#home">Tailles / modèles</a>
                    </li>
                    <li id="tab-pearl" style="display: none;">
                        <a href="#mentions">Perles</a>
                    </li>
                </ul>
                <div class="tabs-content">
                    <div class="tab-content active" id="home">
                        <br>
                        <br>
                        <div>
                            <b>Modèle :</b>
                            <br>
                            <br>
                            <input type="radio" name="modele" value="Simple" id="Simple">
                            <label for="Simple">Simple rang</label>
                            <input type="radio" name="modele" value="Double" id="Double">
                            <label for="Double">Double rang</label>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div><b>Tailles des perles :</b></div>
                        <br>

                        <input type="radio" name="perle" value="6mm" id="6mm">
                        <label for="6mm">6mm</label>

                        <input type="radio" name="perle" value="8mm" id="8mm">
                        <label for="8mm">8mm</label>

                        <br>
                        <br>
                        <br>
                        <div><b>Tailles du bracelet :</b></div>
                        <br>
                        <input type="radio" name="taille" value="S" id="S">
                        <label for="S">S</label>
                        <input type="radio" name="taille" value="L" id="L">
                        <label for="L">L</label>
                        <br>
                        <br>
                        <input type="radio" name="taille" value="M" id="M">
                        <label for="M">M</label>
                        <input type="radio" name="taille" value="XL" id="XL">
                        <label for="XL">XL</label>
                    </div>
                    <div class="tab-content gris" id="mentions">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-">
                                <div id="menu-8mm">
                                    <section id="menu1">
                                        <a id="m1" href="#menu1">Basique - 0€/perle</a>
                                            <?php
                                            foreach($res as $r){
                                                if($r['prix'] == 0 AND $r['taille'] == "8mm"){ ?>
                                                    <div class="un">
                                                    <div class=" col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                                    <p><img class="perle" src="<?php echo $r['chemin']; ?>" width="36" height="36"></p>
                                                    </div>
                                                    </div>
                                                <?php }
                                            }
                                            ?>
                                          <!--  <p><img src="image/8mm-standar/ Ebene.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/BlueLaceAgathe.png" width="72" height="72">
                                            </p>
                                            <p><img src="image/8mm-standar/CorailFossilisée.png" width="72"
                                                    height="72"></p>
                                            <p><img src="image/8mm-standar/Dumortierite.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Hematite.png" width="72" height="72"></p>

                                            <p><img src="image/8mm-standar/LavaBK.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Nacre.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Obsidian.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Howlite.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/JaspeImperiale.png" width="72" height="72">
                                            </p>

                                            <p><img src="image/8mm-standar/QuartzRose.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Rhodocrosite.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/RoseQuartz.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/OeilDeTaureau.png" width="72" height="72">
                                            </p>
                                            <p><img src="image/8mm-standar/PetrifiedWood.png" width="72" height="72">
                                            </p>
                                            <p><img src="image/8mm-standar/TigerEye.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Rubyzoisite.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Sodalite.png" width="72" height="72"></p>
                                        </div>
                                        -->
                                    </section>

                                    <section id="menu2">
                                        <a id="m2" href="#menu2">Premium - 2€/perle</a>
                                        <?php
                                        foreach($res as $r){
                                            if($r['prix'] == 2 AND $r['taille'] == "8mm"){ ?>
                                                <div class="deux">
                                                    <div class=" col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                                        <img class="perle" src="<?php echo $r['chemin']; ?>" width="36" height="36">
                                                    </div>
                                                </div>
                                            <?php }
                                        }
                                        ?>
                                        <!--<div class="un">
                                            <p><img src="image/8mm-premium/Eagle.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-premium/Garnet.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-premium/Hypersthene.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-premium/Labradorite.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-premium/LapisLazuli.png" width="72" height="72"></p>
                                        </div>
                                        <div class="un">
                                            <p><img src="image/8mm-premium/OeilDeFaucon.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-premium/Spinel.png" width="72" height="72"></p>
                                        </div>-->
                                    </section>

                                    <section id="menu3">
                                        <a id="m3" href="#menu3">Rares - 10€/perle</a>
                                        <?php
                                        foreach($res as $r){
                                            if($r['prix'] == 10 AND $r['taille'] == "8mm"){ ?>
                                                <div class="trois">
                                                    <div class=" col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                                        <img class="perle" src="<?php echo $r['chemin']; ?>" width="36" height="36">
                                                    </div>
                                                </div>
                                            <?php }
                                        }
                                        ?>
                                        <!--<div class="un">
                                            <p><img src="image/8mm-rare/Rubis.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-rare/Turquoise.png" width="72" height="72"></p>
                                        </div>-->
                                    </section>
                                </div>
                                <div id="menu-6mm">
                                    <section id="menu1">
                                        <a id="m4" href="#menu1">Basique - 0€/perle</a>
                                        <?php
                                        foreach($res as $r){
                                            if($r['prix'] == 0 AND $r['taille'] == "6mm"){ ?>
                                                <div class="quatre">
                                                    <div class=" col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                                        <img class="perle" src="<?php echo $r['chemin']; ?>" width="36" height="36">
                                                    </div>
                                                </div>
                                            <?php }
                                        }
                                        ?>
                                        <!--<div class="un">
                                            <p><img src="image/6mm-standard/ Labradorite.png" width="72" height="72">
                                            </p>
                                            <p><img src="image/6mm-standard/BlueLaceAgathe.png" width="72" height="72">
                                            </p>
                                            <p><img src="image/6mm-standard/Ebene.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-standard/Howlite.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-standard/JaspeImperiale.png" width="72" height="72">
                                            </p>
                                        </div>
                                        <div class="un">
                                            <p><img src="image/6mm-standard/LavaBK.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-standard/PetrifiedWood.png" width="72" height="72">
                                            </p>
                                            <p><img src="image/6mm-standard/Sardonis.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-standard/Sodalite.png" width="72" height="72"></p>

                                        </div>-->
                                    </section>

                                    <section id="menu2">
                                        <a id="m5" href="#menu2">Premium - 1€/perle</a>
                                        <?php
                                        foreach($res as $r){
                                            if($r['prix'] == 1 AND $r['taille'] == "6mm"){ ?>
                                                <div class="cinq">
                                                    <div class=" col-lg-2 col-md-2 col-sm-4 col-xs-4">
                                                        <img class="perle" src="<?php echo $r['chemin']; ?>" width="36" height="36">
                                                    </div>
                                                </div>
                                            <?php }
                                        }
                                        ?>
                                        <!--<div class="un">
                                            <p><img src="image/6mm-premium/Amethyste.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-premium/Garnet.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-premium/Kyanite.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-premium/Malachite.png" width="72" height="72"></p>
                                        </div>-->
                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="btn black btn-lg btn-block hidden-md hidden-lg" style="color: white">
                    Finalisation
                </button>
            </div>
        </div>
    </div>
</div>

<footer>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>

</html>