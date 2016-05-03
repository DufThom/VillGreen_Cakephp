


<!-- Barre des Rubriques -->
<div class="mdl-layout__header-row Entete MyBlack">
    <div ><a href="<?= $this->Url->build("/produits/rubriq/1")?>" class="FontGris Entete"> Guitare <img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20guitar.png") ?>" class="imgEntete"></a></div>
    <div ><a href="<?= $this->Url->build("/produits/rubriq/2")?>" class="FontGris Entete"> Clavier <img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20clavier.png") ?>" class="imgEntete"></a></div>
    <div ><a href="#" class="FontGris Entete"> Batterie <img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20batterie.png") ?>" class="imgEntete"></a></div>
    <div ><a href="#" class="FontGris Entete"> Vent <img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20vent.png") ?>" class="imgEntete"></a></div>
    <div ><a href="#" class="FontGris Entete"> Sono <img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20sono.png") ?>" class="imgEntete"></a></div>
</div>

<div class="container FontGris">
    Ici, liste des produits ...
    <div class="mdl-grid FontGris gris2 sanspadding">
        <?php foreach($items as $ligne) { ?>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet myriad sansmargin">
                <div class="ProdCentre"><?=$ligne["prod_nom"]?></div>
                <div><img src="<?= $this->Url->build($ligne["prod_image"]) ?>" class="img_prod "></div>
                <div><div>Prix : <?=$ligne["prod_prix"] ?> € </div>
                    <div>Qtté : <?=$ligne["prod_quantite"]?></div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>