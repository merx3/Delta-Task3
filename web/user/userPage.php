<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server" >
    	<title>MenuMatic Vertical Example</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" charset="utf-8" />
		<link rel="stylesheet" href="../css/MenuMatic.css" type="text/css" media="screen" charset="utf-8" />
		<!--[if lt IE 7]>
			<link rel="stylesheet" href="css/MenuMatic-ie6.css" type="text/css" media="screen" charset="utf-8" />
		<![endif]-->
</head>
<body>    
   <div id="container" >   		   		
	    
		<a class="logout" href="#">Logout</a>
		<!-- BEGIN Menu -->
	    <ul id="nav">

			<li><a href="#">Percoidei</a>
		
				<ul>
					<li><a href="#">Remoras</a>
						<ul>
							<li><a href="#">Echeneis</a>
							<ul>
								<li><a href="#">Echeneis</a>
									<ul>
										<li><a href="#">Echeneis</a>
											<ul>
												<li><a href="#">Echeneis</a></li>
												<li><a href="#">Phtheirichthys</a></li>
												<li><a href="#">Remora</a></li>
												<li><a href="#">Remorina</a></li>
							
												<li><a href="#">Rhombochirus</a></li>
											</ul>
										</li>
										<li><a href="#">Phtheirichthys</a></li>
										<li><a href="#">Remora</a></li>
										<li><a href="#">Remorina</a></li>
					
										<li><a href="#">Rhombochirus</a></li>
									</ul>
								</li>
								<li><a href="#">Phtheirichthys</a></li>
								<li><a href="#">Remora</a></li>
								<li><a href="#">Remorina</a></li>			
								<li><a href="#">Rhombochirus</a></li>
							</ul>
							</li>
							<li><a href="#">Phtheirichthys</a></li>
							<li><a href="#">Remora</a></li>
							<li><a href="#">Remorina</a></li>		
							<li><a href="#">Rhombochirus</a></li>
						</ul>
					</li>
					<li><a href="#">Tilefishes</a>
						<ul>
							<li><a href="#">Caulolatilus</a></li>
							<li><a href="#">Lopholatilus</a></li>
		
							<li><a href="#">Malacanthus</a></li>
						</ul>
					</li>
					<li><a href="#">Bluefishes</a>
						<ul>
							<li><a href="#">Pomatomus</a></li>
							<li><a href="#">Scombrops</a></li>
		
							<li><a href="#">Sphyraenops</a></li>
						</ul>
					</li>
					<li><a href="#">Tigerfishes</a>
						<ul>
							<li><a href="#">Amniataba</a></li>
							<li><a href="#">Bidyanus</a></li>
		
							<li><a href="#">Hannia</a></li>
							<li><a href="#">Hephaestus</a></li>
							<li><a href="#">Lagusia</a></li>
							<li><a href="#">Leiopotherapon</a></li>
							<li><a href="#">Mesopristes</a></li>
							<li><a href="#">Pelates</a></li>
		
							<li><a href="#">Pelsartia</a></li>
							<li><a href="#">Pingalla</a></li>
							<li><a href="#">Rhyncopelates</a></li>
							<li><a href="#">Scortum</a></li>
							<li><a href="#">Syncomistes</a></li>
							<li><a href="#">Terapon</a></li>
		
						</ul>
					</li>
		
				</ul>
			</li>
		
			<li><a href="#">Anabantoidei</a>
				<ul>
					<li><a href="#">Climbing perches</a>
		
						<ul>
							<li><a href="#">Anabas</a></li>
							<li><a href="#">Ctenopoma</a></li>
						</ul>
					</li>
					<li><a href="#">Labyrinthfishes</a>
						<ul>
		
							<li><a href="#">Belontia</a></li>
							<li><a href="#">Betta</a></li>
							<li><a href="#">Colisa</a></li>
							<li><a href="#">Macropodus</a></li>
							<li><a href="#">Malpulutta</a></li>
							<li><a href="#">Parosphromenus</a></li>
		
							<li><a href="#">Pseudosphromenus</a></li>
							<li><a href="#">Sphaerichthys</a></li>
							<li><a href="#">Trichogaster</a></li>
							<li><a href="#">Trichopsis</a></li>
						</ul>
					</li>
					<li><a href="#">Kissing gouramis</a></li>
		
					<li><a href="#">Pike-heads</a></li>
					<li><a href="#">Giant gouramis</a></li>
		
				</ul>
			</li>
		
			<li><a href="#">Gobioidei</a>
				<ul>
		
					<li><a href="#">Burrowing gobies</a></li>
					<li><a href="#">Dartfishes</a></li>
					<li><a href="#">Eellike gobies</a></li>
					<li><a href="#">Gobies</a></li>
					<li><a href="#">Loach gobies</a></li>
					<li><a href="#">Odontobutidae</a></li>
		
					<li><a href="#">Sandfishes</a></li>
					<li><a href="#">Schindleriidae</a></li>
					<li><a href="#">Sleepers</a></li>
					<li><a href="#">Xenisthmidae</a></li>
				</ul>
			</li>
		
		</ul>
	
		<!-- END Menu -->
	    <div id="content">	    	 
			<h1>Vertical Menu Example</h1>
			<p>Lorem Ipsum, motherfucker</p>
			
    	</div>
    		  
    </div>
	
	<!-- Load the Mootools Framework -->
	<script src="../js/google-jsapi.js"></script><script>google.load("mootools", "1.2.1");</script>	
	
	<!-- Load the MenuMatic Class -->
	<script src="../js/MenuMatic_0.68.3.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- Create a MenuMatic Instance -->
	<script type="text/javascript" >
		window.addEvent('domready', function() {			
			var myMenu = new MenuMatic({ orientation:'vertical' });			
		});		
	</script>	
</body>
</html>
