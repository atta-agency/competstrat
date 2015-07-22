<?php

$msg = '';

if(isset($_POST["email"])){
	if(filter_var ( $_POST["email"] , FILTER_VALIDATE_EMAIL)){

		if(isset($_POST["prenom"]) &&  is_string($_POST["prenom"])){
			if(isset($_POST["nom"]) && is_string($_POST["nom"])){
				$retour = insert($_POST["prenom"],$_POST["nom"],$_POST["email"],$_POST["pre_co"]);
				if($retour != false){


					$msg = "<span>"."Merci. Vous receverez très prochainement un e-mail de notre part.". "</span>";

				}else{$msg = "<span>"."L'inscription n'a pas abouti.". "</span>";}

			}else{$msg = "<span>"."Nom invalide.". "</span>";}
		}

	}

	if ($msg != ''){
		echo "<script>var inscription ='trololo';</script>";
	}
}   


?>

<section id="section_6" class="home_produit">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">

				<div class="fiche-produit">
					
					<div id="formulaire">
						<div id="cross"><img class="cross" src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.png"/></div>
						
						<form class="form" method="POST" action="#section_6" id="form1">
							<input type="hidden" name="pre_co" value="1">
							<h3><strong>Pré-commandez votre fiole de </strong><span class="light">Krill Tonic</span></h3>
							<p class="name">
								<input name="nom" type="text" class="" placeholder="Votre nom" id="name" />
							</p>

							<p class="text">
								<input name="prenom" type="text" class="" id="prenom" placeholder="Votre prénom" />
							</p>

							<p class="email">
								<input name="email" type="text" class="" id="email" placeholder="Votre e-mail" />
							</p>


							<div class="submit">
								<input type="submit" value="Pré-commandez" class="commandez btn-primary"/>
								<?php if(isset($msg)) echo $msg;?>
							</div>
						</form>
						
					</div>
					<div class="piece">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/piece.png" alt="Krill Tonic"/>
					</div>
					<div class="description">
						<h3>Krill Tonic</h3>
						<span>25 ml</span>
						<p>Les composants de Krill Tonic ont été pensés et étudiés afin d’optimiser la régénération de votre corps, afin de faire de vous un nouvel Homme, de donner à votre organisme les conditions sine qua non d’un renouveau devenant de facto réalité.
						</p>
						<p>Eau de source naturelle, pulpe d'aloé vera, huile de Krill, ginseng, stévia, vitamine B2, vitamine B6, vitamine B12, acid citrique, collagène, extrait de crevette nordique Rouge (astaxanthine, Coenzyme Q10).</p>
						<button type="submit" id="animate" class="btn btn-4 btn-4c icon-arrow-right">PRÉ-COMMANDEZ</button>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="point-vente">
		<div class="contenu">
			<h3>Où trouver un concept store</h3>
			<p>Pour savoir où se trouve le concept store afin de ce procurer la fiole, inscrivez-vous à la newsletter. </p>
			<button type="submit" id="animate-inscri" class="btn btn-4 btn-4c icon-arrow-right">S'INSCRIRE</button>
		</div>
	</div>
</section>


