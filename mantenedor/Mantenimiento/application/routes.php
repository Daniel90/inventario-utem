<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/


Route::get('/enter', function()
{
	return View::make('cuerpo.enter');
});
Route::get('/', function()
{
	return View::make('home.index');
});

Route::get('/dependencia', function()
{
	$ides = Bien::all();
	return View::make('controlBienes.dependencia')->with("ides",$ides);
});

Route::post('/dependencia', function()
{
	$historial =  new Historial;
	$bien = Bien::where('id','=', Input::get('bienid'))->first(array('id','centrocostos_id','Tipo'));
	if($bien)
	{
		$historial->bienes_id = $bien->id;
		$historial->centrocostos_id = $bien->centrocostos_id;
		$historial->Tipo = $bien->tipo;
		$historial->save();
		for($i=1;$i<=4;$i++)
		{
			if(Input::get('ant') == "centro de costo ".$i.".")
			{
				$bien->centrocostos_id = "10000".$i; 
				$bien->save();
				echo "funciono";
			}
		}	
	}
	else
		echo "no funciono";

});

Route::get('/login', function()
{
	return View::make('home.index');
});

Route::get('/inventory', function()
{
	$admins = Centrocosto::all();
	return View::make('informesConsultas.inventory')->with("admins",$admins);
});

Route::get('/altaBien', function()
{
	return View::make('controlBienes.altaBien');
});
Route::get('/bajaBien', function()
{
	return View::make('controlBienes.bajaBien');
});


Route::post('/altaBien', function()      //formulario alta bien
{
	//try
	//{
		$bien = new Bien;
		if(Input::get('codigoCentro_select') == "centro de costo 1.")
		{
			$bien->centrocostos_id = 100001;
		}
		else if(Input::get('codigoCentro_select') == "centro de costo 2.")
		{
			$bien->centrocostos_id = 100002;
		}
		else if(Input::get('codigoCentro_select') == "centro de costo 3.")
		{
			$bien->centrocostos_id = 100003;
		}
		else if(Input::get('codigoCentro_select') == "centro de costo 4.")
		{
			$bien->centrocostos_id = 100004;
		}

		$bien->idGrupo = Input::get('grupo_text');
		$bien->idSubGrupo = Input::get('subGrupo_text');
		$bien->idTipo = Input::get('tipo_text');

		$bien->Nombre = Input::get('nombre_text');
		$bien->NumeroDeFactura = Input::get('numeroFactura_text');

		if(Input::get('tipo_select') == "w")
		{
			$bien->Tipo = "w";
		}
		else if(Input::get('tipo_select') == "x")
		{
			$bien->Tipo = "x";
		}
		else if(Input::get('tipo_select') == "y")
		{
			$bien->Tipo = "y";
		}
		else if(Input::get('tipo_select') == "z")
		{
			$bien->Tipo = "z";
		}
		$bien->id = Input::get('id_text');

		$bien->Largo = Input::get('largo_text');
		$bien->Ancho = Input::get('ancho_text');
		$bien->Alto = Input::get('alto_text');
		
		if(Input::get('uMedida_select') == "mm")
		{
			$bien->UdeMedidas = "mm";
		}
		else if(Input::get('uMedida_select') == "cm")
		{
			$bien->UdeMedidas = "cm";
		}
		else if(Input::get('uMedida_select') == "mt")
		{
			$bien->UdeMedidas = "mt";
		}

		$bien->Modelo = Input::get('modelo_text');
		$bien->NumeroSerie = Input::get('numeroSerie_text');
		$bien->AñoModelo = Input::get('anoModelo');
		$bien->Marca = Input::get('marca_text');

		$bien->Folio = Input::get('folioComprobante_text');
		$bien->FechaComprobante = Input::get('fechaComprobante_text');
		$bien->FechaCompra = Input::get('fechaCompra_text');
		$bien->VidaUtil = Input::get('vidaUtil_text');
		$bien->NumeroDeUnidades = Input::get('NumUnidades_text');
		$bien->ValorUnitario = Input::get('valorUnitario_text');
		$bien->CuentaDeMayor = Input::get('cuentaMayor_text');
		$bien->ValorTotal = Input::get('valorTotal_text');
		$bien->save();
		return View::make('cuerpo.index');
	//}
	//catch(Exception $e)
	//{
		//return View::make('controlBienes.altaBien');
	//}
});

