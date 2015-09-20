<!DOCTYPE html>

<html lang="fr">

	<head>

		<title>PHP / TP</title>
		<meta charset="UTF-8" />

		<style type="text/css">
			body{
				padding: 0;
				margin: 0;
				font-family: sans-serif;
			}

			.container{
				width: 600px;
				margin: 0 auto;
			}
			fieldset{
				border-style: none;
			}

			header{
				background: #F94E4E;
				padding: 10px;
			}
			header h1{
				font-size: 24px;
				color: #fff;
				text-align: center;
			}
			header p{
				font-size: 18px;
				color: #141414;
				text-align: center;
			}
			form{
				padding: 30px;
			}
			fieldset{
				height: 80px;
			}
			legend{
				color: #A3A3A3;
				font-size: 20px;
			}
			.envoi{
				font-size: 20px;
				text-transform: uppercase;
				display: inline-block;
				padding: 15px 30px ;
				font-size: 18px;
				color: #fff;
				background: #F94E4E;
				border: 1px solid #F94E4E;
				margin-top: 10px;
				margin: 0 auto;
				cursor: pointer;

				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				transition: all 0.3s;
			}
			.envoi:hover{
				color: #F94E4E;
				background: #fff;
			}
			footer{
				background: #EDEDED;
				color: #141414;
				width: 100%;
				margin: 0 auto;
				padding: 15px;
			}
			small{
				margin: 0 auto;
			}
			small a{
				color: #F94E4E;
				text-decoration: none;
			}
			small a:hover{
				border-bottom: 1px solid #F94E4E;
			}
			.genial{
				background: #89E260;
				color: #141414;
				padding: 15px;
			}
			.loos{
				background: #FF3333;
				color: #141414;
				padding: 15px;
			}
			.pourquoi{
				background: #F9A643;
				color: #141414;
				padding: 15px;
			}
			img{
				width: 100%;
			}
		</style>

	</head>

	<body>
		<div class="container">

			<header>
				<h1>Papa chéri, je peux prendre ta voiture?</h1>
				<p>C'est pour aller à l'école.</p>
			</header>


			<form method="GET" action="index.php">

				<fieldset>
					<legend>Tu n'auras plus besoin de me conduire à la gare.</legend>
					<label for="conduire_oui">Oui</label>
					<input type="radio" name="question1" id="conduire_oui" value="oui" <?php if( (!empty($_GET[ 'question1']))  && ($_GET['question1']=='oui')){ echo
'checked="checked"';} ?>  required >
					<label for="conduire_non">Non</label>
					<input type="radio" name="question1" id="conduire_non" value="non" <?php if( (!empty($_GET[ 'question1']))  && ($_GET['question1']=='non')){ echo
'checked="checked"';} ?> required>
				</fieldset>

				<fieldset>
					<legend>Je ne serais plus en retard en cours.</legend>
					<label for="retard_oui">Oui</label>
					<input type="radio" name="question2" id="retard_oui" value="oui" <?php if( (!empty($_GET[ 'question2']))  && ($_GET['question2']=='oui')){ echo
'checked="checked"';} ?>  required>
					<label for="retard_non">Non</label>
					<input type="radio" name="question2" id="retard_non" value="non" <?php if( (!empty($_GET[ 'question2']))  && ($_GET['question2']=='non')){ echo
'checked="checked"';} ?>2 required>
				</fieldset>

				<fieldset>
					<legend>La voiture ne fera pas grève à tous va.</legend>
					<label for="greve_oui">Oui</label>
					<input type="radio" name="question3" id="greve_oui" value="oui" <?php if( (!empty($_GET[ 'question3']))  && ($_GET['question3']=='oui')){ echo
'checked="checked"';} ?>  required>
					<label for="greve_non">Non</label>
					<input type="radio" name="question3" id="greve_non" value="non" <?php if( (!empty($_GET[ 'question3']))  && ($_GET['question3']=='non')){ echo
'checked="checked"';} ?> required>
				</fieldset>

				<fieldset>
					<legend>J'irais plus rapidement en voiture.</legend>
					<label for="rapide_oui">Oui</label>
					<input type="radio" name="question4" id="rapide_oui" value="oui" <?php if( (!empty($_GET[ 'question4']))  && ($_GET['question4']=='oui')){ echo
'checked="checked"';} ?>  required>
					<label for="rapide_non">Non</label>
					<input type="radio" name="question4" id="rapide_non" value="non" <?php if( (!empty($_GET[ 'question4']))  && ($_GET['question4']=='non')){ echo
'checked="checked"';} ?> required>
				</fieldset>

				<fieldset>
					<legend>Tu pourras t'acheter ta moto dont tu rèves.</legend>
					<label for="moto_oui">Oui</label>
					<input type="radio" name="question5" id="moto_oui" value="oui" <?php if( (!empty($_GET[ 'question5']))  && ($_GET['question5']=='oui')){ echo
'checked="checked"';} ?>  required>
					<label for="moto_non">Non</label>
					<input type="radio" name="question5" id="moto_non" value="non" <?php if( (!empty($_GET[ 'question5']))  && ($_GET['question5']=='non')){ echo
'checked="checked"';} ?> required>
				</fieldset>

				<fieldset>
					<legend>Je pourrais aller voir ton cheval quand tu travailles.</legend>
					<label for="cheval_oui">Oui</label>
					<input type="radio" name="question6" id="cheval_oui" value="oui" <?php if( (!empty($_GET[ 'question6']))  && ($_GET['question6']=='oui')){ echo
'checked="checked"';} ?> required>
					<label for="cheval_non">Non</label>
					<input type="radio" name="question6" id="cheval_non" value="non" <?php if( (!empty($_GET[ 'question6']))  && ($_GET['question6']=='non')){ echo
'checked="checked"';} ?> required>
				</fieldset>



				<input class="envoi" type="submit" value="T'es un gentil papa?">
			

			</form>

			<?php 

				function passe_voiture($question1,$question2,$question3,$question4,$question5,$question6){
					
					if( ($question1=='oui' ) && ($question2=='oui' ) && ($question3=='oui' ) && ($question4=='oui' ) && ($question5=='oui' ) && ($question6=='oui' ) ){
						echo "<p class='genial'>T'es un papa géniale !</p>"."<img src='voiture.jpg' alt='Voiture de fou'>";				
					} 
					else if( ($question1=='non' ) && ($question2=='non' ) && ($question3=='non' ) && ($question4=='non' ) && ($question5=='non' ) && ($question6=='non' ) ){
						echo "<p class='loos'>Gros looser...</p>"."<img src='boude.jpg' alt='Je te fais la gueule'>";				
					}	
					else {
						echo "<p class='pourquoi'>Euh? Pourquoi?</p>"."<img src='what.jpg' alt='Say what now?'>";
					}
				} 

					if (!empty($_GET) ){ echo passe_voiture($_GET[ 'question1'],$_GET[ 'question2'],$_GET[ 'question3'],$_GET[ 'question4'],$_GET[ 'question5'],$_GET[ 'question6'] ); } 

				
				


			?>
			<footer>
				<small>Fait par <a href="https://twitter.com/BeernaertChris">Christelle Beernaert</a> - <a href="https://github.com/ChristelleB/PHP---TP">Mon Github</a></small>
			</footer>
					


		</div>
		
		

		


	</body>

</html>