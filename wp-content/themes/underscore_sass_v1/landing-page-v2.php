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
Template Name: Landing Page v2
*/

get_header();?>

<section class="landing_head part" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/img/part1.jpg) no-repeat center center; ">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="site-title"><img alt="logo krill tonic" class="landing-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/krill-tonic.png"></h1>
				<h2>Baseline</h2>
				<ul class="list-unstyled bullet-nav">
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
				</ul>
			</div>
		</div>
	</div>
	<div class="scroll_way">
		<p>Scroller pour plonger au coeur de l’expérience de Krill Tonic</p>
		<a class="scrollTo" href="#pOne"><i class="fa fa-arrow-down"></i></a>
	</div>
</section>

<section class="text-center part part_1" id="pOne" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/img/part2.jpg) no-repeat center center; ">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="lead">
					Préparez-vous à l’unicité, à l’ouverture vers la quintessence, vers une nouvelle forme d’absolu, ...
				</p>
			</div>
		</div>
		<div class="scroll_way">
			<a class="scrollTo" href="#pTwo"><i class="fa fa-arrow-down"></i></a>
		</div>
	</div>
</section>

<section class="text-center part part_2" id="pTwo" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/img/part3.jpg) no-repeat center center;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="lead">
					... celle des eaux rafraîchissantes, celle des eaux glacées, celle qui transmettent leurs vertus jusqu’alors insoupçonnées, ...
				</p>
			</div>
		</div>
		<div class="scroll_way">
			<a class="scrollTo" href="#pThree"><i class="fa fa-arrow-down"></i></a>
		</div>
	</div>
</section>

<section class="text-center part part_3" id="pThree" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/img/part4.jpg) no-repeat center center; ">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="lead">
					... ces vertus propres au grand nord, ces vertus certes mystérieuses mais qui vous transporteront ...
				</p>
			</div>
		</div>
		<div class="scroll_way">
			<a class="scrollTo" href="#pFoor"><i class="fa fa-arrow-down"></i></a>
		</div>
	</div>
</section>

<section class="text-center part part_4" id="pFoor" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/img/part1.jpg) no-repeat center center; ">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="lead">
					... au coeur d’un périple initiatique vers un renouveau, le vôtre.
				</p>
			</div>
		</div>
		<div class="scroll_way">
			<a class="scrollTo" href="#colophon"><i class="fa fa-arrow-down"></i></a>
		</div>
	</div>
</section>

<section class="text-center part part_5" id="pFive" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/img/part1.jpg) no-repeat center center; ">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="newsletter decal-md text-center">
					<p>Pour en savoir plus sur Krill Tonic</p>
					<form class="form-inline" action="/" method="POST">
						<div class="form-group">
							<input type="email" name="mail" class="form-control" id="exampleInputName2" placeholder="Votre e-mail">
							<?php echo $msg ?>
						</div>
						<button type="submit" name="envoi" class="btn btn-default">S'abonner</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>