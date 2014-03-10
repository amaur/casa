<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//home

Route::get('/',array("as"=>"home","uses"=>"HomeController@gethome"));

// route para generalidades

$linkarray = array('historia/historia1','historia/historia2','historia/historia3');
$hisname = array( 'historia-1','historia-2','historia-3');

Route::get($hisname[0], array('as' => $linkarray[0],"uses"=>"HomeController@gethistoria_1" ));
Route::get($hisname[1], array('as' => $linkarray[1],"uses"=>"HomeController@gethistoria_2" ));
Route::get($hisname[2], array('as' => $linkarray[2],"uses"=>"HomeController@gethistoria_3" ));


$galarray = array('galeria/foto','galeria/video','galeria/estru');
$galname = array( 'fotos','videos','estrutura');

Route::get($galname[0], array('as' => $galarray[0],"uses"=>"HomeController@getfoto" ));
Route::get($galname[1], array('as' => $galarray[1],"uses"=>"HomeController@getvideo" ));
Route::get($galname[2], array('as' => $galarray[2],"uses"=>"HomeController@getestru" ));

$estruarray = array('estrutura/diretoria','estrutura/conselho','estrutura/depart');
$estruname = array( 'diretoria','conselhos','departamentos');

Route::get($estruname[0], array('as' => $estruarray[0],"uses"=>"HomeController@getdir" ));
Route::get($estruname[1], array('as' => $estruarray[1],"uses"=>"HomeController@getcons" ));
Route::get($estruname[2], array('as' => $estruarray[2],"uses"=>"HomeController@getdepart" ));

$selarray = array('selecao/documento','selecao/resultado');
$selname = array( 'documentos','resultados');
Route::get($selname[0], array('as' => $selarray[0],"uses"=>"HomeController@getdoc" ));
Route::get($selname[1], array('as' => $selarray[1],"uses"=>"HomeController@getresult" ));

Route::get("contato",array('as'=>'message/contato',"uses"=>"HomeController@contatofora"));


Route::post('contato', array('uses' => 'HomeController@showmail'));

Route::get("thanks",function(){

	return View::make('thanks');
});
Route::get("mailErro",function(){

	return View::make('mailErro');
});



Route::get("hospedagem",array('as'=>'hospede/hospede',"uses"=>"HomeController@hospede"));

//routes para loginin e post

Route::get("login",array('as'=>'login/login',"uses"=>"HomeController@showlogin"));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get("lembrar",array('as'=>'login/login',"uses"=>"HomeController@showlembrar"));



//routes para conta pessoal

Route::get("conta",array('as'=>'conta/membro',"uses"=>"HomeController@showmembro"));
// routes para informações internas da casa
Route::get("conta",array('as'=>'conta/membro',"uses"=>"HomeController@showmembro"));
Route::get("user",array('as'=>'conta/user',"uses"=>"HomeController@getuser"));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get("assembleia",array('as'=>'conta/assembleia',"uses"=>"HomeController@showassembleia"));
Route::get("cultural",array('as'=>'conta/cultural',"uses"=>"HomeController@showcultural"));
Route::get("deliberativo",array('as'=>'conta/deliberativo',"uses"=>"HomeController@showdeliberativo"));
Route::get("financeiro",array('as'=>'conta/financeiro',"uses"=>"HomeController@showfinanceiro"));
Route::get("fiscal",array('as'=>'conta/fiscal',"uses"=>"HomeController@showfiscal"));
Route::get("infra",array('as'=>'conta/infra',"uses"=>"HomeController@showinfra"));
Route::get("interno",array('as'=>'conta/interno',"uses"=>"HomeController@showinterno"));
Route::get("rateio",array('as'=>'conta/rateio',"uses"=>"HomeController@showrateio"));
Route::get("rateio",array('as'=>'conta/rateio',"uses"=>"HomeController@showrateio"));
Route::get("comunica",array('as'=>'conta/contatoInterno',"uses"=>"HomeController@showcomunica"));



