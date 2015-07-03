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
Template Name: Landing Page
*/

get_header();?>

<section role="main" class="content home">

	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">

			

			</div>
		</div>
		<div class="row decal-md">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="text-center edito">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>
				</div>
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