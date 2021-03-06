<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\DB;
use App\Models\Rank;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
class FilterController extends Controller
{
    public function index(Request $request){
        $categories = $this->getCategories();
        $product = $this->getProduct();


        $ranking = Rank::where( function($query) use($request){
            return $request->product_id ?
                   $query->from('url_product_information')->where('id_url_product',$request->product_id) : '';
       })
       ->with('product')
       ->paginate(10);
       //dd($ranking);

       $selected_id = [];
       $selected_id['product_id'] = $request->product_id;

        $viewdata = [
            'categories' => $categories,
            'product' =>$product,
            'ranking' => $ranking,
            'selected_id' => $selected_id,
            'query' => $request->query(),
        ];
        //dd($viewdata);
        return view('pages.filter',$viewdata);
    }

    public function compare(Request $request){
        $categories = $this->getCategories();
        $product = $this->getProduct();

        $ranking = Rank::where( function($query) use($request){
            return $request->product_id ?
                   $query->from('url_product_information')->where('id_url_product',$request->product_id) : '';
       })
       ->select('*');

       if($request->orderby)
        {
            $orderby =$request->orderby;
            switch($orderby)
            {
                case 'asc':
                    $ranking->orderBy('price','ASC');
                    break;

                case 'desc':
                    $ranking->orderBy('price','DESC');
                    break;
                case 'asc1':
                    $ranking->orderBy('quality','ASC');
                    break;

                case 'desc1':
                    $ranking->orderBy('quality','DESC');
                    break;

                case 'asc2':
                    $ranking->orderBy('logistic','ASC');
                    break;

                case 'desc2':
                    $ranking->orderBy('logistic','DESC');
                    break;
                case 'asc3':
                    $ranking->orderBy('technology','ASC');
                    break;

                case 'desc3':
                    $ranking->orderBy('technology','DESC');
                    break;
            }
        }


       $selected_id = [];
       $selected_id['product_id'] = $request->product_id;
       $ranking = $ranking->paginate(10);

        $viewdata = [
            'categories' => $categories,
            'product' =>$product,
            'ranking' => $ranking,
            'selected_id' => $selected_id,
            'query' => $request->query(),
        ];
        //dd($viewdata);
        return view('pages.compare',$viewdata);
    }

    public function products( Request $request )
    {
          $products = Product::where('id_url_category_detail', $request->get('id') )->get();
          //you can handle output in different ways, I just use a custom filled array. you may pluck data and directly output your data.
          $output = [];
          foreach( $products as $product )
          {
             $output[$product->id_url_product] = $product->name_url_product;
          }
          return $output;
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
