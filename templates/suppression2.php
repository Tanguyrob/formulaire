<?php
  //connection au serveur:
  $connect = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $basedonnees = mysql_select_db( "INFOS" ) ;
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement supprimer:
  $id  = $_GET["idPersonne"] ;
 
  //requête SQL:
  $sql = "DELETE 
            FROM personnes
	    WHERE id = ".$id ;
  echo $sql ;	    
  //exécution de la requête:
  $requete = mysql_query( $sql, $connect ) ;
 
  //affichage des résultats, pour savoir si la suppression a marchée:
  if($requete)
  {
    echo("La suppression à été correctement effectuée") ;
  }
  else
  {
    echo("La suppression à échouée") ;
  }
?>