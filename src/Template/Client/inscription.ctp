
<div class="mdl-grid myriad FontGris sanspadding fondtest"> <!-- image de fond d'Inscription client -->

  <!-- Connexion Client, partie GAUCHE -->
                <div class="mdl-cell mdl-cell--6-col textCarousel">
                    <form action="<?= $this->Url->build("/client/connexion")  ?>" method="post">
                    <div class="Fontgris">Déjà client, connectez-vous : </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input gris fontBlack" type="text" id="Identifiant" name="mail" value="" >
                        <label class="mdl-textfield__label" for="Identifiant">Identifiant (votre nom)</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input gris fontBlack" type="password" id="MdpCli" name="mot2passe">
                        <label class="mdl-textfield__label" for="MdpCli">Mot de passe </label>
                    </div>
                    <div>
                        <input type="reset" class="btnAnnul AnnulBtn" value="" />........
                        <input type="submit" class="btnEnvoyer" value="" />
                    </div>
                    </form>

                    <br /><br /><br />
                    <a href="<?= $this->Url->build('/client/mdpmodif/') ?> " class="FontGris arista fontBtnEntete"> ... Modifier votre mot de passe ICI ... </a>  <!-- Proposer la MODIF du MdP !!! -->

                    <br /><br /><br />
                    <div class="gris2 fontBlack Entete">
                        <a href="<?= $this->Url->build("/client/listecli") ?>" class="fontBlack strato fontBtnEntete"> ... Gestion Clients ici... </a>
                    </div>
                </div>
  <!-- Inscription Client, partie DROITE -->
                <div class="mdl-cell mdl-cell--6-col textCarousel">
                    <form  method="post">
                        <div class="Fontgris">Nouveau client, Inscrivez-vous ici : </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="text" id="Societe" name="societe">
                            <label class="mdl-textfield__label" for="societe">Société</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="text" id="NomCli" name="nom">
                            <label class="mdl-textfield__label" for="nom">Nom</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="text" id="Prenom" name="prenom">
                            <label class="mdl-textfield__label" for="prenom">Prénom</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="text" id="Adress" name="adresse">
                            <label class="mdl-textfield__label" for="adresse">Adresse</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="CodPos" name="codpos">
                            <label class="mdl-textfield__label" for="codpos">Code Postale</label>
                            <span class="mdl-textfield__error">Veuillez vérifier, svp ... </span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="text" id="Ville" name="ville">
                            <label class="mdl-textfield__label" for="ville">Ville</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="text" id="Pays" name="pays">
                            <label class="mdl-textfield__label" for="pays">Pays</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="text" pattern="-?[0-9 -]*(\.[0-9]+)?" id="Phone" name="phone">
                            <label class="mdl-textfield__label" for="phone">Téléphone</label>
                            <span class="mdl-textfield__error">Veuillez vérifier, svp ... </span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack mail_inscription" type="text" id="Identifiant" name="mail">
                            <label class="mdl-textfield__label" for="mail">Adresse Mail</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input gris fontBlack" type="password" id="mot2passe" name="mot2passe">
                            <label class="mdl-textfield__label" for="mot2passe">Mot de passe</label>
                        </div>
                        <div class="">
                            <input type="reset" class="btnAnnul" value="" />........
                            <input type="submit" class="btnEnvoyer" value=""/>
                        </div>
                    </form>
                </div>

            </div>




<script>

 //+++ Verif si Mail Unique dans la DB +++++++++++++++++++++++++++++++
    $(document).ready(function() {
        $(".mail_inscription").focusout(function () {
            console.log("test focus lost");
            var mot = $(".mail_inscription").val();
            var donnees = "query=" + mot;
            var URL = '<?= $this->Url->build("/client/verifmail/")  ?>';

            $.ajax({
                url: URL,
                data: donnees,
                success: function(data) {
                    console.log(data);
                    if (data == "oui") {
                        console.log("error le mail existe déjà");
                    }
                }

            });
        });
    });

</script>