//logica baja de bien
Route::post('/bajaBien', function(){
	
		$bajaPrimeros = Bien::where('id','=', Input::get('ninventario') )->first(array('id','centrocostos_id','idGrupo','idSubGrupo','idTipo','Tipo','Nombre','Modelo','Marca','NumeroSerie','CuentaDeMayor'));
		$bajabien = new Bajabien;

		if($bajaPrimeros)//significa que el bien existe y sera dado de baja
		{
			$bajabien->centrocostos_id = $bajaPrimeros->centrocostos_id;
			$bajabien->bienes_id = $bajaPrimeros->id;
			$bajabien->idGrupo = $bajaPrimeros->idgrupo;
			$bajabien->idSubGrupo = $bajaPrimeros->idsubgrupo;
			$bajabien->idTipo = $bajaPrimeros->idtipo;
			$bajabien->Tipo = $bajaPrimeros->tipo;
			$bajabien->Nombre = $bajaPrimeros->nombre;
			$bajabien->Modelo = $bajaPrimeros->modelo;
			$bajabien->Marca = $bajaPrimeros->marca;
			$bajabien->NumeroSerie = $bajaPrimeros->numeroserie;
			$bajabien->CuentaDeMayor = $bajaPrimeros->cuentademayor;

			$bajabien->NumeroDocumento = Input::get('ndocumento');
			$bajabien->FechaDocumento = Input::get('fechadocumento');
			$bajabien->DecretoBaja = Input::get('decretobaja');
			$bajabien->FechaDecreto = Input::get('fechadecreto');

			if(Input::get('radio') == "opcion_1")
				$bajabien->TipoDocumento = "OFICIO";
			else if(Input::get('radio') == "opcion_2")
				$bajabien->TipoDocumento = "RESOLUCION";
			else if(Input::get('radio') == "opcion_3")
				$bajabien->TipoDocumento = "MEMORANDA";
			else if(Input::get('radio') == "opcion_4")
				$bajabien->TipoDocumento = "OTRO";

			$bajabien->MotivoBaja = Input::get('motivodelabaja'); 
			$bajabien->ValorActualBien = Input::get('valoractualdelbien');
			$bajabien->Depreciacion = Input::get('depreciacion');
			$bajabien->ValordeBaja = Input::get('valordelabaja');
			$bajabien->Observaciones = Input::get('observaciones');

			$bajabien->save();
			$id = Input::get('ninventario');
			$eliminar = Bien::find($id)->delete();
			echo "el bien fue dado de baja satisfactoriamente";


		}
		else
			echo "no se puede dar de baja porque no existe el bien";
});


Route::post('/login', function()   //para autentificar un login
{
	$usuario = Input::get('usuario');
	$password = Input::get('pass');
	$datos = array("username"=>$usuario,"password"=>$password);
	if (Auth::attempt($datos)) 
	{
		return Redirect::to('/cuerpo');
	}
	else
	{
		return Redirect::to('/')->with('login_errors',true);
	}
});

Route::get('/cuerpo', array('before' => 'auth', function()
{
	return View::make('cuerpo.index');   //No se ejecutara hasta que no pase la autentificacion
}));
Route::get('/altaBien', array('before' => 'auth', function()
{
	return View::make('controlBienes.altaBien');   //No se ejecutara hasta que no pase la autentificacion
}));

Route::get('logout', function()
{
	Auth::logout();
	return Redirect::to('/');
});



/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application. The exception object
| that is captured during execution is then passed to the 500 listener.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});