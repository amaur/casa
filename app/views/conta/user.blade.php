
<?php  
	$mail=Auth::user()->email;
	$nome=DB::table('moradores')->where('email', $mail)->pluck('nome');
	
?>



<!DOCTYPE html>

<html lang="pt-br" ng-app="CEUACA || Casa do Estudante Universitário Aparício Cora de Almeida">
	<head>
		<title>CEUACA || ..:: Usuario ::..</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta charset="UTF-8">
		
		
		<link href="../assets/membro/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="../assets/media/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="../assets/media/css/style1.css" rel="stylesheet"/>
		
		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
	
	</head>
	<body>
		
	
        
		
		<div id="menu" class="navbar navbar-static-top navbar-inverse">
			
			<div class="container">
				<a class="navbar-brand" href="{{URL::to('conta')}}">..:: CEUACA</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbarHeaderCollapse">
				
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				
				</button>
				
				<div class="collapse navbar-collapse navbarHeaderCollapse">
					
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="conta" class="dropdown-toogle" data-toggle="dropdown">{{$nome}} <b class="caret"> </b></a>
						
								<ul class="dropdown-menu dropdown-menu-left">
								<li><a href="{{URL::to('logout')}}">Deconnexion</a></li>
								</ul>
						
						</li>
						
						<li ><a href="{{URL::to('comunica')}}" data-toggle="modal">Mail Interno</a></li>
					
					
					</ul>
				
				</div>
				
			</div>
				
			</div>
		</div>
		
	<p> <center><?php  Mail : print_r($mail)?> </center></p>
	
	
	<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
			<center>	<p class="navbar-text pull-center">
				End.: <strong>Rua Riachuelo 1355</strong> - Centro Histórico Porto Alegre - Rio Grande do
					Sul - Brasil <strong> CEP: 90.010-271</strong> <br>  Telefone: (51) 3224.7215
					<small>Esquina com a Borges de Medeiros</small> 
				</p>
				
				
				</center>
			</div>
		
	</div>
	
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="../assets/media/js/bootstrap.js"></script>
	
	</body>
</html>
