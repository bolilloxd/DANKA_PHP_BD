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
	/* h2 {  
  font-size: 72px;  
  background: -webkit-linear-gradient(left top, red, yellow, blue,black);
  background: linear-gradient(to bottom right, red, yellow, red ,blue );
  -webkit-background-clip: text;  
  -webkit-text-fill-color: transparent;  
} */
</style>
  </head>
  <?php include 'header.php'; ?>

<section>
	<div class="col-sm-12 col-md-12 col-lg-12 align-content-center" > 
		<div id="textcima" ><h1><b>
			<br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			OPEN MIND</b></h1></div>
		<img class="d-block w-100" style="object-fit: cover; height: 50vh; width: 100%;" 
		   src="images/contenmk.jpg" alt="first slide">
		</div>
	
</section>	  


<section style="background-color: lightpink;">
<br>	
<br>	
<br>	
<br>	
<div class="container " style="color: aliceblue;">
		
		<h1 class="text-center">Inicia Sesión</h1>
		
	<form class="py-5 justify-content-center " style="color: aliceblue; padding: 3%;">
	
		
  <div class="form-row justify-content-center">
    <div class="form-group col-sm-6 col-md-6 col-lg-6">
      <label for="inputCorreo">Dirección de Correo</label>
      <input type="email" class="form-control" id="inputCorreo" placeholder="Example@example.com" required>
		<br>
      <label for="inputWhats">Contraseña</label>
      <input type="password" class="form-control" id="inputWhats" placeholder="Contraseña" required>
		<br>
		<div class="form-check ">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Recuerdáme
      </label>
    	</div>
		
		<div align="right">
			
	  <button type="submit" class="btn" style="color: aliceblue; background-color: hotpink;" onclick="location.href='open_mind_logged.php'">Acceder</button>
    
		</div>
	</div>
   </div>	
  
</form>

</div>
	<br>
	<br>
	<br>
</section>
	  
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
