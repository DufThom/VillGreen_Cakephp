


<!-- Barre des Rubriques -->
            <div id="menuIcon" class="mdl-layout__header-row Entete MyBlack ">
                <div >
                    <a href="<?= $this->Url->build("/produits/rubriq/1")?>" class="FontGris Entete">
                        Guitare <img id="IcoGuitare" src="<?= $this->Url->build("/ImagesVG/accueil/icon%20guitar.png") ?>" data-swap="<?= $this->Url->build("/ImagesVG/accueil/icon%20guitar%20activ.png") ?> " class="imgEntete">
                    </a></div>
                <div ><a href="<?= $this->Url->build("/produits/rubriq/2")?>" class="FontGris Entete"> Clavier <img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20clavier.png") ?>" class="imgEntete"></a></div>
                <div ><a href="#" class="FontGris Entete"> Batterie <img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20batterie.png") ?>" class="imgEntete"></a></div>
                <div ><a href="#" class="FontGris Entete"> Vent <img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20vent.png") ?>" class="imgEntete"></a></div>
                <div ><a href="#" class="FontGris Entete"> Sono <img src="<?= $this->Url->build("/ImagesVG/accueil/icon%20sono.png") ?>" class="imgEntete"></a></div>
            </div>

<!-- Placement du CAROUSEL -->
        <div class="flexslider">
            <ul class="slides">
            <li >
                <img src="ImagesVG/accueil/photo%20slide%201.jpg" />
            </li>
            <li>
                <img src="ImagesVG/accueil/photo%20slide%202.jpg" />
            </li>
            <li>
                <img src="ImagesVG/accueil/photo%20slide%203.jpg" />
            </li>
            </ul>
        </div>

<!-- Placement des 4 images du bas -->
        <div class="mdl-grid sansmargin sanspadding ">
            <div class="mdl-cell mdl-cell--8-col sansmargin sanspadding ">
                <img src="ImagesVG/accueil/img%201.jpg" class=" Fender">


                <div class="mdl-grid sansmargin sanspadding ">
                    <div class="mdl-cell mdl-cell--6-col sansmargin sanspadding ">
                        <img src="ImagesVG/accueil/img%203.jpg" class="Selmer">
                    </div>
                    <div class="mdl-cell mdl-cell--6-col sansmargin sanspadding ">
                        <img src="ImagesVG/accueil/img%204.png" class="Selmer">
                    </div>
                </div>

            </div>

            <div class="mdl-cell mdl-cell--4-col sansmargin sanspadding ">
                <img src="ImagesVG/accueil/img%202.jpg" class="Selmer">
            </div>
        </div>





<!--Script & Appel src pour le Carousel : -->
<script src="carousel/jquery.flexslider.js"></script>

<script>
//$(document).ready(function(){
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide"
        });
    });
//});
</script>