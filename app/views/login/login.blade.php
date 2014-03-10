

<!DOCTYPE html>

<html lang="pt-br" ng-app="CEUACA || Casa do Estudante Universitário Aparício Cora de Almeida">
	<head>
		<meta charset="utf-8"/>
		<title>..:: Login ::..</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
		
		<link href="../assets/media/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="../assets/media/css/style1.css" rel="stylesheet"/>
	
	</head>
	
	<body>
		
		<div style="background-color:#87CEEB;" class="navbar  navbar-static-top">
			<div class="container">
				<a href="../" class="navbar-brand">..:: CEUACA</a>
				
				
				
			</div>
		</div>
		
		


		
  

		<div class="container">
			
			<div class="jumbotron">
				<center><h1>Bem Vindo....!</h1>
				<p>As a best practice, we highly recommend using the  element whenever possible to ensure matching cross-browser rendering.</p> <br>
				<p>As a best practice, we highly recommend using the  element whenever possible to ensure matching cross-browser rendering.</p> <br>
				<p>As a best practice, we highly recommend using the  element whenever possible to ensure matching cross-browser rendering.</p> <br>

				<a href="../" class="btn btn-default">Inicio</a>
				<a href="#contact" data-toggle="modal" class="btn btn-info">Acessar conta</a> 
				<a href="lembrar"  class="btn btn-danger">Lembrar senha</a> 
				
			</div>
		
		</div>
		
		
		
		<div class="modal fade" id="contact" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="login" class="form-horizontal" method="post">
						
					
					
						<div class=" modal-header">
							<h4>Espaço Morador</h4>
					
						</div>
							<div class="modal-body">
							
								
																			
								
									
								<div class="form-group">
									<label for="contact-email" class="col-lg-2 control-label">Email:</label>
									<div class="col-lg-10">
										<input name="email"type="email" class="form-control" id="email" placeholder="you@example.com" />
									</div>	
								
								</div>	
								
								<div class="form-group">
									<label for="password" class="col-lg-2 control-label">Password:</label>
									<div class="col-lg-10">
										<input  name="password" type="password" class="form-control" id="password" placeholder="your password" required/>
									</div>	
								
								</div>	
									
								
								
							</div>
						
							<div class="modal-footer">
								<button class="btn btn-primary" type="submit" value="">Enviar</button>
								<button class="btn btn-warning" data-dismiss="modal">Cancelar</button>
							</div>
					</form>
				</div>
			</div>
		</div>
		




		
		
		
		
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../assets/media/js/bootstrap.js"></script>
	</body>




</html>
