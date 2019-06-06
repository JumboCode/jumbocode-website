<?php include("src-php/includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("src-php/includes/head-tag.php");?>

    <!-- For the glitch effect  -->
    <link rel="stylesheet" type="text/css" href="src/assets/styles/glitch.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>

	<body>

		<?php include("src-php/includes/nav.php");?>

		<div class="content" >
			<!-- This div is a flex hack cause I'm lazy. -->
			<div>
				<div class="glitch">
					<div class="glitch__img"></div>
					<div class="glitch__img"></div>
					<div class="glitch__img"></div>
					<div class="glitch__img"></div>
					<div class="glitch__img"></div>
				</div>
				<div class="title">
					<div>Jumbo</div>
					<div class ="seafoam">Code</div>
				</div>
				<div class="tagline">Developing customized technology and software for non-profit organizations since 2015.</div>

				<!-- I'm leaving this code in case we want a nice centered button, but tbh I think it's not needed (also  needs more styling)-->
				<!--<div class="buttons">-->
					<!--<div class="button-wrapper">-->
						<!--<button type="button" class="btn btn-secondary btn-lg btn-block button">Learn More</button>-->
					<!--</div>-->
				<!--</div>-->
			</div>
		</div>
	</body>
</html>
