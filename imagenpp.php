<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danka | Inicio </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
<!--texto encima con colores-->
<style>
	#textcima {
z-index:100;
    position:absolute;    
    color:white;
    font-size:50px;
    font-weight:bold;
    background: rgba(0,0,0,0);
}
	h11 {  
  font-size: 72px;  
  background: -webkit-linear-gradient(left top, blue , green , red , yellow , grey, black);
  background: linear-gradient(to bottom right, blue, green,  red , yellow,  grey , black );
  -webkit-background-clip: text;  
  -webkit-text-fill-color: transparent;  
}  
</style>
  </head>
  <?php include 'header.php'; ?>
	  
<section>
	<div class="col-sm-12 col-md-12 col-lg-12 align-content-center" > 
		<!-- <div id="textcima" ><h1>Imagen Publica y Personal</h1></div> -->
		<img class="d-block w-100" style="object-fit: cover; height: 50vh; width: 100%;" 
		   src="images/carrucel/imagenpp.PNG" alt="first slide">
		</div>
	
</section>	  

<section style="color: aliceblue;">
	<style>
#tabnav
a:enabled{
  color: white;
  background-color: transparent;
  text-decoration: none;
}
		
#tabnav
a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
#tabnav
a:hover {
  color: yellow;
  background-color: transparent;
  text-decoration: none;
}
#tabnav
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: none;
}
#tabnav
a:disabled {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

</style>
	<br>
	<br>
	<br>
	<br>
<div class="col-sm-12 col-md-12 col-lg-12" id="tabnav" > 
		
<nav class="nav justify-content-center" >
  <div class="nav nav-tabs" id="nav-tab" role="tablist" >
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="background: #000;  border: #000;" >Imagen Pública</a>
	  
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="background: #000;  border: #000;" >Imagen Personal</a>
   
  </div>
</nav>
		
		<!-- Publica -->
<div class="tab-content" id="nav-tabContent" >
	<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" >
	<h2 class="text-center">Imagen Pública</h2>
	<br>
	  
	  <div class="row col-lg-12 col-md-12 col-sm-12 justify-content-center m-auto" 
		   style="background-image:url('images/fondo_danka_nc.png');
				  background-repeat:no-repeat;
				  
				  background-position: center bottom;
				
				  background-size: 100% 55%;">
			<div class="card-deck">
  				<div class="card text-white bg-dark border-0" >
     				<img class="card-img-top" src="images/imagenpp/salud.png" alt="Card image cap">
  					<div class="card-body">
	  			<!-- <h5 class="card-title">Salud</h5> -->
    			<p class="card-text"></p>
  					</div>
  				</div>
				
  				<div class="card text-white bg-dark border-0" >
     				<img class="card-img-top" src="images/imagenpp/estetica.png" alt="Card image cap">
  					<div class="card-body">
	  			<!--<h5 class="card-title">Estética y belleza</h5>-->
    			<p class="card-text"></p>
  					</div>
  				</div>
  				<div class="card text-white bg-dark border-0" >
     				<img class="card-img-top" src="images/imagenpp/ropa.png" alt="Card image cap">
  					<div class="card-body">
	 			<!-- <h5 class="card-title">Ropa, Calzado y Accesorios</h5> -->
    			<p class="card-text"></p>
  					</div>
  				</div>
			</div>
		<br>
		<div class="card-deck row col-lg-9 col-md-9 col-sm-9 justify-content-between" >
			
  				<div class="card text-white bg-dark border-0" >
     			<img class="card-img-top" src="images/imagenpp/lenguaje.PNG" alt="Card image cap">
  					<div class="card-body">
	 					<!-- <h5 class="card-title">Lenguaje Corporal</h5> -->
    				<p class="card-text"></p>
  					</div>
  				</div>
  				<div class="card text-white bg-dark border-0" >
     			<img class="card-img-top" src="images/imagenpp/habilidades.PNG" alt="Card image cap">
  					<div class="card-body">
	 					<!-- <h5 class="card-title">Habilidades de Discurso y Comunicación</h5> -->
    				<p class="card-text"></p>
  					</div>
  				</div>
			
		</div>
	  </div>		  
	<br>
  	</div> <!-- fin fade-->
	
	<!-- personal -->
	<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
	<h2 class="text-center">Imagen Personal</h2>
	<br>
	  
	  <div class="row col-lg-12 col-md-12 col-sm-12 justify-content-center m-auto"
		   style="background-image:url('images/fondo_danka_na.png');
				  background-repeat:no-repeat;
				  
				  background-position: center bottom;
				
				  background-size: 100% 55%;">
			<div class="card-deck">
  				<div class="card text-white bg-dark border-0" >
     				<img class="card-img-top" src="images/imagenpp/salud.png" alt="Card image cap">
  					<div class="card-body">
	  			<!-- <h5 class="card-title">Salud</h5> -->
    			<p class="card-text"></p>
  					</div>
  				</div>
				
  				<div class="card text-white bg-dark border-0" >
     				<img class="card-img-top" src="images/imagenpp/estetica.png" alt="Card image cap">
  					<div class="card-body">
	  			<!--<h5 class="card-title">Estética y belleza</h5>-->
    			<p class="card-text"></p>
  					</div>
  				</div>
  				<div class="card text-white bg-dark border-0" >
     				<img class="card-img-top" src="images/imagenpp/ropa.png" alt="Card image cap">
  					<div class="card-body">
	 			<!-- <h5 class="card-title">Ropa, Calzado y Accesorios</h5> -->
    			<p class="card-text"></p>
  					</div>
  				</div>
			</div>
		<br>
		  
		<div class="card-deck row col-lg-9 col-md-9 col-sm-9 justify-content-between" >
  				<div class="card text-white bg-dark border-0" >
     			<img class="card-img-top" src="images/imagenpp/lenguaje.PNG" alt="Card image cap">
  					<div class="card-body">
	 					<!-- <h5 class="card-title">Lenguaje Corporal</h5> -->
    				<p class="card-text"></p>
  					</div>
  				</div>
  				<div class="card text-white bg-dark border-0" >
     			<img class="card-img-top" src="images/imagenpp/habilidades.PNG" alt="Card image cap">
  					<div class="card-body">
	 					<!-- <h5 class="card-title">Habilidades de Discurso y Comunicación</h5> -->
    				<p class="card-text"></p>
  					</div>
  				</div>
		</div>
			  
	  </div>		  
	<br>
  	</div> <!-- fin fade-->
	
	
</div> <!-- fin tab content-->
		
		
</section>	  

<br>

	  
<!-- FOOTER -->
<div class="row align-content-around" style="color: aliceblue;">
		<div class="row col-lg-4 col-md-4 col-sm-4 align-content-center" >
  		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="images/dankalogo.PNG" width="60%"  alt="logo"  >
		</div>
		<div class="row col-lg-4 col-md-4 col-sm-4 justify-content-center" style="margin: auto;">
			<p style="text-align: center;"><br> &nbsp;&nbsp;&nbsp;Todos los derechos Reservados 2021 <br>
				<a href="#">Aviso de Privacidad</a></p>
		</div>
		   	<div class="row col-lg-3 col-md-3 col-sm-3 justify-content-around" style="margin: auto;">
				<br>
		 <p align="center">
				<a href="https://www.facebook.com/" target="_blank">
                  <img src="images/iconos/facebook (2).png" alt="" width="15%" class="img-fluid"></a>
                      &nbsp;
                <a href="https://twitter.com/" target="_blank">
                  <img src="images/iconos/instagram (2).png" alt="" width="15%" class="img-fluid"></a>
                      &nbsp;	
                <a href="https://www.youtube.com/" target="_blank">
                  <img src="images/iconos/tik-tok (2).png" alt="" width="15%" class="img-fluid"></a>
                        &nbsp;
			 </p>
			</div>
         
    </div>










	  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>
