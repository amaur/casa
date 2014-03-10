<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	// Informações publicas

	public function gethome()
	{
		return View::make('home');
	}

	public function gethistoria_1(){
		
		return View::make('historia/historia1');
	}

	public function gethistoria_2(){
	
		return View::make('historia/historia2');
		
	}

	public function gethistoria_3(){
		
		return View::make('historia/historia3');
	}



	public function getfoto(){
		
		return View::make('galeria/foto');
		}

	public function getvideo(){
		
		return View::make('galeria/video');
	}
public function getestru(){
	
		return View::make('galeria/estru');
}

public function getdir(){
	
		return View::make('estrutura/diretoria');
}

public function getcons(){
	
		return View::make('estrutura/conselho');
}

public function getdepart(){
	
		return View::make('estrutura/depart');
}

public function getdoc(){
		return View::make('selecao/documento');
}

public function getresult(){
		return View::make('selecao/resultado');
}

public function contatofora(){
	return View::make('message/contato');
}

public function hospede(){
	return View::make('hospede/hospede');
}

public function showlogin(){
	return View::make('login/login');
}

public function showlembrar(){
	return View::make('login/lembrar');
}



// espaço morador

public function doLogin()
	{// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);
		}
			// attempt to do the login
			if (Auth::attempt($userdata))
    			{

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return Redirect::to('conta');

			} elseif ($pass=DB::table('moradores')->where('email',Input::get('email'))->pluck('password')) {
				
				if ($pass ==md5(Input::get('password'))) {
					# code...
					$newpass = Hash::make(Input::get('password'));

					DB::table('moradores')
            		->where('email', Input::get('email'))
            		->update(array('password' => $newpass));

            		return Redirect::to('login');

				}else{
				
					return Redirect::to('login');
				}
    			 	
		}else{
			return Redirect::to('login')->with('flash_message', 'Dados incorretos!');
		}
				
}




public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('../'); // redirect the user to the login screen
	}




public function showmembro(){
	if(Auth::user()){
	return View::make('conta/membro');
	}else{
		return Redirect::to('login');
	}
}


public function getuser(){
	if(Auth::user()){
		
		
	return View::make('conta/user');

	}else{
		return Redirect::to('login');
	}
}

public function showassembleia(){
	if(Auth::user()){
	return View::make('conta/assembleia');
	}else{
		return Redirect::to('login');
	}
}

public function showcultural(){
	if(Auth::user()){
	return View::make('conta/cultural');
	}else{
		return Redirect::to('login');
	}
}

public function showdeliberativo(){
	if(Auth::user()){
	return View::make('conta/deliberativo');
	}else{
		return Redirect::to('login');
	}
}

public function showfinanceiro(){
	if(Auth::user()){
	return View::make('conta/financeiro');
	}else{
		return Redirect::to('login');
	}
}

public function showfiscal(){
	if(Auth::user()){
	return View::make('conta/fiscal');
	}else{
		return Redirect::to('login');
	}
}

public function showinfra(){
	if(Auth::user()){
	return View::make('conta/infra');
	}else{
		return Redirect::to('login');
	}
}

public function showinterno(){
	if(Auth::user()){
	return View::make('conta/interno');
	}else{
		return Redirect::to('login');
	}
}

public function showrateio(){
	if(Auth::user()){
	return View::make('conta/rateio');
	}else{
		return Redirect::to('login');
	}
}

public function showcomunica(){
	if(Auth::user()){
	return View::make('conta/contatoInterno');
	}else{
		return Redirect::to('login');
	}
}

public function showmail(){
	$contactName = Input::get('Name');
	$contactcidade = Input::get('contactcidade');
	$contactestado = Input::get('contactestado');
	$contactprof = Input::get('contactprof');
    $contactEmail = Input::get('Email');
    $contactsujet = Input::get('contactsujet');
    $contactMessage = Input::get('Message');

    $input = Input::all();


		$rules = array(
		    	
		    	'Message' => 'required|min:5|max:2000',
		    	
		    	);
		$validator = Validator::make($input, $rules);

		if ($validator->fails())
		{
		    // The given data did not pass validation
		    return Redirect::to('mailErro');
		}else{
    
    $data = array(
    'Cname'=>$contactName, 
    'cidade'=>$contactcidade,
    'estado'=>$contactestado,
    'prof'=>$contactprof,
    'Cemail'=>$contactEmail,
    'sujet'=> $contactsujet, 
    'Cmessage'=>$contactMessage
	);
  }



if (
	# code...
		Mail::send( 'emails.auth.test',$data,function($message)use ($contactEmail, $contactName,$contactsujet){
		$message->from($contactEmail, $contactName);
		$message->to('ono.amauri@gmail.com','Maurice')->subject($contactsujet);

	})){
	return Redirect::to('thanks');

}else
{


	return Redirect::to('mailErro');
}



}

}
