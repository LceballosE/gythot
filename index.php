<?php 

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Registro</title>
 	<script type="text/javascript" src="complementos/js/jquery-3.2.1.js"></script>
 	<link rel="stylesheet" type="text/css" href="complementos/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="complementos/css/font-awesome.css">
 	<link rel="stylesheet" type="text/css" href="complementos/css/propio.css">
 </head>
 <body 	>
 	<div class="fluid-container" >
 		<div class="row">
 			<div class="col-md-8 col-md-offset-2" style="color: #bbb">
 				<div class="junbotron" style="opacity: 0.99; margin-top: 10%; padding-bottom: 3%;">
 					<div class="row">
 						<div class="col-md-7 col-md-offset-2">
 							<br>
 										
 							<h1>Log in</h1>
 						</div>
 					</div>
 					<div class="row" style="margin-top: 5%">
 						<div class="col-md-3 col-md-offset-2">
 							<form action="inicio.php">
 								<div class="form-group">
 									<label>User:</label>
 									<br>
 									<input type="text" class="form-control" name="user">
 								</div>

 								<div class="form-group">
 									<label>Password:</label>
 									<br>
 									<input type="password" class="form-control" name="pass">
 								</div>
 								<button type="submit" class="btn btn-success" style="margin-top: 10px;">Log in</button>
 							</form>
 						</div>
 						<div class="col-md-3 col-md-offset-1">
 							<div class="row">
 								<div class="col-md-12">
 									<h5>Puedes utilizar tú cuenta de <b>github</b> como login para poder utilizar la funcionalidad completa de la aplicación:</h5>
 								</div>
 							</div>
 							<br>
 							<div class="row">
 								<div class="col-md-12">
 									<button class="btn btn-git btn-lg">
 										<i class="fa fa-github fa-2x img-git" aria-hidden="true" ></i>
 										<span>Log with GitHub</span>
 									</button>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 
 	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
 	<script type="text/javascript" src="./complementos/js/bootstrap.js"></script>
 </body>
 </html>