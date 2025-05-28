<?php

use Illuminate\Support\Facades\Auth;

use App\Models\Agente;


if(!function_exists('retiraMascaraCPF')) {
    function retiraMascaraCPF($cpf) {
        $cpf = trim($cpf);
        $cpf = str_replace(".", "", $cpf);
        $cpf = str_replace("-", "", $cpf);
        return $cpf;
    }
}


if(!function_exists('agenteLogado'))
{
    function agenteLogado() {
        $agente = Agente::with('usuario')->where('user_id','=',Auth::user()->id)->first();
        return $agente;
    }
}

if (! function_exists('pegaValorEnum')) {
   function pegaValorEnum($table, $column) {
      $type = DB::select(DB::raw("SHOW COLUMNS FROM $table WHERE Field = '{$column}'"))[0]->Type ;
         preg_match('/^enum\((.*)\)$/', $type, $matches);
         $enum = array();
         foreach( explode(',', $matches[1]) as $value )
         {
            $v = trim( $value, "'" );
            $enum[] = $v;
         } 
         
      return $enum;
   }
}
