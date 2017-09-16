<!doctype html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Pamela - Collab</title>
	</head>

	<body>
		<div id="bloc_page">

            <?php include('entete.inc.html'); ?>
            <?php include('banniere.inc.php'); ?>
            <section>
                <article>
                    <form method="post" action="traitement_inscription.php">
                        <label for="nom">Nom : </label>
                        <input type="text" name="nom" id="nom" />
                        
                        <label for="prenom">Prénom : </label>
                        <input type="text" name="prenom" id="prenom" />
                        
                        <label for="adresse_mail">Adresse mail : </label>
                        <input type="email" name="adresse_mail" id="adresse_mail" />
                        
                        <label for="date_naissance">Date de naissance : </label>
                        <input type="datepicker" name="date_naissance" id="date_naissance" placeholder="AAAA-MM-JJ"/>
                        
                        <label for="mot_de_passe">Mot de passe : </label>
                        <input type="password" name="mot_de_passe" id="mot_de_passe" />
                        
                        <label for=""></label>
                        <input type="" name="" id="" />
                    </form>
                </article>
                
                <?php include('aside.inc.html'); ?>
                
        	</section>
		</div>
	</body>
</html>