<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!-- Page ACCUEIL du site web VILLAGE GREEN -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Village Green Web</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" /><!-- Pour Icones Réseaux Sociaux-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
    <link rel="stylesheet" href="<?= $this->Url->build("/css/FontsVG.css")?>">
    <link rel="stylesheet" href="<?= $this->Url->build("/css/vgstyle.css")?>">
    <link rel="stylesheet" href="<?= $this->Url->build("/carousel/flexslider.css")?>">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <script src="<?= $this->Url->build("/js/jquery.js")?>"></script>
    <script src="<?= $this->Url->build("/js/VgJQ.js")?>"></script>
</head>
<body>
<div class="container">
    <div class="mdl-grid sansMarPad">
        <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"><img src="<?= $this->Url->build("/ImagesVG/gieg_35.jpg") ?> "></div> <!-- Colonne Gauche-->

        <div class="mdl-cell mdl-cell--8-col arista MyBlack sansMarPad"> <!-- Colonne Centrale -->
            <div class="mdl-layout__header-row gris Entete">
                <div><a href="<?= $this->Url->build("/Pages/display") ?>"><img src="<?= $this->Url->build("/ImagesVG/accueil/logo.png")?>" class="imgEntete"></a></div>
                <div class="search"><input type="text" id="Recherche1" placeholder="Tapez votre recherche" /><img src="<?= $this->Url->build("/ImagesVG/accueil/button%20search.png")?>" class="imgLoupe"> </div>
                <div class="sizeButton"><a href="<?= $this->Url->build("/client/inscription")?>" class="fontBlack btnEntete fontBtnEntete gris arista"> <img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20espace%20client.png")?>" class="imgEntete" />ESPACE CLIENT</a></div>
                <div class="sizeButton MargG10"><a href="<?= $this->Url->build("/EnConstruction.html") ?>" class="fontBlack btnEntete fontBtnEntete gris arista"><img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20wishlist.png")?>" class="imgEntete">WISHLIST</a></div>
                <div class="sizeButton"><a href="<?= $this->Url->build("/EnConstruction.html") ?>" class="fontBlack btnEntete fontBtnEntete gris arista"><img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20help.png")?>" class="imgEntete">AIDE</a> </div>
                <div class="sizeButton"><a href="<?= $this->Url->build("/produits/liste") ?>" class="fontBlack btnEntete fontBtnEntete gris arista">
                        <img id="imgpanier" src="<?= $this->Url->build("/ImagesVG/accueil/icon%20achat.png")?>" data-swap="<?= $this->Url->build("/ImagesVG/accueil/roll%20over/icon%20achat.png") ?> " class="imgEntete">
                    </a> </div>
            </div>

    <?= $this->fetch('content') ?>    <!-- Affichera le contenu différent de chaque page -->

            <!-- Placement du Footer -->
            <div class="mdl-grid  FontGris myriad">
                <div class="mdl-cell mdl-cell--4-col">
                    SUIVEZ NOUS SUR : <br /><br />
                    <a class="facebookBtn smGlobalBtn" href="https://www.facebook.com/thom.pyro" ></a>
                    <a class="googleplusBtn smGlobalBtn" href="https://plus.google.com/u/0/113772452785549939672" ></a>
                    <a class="linkedinBtn smGlobalBtn" href="https://fr.linkedin.com/in/thomas-dufaux-75ba96115" ></a>
                </div>

                <div class="mdl-cell mdl-cell--4-col">
                    POUR NOUS CONTACTER : <br /><br />
                    30 rue de Poulainville <br />
                    800003 AMIENS<br /><br />
                    dufaux.thom@gmail.com<br />
                    06 10 78 04 47


                </div>

                <div class="mdl-cell mdl-cell--4-col">
                    PAIEMENTS ET SECURITÉ :<br /><br />
                    <img src="<?= $this->Url->build("/ImagesVG/logosCB.jpg")?>"><br />
                    Réglez de manière sûre et sécurisée <br />
                    par paiement à réception, carte banciare, <br />
                    virement, Paypal ou Amazon Payments.
                </div>

            </div>



        </div>
        <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div> <!-- Colonne Droite-->
    </div>

</body>
</html>
