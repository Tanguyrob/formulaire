<html>
  <head>
    <title>suppression de données en PHP :: partie 1</title>
    <script language="javascript">
      function confirme( identifiant )
      {
        var confirmation = confirm( "Voulez vous vraiment supprimer cet enregistrement ?" ) ;
	if( confirmation )
	{
	  document.location.href = "suppression2.php?idPersonne="+identifiant ;
	}
      }
    </script>
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
    $requete = mysql_query( $sql, $connect ) ;
 
    //affichage des données:
    while( $result = mysql_fetch_object( $requete ) )
    {
       echo("<div align=\"center\">".$result->nom." ".$result->prenom." <a href=\"#\" onClick=\"confirme('".$result->id."')\" >supprimer</a><br>\n") ;
    }
  ?>
</body>
</html>