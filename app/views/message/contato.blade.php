<!DOCTYPE html>

<html lang="pt-br" ng-app="CEUACA || Casa do Estudante Universitário Aparício Cora de Almeida">
	<head>
		<meta charset="utf-8"/>
		<title>..:: Contato ::..</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
		
		<link href="../assets/media/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="../assets/media/css/style1.css" rel="stylesheet"/>
	
	</head>
	
	<body>
		
		<div style="background-color:#87CEEB;" class="navbar  navbar-static-top">
			<div class="container">
				<a href="../" class="navbar-brand">..: CEUACA</a>
				
				
				
			</div>
		</div>
		
		<div class="container">
			
			<div class="jumbotron">
				<center><h1>Bem Vindo....!</h1>
				<p>As a best practice, we highly recommend using the  element whenever possible to ensure matching cross-browser rendering.</p> <br>
				<p>As a best practice, we highly recommend using the  element whenever possible to ensure matching cross-browser rendering.</p> <br>
				<p>As a best practice, we highly recommend using the  element whenever possible to ensure matching cross-browser rendering.</p> <br>

				<a href="../" class="btn btn-default">Inicio</a>
				<a href="#contact" data-toggle="modal" class="btn btn-info">Escrever mensagem</a> </center>
			</div>
		
		</div>
		
		
		
		<div class="modal fade" id="contact" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="contato" method="post" class="form-horizontal">
						
					
					
						<div class=" modal-header">
							<h4>Contato CEUACA</h4>
					
						</div>
							<div class="modal-body">
								
									
															
								<div class="form-group">
									<label for="Name" class="col-lg-2 control-label">Nome:</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="Name" name="Name" placeholder="Nome completo" required/>
									</div>
								</div>	
								
															
								<div class="form-group">
									<label for="contactcidade" class="col-lg-2 control-label">Cidade:</label>
									<div class="col-lg-10">
										<input type="text" name="contactcidade" class="form-control" id="contactcidade" placeholder="Sua cidade" required/>
									</div>
								</div>	
								
															
								<div class="form-group">
									<label for="contactestado" class="col-lg-2 control-label">Estado:</label>
									<div class="col-lg-10">
										<input type="text" name="contactestado" class="form-control" id="contactestado" placeholder="Seu estado" required/>
									</div>
								</div>	
								
								
								<div class="form-group">
									<label for="contactprof" class="col-lg-2 control-label">Profissão:</label>
									<div class="col-lg-10">
										<input type="work" name="contactprof" class="form-control" id="contactprof" placeholder="Estudante" required/>
									</div>	
								
								</div>
								
								
									
								<div class="form-group">
									<label for="Email" class="col-lg-2 control-label">Email:</label>
									<div class="col-lg-10">
										<input type="email" name="Email" class="form-control" id="Email" placeholder="you@example.com" required/>
									</div>	
								
								</div>	
								
															
								<div class="form-group">
									<label for="contactsujet" class="col-lg-2 control-label">Assunto:</label>
									<div class="col-lg-10">
										<input type="text" name="contactsujet" class="form-control" id="contactsujet" placeholder="O assunto" required/>
									</div>
								</div>	
									
									
								<div class="form-group">
									<label for="Message" class="col-lg-2 control-label">Mensagem:</label>
									<div class="col-lg-10">
										<textarea id="Message" name="Message" class="form-control" rows="5" placeholder="sua mensagem" required maxLength="200" data-minlength="10"></textarea>
									</div>
								</div>
								
							</div>
						
							<div class="modal-footer">
								<button class="btn btn-primary" type="submit">Enviar</button>
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
