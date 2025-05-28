<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $metabaseSiteUrl = 'https://metabase.mesquita.rj.gov.br';
        $metabaseSecretKey = env('METABASE_SECRET_KEY', '');
        
        $signer = new Sha256();
        $token = (new Builder())
        ->withClaim('resource', [
            'dashboard' => 12
        ])
        ->withClaim('params' , (object)[])
        ->getToken($signer, new Key($metabaseSecretKey));

        $iframeUrl = "{$metabaseSiteUrl}/embed/dashboard/{$token}#bordered=true&titled=true";


        return view('home', compact('iframeUrl'));
    }
}
