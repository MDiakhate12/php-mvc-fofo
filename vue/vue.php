<?php


function afficherAcceuilConnexion(){
    $hideBlocLogin='';
  
    $errorbox='';
    require_once('gabarit/gab_pageacceuil.php');
}

function makeBlocloginHidden(){

    $errorbox='';
    $hideBlocLogin='';
    $hideBlocLogin='<script> document.getElementById("bloclogin").style.display="none"; </script>';
    require_once('gabarit/gab_pageacceuil.php');
}



function afficheraccueildirecteur(){
    $infoRecup2='';
    $infoRecup='';
    
    require_once('gabarit/gab_directeur.php');
}

function afficherAcceuilAgentAcc(){
  
    require_once('gabarit/gab_agentacc.php');
}

function afficherAcceuilConseiller(){
    require_once('gabarit/gab_conseiller.php');
}
  


function afficherInfo($info){
    $infoRecup='';
     foreach($info as $ligne){
        $infoRecup=$ligne->nom.$ligne->login.$ligne->mdp.$ligne->categorie;
        require_once('gabarit/gab_directeur.php');
        
    }

}

function afficherlistecomptes($ResCompte){
    $infoRecup2 = '';
     foreach($ResCompte as $ligne){
        $infoRecup2.=$ligne->nomTypeCompte;
        require_once('gabarit/gab_directeur.php');
     }

}



/*functions pour erreurs*/

function afficherErreurPA($erreur){
    $hideBlocLogin='';
    $errorbox='<p>'. $erreur . '</p>';
    require_once('gabarit/gab_pageacceuil.php');
}

function afficherErreurDR($erreur){
    $selectservice = '';
    $errorbox='';
    $blocModPieces='';
    $showEmployes='';
    $errorbox='<script>document.getElementById("errorzoneDR").style.display="block";</script>';
    $errorbox.='<p>'. $erreur . '</p>';
    require_once ('gabarit/gab_directeur.php');
}

