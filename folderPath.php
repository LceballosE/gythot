

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>historial</title>
        <link href="assets/css/styles4.css" rel="stylesheet"/>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="complementos/css/font-awesome.css">
 <link rel="stylesheet" href="css/style2.css">
 	<link href="assets/css/styles4.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style3.css"> 



</head>

<body style="background-color: #e5e3e3">

    
    <div id="wrapper" >

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <i class="fa fa-folder-open-o 1x" style="color: orange" ></i>
                    
                </li>
                 <li>
                    <a href="index.php"><i class="fa fa-user 5x" style="color: #5bc692" ></i>   Ingreso</a>

                </li>
                 <li>
                    <a href="inicio.php"><i class="fa fa-home 3x" style="color: #5bc692" ></i>    inicio</a>
                </li>
                 <li>
                    <a href="folderPath.php"><i class="fa fa-folder-open-o 3x" style="color: #5bc692" ></i> Nuevo Git!!!</a>
                </li>
                <li>
                    <a href="aummajor.php"><i class="fa fa-file 3x" style="color: #5bc692" ></i> Crear Major</a>
                </li>
                <li>
                    <a href="aumminor.php"><i class="fa fa-file-o 3x" style="color: #5bc692" ></i> Crear Minor</a>
                </li>
                <li>
                    <a href="aumpatch.php"><i class="fa fa-file-text-o 3x" style="color: #5bc692" ></i> Crear Patch</a>
                </li>
                <li>
                    <a href="eliminar.php"><i class="fa fa-trash 3x" style="color: #5bc692" ></i> Eliminar Repositorio</a>
                </li>
                <li>
                    <a href="historial.php"><i class="fa fa-history 3x" style="color: orange" ></i> Historial</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->


        <!-- Page Content -->
        



<div id="page-content-wrapper" >
   <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle" style="color: black; text-align: center;"  ><i class="fa fa-bars  5x fa-fw" aria-hidden="true" style="color: black" ></i></a>


            <div class="container">
     <div class="jumbotron" style="background: #444444 ;opacity: 0.69; padding: 10px 0 10px; text-align: center; border-radius: 30px">
         <h1 style="font-size: 60px"><i class="fa fa-folder-open-o 5x"  style="color: #5bc692"  ></i> GYTHOT </h1>
            <h3 style="color: orange; text-align: center; padding: 30px" >Seleccionar Carpeta</h3>
    
        </div>
    </div>
<div class="row">
 
     <div class="col">
         <div class="jumbotron" style="background: black ;opacity : 0.68; padding: 15px 0 15px; text-align: center; border-radius: 40px" >
       <!--    ************************ Mezcla php ***html-->              
             
               <div class="filemanager">
		
		<div class="breadcrumbs"></div>
		<form action="nuevogit.php" method="POST">
		<div class="but">
			<input type="text" id="lab" name="lab"/>
			<input type="submit" value="Elegir esta carpeta" id="btn" name="btn"/>
		</div>
		</form>
		<ul class="data"></ul>

		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>No hay carpetas.</span>
		</div>

	   </div>

	<div class="filemanager2">
		<ul class="data2"></ul>
	</div>

	

    </div>
  </div>
           
 </div>

</div>
<!--
 "<li>
                                        <div class='content' style='background: #5bc692'> 
                                            <h2>
                                            <i class='fa fa-folder-open-o 3x'  style='color: #000000'  >
                                                <a href='$path/$file'>$file
                                                </a>
                                            </i>
                                            </h2>
                                        </div>
                                        <div class='overlay'>
                                        </div>
                                    </li>";      
-->


    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script  src="js/index3.js"></script>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="assets/js/script.js"></script>
      

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>



    <script  src="js/index3.js"></script>

     <script  src="js/index2.js"></script>
     <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  

<div style="background: white; opacity: 0.1"></div>


</body>

</html>


