<html>
	<head>
		<title>ADMIN TEMPO</title>
		<link rel="shortcut icon" type="image/png" href="images/icono.png"/> <!-- ICONO URL -->
		<link rel="icon" type="image/png" href="images/icono.png"/> <!-- ICONO URL -->
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="resources/js/jquery-1.11.2.min.js" type="text/javascript"></script>
		<script src="resources/js/bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="resources/css/admin.css"/>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="container">  
			<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
				<div class="row">                
					<div class="iconmelon">
						<img src="images/logo.png"/>
					</div>
				</div>
				<div class="panel panel-default" >
					<div class="panel-heading">
						<div class="panel-title text-center">Administraci&oacute;n TEMPO</div>
					</div>
					<div class="panel-body" >
						<form name="form" id="form" class="form-horizontal" action="validar_usuario.php" method="post">   
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="user" type="text" class="form-control" required="required" name="admin" value="" placeholder="Usuario">                                        
							</div>

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" required="required" class="form-control" name="password_usuario" placeholder="Contrase&ntilde;a">
							</div>                                                                  

							<div class="form-group">
								<!-- Button -->
								<div class="col-sm-12 controls">
									<button type="submit" name="iniciar" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Iniciar Sesi&oacute;n</button>                          
								</div>
							</div>
						</form>  
					</div>                     
				</div>  
			</div>
		</div>
	</body>
</html>	