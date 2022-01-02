<?php 
require_once("modele/connect.php");
require_once("modele/modele.php");
require_once("vue/vue.php") ;
require_once("controleur/controleur.php");



function CtlAcceuilConnexion(){
    afficherAcceuilConnexion();
}

function CtlSeConnecter($categorie,$login,$mdp){
    if($categorie=="directeur"){
        $auth=checkUser($categorie,$login,$mdp); 
        if (!empty($auth)){
            makeBlocloginHidden();
            afficheraccueildirecteur();
            } else {
        throw new Exception("categorie, login ou mot de passe invalide");
        CtlAcceuilConnexion();
            }
    }
    if($categorie=="agent_acceuil"){
        $auth=checkUser($categorie,$login,$mdp);
        if (!empty($auth)){
            makeBlocloginHidden();
            afficherAcceuilAgentAcc();
            } else {
        throw new Exception("categorie, login ou mot de passe invalide");
        CtlAcceuilConnexion();
            }
    }
    if($categorie=="conseiller"){
        $auth=checkUser($categorie,$login,$mdp); 
        if (!empty($auth)){
            makeBlocloginHidden();
            afficherAcceuilConseiller();
            } else {
        throw new Exception("categorie, login ou mot de passe invalide");
        CtlAcceuilConnexion();
            }
    }
}

function CtlCreerCompte($nomCompte){
    creationCompte($nomCompte);
    afficheraccueildirecteur();
    
}

function CtlListeComptes(){
    $ResCompte=recupererCompte();
    if (!empty($ResCompte)){
        afficherlistecomptes($ResCompte);

    } else {throw new Exception("Aucun comptes proposés/trouvés");}
}


function CtlLogoutAAC(){
    CtlAcceuilConnexion();
    

}


function CtlAjouterEmploye($nom,$login,$mdp,$categ){

    if ($categ=="agent_acceuil"){
        creationEmploye($nom,$login,$mdp,$categ);
        throw new Exception("Un agent d'acceuil a été créé");
    }
    if ($categ=="conseiller"){
        creationEmploye($nom,$login,$mdp,$categ);
        throw new Exception("Un conseiller client a été créé");
        
    }
}


function CtlAcceuilAgentAcc(){
    afficherAcceuilAgentAcc();
}

function CtlRechercherEmploye($num){
    $info=getInfo($num); 
        if (!empty($info)){
            afficherInfo($info);
        }
        else{ throw new Exception("Numéro employé invalide");


        }



}
    





/*gestion erreurs*/

function CtlErreurPA($erreur){
    afficherErreurPA($erreur);
}

function CtlErreurDR($msg){
    afficherErreurDR($msg);
}

function CtlErreurAAC($erreur){
    afficherErreurAAC($erreur);
}

function CtlErreurADM($erreur){
    afficherErreurADM($erreur);
}
