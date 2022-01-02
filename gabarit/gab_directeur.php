
<!DOCTYPE html>
<html lang="fr">
 		<head>
   	        <meta charset="utf-8">
            <link rel="stylesheet" href="style/style.css">
            <title>Directeur</title>
    
        </head>

        <body>
            
        <div>
            <h6 id="titreDR"> - DIRECTEUR - </h6>
        </div>
            
        

        
            <fieldset>
            <legend> Créer un employé </legend>
                <form method="post" action="interface_dr.php">
                   
                    <p>
                        <label> Nom : </label>
                        <input type="text" name="nomemploye"/>
                    </p>
                    <p>
                        <label> Login : </label>
                        <input type="text" name="loginemploye"/>
                    </p>
                    <p>
                        <label> Mot de passe : </label> 
                        <input type="password" name="mdpemploye"/>
                    </p>
                    <p>
                        <label>Categorie :</label>
                        <select name="nomcategorie">
                            <option value="agent_acceuil">Agent d'Acceuil</option>
                            <option value="conseiller">Conseiller</option>
                        </select>
                    </p>
                    <p>
                        <input type="submit" value="Créer un employé" name="creationemployee"/>
                        <input type="reset" value="Annuler"/>
                    </p>
                    
                </form>
            </fieldset>

            <fieldset>
                <legend> Rechercher un employé </legend>
                   <form method="post" action="interface_dr.php">
                     <p>
                       <label for="numero"> Entrez le numéro de l'employé: </label>
                       <input type="text" name=numeroEmploye id="numero">
                    </p>
                    <p> 
                        <input type="submit" value="Rechercher cet employé" name="rechercheemployee"/>
                        <?php echo $infoRecup; ?>
                    </p>
                    

            </fieldset>
            
            <fieldset>
                <legend> Créer un compte  </legend>
                <form method="post" action="interface_dr.php">
                    <p>
                        <label>Nom du type de compte : </label> 
                        <input type="text" name="Nomtypecompte"/>
                    </p>
                    
                    <p>
                    <input type="submit" value="Créer ce nouveau type de compte" name="creation"/>
                    <input type="reset" value="Annuler"/>
                    
                    </p>
                </form>
            </fieldset>

            
            
        <fieldset>
            <legend> Visualiser tout les comptes proposés par la banque </legend>
            <form method="post" action="interface_dr.php">
                <p>
                    <input type="submit" name="voirlescomptes" value="Afficher tous les comptes de la banque" />
                    
                </p>
                <p><?php echo $infoRecup2 ?> </p>
            </form>
            
           
        </fieldset>    
        <form method="post" action="pageacceuil.php" >
                    <input type="submit" name="logout" value="DECONNEXION"/>
                </form>

  	    </body>
</html>

