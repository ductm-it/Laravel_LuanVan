<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
class CategoryController extends Controller
{
    public function index(){
        $data = DB::table('url_category_detail')
                ->get();
        $query = DB::table('url_product_information')
                ->get();
        $infor = DB::table('information_ranking_supplier')
                ->paginate(3);
        $viewdata = [
            'data' => $data,
            'query' =>$query,
            'infor' => $infor
        ];
        return view('pages.category',$viewdata);
    }

    public function getinfor(){

    }


}
