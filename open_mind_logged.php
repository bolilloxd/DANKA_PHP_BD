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
/*	h1 {  
  font-size: 72px;  
  background: -webkit-linear-gradient(left top, red, yellow, blue,black);
  background: linear-gradient(to bottom right, red, yellow, blue ,black );
  -webkit-background-clip: text;  
  -webkit-text-fill-color: transparent;  */
}  
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
<section>
<br>	
<br>	
<br>	
<br>	
<div class="container " style="color: aliceblue;" >
		
<h1 class="text-center">Todos los Eventos</h1>
		<br>
<?php 
 $conexion=mysqli_connect('localhost','root','','danka_events');
  function conexion()
  {
    return $conexion=mysqli_connect("localhost","root","","danka_events");
  }
  $conexion=conexion();
 ?>
 <H4>
 <font face="Arial" >
<table border="5" class="table table-hover table-striped table-light">
  <tr>
    <td> Folio </td>
    <td> Eventos </td>
    <td> fecha </td>
    <td> Mas informacion </td>
  </tr>

<?php

  $sql="SELECT folio, nombre_evento, fecha, descripcion  FROM eventos";
  
  $result=mysqli_query($conexion,$sql);
  while($mostrar=mysqli_fetch_array($result)){
  ?>

  
  <tr>
    <td><?php echo $mostrar['folio'] ?></td>
    <td><?php echo $mostrar['nombre_evento'] ?></td>
    <td><?php echo $mostrar['fecha'] ?></td>
    <td><?php echo $mostrar['descripcion'] ?></td>

  </tr>
<?php 
}
 ?>
</table>
</font></H4>
       <br><br>

	<br>
	<br>
	<br>
</div>
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
