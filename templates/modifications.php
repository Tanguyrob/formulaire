<html>
  <head>
    <title>modification de données en PHP :: partie 1</title>
  </head>
<body>
  <?php
    //connection au serveur:
    $connect = mysql_connect( "localhost", "root", "" ) ;
 
    //sélection de la base de données:
    $basedonnees = mysql_select_db( "INFOS" ) ;
 
    //requête SQL:
    $sql = "SELECT *
	      FROM personnes
	      ORDER BY nom" ;
 
    //exécution de la requête:
    $requete = mysql_query( $sql, $connect   ) ;
 
    //affichage des données:
    while( $result = mysql_fetch_object( $requete ) )
    {
       echo(
           "<div align=\"center\">"
           .$result->nom." ".$result->prenom
           ." <a href=\"modifications2.php?idPersonne=".$result->id."\">modifier</a></div>\n"
       ) ;
    }
  ?>
</body>
</html>