<?php
  //connection au serveur
  $connect = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $basedonnees  = mysql_select_db( "INFOS" ) ;
 
 //recuperationn des valeurs de champs
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$telephone=$_POST["telephone"];
$email=$_POST["email"];
$password=$_POST["password"];
$age=$_POST["age"];
$sexe=$_POST["sexe"];
$enfants=$_POST["enfants"];

$sport=$_POST["sport"];
$musique=$_POST["musique"];
$voyage=$_POST["voyage"];
$plage=$_POST["plage"];
$lecture=$_POST["lecture"];
$theatre=$_POST["theatre"];
$cinema=$_POST["cinema"];
$soiree=$_POST["soiree"];

$comments=$_POST["comments"];
$metier=$_POST["metier"];
$pays=$_POST["pays"];
$avis=$_POST["avis"];
  //récupération de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE personnes
            SET nom         = '$nom', 
	          prenom     = '$prenom',
              telephone = '$telephone',
              email = '$email',
              mdp='$password',
              age='$age',
              sexe='$sexe',
              enfants='$enfants',
              sport='$sport',
              musique='$musique',
              voyage='$voyage',
              plage='$plage',
              lecture='$lecture',
              theatre='$theatre',
              cinema='$cinema',
              soiree='$soiree',
              comments='$comments',
              metier='$metier',
              pays='$pays',
              avis='$avis'  
		  
           WHERE id = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $connect) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo("La modification à été correctement effectuée") ;
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>