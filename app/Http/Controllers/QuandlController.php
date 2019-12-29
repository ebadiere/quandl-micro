<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class QuandlController extends Controller
{

    public function getGoldSpot(Request $request){

        $reponse = array();
        $reponse['id'] = "278c97ffadb54a5bbb93cfec5f7b5503";
        $reponse['data'] ='';

        return json_encode($reponse);

    }
}
