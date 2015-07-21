<?php

$msg = '';

if(isset($_POST["email"])){
	if(filter_var ( $_POST["email"] , FILTER_VALIDATE_EMAIL)){

		if(isset($_POST["prenom"]) &&  is_string($_POST["prenom"])){
			if(isset($_POST["nom"]) && is_string($_POST["nom"])){
				$retour = insert($_POST["prenom"],$_POST["nom"],$_POST["email"],$_POST["pre_co"]);
				if($retour != false){


					$msg = "<span>"."Merci. Vous receverez très prochainement une invitation au club.". "</span>";

				}else{$msg = "<span>"."L'inscription n'a pas abouti.". "</span>";}

			}else{$msg = "<span>"."Nom invalide.". "</span>";}
		}

	}
}   


?>
<section class="home_club" id="section_7">

	<div class="container">
		<img class="club_banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/le-club.png">
		<div class="row">
			<div class="col-sm-12">
				<div class="box-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-club.jpg"/>
				</div>
				<div class="box-text">
					<h2 class="special_title">Krill Tonic<br/><strong>Bien plus<br/> qu'une expérience</strong></h2>
					<div class="main clearfix">
						<form id="nl-form" method="post"class="nl-form">
							<input type="hidden" name="pre_co" value="0">
							<p>Rejoignez dès à présent le Club Krill Tonic et sublimez votre quotidien. 
								Vous vous appelez <input type="text" name="prenom" value="" placeholder="PRÉNOM" data-subline=""/>, <input type="text" name="nom" value="" placeholder="NOM" data-subline=""/> et vous souhaitez recevoir plus d’informations sur <input type="text" name="email" value="" placeholder="ADRESSE E-MAIL" data-subline=""/>.</p>
								<button type="submit"  class="nlforminput btn btn-4 btn-4c icon-arrow-right">Validez</button>
								<?php if(isset($msg)) echo $msg;?>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>