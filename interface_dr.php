<?php
    require_once('controleur/controleur.php');

try {
    
    
    if(isset($_POST['creationemployee'])){
        $nom=$_POST['nomemploye'];
        $login=$_POST['loginemploye'];
        $mdp=$_POST['mdpemploye'];
        $categ=$_POST['nomcategorie'];
        CtlAjouterEmploye($nom,$login,$mdp,$categ);
        
    }
    if(isset($_POST['rechercheemployee'])){
        $num=$_POST['numeroEmploye'];
        CtlRechercherEmploye($num);
        
    }

      
    if (isset($_POST['creation'])) {
        $nomCompte=$_POST['Nomtypecompte'];
        CtlCreerCompte($nomCompte);

    }
      
    if (isset($_POST['voirlescomptes'])) {
        CtlListeComptes();

    }



    
    if (isset($_POST['modifLogEtMdp'])){
        $idemploye=$_POST['iduser'];
        $anom=$_POST['anciennom'];
        $nnom=$_POST['newnom'];
        $nprenom=$_POST['newprenom'];
        $nlogin=$_POST['newlogin'];
        $nmdp=$_POST['newmdp'];
        CtlModifierEmploye($iduser,$anom,$nnom,$nprenom,$nlogin,$nmdp);
        
    }
    
    
  
    
    if (isset($_POST['modifierservice'])){
        $lesnoms= $_POST['lesnomsservices'];
        $nouvser= $_POST['nouveauservice'];
        Ctlmodifierservice($lesnoms,$nouvser);
        foreach($_POST['piece'] as $value){
            $idpiece = intval($value);
            CtlAttribuerPiece($idpiece,$lesnoms);
        } 


    }
    
    if (isset($_POST['voirlesemployes'])){
        CtlAfficherLesEmployes();
        
    }
    
    if (isset($_POST['bouttonservice'])) {
        Ctlafficherservice();
    }
    
   
} 

catch (Exception $e) {
    $msg = $e->getMessage();
    CtlErreurDR($msg);
}