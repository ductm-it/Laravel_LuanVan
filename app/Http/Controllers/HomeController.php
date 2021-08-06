<?php

namespace App\Http\Controllers;
use App\Models\Rank;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $ranking = Rank::select('name_supplier')
        ->groupBy('name_supplier')
        ->havingRaw('count(*) > 1')
        ->orderBy('total_point', 'DESC')
        ->take(10)
        ->get();
        $viewdata = [
            'ranking' => $ranking
        ];
        //dd($viewdata);
        return view('pages.home',$viewdata);
    }
}
