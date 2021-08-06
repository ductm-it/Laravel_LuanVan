<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\DB;
use App\Models\Rank;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
class RecommendController extends Controller
{
    public function index(Request $request){
        $categories = $this->getCategories();
        $product = $this->getProduct();

        $ranking = Rank::where( function($query) use($request){
            return $request->product_id ?
                   $query->from('url_product_information')->where('id_url_product',$request->product_id) : '';
       })
       ->select('*');


       $selected_id = [];
       $selected_id['product_id'] = $request->product_id;

       $ranking = $ranking->orderBy('total_point','DESC')->take(1)->get();
        $viewdata = [
            'categories' => $categories,
            'product' =>$product,
            'ranking' => $ranking,
            'selected_id' => $selected_id,
            'query' => $request->query(),
        ];
        //dd($viewdata);
        return view('pages.recommend',$viewdata);
    }
    public function getCategories()
    {
        return Category::all();
    }
    public function getProduct()
    {
        return Product::all();
    }
}
