<!-- INFORMATION d'un client -->

<div><h3 class="FontGris myriad ProdCentre">Infos complètes du client</h3></div>
<div class="ProdCentre fondtest">
<div class=" fontblack Hfontcli2 MargCentre"><br />
    <div><table class="gris2 Hfontcli2 mdl-data-table mdl-shadow--2dp myriad MargCentre" >
            <tr >
                <td> Nom :</td>
                <td class="mdl-data-table__cell--non-numeric"><?= $client->nom ?></td> </tr>
            <tr>
                <td>Prenom :</td>
                <td class="mdl-data-table__cell--non-numeric"><?= $client->prenom ?></td> </tr>
            <tr>
                <td>Société :</td>
                <td class="mdl-data-table__cell--non-numeric"><?= $client->societe ?></td> </tr>
            <tr>
                <td>Adresse :</td>
                <td class="mdl-data-table__cell--non-numeric"><?= $client->adresse ?></td> </tr>
            <tr>
                <td>Code Postale :</td>
                <td class="mdl-data-table__cell--non-numeric"><?= $client->codpos ?></td> </tr>
            <tr>
                <td>Ville :</td>
                <td class="mdl-data-table__cell--non-numeric"><?= $client->ville ?></td> </tr>
            <tr>
                <td>Pays :</td>
                <td class="mdl-data-table__cell--non-numeric"><?= $client->pays ?></td> </tr>
            <tr>
                <td>Téléphone :</td>
                <td class="mdl-data-table__cell--non-numeric"><?= $client->phone ?></td> </tr>
            <tr>
                <td>Mail :</td>
                <td class="mdl-data-table__cell--non-numeric"><?= $client->mail ?></td> </tr>
            <tr >
                <td  >
                    <a href="<?= $this->Url->build("/client/modifcli/"). $client->id ?>" class="FontGris">Modifier <img src="<?= $this->Url->build("/ImagesVG/back%20office%20produits/button%20modifier.png")?>" class="imgLoupe"></a></td>
                <td class="mdl-data-table__cell--non-numeric">
                    <a href="<?= $this->Url->build("/client/suppcli/"). $client->id ?>" class="FontGris"><img src="<?= $this->Url->build("/ImagesVG/back%20office%20produits/button%20-.png")?>" class="imgLoupe"> Supprimer</a></td>
            </tr>

        </table><br />
    </div>

</div>
</div>




















