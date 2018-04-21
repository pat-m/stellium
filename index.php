<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
<?php require_once 'db.php'; ?>
<?php require_once 'treatment.php'; ?>

<main>
	<section id="hero"">

	<div class="hero-caption">
		<h1>stellium</h1>
		<h2>Mauris dapabus porttitor purus non tincidunt.<br>integer elementum mi vel maximus semper.</br></h2>
	</div>
	<img class="before-discover" src="dist/images/before-discover.svg" alt="before-discover">
	</section>
	<section id="discover">
		<h2 class="discover-title">Découvrez stellium</h2>
		<p class="discover-subtitle">une expertise solide dans la sélection de solution patrimoniales</p>
		<div class="row">
			<div class="discover-block">
				<h3>Les Plus de<br> Stellium</h3>
				<img class="picto-plus" src="dist/images/picto-plus.png" alt="picto-plus">
				<p>Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.</br>Aenean euismod bibendum laoreet dixit.</p>
			</div>
			<div class="discover-block">
				<h3>Nos Valeurs</h3>
				<img class="picto" src="dist/images/picto-valeurs.png" alt="picto-valeurs">
				<p>Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.</br>Aenean euismod bibendum laoreet dixit.</p>
			</div>
			<div class="discover-block">
				<h3>Nos Engagements</h3>
				<img class="picto" src="dist/images/picto-nos-engagements.png" alt="picto-nos-engagements">
				<p>Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.</br>Aenean euismod bibendum laoreet dixit.</p>
			</div>
			<div class="discover-block">
				<h3>Nos Partenaires</h3>
				<img class="picto" src="dist/images/picto-nos-partenaires.png" alt="picto-nos-partenaires">
				<p>Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.</br>Aenean euismod bibendum laoreet dixit.</p>
			</div>
		</div>
	</section>
	<section id="solutions">
		<div class="solutions-parallax">
			<img class="solutions-before" src="dist/images/after-discover.svg" alt="before-discover">
			<div class="row">
				<img class="picto" src="dist/images/solution-blue.png" alt="picto-nos-partenaires">
				<div class="solutions-caption">
					<h3>nos solutions</h3>
					<p>Lorem ipsum dolor sit a met,consectetur adipiscing elit.Aenean euismod bibendum laoreet dixit.</p>
				</div>
			</div>

		</div>
	</section>
	<section id="portfolio">
		<div class="row">
			<div class="left-col">
				<div class="block-immo">
					<img class="d-block img-fluid" src="dist/images/background-immobilier.jpg" alt="stellium-immo">
					<div class="immo-text">
						<h4>immobilier</h4>
						<p>Lorem ipsum dolor sit a met,consectetur adipiscing elit.Aenean euismod bibendum laoreet dixit.</p>
					</div>
					<img class="immo-logo img-fluid" src="dist/images/logo-stellium-immobilier.png" alt="logo-stellium-immo">
				</div>
				<div class="block-court">
					<img class="d-block img-fluid" src="dist/images/background-courtage.jpg" alt="stellium-courtage">
					<div class="court-text">
						<h4>investissement</h4>
						<p>Lorem ipsum dolor sit a met,consectetur adipiscing elit.Aenean euismod bibendum laoreet dixit.</p>
					</div>
					<img class="court-logo img-fluid" src="dist/images/logo-stellium-courtage.png" alt="logo-stellium-court">
				</div>
			</div>
			<div class="right-col">
				<div class="block-invest">
					<img class="d-block img-fluid" src="dist/images/background-invest.jpg" alt="logo-stellium-courtage">
					<div class="invest-text">
						<h4>courtage</h4>
						<p>Lorem ipsum dolor sit a met,consectetur adipiscing elit.Aenean euismod bibendum laoreet dixit.</p>
					</div>
					<img class="invest-logo img-fluid" src="dist/images/logo-stellium-invest.png" alt="logo-stellium-courtage">
				</div>
			</div>
		</div>
	</section>
	<section id="actualite">
		<h3 class="actualite-title">Nos Actualités</h3>
		<p class="actualite-subtitle">Etiam lacus neque,viverra at fringilla eget,vulputate sit amet massa.</p>
		<div class="article">
			<article class="row">
				<div class="article-thumbnail">
					<img class="post-img" src="dist/images/background-actu-1.jpg" alt="background-actu-1">
					<img class="post-r-bef" src="dist/images/post-r-before.svg" alt="before-post">
				</div>
				<div class="article-content">
					<h4>VESTIBULUM IACULIS</h4>
					<p>Vivamus condimentum vehicula rutrum.Duis feugiatmi tellus, id maximus justo aliquet vem.Class aptent taciti sociosqu ad litora torquent per conubia nostra,<br>per inceptos himenaeos.Nulla nisl justo,tincidunt ac elit non,congue egestas.</p>
					<a href="#"><button class="article-button" type="button">En savoir plus</button></a>
				</div>
			</article>
			<article class="row">
				<div class="article-content">
					<h4>PROIN SIT AMET</h4>
					<p>Vivamus condimentum vehicula rutrum.Duis feugiatmi tellus, id maximus justo aliquet vem.Class aptent taciti sociosqu ad litora torquent per conubia nostra,<br>per inceptos himenaeos.Nulla nisl justo,tincidunt ac elit non,congue egestas.</p>
					<a href="#"><button class="article-button" type="button">En savoir plus</button></a>
				</div>
				<div class="article-thumbnail"">
				<img class="post-img" src="dist/images/background-actu-2.jpg" alt="background-actu-2">
				<img class="post-l-bef" src="dist/images/post-l-before.svg" alt="before-post">
		</div>
		</article>
		<article class="row">
			<div class="article-thumbnail">
				<img class="post-img" src="dist/images/background-actu-3.jpg" alt="background-actu-3">
				<img class="post-r-bef" src="dist/images/post-r-before.svg" alt="before-post">
			</div>
			<div class="article-content">
				<h4>NURLLAM INTERDUM ENIM</h4>
				<p>Vivamus condimentum vehicula rutrum.Duis feugiatmi tellus, id maximus justo aliquet vem.Class aptent taciti sociosqu ad litora torquent per conubia nostra,<br>per inceptos himenaeos.Nulla nisl justo,tincidunt ac elit non,congue egestas.</p>
				<a href="#"><button class="article-button" type="button">En savoir plus</button></a>
			</div>
		</article>
		</div>
		</div>
	</section>
	<section id="partenaires">
		<div class="partenaires-parallax">
			<div class="row">
				<img class="picto-part" src="dist/images/partenaires-blue.png" alt="picto-nos-partenaires">
				<div class="partenaires-caption">
					<h3>nos partenaires</h3>
					<p>Lorem ipsum dolor sit a met,consectetur adipiscing elit.Aenean euismod bibendum laoreet dixit.</p>
				</div>
			</div>
			<img class="partenaires-after" src="dist/images/before-discover.svg" alt="before-discover">
		</div>
	</section>
	<section id="carousel">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="dist/images/partenaire-seixo.jpg" alt="partenaire-seixo">
				</li>
				<li>
					<img src="dist/images/partenaire-groupe-invest.jpg" alt="partenaire-groupe-invest">
				</li>
				<li>
					<img src="dist/images/partenaire-imodeus.jpg" alt="partenaire-imodeus">
				</li>
				<li>
					<img src="dist/images/partenaire-realites.jpg" alt="partenaire-realites">
				</li>
				<li>
					<img src="dist/images/partenaire-seixo.jpg" alt="partenaire-seixo">
				</li>
				<li>
					<img src="dist/images/partenaire-groupe-invest.jpg" alt="partenaire-groupe-invest">
				</li>
				<li>
					<img src="dist/images/partenaire-imodeus.jpg" alt="partenaire-imodeus">
				</li>
				<li>
					<img src="dist/images/partenaire-realites.jpg" alt="partenaire-realites">
				</li>
			</ul>
		</div>
	</section>
	<section id="maps-container">
		<img class="partenaires-after" src="dist/images/before-hero.svg" alt="before-discover">
			<div class="formulaire">
				<h3>Contactez-nous</h3>
				<p>Aliquam ac sollicitudin tellus</p>

				<form  action="index.php" method="post">
					<div class="form-group row">
						<div class="left col-md-6">
							<input type="text" class="form-control" name="name" value="" placeholder="Nom">
							<input type="text" class="form-control" name="surname" value="" placeholder="Prenom">
							<input type=email class="form-control" name="email" value="" placeholder="Email">
						</div>
						<div class="right col-md-6">
							<input type="text" class="form-control" name="tel" value="" placeholder="Téléphone">
							<input type="text" class="form-control" name="address" value="" placeholder="Adresse">
							<input type="text" class="form-control" name="subject" value="" placeholder="Sujet">
						</div>
					</div>
						<div class="form-group row">
							<div class="text-field">
								<textarea class="form-control" name="message" rows="8" cols="80" placeholder="Message"></textarea>
							</div>
						</div>
					<div class="form-group btn-submit">
						<input type="submit" class="submit-button" value="ENVOYER">
                        <?php
                        try {
                            $requete = 'INSERT INTO contact (contact.Nom,contact.Prenom,contact.Sujet,contact.Message,contact.Tel,contact.Mail,contact.Adresse) VALUES (:nom,:prenom,:sujet,:message,:tel,:mail,:adresse)';
                            $res = $bdd->prepare($requete);
                            $res->bindParam(':nom', $_POST['name']);
                            $res->bindParam(':prenom', $_POST['surname']);
                            $res->bindParam(':sujet', $_POST['subject']);
                            $res->bindParam(':message', $_POST['message']);
                            $res->bindParam(':tel', $_POST['tel']);
                            $res->bindParam(':mail', $_POST['email']);
                            $res->bindParam(':adresse', $_POST['address']);
                            $res->execute(array(
                                ':nom' => $_POST['name'],
                                ':prenom' => $_POST['surname'],
                                ':sujet' => $_POST['subject'],
                                ':message' => $_POST['message'],
                                ':mail' => $_POST['email'],
                                ':adresse' => $_POST['address'],
                                ':tel' => $_POST['tel']));


                        } catch(PDOException $e)
                        {
                            echo $e->getMessage();
                        }
                    ?>
				</form>
			</div>
	</section>
</main>


<?php require 'includes/footer.php'; ?>
