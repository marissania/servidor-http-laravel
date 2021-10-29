<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\UrlNumber;

class Main extends Controller
{
    
    public function nameurl($nameurl = ''){


        $nameurl = max(min($nameurl, 99999), -99999);

       if($nameurl = preg_replace("/[^-0-9]/", "", $nameurl)){
     
            $words = new \NumberFormatter(app()->getLocale(),  \NumberFormatter::SPELLOUT);
             view('nameurl', [
                'nameurl' =>  $words->format( $nameurl ),
            ]);
             return response()->json( ['extenso:' =>  $words->format( $nameurl )], 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
             JSON_UNESCAPED_UNICODE);
        }else{
            echo 'Entrada inválida';
        }

        
    }


}