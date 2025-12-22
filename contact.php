<?php
require_once('init.php');
$page = 'contact';
$title = 'Contact';
require_once('header.php') ?>
	<div class="row-fluid" id="maincontent">
		<div class="contactform">
			<div class="container">
				<h2>Please fill in the contact form below to contact us:</h2>
			</div>
			<form id="contacto" method="post" action="">
				<div class="container">
					<div class="row">
						<div class="col-sm-7">
							Name:
							<input type="text" name="nombre" id="nombre" required>
						</div>
						<div class="col-sm-5">
							E-mail:
							<input type="text" name="email" id="email" required>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7">
							Country:
							<input type="text" name="country" id="country">
						</div>
						<div class="col-sm-5">
							Telephone Number:
							<input type="text" name="phone" id="phone">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							How can we help you:
							<textarea name="comments" id="comments" required></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center readmore">
							<a id="submit">Submit</a>
							<p class="response"></p>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="container small">
			<p>LONDON<br />27 Old Gloucester Street, London WC1N 3AX, United Kingdom</p>
			<!--<p>MÉXICO<br />Torre Ángel, Paseo de la Reforma 350 Piso 11 Col. Juarez, México 06600</p>-->
			<p><!--dd:+52 55 9171 1381 / +52 1 5586 513 346<br>-->e: info@rollscapital.com</p>
		</div>
	</div>
<?php require_once('footer.php') ?>
