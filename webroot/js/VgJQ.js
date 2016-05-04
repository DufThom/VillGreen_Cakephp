/*** My code JQuery js  */

$(document).ready(function(){



//+++ Verif sur Modification du Mot de Passe +++++++++++++++++++++++++++++++++++++
    $("#MdpNewConf").mouseleave(function(){
        if(($("#MdpNew").val())!=($("#MdpNewConf").val())){
            alert("Vérifiez la saisie de votre New Mdp");
        }
    });

//+++ Roll-Over sur les icones (passage du blanc au vert) ++++++++++++++++++++++++++++++++++++++
    $("#imgpanier").hover(function() {
        var _this = $(this);
        var current = _this.attr("src");
        var swap = _this.attr("data-swap");
        _this.attr('src', swap).attr("data-swap",current);
    });

    $("#IcoGuitare").hover(function() {
        var _this = $(this);
        var current = _this.attr("src");
        var swap = _this.attr("data-swap");
        _this.attr('src', swap).attr("data-swap",current);
    });

    $(".IcoSearch").hover(function() {
        var _this = $(this);
        var current = _this.attr("src");
        var swap = _this.attr("data-swap");
        _this.attr('src', swap).attr("data-swap",current);
    });




// +++++ REGEX des champs de saisie du formulaire d'INSCRIPTION de l'Espace Client ++++++++++++++++++++++++++++++++++++++++++++++
    var Exp1 = new RegExp("^[a-zA-Z '-]{1,}$"); // Nom, Prénom, Ville, Pays
    var Exp2 = new RegExp("^[a-zA-Z0-9 '-.,]{1,}$"); // Société, Adresse
    var Cod = new RegExp("^[0-9]{5}$"); // Code Postale
    var Tel = new RegExp("^[0-9-/]{10,14}$"); // Téléphone
    var Mail = new RegExp("^[a-z0-9]{2,}(([_.-]?)[a-z0-9])*([@]{1})[a-z0-9]{2,}(([_.-]?)[a-z0-9])*([.]{1})[a-z]{2,5}$"); // Mail

// Vérification Société +++++++++++++++++++++++++++++++++++++++++++++++++
    $("#Societe").focusout(function (){
        if(Exp2.test($("#Societe").val())== false){
            alert("Vérifiez le nom de votre SOCIÉTÉ, svp");
            $("#Societe").focus();
            $("#Societe").css('background-color','orange');
        }
        else {
            $("#Societe").css('background-color','white');
        }
    });

// Vérification Nom +++++++++++++++++++++++++++++++++++++++++++++++++
    $("#NomCli").focusout(function (){
        if(Exp1.test($("#NomCli").val())== false){
            alert("Vérifiez votre Nom, svp");
            $("#NomCli").focus();
            $("#NomCli").css('background-color','orange');
        }
        else {
            $("#NomCli").css('background-color','white');
        }
    });

// Vérification Prénom +++++++++++++++++++++++++++++++++++++++++++++++++
    $("#Prenom").focusout(function (){
        if(Exp1.test($("#Prenom").val())== false){
            alert("Vérifiez votre PRÉNOM, svp");
            $("#Prenom").focus();
            $("#Prenom").css('background-color','orange');
        }
        else {
            $("#Prenom").css('background-color','white');
        }
    });

// Vérification Adresse +++++++++++++++++++++++++++++++++++++++++++++++++
    $("#Adress").focusout(function (){
        if(Exp2.test($("#Adress").val())== false){
            alert("Vérifiez votre ADRESSE, svp");
            $("#Adress").focus();
            $("#Adress").css('background-color','orange');
        }
        else {
            $("#Adress").css('background-color','white');
        }
    });

// Vérification Code Postal +++++++++++++++++++++++++++++++++++++++++++++++++
    $("#CodPos").focusout(function(){
        if(Cod.test($("#CodPos").val())== false){
            alert("Vérifiez le CODE POSTAL, svp");
            $("#CodPos").focus();
            $("#CodPos").css("background-color","red");
        }
        else{
            $("#CodPos").css("background-color","white");
        }
    });

// Vérification Ville +++++++++++++++++++++++++++++++++++++++++++++++++
    $("#Ville").focusout(function (){
        if(Exp1.test($("#Ville").val())== false){
            alert("Vérifiez la VILLE, svp");
            $("#Ville").focus();
            $("#Ville").css('background-color','orange');
        }
        else {
            $("#Ville").css('background-color','white');
        }
    });

// Vérification Pays +++++++++++++++++++++++++++++++++++++++++++++++++
    $("#Pays").focusout(function (){
        if(Exp1.test($("#Pays").val())== false){
            alert("Vérifiez le PAYS, svp");
            $("#Pays").focus();
            $("#Pays").css('background-color','orange');
        }
        else {
            $("#Pays").css('background-color','white');
        }
    });

// Vérification Téléphone +++++++++++++++++++++++++++++++++++++++++++++++++
    $("#Phone").focusout(function(){
        if(Tel.test($("#Phone").val())== false){
            alert("Vérifiez le numéro de TÉLÉPHONE, svp");
            $("#Phone").focus();
            $("#Phone").css("background-color","red");
        }
        else{
            $("#Phone").css("background-color","white");
        }
    });

// Vérification Mail +++++++++++++++++++++++++++++++++++++++++++++++++
    $("#Identifiant").focusout(function(){
        if(Mail.test($("#Identifiant").val())== false){
            alert("Vérifiez votre adresse MAIL, svp \n elle vous servira d'Identifiant pour vous connecter");
            $("#Identifiant").focus();
            $("#Identifiant").css("background-color","red");
        }
        else{
            $("#Identifiant").css("background-color","white");
        }
    });


});

