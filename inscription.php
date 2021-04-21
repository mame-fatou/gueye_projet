<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script type="text/javascript" src="checknumber.js"></script>
  <title>Inscription</title>
  
 
</head>
<body>
  <h1> Inscription</h1>

	 <img width=200px src ="images/gare.jpg" alt="photo"> 

<form onSubmit='return Checking()'
action="enregistrement.php" method="get" autocomplete="off">
<p>
Nom :
<input type="text" name="n" value="<?php if(isset($_GET['n'])) echo $_GET['n']; ?>"/> </p>
<p>
Prénom :
<input type="text" name="p" value="<?php if(isset($_GET['p'])) echo $_GET['p']; ?>"/> </p>
<p>
<p>
Adresse : <input type="text" name="adr" value="<?php if(isset($_GET['adr'])) echo $_GET['adr'];?>"/></p>
</p>
<p> 
Numero de téléphone : <input type="text" name="num" id='num' value="<?php if(isset($_GET['num'])) echo $_GET['num']; ?>"/>
</p>  
<p>
Adresse e-mail:
<input type="text" name="mail" value="<?php if(isset($_GET['mail'])) echo $_GET['mail']; ?>"/> </p>

<p>
Classe d'age:

			<SELECT name="tranche_d_age">
				<OPTION>19 ans et moins</OPTION>
				<OPTION>20 ans à 29 ans</OPTION>
				<OPTION >30 ans à 39 ans</OPTION>
				<OPTION >40 ans à 49 ans</OPTION>
				<OPTION >50 ans à 59 ans</OPTION>
				<OPTION >60 ans et plus</OPTION></SELECT></p>

<p>
Mot de passe :
<input type="password" name="mdp1" id='mdp1' value=""/> </p>
<p>
Confirmer votre mot de passe:
<input type="password" name="mdp2" id='mdp2' value=""/></p></br>
<p> <button type="submit">S'inscrire</button ></p>

</form>


</body>
</html>
