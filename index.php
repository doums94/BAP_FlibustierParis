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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <div class="row">
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
                            <input TYPE="radio" NAME=Modele VALUE=Marie>Simple rang
                            <input TYPE="radio" NAME=Modele VALUE=Divorce class="decale1">Double rang
                            <br>
                            <br>
                            <br>
                        </div>
                        <div><b>Tailles des perles :</b></div>
                        <br>
                        <input TYPE="radio" NAME=Perle VALUE=Marie>6 mm
                        <input TYPE="radio" NAME=Perle VALUE=Divorce class="decale2">8 mm
                        <br>
                        <br>
                        <br>
                        <div><b>Tailles du bracelet :</b></div>
                        <br>
                        <input TYPE="radio" NAME=Bracelet VALUE=Marie>S
                        <input TYPE="radio" NAME=Bracelet VALUE=Divorce class="decale3">L
                        <br>
                        <br>
                        <input TYPE="radio" NAME=Bracelet VALUE=Marie >M
                        <input TYPE="radio" NAME=Bracelet VALUE=Divorce class="decale4">XL
                    </div>
                    <div class="tab-content" id="mentions">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-">
                                <div class="doc">
                                    <section id="menu1">
                                        <a href="#menu1">Basique</a>
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
                                        <a href="#menu2">Premium</a>
                                        <p>usdofuebrdsiukgfzeisdhfoziesdhfoizeuhksdjfv
                                            zesdxfjhzegbsdxfiukjhcznedslxifhknczesdlxj;,fhcnozerkdsjhxfcezkdsjxhfvoeksdjxhfoezkjdx
                                            sjdhfnchzesdkxjfhczelsdixf;khvn osdkux;fj,hvsdkxfujc,herdsxkferjdhxf
                                            erygfuerzygsdfuyzgesdfgizsgdfiuvgrsiudfgivufsiufvhfisuchfiuvhdsiufhvisudhfv
                                            sjdgfviukhsdfvkhfcihvfdkcjhbvkfjchbvkjfhbcgvkjfcgbvjkfsbkvjfncbkvjfckjv,nfbc</p>
                                    </section>

                                    <section id="menu3">
                                        <a href="#menu3">Rares</a>
                                        <p>usdofuebrdsiukgfzeisdhfoziesdhfoizeuhksdjfv
                                            zesdxfjhzegbsdxfiukjhcznedslxifhknczesdlxj;,fhcnozerkdsjhxfcezkdsjxhfvoeksdjxhfoezkjdx
                                            sjdhfnchzesdkxjfhczelsdixf;khvn osdkux;fj,hvsdkxfujc,herdsxkferjdhxf
                                            erygfuerzygsdfuyzgesdfgizsgdfiuvgrsiudfgivufsiufvhfisuchfiuvhdsiufhvisudhfv
                                            sjdgfviukhsdfvkhfcihvfdkcjhbvkfjchbvkjfhbcgvkjfcgbvjkfsbkvjfncbkvjfckjv,nfbc</p>
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

<script src="jquery/dist/jquery.min.js"></script>
<script src="app.js"></script>
</body>

</html>