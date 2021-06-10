<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Eric Thomas">
	<meta name="description" content="Eric Thomas recreation of the DevChallenges Edie challenge">
	<title> Edie </title>
	<link rel="shortcut icon" href="img/icon.png">    
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/edie.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<header class="container">
		<div class="row">
			<div class="col-3">
				<span class="logo"> Edie </span>
			</div>
			<div class="col-9">
				<nav id="menu">
					<span class="material-icons" id="menu-toggle" onclick="MenuToggle()">menu</span>
					<ul>
						<li>
							<a href="index.php" class="active"> Home </a>
						</li>
						<li>
							<a href="#services"> Services </a>
						</li>
						<li>
							<a href="#portfolio"> Our Works </a>
						</li>
						<li>
							<a href="#clients"> Clients </a>
						</li>
						<li>
							<a href="#contact"> Contact </a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
    </header>

	<div class="clear lg"> &nbsp; </div>

	<section class="container" id="about">
		<div class="row">
			<div class="col-1 col-md-2"> &nbsp; </div>
			<div class="col-10 col-md-4"> 
				<span class="blue"> unhappy with your website? </span>
				<h2> We create beautiful and fast web services </h2>
			</div>
			<div class="col-1 col-md-6"> &nbsp; </div>
		</div>
		<div class="row">
			<img src="img/team.jpg" alt="Team strategizing on whiteboard" class="hero">
		</div>
		<div class="clear"> &nbsp; </div>
		<div class="row">
			<div class="col-1 col-md-2"> &nbsp; </div>
			<div class="col-10 col-md-3"> 
				<h2> Story, emotion and purpose </h2>
				<p>
					We help transform your ideas into real world applications that will outperform your toughest competition and help you achieve your strategic goals in short period of time.
				</p>
				<span class="sm"> Want us to contact you? </span>
				<form action="#" method="post" class="emailer">
					<input type="email" placeholder="Email">
					<input type="submit" value="Join">
				</form>
			</div>
			<div class="col-1 col-md-6"> &nbsp; </div>
		</div>
	</section>
	
	<div class="clear lg"> &nbsp; </div>

	<section class="container" id="services">
		<div class="row">
			<div class="col-12 col-md-3">
				<h2> We offer high demand services </h2>	
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-4 service">
				<article>
					<span class="material-icons">create</span>
					<strong> UI/UX Design </strong>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a metus ac nulla consequat aliquet id quis turpis.
					</p>
					<button> Get Started </button>
				</article>
			</div>
			<div class="col-12 col-md-4 service">
				<article>
					<span class="material-icons">code</span>
					<strong> Front End </strong>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a metus ac nulla consequat aliquet id quis turpis.
					</p>
					<button> Get Started </button>
				</article>
			</div>
			<div class="col-12 col-md-4 service">
				<article>
					<span class="material-icons">list</span>
					<strong> Back End </strong>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a metus ac nulla consequat aliquet id quis turpis.
					</p>
					<button> Get Started </button>
				</article>
			</div>
		</div>
	</section>

	<div class="clear lg"> &nbsp; </div>
	
	<section class="container" id="portfolio">
		<div class="row">
			<div class="col-12 col-md-4">
				<h2> Good design means good business </h2>
				<br>	
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 showcase">
				<img src="img/smart-home.jpg" alt="Smart home app control dashboard">
				<p class="subtitle">
					Full stack application
				</p>
				<p class="description">
					Smart home dashboard
				</p>
			</div>
			<div class="col-12 col-md-6 showcase">
				<img src="img/onboard.png" alt="Onboarding app UI design">
				<p class="subtitle">
					UX/UI design
				</p>
				<p class="description">
					Onboard application
				</p>
			</div>
			<div class="col-12 col-md-6 showcase">
				<img src="img/booking.png" alt="Event booking app UI design">
				<p class="subtitle">
					Mobile application
				</p>
				<p class="description">
					Booking system
				</p>
			</div>
			<div class="col-12 col-md-6 showcase">
				<img src="img/juice.png" alt="Smart Juice app design">
				<p class="subtitle">
					Front End application
				</p>
				<p class="description">
					Juice product homepage
				</p>
			</div>
		</div>	
		<div class="row">
			<div class="col-7 col-md-10"> &nbsp; </div>
			<div class="col-5 col-md-2">
				<a href="#">
					see more <span class="material-icons">trending_flat</span>
				</a>
			</div>
		</div>	
	</section>

	<div class="clear lg"> &nbsp; </div>
	
	<section class="container" id="clients">

	</section>

	<footer class="container" id="contact">

	</footer>

	<script src="js/bootstrap.min.js"></script>
    <script src="js/mobile-nav.js"></script>
</body>
</html>