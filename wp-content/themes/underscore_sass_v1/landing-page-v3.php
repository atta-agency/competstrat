<?php

function bdConnect(){
	try
	{$connection= new PDO("mysql:host=jeanphilgwkrill.mysql.db;dbname=jeanphilgwkrill","jeanphilgwkrill","Gh58Hag9");

	$connection->exec("SET NAMES 'UTF8'");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

return $connection;
}

function insert($mail){
	$connexion = bdConnect();
	$insert = $connexion->prepare("INSERT INTO newsletter(mail) VALUES(?)");
	$insert->execute(array($mail));

	$select = $connexion->prepare("select * FROM newsletter WHERE mail = ?");
	$select->execute(array($mail));
	$data = $select->fetch();

	return $data;
}

$msg = '';

if(isset($_POST["mail"])){
	if(filter_var ( $_POST["mail"] , FILTER_VALIDATE_EMAIL)){
		$retour = insert($_POST["mail"]);

		if($retour != false){


			$msg = "<h3>"."Merci ! Inscription réussie". "</h3>";

		}else
		{$msg = "<h3>"."Oup's un petit problème.". "</h3>";}
	}
}

/*
Template Name: Landing Page v3
*/

get_header();?>

<div class="main-background"> <!--MAIN BACKGROUND-->

	<section class="landing_head part current">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="site-title"><img alt="logo krill tonic" class="landing-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></h1>
					<!--<ul class="list-unstyled bullet-nav">
						<li>
							<a href="#"><i class="fa fa-circle-o"></i></a>
						</li>
						|
						<li>
							<a href="#"><i class="fa fa-circle-o"></i></a>
						</li>
						|
						<li>
							<a href="#"><i class="fa fa-circle-o"></i></a>
						</li>
						|
						<li>
							<a href="#"><i class="fa fa-circle-o"></i></a>
						</li>
						|
						<li>
							<a href="#"><i class="fa fa-circle-o"></i></a>
						</li>
					</ul>-->
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<p class="lead intro">
						Préparez-vous à l’unicité, à l’ouverture<br/> vers la quintessence, vers une nouvelle forme d’absolu,
					</p>
				</div>
				<div class="scroll_way_intro">
					<a class="scrollTo btn btn-primary" href="#pTwo">Entrer</a>
				</div>
			</div>
		</div>
	</section>

	<section class="text-center part part_1 non_scroll" id="pOne">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
				</div>
			</div>
			<div class="scroll_way">
				
			</div>
		</div>
	</section>

	<section class="text-center part part_2" id="pTwo">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<p class="lead fadeIn">
						celle des eaux rafraîchissantes,<br/> celle des eaux glacées,<br/> celle qui transmettent leurs vertus<br/> jusqu’alors insoupçonnées,
					</p>
				</div>
			</div>
			<div class="scroll_way">
				<a class="scrollTo" href="#pThree"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-down.png"></a>
			</div>
		</div>
	</section>

	<section class="text-center part part_3" id="pThree">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="lead fadeIn">
						ces vertus propres au grand Nord<br/> ces vertus certes mystérieuses<br/> mais qui vous transporteront
					</p>
				</div>
			</div>
			<div class="scroll_way">
				<a class="scrollTo" href="#pFoor"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-down.png"></a>
			</div>
		</div>
	</section>

	<section class="text-center part part_4" id="pFoor">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="lead fadeIn">
						... au coeur d’un périple initiatique<br/> vers un renouveau, le vôtre.
					</p>
				</div>
			</div>
			<div class="scroll_way">
				<a class="scrollTo" href="#colophon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-down.png"></a>
			</div>
		</div>
	</section>

	<section class="text-center part part_5" id="pFive">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="newsletter decal-md text-center">
						<p class="lead">Vivez dès à présent l’aventure Krill Tonic. Réserverz votre place pour la soirée évènement !</p>
						<form class="form-inline" action="/" method="POST">
							<div class="form-group">
								<input type="email" name="mail" class="form-control" id="exampleInputName2" placeholder="Votre e-mail">
								<?php echo $msg ?>
							</div>
							<button type="submit" name="envoi" class="btn btn-default">Validez</button>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>

</div> <!--END BACKGROUND-->




