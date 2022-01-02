<?php
require_once("connect.php");

function getConnect(){
    require_once("connect.php");
    $connexion = new PDO('mysql:host=' . SERVEUR . ';dbname=' . BDD, USER, PASSWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->query('SET NAMES UTF8');
    return $connexion;
}

// MODELE PAGE ACCEUIL

function checkUser($categorie,$login,$mdp){
    $connexion=getConnect();
    $requete="select * from employe where categorie='$categorie' and LOGIN='$login' and MDP='$mdp' ";
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    $authentification=$resultat->fetchall();
    $resultat->closeCursor();
    return $authentification;
}

function getInfo($num){
    $connexion=getConnect();
    $requete="select nom, login, mdp, categoreie FROM employe where numEmploye='$num' " ;
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    $information=$resultat->fetchall();
    $resultat->closeCursor();
    return $information;
    
}

function creationEmploye($nom,$login,$mdp,$categ){
    $connexion=getConnect();
    $requete="insert INTO employe VALUES (0,'$nom','$login','$mdp','$categ')" ;
    $resultat=$connexion->query($requete);
    $resultat->closeCursor();
}

function creationCompte($nomCompte){
    $connexion=getConnect();
    $requete="insert INTO typecompte VALUES (0,'$nomCompte')" ;
    $resultat=$connexion->query($requete);
    $resultat->closeCursor();
}

function recupererCompte(){
    $connexion=getConnect();
    $requete="Select nomTypeCompte from typecompte" ;
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    $Comptes=$resultat->fetchall();
    $resultat->closeCursor();
    return $Comptes;
}



