<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Ma page</title>
      <meta charset="utf-8">
	  <link rel="stylesheet"  href="vue/style/style.css" />
	  
    </head>
    
	<body>	


	form method="post" action="pageacceuil.php" >
                <input type="submit" name="logout" value="DECONNEXION"/>
            </form>
        </div>
            
        
            <fieldset>
            <legend>Créer un employée  </legend>
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
                        <input type="submit" value="Créer un employée" name="creationemployee"/>
                        <input type="reset" value="Annuler"/>
                    </p>
                    
                </form>
            </fieldset>

            <fieldset>
                <legend> Rechercher un employée </legend>
                   <form method="post" action="interface_dr.php">
                     <p>
                       <label for="numero"> Entrez le numéro de l'employé: </label>
                       <input type="text" name=numeroEmploye id="numero">
                    </p>
                    <p> 
                        <input type="submit" value="Rechercher cet employée" name="rechercheemploye"/>
                    </p>
                    <?php echo $Info; ?>

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
                <legend> Modifier un service  </legend>
                <form method="post" action="interface_dr.php">
                    <p>
                        <input type="submit" value= "Nom des services" name="bouttonservice"/>
                        <?php echo $selectservice; ?>
                    </p>
                    <p>
                        <label> Nouveau Nom : </label>
                        <input type="text" name="nouveauservice"/>
                    </p>
                    <p>
                        <label> Nouveau Prix : </label>
                        <input type="number" name="newprice" />
                    </p>
                    <?php echo $blocModPieces; ?>
                    <p>
                        <input type="submit" value="modifier un service " name="modifierservice"/>
                        <input type="reset" value="Annuler"/>
                    </p>
                </form>
            </fieldset>
            <fieldset>
                <legend> Supprimer un service  </legend>
                <form method="post" action="interface_dr.php">
                    <p>
                    <label>Id du Service à supprimer :</label>
                        <input type="number" name="idservice"/>
                    </p>
                    <p>
                        <input type="submit" value="supprimer ce service " name="service"/>
                        <input type="reset" value="Annuler"/>
                    </p>
                </form>
            </fieldset>
        </fieldset>
  </body>

 </html>
 