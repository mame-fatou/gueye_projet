
<!DOCTYPE HTML>
<HTML>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<TITLE>enregistrement </TITLE>

<head>
<body>
<?php 


function enregistrer($n, $p, $adr, $num, $mail, $mdp, $age){
    
    //connexion
    include('bd.php');
    $bdd = getBD();
    //insertion
    $requete = "INSERT INTO utilisateur (nom, prenom,adresse,num,mail,mdp, classe) values ('$n', '$p', '$adr', '$num', '$mail', '$mdp', '$age')";
    $bdd->query($requete); 
    
}

if($_GET['mdp1'] == '' || $_GET['mdp2'] == '' || $_GET['mdp1'] != $_GET['mdp2'] || $_GET['n'] == '' || $_GET['p'] == ''|| $_GET['adr'] == ''|| $_GET['mail'] == '') {

?>
<meta http-equiv="refresh" content="0;URL=inscription.php?n=<?php echo $_GET['n'] ?>&p=<?php echo $_GET['p'] ?>&adr=<?php echo $_GET['adr'] ?>&num=<?php echo $_GET['num'] ?>&mail=<?php echo $_GET['mail'] ?>"/> 
<?php 
} else {
    enregistrer($_GET['n'], $_GET['p'], $_GET['adr'], $_GET['num'], $_GET['mail'], $_GET['mdp1'], $_GET['tranche_d_age'] );
    
?>
<meta http-equiv="refresh" content="0;URL=connexion.php" /> 

<?php
} 
?>


</head>
</body>
</HTML>