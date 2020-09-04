	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Rosse Sweet</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-6 col-sm-4 col-8 header-top-right no-padding">
				  				<ul>
				  					<li>
				  						Mon-Fri: 2pm to 8pm
				  					</li>
				  					<li>
				  						Sat-Sun: 1pm to 9pm
				  					</li>
				  					<li>
				  						<a href="tel:tel:(+58) 424 7761 640">(+58) 424 7761 640</a>
				  					</li>				  					
				  				</ul>
				  			</div>
				  		</div>			  					
		  			</div>
				</div>			  	
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Home</a></li>
				          <li><a href="#about">About</a></li>
				          <li><a href="#coffee">Sweets</a></li>
				          <li><a href="#review">Memories</a></li>
				          <li><a href="#blog">Sign Up</a></li>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->	

			<section class="generic-banner relative">	
				<div class="container">							
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
		
		<!-- About Generic Start -->
		<div class="main-wrapper">
			
			<!-- Start video-sec Area -->
			<!-- End video-sec Area -->

			<!-- Start Generic Area -->
			<section class="about-generic-area section-gap">
				<div class="container border-top-generic">
					<center><h3 class="about-title mb-30">Elaboration about Generic Page</h3></center>

					 <form id="formulario" action="guardar.php" method="post">

                      <div class="row">
                        <div class="col-md-2">
                          <select name="cake" id="Cake">
                            <option value="cake" selected>Cake</option>
                            <option value="chocolate">Chocolate</option>
                            <option value="strawberry">Strawberry</option>
                            <option value="soursop">Soursop</option>
                            <option value="peach">Peach</option>
                          </select>
                        </div>

                         <div class="col-md-5">
                          <select name="drinks" id="Drinks">
                            <option value="drinks" selected>Drinks</option>
                            <option value="coffee">Coffee</option>
                            <option value="chocolate">Chocolate</option>
                            <option value="water">Water</option>
                            <option value="soda">Soda</option>
                          </select>
                        </div>

                        <div class="col-md-4">
                          <fieldset>
                            <input name="jelly" type="varchar" class="form-control" id="jelly" pattern=""  placeholder="Jelly" maxlength="50">
                          </fieldset>
                        </div>

                        <div class="col-md-4">
                          <fieldset>
                            <input name="icecream" type="varchar" class="form-control" id="icecream" pattern=""  placeholder="Ice Cream" maxlength="50">
                          </fieldset>
                        </div>

                        <div class="col-md-4">
                          <fieldset>
                            <input name="cheeses" type="text" class="form-control" id="cheeses" pattern=""  placeholder="Cheeses" maxlength="50">
                          </fieldset>
                        </div>

                        <div class="col-md-4">
                          <fieldset>
                            <input name="flan" type="text" class="form-control" id="flan" pattern=""  placeholder="Flan" maxlength="50">
                          </fieldset>
                        </div>

                        <div class="col-md-4">
                          <fieldset>
                            <input name="pudding" type="text" class="form-control" id="pudding" pattern=""  placeholder="Pudding" maxlength="50">
                          </fieldset>
                        </div>

						 <div class="container-fluid">
						   <div class="row">
                         <div class="col-md-12">

                         	 <?php
                        require("conexion.php");

                        echo '<link href="estilos.css" rel="stylesheet" />'; 

                        $conexion = conectar();

                        $sql = "select * from sweet;";

                        $outcome = mysql_query($sql,$conexion);

                        echo '<table align="center" id="tablas">';
                        echo "<tr>";
                        echo '<td colspan="6" align="center" class="titulo"><h2>Sale list</h2></td>';
                        echo "</tr>";
                        echo "<tr class='subtitulo'>";
                        echo "<td>Cake</td>";
                        echo "<td>Drinks</td>";
                        echo "<td>Jelly</td>";
                        echo "<td>Ice Cream</td>";
                        echo "<td>Cheeses</td>";
                        echo "<td>Flan</td>";
                        echo "<td>Pudding</td>";
                        echo "</tr>";

                        while($sweet = mysql_fetch_row($outcome))
                        { 
                          echo "<tr id='campo'>";
                          
                          echo "<td>$sweet[1]</td>";
                          echo "<td>$sweet[2]</td>";
                          echo "<td>$sweet[3]</td>";
                          echo "<td>$sweet[4]</td>";
                          echo "<td>$sweet[5]</td>";
                          echo "<td>$sweet[6]&nbsp;</td>";
                          echo "<td>$sweet[7]&nbsp;</td>";
                          echo "</tr>";
                        }
                        echo "</table>";

                        mysql_close($conexion);
                        ?>
                         <center><section class="buttons">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-md-6 col-sm-6">
                    <div class="row">
                 
                      <div class="col-md-6">
                        <div class="border-rectangle-button">
                          <a href="modify.php">Modify</a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="border-rectangle-button">
                          <a href="remove.html">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </section></center>

				</div>
			</section>
			<!-- End Generic Start -->		

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
									
								</p>								
							</div>
						</div>													
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	
			
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/mail-script.js"></script>				
			<script src="js/main.js"></script>	
		</body>
	</html>
