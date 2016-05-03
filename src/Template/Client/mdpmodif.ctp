<!-- MODIFICATION du Mot de Passe par le Client -->

<div><h3 class="FontGris myriad ProdCentre">Vous souhaitez modifier votre mot de passe :</h3></div>
<div class="ProdCentre fondtest">
    <div class=" fontblack Hfontcli2 MargCentre"><br />
        <form action="<?= $this->Url->build("/client/mdpmodif") ?>" method="post">
        <div><table class="fondtest2 Hfontcli2 mdl-data-table mdl-shadow--2dp myriad MargCentre" >
                <tr >
                    <td><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="text" id="Identifiant" name="mail" value="" >
                            <label class="mdl-textfield__label" for="Identifiant">Identifiant (votre nom)</label>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="password" id="MdpOld" name="mot2passe"> <!--ANCIEN MdP-->
                            <label class="mdl-textfield__label" for="MdpOld">Ancien Mot de passe </label>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="password" id="MdpNew" name="mot2passe"> <!--NOUVEAU MdP-->
                            <label class="mdl-textfield__label" for="MdpNew">Nouveau Mot de passe </label>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="password" id="MdpNewConf" name="mot2passe"> <!--CONFIRM New MdP-->
                            <label class="mdl-textfield__label" for="MdpNewConf">Confirmez Nouveau Mot de passe </label>
                        </div>
                    </td>
                </tr>
                <tr >
                    <td class=""><div class="ProdCentre">
                            <input type="reset" class="btnAnnul AnnulBtn" value="" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="submit" class="btnEnvoyer" value="" />
                        </div>
                    </td>
                </tr>
            </table><br />
            </form>
            </div>
    </div>
</div>



















