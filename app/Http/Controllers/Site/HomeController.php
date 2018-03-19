<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Goutte\Client;

class HomeController extends Controller
{

    public function paginaPrincipal(){
        
        $noticias = HomeController::pegaNoticias1();
        $noticias2 = HomeController::pegaNoticias2();

    	return view('pagina-principal.index', compact('noticias','noticias2'));

    }

    public function paginaContato()
    {

        $noticias = HomeController::pegaNoticias1();

        $attributes = [
            'data-theme' => 'dark',
        ];

    	return view('pagina-contato.index', compact('noticias', 'attributes'));

    }

    public function paginaConsumidor()
    {

        $noticias = HomeController::pegaNoticias1();

    	return view('pagina-direito-do-consumidor.index', compact('noticias'));

    }

    public function paginaImobiliario()
    {

        $noticias = HomeController::pegaNoticias1();

        return view('pagina-direito-imobiliario.index', compact('noticias'));

    }

    public function paginaFamilia()
    {

        $noticias = HomeController::pegaNoticias1();

        return view('pagina-direito-da-familia.index', compact('noticias'));

    }

    public function paginaSucessao()
    {

        $noticias = HomeController::pegaNoticias1();

        return view('pagina-direito-de-sucessao.index', compact('noticias'));

    }

    public function paginaEmpresarial()
    {

        $noticias = HomeController::pegaNoticias1();

        return view('pagina-direito-empresarial.index', compact('noticias'));

    }

    public function paginaTrabalhista()
    {

        $noticias = HomeController::pegaNoticias1();

        return view('pagina-direito-trabalhista.index', compact('noticias'));

    }

    public function paginaInstitucional()
    {

        $noticias = HomeController::pegaNoticias1();

        return view('pagina-institucional.index', compact('noticias'));

    }

    public function paginaAdvogados()
    {

        $noticias = HomeController::pegaNoticias1();

        return view('pagina-advogados.index', compact('noticias'));

    }


    public static function pegaNoticias1()
    {

        $client = new Client();

        $crawler = $client->request('GET','http://www.oab.org.br/');

        $data = $crawler->filter('article > time > b')->each(function ($response) {
            return $response->text();
        });

        $mes = $crawler->filter('article > time > span')->each(function ($response) {
            return $response->text();
        });

        $noticias = $crawler->filter('article > div > h4 > a')->each(function ($response) {
            return $response->text();
        });

        $links = $crawler->filter('article > div > h4 > a')->each(function ($response) {
            return $response->attr('href');
        });

        $noticias = ['noticia'=>$noticias, 'link'=>$links, 'data'=>$data, 'mes'=>$mes];

        return $noticias;

    }

    public static function pegaNoticias2()
    {

        $client = new Client();

        $crawler = $client->request('GET','http://www.oab.org.br/');

        $crawler2 = $client->request('GET','http://www.tst.jus.br/web/guest/noticias');

        $noticias2 = $crawler2->filter('.asset-abstract > h3')->each(function ($response) {
            return $response->text();
        });

        $links2 = $crawler2->filter('.asset-abstract > h3 > a')->each(function ($response) {
            return $response->attr('href');
        });

        $data = $crawler->filter('article > time > b')->each(function ($response) {
            return $response->text();
        });

        $mes = $crawler->filter('article > time > span')->each(function ($response) {
            return $response->text();
        });

        $noticias2 = ['noticia'=>$noticias2, 'link'=>$links2, 'data'=>$data, 'mes'=>$mes];

        return $noticias2;

    }
}
