 	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Magister - Free html5 template by GetTemplate</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/magister.css">

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

	<!-- Fonts -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
</head>

<!-- use "theme-invert" class on bright backgrounds, also try "text-shadows" class -->
<body class="theme-invert">

<nav class="mainmenu">
	<div class="container">
		<div class="dropdown">
			<button type="button" class="navbar-toggle" data-toggle="dropdown"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<!-- <a data-toggle="dropdown" href="#">Dropdown trigger</a> -->
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				<li><a href="#head" class="active">Kalkulator</a></li>
				<li><a href="#about">Treść</a></li>
			</ul>
		</div>
	</div>
</nav>


<!-- Main (Home) section -->
<section class="section" id="head" style="padding-left: 55em">
    <div class="container">
        <form action="<?php print(_APP_URL);?>/calc_credit.php" method="post" class="pure-form pure-form-stacked">
            <label >Kwota kredytu: </label>
            <input type="number" min="0" name="loanValue" value="<?php if(isset($loanValue)) print($loanValue); ?>" /><br />
            <label >Na ile lat: </label>
            <input type="number" min="0" name="yearsOfCredit" value="<?php if(isset($yearsOfCredit)) print($yearsOfCredit); ?>" /><br />
            <label >Oprocentowanie: </label>
            <input type="number" min="0" name="percent" value="<?php if(isset($percent)) print($percent); ?>" /><br />
            <input type="submit" value="Oblicz" class="pure-button pure-button-primary"/">
        </form>
        <?php
        if (isset($errorMessages)) {
            if (count($errorMessages) > 0) {
                echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';

                foreach ($errorMessages as $key => $msg) {
                    echo '<li>'.$msg.'</li>';
                }

                echo '</ol>';
            }
        }

        if (isset($result)) {
            echo '<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #aaff00; width:300px;">';
            echo 'Miesięczna rata będzie wynosić: '.round($result, 2).'zł';
            echo '</div>';
        }
        ?>
    </div>
</section>

<!-- Second (About) section -->
<section class="section" id="about">
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">

                <!-- Site Title, your name, HELLO msg, etc. -->
                <h1 class="title">Michał Błaszczak</h1>
                <h2 class="subtitle">Zadanie 3</h2>

                <!-- Short introductory (optional) -->
                <h3 class="tagline">
                    Szablon dla kalkulatora kredytowego
                </h3>

            </div> <!-- /col -->
        </div> <!-- /row -->

    </div>
</section>

<!-- Load js libs only when the page is loaded. -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.custom.72241.js"></script>
<!-- Custom template scripts -->
<script src="assets/js/magister.js"></script>
</body>
</html>