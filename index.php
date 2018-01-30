<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Omrekenen van valuta</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
</head>
<body>
	<div id="pag1" data-role="page" data-theme="b">
		<div data-role="header">
			<h1>Omrekenen van valuta</h1>
		</div>
	<div role="main" class="ui-content">
			<form action="index.php" method="post">
				<label for="input">Het geldbedrag dat moet worden omgerekend naar euro's:</label>
				<input type="range" name="input" min="1" max="1000" value="1" data-highlight="true">
				<fieldset data-role="controlgroup" data-type="horizontal">
					<legend>Valuta:</legend>
						<label><input type="radio" name="currency" value="Dollar" checked="true">Amerikaanse Dollar</label>
						<label><input type="radio" name="currency" value="Pond">Engelse pond</label>
						<label><input type="radio" name="currency" value="Yen">Japanse Yen</label>
				</fieldset>
				<label class="ui-hidden-accessible" for="send">Verzend:</label>
				<button class="ui-shadow ui-btn ui-corner-all ui-mini" id="send" type="submit" name="send">Bereken</button>
			</form>
			
				<div class="ui-body ui-body-b ui-corner-all" style="text-align: center;">
				<?php
				// Hier wordt gecontroleerd of er op de verzendknop 1 is geklikt
				if(isset($_POST["send"]))
				{
				// Hier worden alle ingevulde gegevens opgehaald en bewaard in een variabele
				$input = $_POST["input"];
				$currency = $_POST["currency"];
				
				// Hier wordt het antwoord berekend
				if($currency == "Dollar")
				{
					$output = $input * 0.9376;
				}
				
				if($currency == "Pond")
				{
					$output = $input * 1.1745;
				}
				
				if($currency == "Yen")
				{
					$output = $input * 0.0083;
				}
				// Hier wordt de berekening getoond
				$output = round($output, 2);
				echo ("$input $currency is gelijk aan $output Euro's");
				}
				?>
				</div>
			</div>
		</div>
  </body>
</html>
