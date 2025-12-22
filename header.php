<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.: Rolls Capital Advisors<?php if($title !== ''){echo " - ".$title;}?> :.</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,100' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Quicksand:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/estilo.css">

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="script.js"></script>

	
</head>
<body>
    <div id="overlayLogin"></div>
    
	<div class="row-fluid" id="header">
		<div id="goldbar"></div>
		<div class="container">
			<div class="row" id="toptext">
				<div class="col-sm-12 text-end">
					<span>e: info@rollscapital.com</span>
                    <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null){?>
                        <span><a href="dashboard">Dashboard</a></span>
                        <span><a href="logout">Logout</a></span>
                    <?php } else{ ?>
                        <span id="loginButton">
                            Sign in
                            <div id="loginPopup">
                                <span id="closePopup">&times;</span>
                                <form id="loginForm" method="post">
                                    <input type="text" id="username" name="username" placeholder="Username" required><br><br>
                                    <input type="password" id="password" name="password" placeholder="Password" required><br><br>
                                    <button type="submit">Sign in</button>
                                </form>
                                <p id="errorMessage"></p>
                            </div>
                        </span>
                    <?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<a href="/" class="logo"><img src="img/logo.jpg"></a>
				</div>
				<div class="col-sm-8 text-end">
					<button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
					<ul id="mainNav">
						<li><a <?php if($page==="index") { ?>class="active"<?php } ?> href="/">Home</a></li>
						<li><a <?php if($page==="about") { ?>class="active"<?php } ?> href="about">About Us</a></li>
						<li><a <?php if($page==="products") { ?>class="active"<?php } ?> href="products">Products & Services</a></li>
						<li><a <?php if($page==="careers") { ?>class="active"<?php } ?> href="careers">Careers</a></li>
						<li><a <?php if($page==="contact") { ?>class="active"<?php } ?> href="contact">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>