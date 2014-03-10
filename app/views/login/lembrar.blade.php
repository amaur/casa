
<!DOCTYPE html>

<html lang="pt-br" ng-app="CEUACA || Casa do Estudante Universitário Aparício Cora de Almeida">
	<head>
		<meta charset="utf-8"/>
		<title>..:: Lembrete ::..</title>
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
				<center><h1>Lembrete de senha</h1>
				<p>Clique em <strong>Esquece minha senha </strong>para prencher o formulário</p> <br>
				<p>Senão Lembrar do seus dados favor falar com o Administrador ou o Presidente da casa</p> <br>
				<p>Obrigado..!</p>
				<br>
				 

				<a href="../" class="btn btn-default">Início</a>
				
				<a href="#lembrar" data-toggle="modal" class="btn btn-danger">Esquece minha senha</a> </center>
			</div>
		
		</div>
		
		
		<div class="modal fade" id="lembrar" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="login" class="form-horizontal" method="post">
						
					
					
						<div class=" modal-header">
							<h4>Lembrando senha</h4>
					
						</div>
							<div class="modal-body">
							
								
																			
								
									
								<div class="form-group">
									<label for="contact-email" class="col-lg-2 control-label">Email:</label>
									<div class="col-lg-10">
										<input name="email"type="email" class="form-control" id="email" placeholder="you@example.com" />
									</div>	
								
								</div>	
								
								<div class="form-group">
									<label for="password" class="col-lg-2 control-label">Número:</label>
									<div class="col-lg-10">
										<input  name="numero" type="int" class="form-control" id="numero" placeholder="numero de usuário" required/>
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
