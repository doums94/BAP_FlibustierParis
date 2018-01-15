<?php

$bdd = new PDO('mysql:host=localhost;dbname=flibustier_paris;charset=utf8', 'root', 'root');

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
                <div class="barre" style="border: 3px solid black">
                    <a class="btn btn-default white btn-circle " role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
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
                    <li class="active"><a href="#home">Tailles / modèles</a></li>
                    <li><a href="#mentions">Perles</a></li>
                </ul>
                <div class="tabs-content">
                    <div class="tab-content active" id="home">
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
                                        <a href="#menu1">Basique - 0€/perle</a>
                                        <div class="un">
                                            <p><img src="image/8mm-standar/ Ebene.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/BlueLaceAgathe.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/CorailFossilisée.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Dumortierite.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Hematite.png" width="72" height="72"></p>
                                        </div>
                                        <div class="un">
                                            <p><img src="image/8mm-standar/LavaBK.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Nacre.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Obsidian.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Howlite.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/JaspeImperiale.png" width="72" height="72"></p>
                                        </div>
                                        <div class="un">
                                            <p><img src="image/8mm-standar/QuartzRose.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Rhodocrosite.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/RoseQuartz.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/OeilDeTaureau.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/PetrifiedWood.png" width="72" height="72"></p>
                                        </div>
                                        <div class="un">
                                            <p><img src="image/8mm-standar/TigerEye.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Rubyzoisite.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-standar/Sodalite.png" width="72" height="72"></p>
                                        </div>
                                    </section>

                                    <section id="menu2">
                                        <a href="#menu2">Premium - 2€/perle</a>
                                        <div class="un">
                                            <p><img src="image/8mm-premium/Eagle.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-premium/Garnet.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-premium/Hypersthene.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-premium/Labradorite.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-premium/LapisLazuli.png" width="72" height="72"></p>
                                        </div>
                                        <div class="un">
                                            <p><img src="image/8mm-premium/OeilDeFaucon.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-premium/Spinel.png" width="72" height="72"></p>
                                        </div>
                                    </section>

                                    <section id="menu3">
                                        <a href="#menu3">Rares - 10€/perle</a>
                                        <div class="un">
                                            <p><img src="image/8mm-rare/Rubis.png" width="72" height="72"></p>
                                            <p><img src="image/8mm-rare/Turquoise.png" width="72" height="72"></p>
                                        </div>
                                    </section>
                                </div>

















                                <div id="menu-6mm">
                                    <section id="menu1">
                                        <a href="#menu1">Basique - 0€/perle</a>
                                        <div class="un">
                                            <p><img src="image/6mm-standard/ Labradorite.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-standard/BlueLaceAgathe.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-standard/Ebene.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-standard/Howlite.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-standard/JaspeImperiale.png" width="72" height="72"></p>
                                        </div>
                                        <div class="un">
                                            <p><img src="image/6mm-standard/LavaBK.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-standard/PetrifiedWood.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-standard/Sardonis.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-standard/Sodalite.png" width="72" height="72"></p>

                                        </div>
                                    </section>

                                    <section id="menu2">
                                        <a href="#menu2">Premium - 1€/perle</a>
                                        <div class="un">
                                            <p><img src="image/6mm-premium/Amethyste.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-premium/Garnet.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-premium/Kyanite.png" width="72" height="72"></p>
                                            <p><img src="image/6mm-premium/Malachite.png" width="72" height="72"></p>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="btn black btn-lg btn-block hidden-md hidden-lg" style="color: white">Prix</button>
                <button type="button" class="btn black btn-lg btn-block hidden-md hidden-lg" style="color: white">Finalisation</button>
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