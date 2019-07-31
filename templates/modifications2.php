<html>
  <head>
    <title>modification de données en PHP :: partie 2</title>
  </head>
<body>
<?php
  //connection au serveur:
  $connect = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $basedonnees = mysql_select_db( "INFOS" ) ;
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["idPersonne"] ;
 
  //requête SQL:
  $sql = "SELECT *
            FROM personnes
	    WHERE id = ".$id ;
 
  //exécution de la requête:
  $requete = mysql_query( $sql, $connect ) ;
 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
<form name="insertion" action="modifications3.php" method="POST">
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table text-border="0" text-align="center" cellspacing="2" cellpadding="2">
    <tr text-align="center">
      <td>nom</td>
      <td><input type="text" name="nom" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo($result->nom) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>prenom</td>
      <td><input type="text" name="prenom" value="<?php echo($result->prenom) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>telephone</td>
      <td><input type="tel" name="telephone" value="<?php echo($result->telephone) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>email</td>
      <td><input type="email" name="email" value="<?php echo($result->email) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>password</td>
      <td><input type="password" name="password" value="<?php echo($result->password) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>age</td>
      <td><input type="date" name="age" value="<?php echo($result->age) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>sexe</td>
      <td><input type="radio" name="sexe" value="<?php echo($result->sexe) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>enfants</td>
      <td><input type="number" name="enfants" value="<?php echo($result->enfants) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>sport</td>
      <td><input type="checkbox" name="activity_list[]" value="<?php echo($result->activity) ;?>"></td>
    </tr>
    /*<tr text-align="center">
      <td>musique</td>
      <td><input type="checkbox" name="musique" value="<?php echo($result->musique) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>voyage</td>
      <td><input type="checkbox" name="voyage" value="<?php echo($result->voyage) ;?>"></td>
    </tr
    ><tr text-align="center">
      <td>plage</td>
      <td><input type="checkbox" name="plage" value="<?php echo($result->plage) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>lecture</td>
      <td><input type="checkbox" name="lecture" value="<?php echo($result->lecture) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>theatre</td>
      <td><input type="checkbox" name="theatre" value="<?php echo($result->theatre) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>cinema</td>
      <td><input type="checkbbox" name="cinema" value="<?php echo($result->cinema) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>soiree</td>
      <td><input type="checkbox" name="soiree" value="<?php echo($result->soiree) ;?>"></td>
    </tr>*/
    <tr text-align="center">
      <td>comments</td>
      <td><input type="text" name="comments" value="<?php echo($result->comments) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>metier</td>
      <td><input type="text" name="metier" value="<?php echo($result->metier) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>pays</td>
      <td><input type="text" name="pays" value="<?php echo($result->pays) ;?>"></td>
    </tr>
    <tr text-align="center">
      <td>avis</td>
      <td><input type="range" name="avis" value="<?php echo($result->avis) ;?>"></td>
    </tr>


    <tr text-align="center">
      <td colspan="2"><input type="submit" value="modifier"></td>
    </tr>
  </table>
</form>
  <?php
  }//fin if 
  ?>
</body>
</html>