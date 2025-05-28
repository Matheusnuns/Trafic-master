<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key;

class DashboardController extends Controller
{
    public function index(){


        $metabaseSiteUrl = 'https://metabase.mesquita.rj.gov.br';
        $metabaseSecretKey = env('METABASE_SECRET_KEY', '');

        $signer = new Sha256();
        $token = (new Builder())
        ->withClaim('resource', [
            'dashboard' => 36
        ])
        ->withClaim('params' , (object)[])
        ->getToken($signer, new Key($metabaseSecretKey));

        $iframeUrl = "{$metabaseSiteUrl}/embed/dashboard/{$token}#bordered=true&titled=true";

        $signer = new Sha256();
        $token2 = (new Builder())
        ->withClaim('resource', [
            'dashboard' => 37
        ])
        ->withClaim('params' , (object)[])
        ->getToken($signer, new Key($metabaseSecretKey));

        $iframeUrl2 = "{$metabaseSiteUrl}/embed/dashboard/{$token2}#bordered=true&titled=true";

        return view('dashboard', compact('iframeUrl', 'iframeUrl2'));
    }
}
