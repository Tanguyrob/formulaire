<?php 
//connection au serveur
$connect = mysql_connect("localhost", "root", "");

//selection de la base de données
$base_donnees=mysql_select_db("INFOS");

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

//creation de la requete sql
$sql= "INSERT INTO personnes (nom, prenom, telephone, email, mdp, age, sexe, enfants, sport, musique, voyage, plage, 
lecture, theatre, cinema, soiree, comments, metier, pays, avis ) VALUES ('$nom', '$prenom', '$telephone', '$email',
 '$mdp', '$age', '$sexe', '$enfants', '$sport', '$musique', '$voyage', '$plage', '$lecture',
  '$theatre', '$cinema', '$soiree', '$comments', '$metier', '$pays', '$avis')";

//execution de la requete sql
$requete= mysql_query($sql, $connect) or die(mysql_error());

//affichage des resultats pour savoir si l'insertion a marché
if ($requete)
{
    echo("insertion correctement effectué");
}
else{
    echo ("echec insertion");
}
?>