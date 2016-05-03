<!-- MODIFIER un client-->

<div><h3 class="FontGris myriad">Modification des infos du client</h3></div>
<div class="ProdCentre fondtest">
    <div class=" fontblack Hfontcli2 MargCentre"><br />
        <form method="post">
            <table class="gris2 Hfontcli2 mdl-data-table mdl-shadow--2dp myriad MargCentre" >
                <tr >
                    <td> Nom :</td>
                    <td class="mdl-data-table__cell--non-numeric"><input type="text" name="nom" value="<?= $client->nom ?>"></td> </tr>
                <tr>
                    <td>Prenom :</td>
                    <td class="mdl-data-table__cell--non-numeric"><input type="text" name="prenom" value="<?= $client->prenom ?>"></td> </tr>
                <tr>
                    <td>Société :</td>
                    <td class="mdl-data-table__cell--non-numeric"><input type="text" name="societe" value="<?= $client->societe ?>"></td> </tr>
                <tr>
                    <td>Adresse :</td>
                    <td class="mdl-data-table__cell--non-numeric"><input type="text" name="adresse" value="<?= $client->adresse ?>"></td> </tr>
                <tr>
                    <td>Code Postale :</td>
                    <td class="mdl-data-table__cell--non-numeric"><input type="text" name="codpos" value="<?= $client->codpos ?>"></td> </tr>
                <tr>
                    <td>Ville :</td>
                    <td class="mdl-data-table__cell--non-numeric"><input type="text" name="ville" value="<?= $client->ville ?>"></td> </tr>
                <tr>
                    <td>Pays :</td>
                    <td class="mdl-data-table__cell--non-numeric"><input type="text" name="pays" value="<?= $client->pays ?>"></td> </tr>
                <tr>
                    <td>Téléphone :</td>
                    <td class="mdl-data-table__cell--non-numeric"><input type="text" name="phone" value="<?= $client->phone ?>"></td> </tr>
                <tr>
                    <td>Mail :</td>
                    <td class="mdl-data-table__cell--non-numeric"><input type="text" name="mail" value="<?= $client->mail ?>"></td> </tr>
                <tr>
                    <td>Mot de passe (temporaire) :</td>
                    <td class="mdl-data-table__cell--non-numeric"><input type="text" name="mot2passe" value="<?= $client->mot2passe ?>"></td> </tr>
                <tr>
                    <td>
                        <input type="reset" value="" class="btnAnnul" />
                    </td>
                    <td class="mdl-data-table__cell--non-numeric">
                        <input type="submit" value="" class="btnEnvoyer" />
                    </td>

                </tr>

            </table><br />
        </form>

    </div>
</div>





























