<!-- LISTE des clients-->
<div class="container fondtest">
<div><h3 class="FontGris">Liste des clients de Village Green</h3></div>
<div class="ProdCentre"><button class="MargCentre">
        <a href="<?= $this->Url->build("/client/ajoutcli/")?>" class="arista Hfontcli2 fontBlack">
            <img src="<?= $this->Url->build("/ImagesVG/back%20office%20produits/button%20+.png")?>" class="imgLoupe"> Ajouter un nouveau client</a>
    </button></div><br />
<div class="ProdCentre"><table class="gris2 Hfontcli mdl-data-table mdl-shadow--2dp myriad MargCentre" >
    <thead class="Hfontcli2">
        <tr class="Hfontcli2">
            <td> Nom</td>
            <td>Prenom</td>
            <td>Société</td>
            <td>Ville</td>
            <td>Téléphone</td>
            <td>Mail</td>
            <td>Infos</td>
        </tr>
    </thead>

    <?php foreach($clients as $client): ?>
        <tr>
            <td><?= $client->nom ?></td>
            <td><?= $client->prenom ?></td>
            <td><?= $client->societe ?></td>
            <td><?= $client->ville ?></td>
            <td><?= $client->phone ?></td>
            <td><?= $client->mail ?></td>
            <td><a href="<?= $this->Url->build("/client/infos/") . $client->id ?>">
                    <img src="<?= $this->Url->build("/ImagesVG/accueil/button%20search.png")?>" data-swap="<?= $this->Url->build("/ImagesVG/accueil/roll%20over/icon%20search.png") ?> " class="imgLoupe IcoSearch">
                </a></td>
        </tr>
    <?php endforeach; ?>

</table>
</div>
</div>








