<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\MessageBag;
use Goutte\Client;
use App\Mail\Contato;
use Validator;

class ContatoController extends Controller
{
   
   public function enviaContato(Request $request)
   {

   		try{

	   		$messages = [
				'required' => 'Todos os campos são de preenchimento obrigatório, inclusive o captcha.'   			
	   		];

	   		$validator = Validator::make($request->all(), [
			    'g-recaptcha-response' => 'required|captcha',
			    'nome' => 'required|max:50',
			    'email' => 'required|max:100',
			    'assunto' => 'required|max:100',
			    'fone'=>'max:20',
			    'mensagem' => 'required|max:1000'
			], $messages);

			if($validator->fails()) {
	            // return redirect('/contato')
	            // ->withErrors($validator)
	            // ->withInput();
	            return response()->json([
	   				'status' => 0, 
	   				'mensagem' => 'E-mail não pode ser enviado.'
	   			]);
	        }

	   		Mail::to('contato@stelaanicacio.com.br')->send(new Contato($request->all()));

	   		return response()->json([
	   			'status' => 1, 
	   			'mensagem' => 'E-mail enviado com sucesso.'
	   		]);

   		}catch(\Exception $e){
   			return response()->json([
   				'status' => 0,
   				'mensagem' => $e->getMessage()
   			]);
   		}

   		// return redirect()->route('site.contato')->with('status', 'Agradecemos o seu contato, em breve responderemos!');

   }

}
