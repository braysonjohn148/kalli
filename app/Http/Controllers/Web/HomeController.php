<?php

namespace App\Http\Controllers\Web;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class HomeController extends BaseController
{ 

    public function index(){
          $categories = json_decode(file_get_contents('https://portal.kalli.co.tz/api/category-products' ), false);
          // $data = json_decode('{}');
          // $data->categories = $categories;

          $cart = Session::get('cart');
          $categories->cart = $cart;  

          $random_products = json_decode(file_get_contents('https://portal.kalli.co.tz/api/products' ), false);
         $collection = collect($random_products); 
         $categories->new_arrivals = $collection->random(8);

          // return $categories;
      //   $data = '{"categories": [
      //         {"id": 0,"name": "Hair","products": [
      //                                    {"id": 101,"name": "Peruvian","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"},
      //                                    {"id": 102,"name": "Brazillian","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"},
      //                                    {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"},
      //                                    {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}, 
      //                                    {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}, 
      //                                    {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}, 
      //                                    {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}, 
      //                                    {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}, 
      //                                    {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}, 
      //                                    {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}
      //                                   ]
      //         },
      //         {"id": 1,"name": "Cosmetics","products": [
      //                                   {"id": 101,"name": "Mark Liptstick","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"},
      //                                   {"id": 102,"name": "Nivea For men","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"},
      //                                   {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}
      //                                   ]
      //           },
      //           {"id": 2,"name": "Luxury Brands","products": [
      //                                   {"id": 101,"name": "Smartphone","price":"499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"},
      //                                   {"id": 102,"name": "Laptop","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"},
      //                                   {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}
      //                                   ]
      //           }
      //       ],
      //       "new_arrivals": [{"id": 101,"name": "Peruvian","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"},
      //                                      {"id": 102,"name": "Brazillian","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"},
      //                                      {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"},
      //                                      {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"},  
      //                                      {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}, 
      //                                      {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}, 
      //                                      {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}, 
      //                                      {"id": 103,"name": "Headphones","price": "499.99 TZS","image": "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"}
      //                                     ] 
      //   }';
      $data = $categories;
 
        return view('index', compact('data', 'random_products'));  
    }

    public function product($id){  
        $product = json_decode(file_get_contents('https://portal.kalli.co.tz/api/products/details/'.$id ), false);

        $random_products = json_decode(file_get_contents('https://portal.kalli.co.tz/api/products' ), false);
        $collection = collect($random_products); 
        $random_products = $collection->random(5);

        $cart = Session::get('cart');

      //   unset($cart[0]);
      //   Session::put('cart', $cart);

      //   return $cart ;

      //   return $cart;
      //   $data = '{"cart":[
      //          {
      //             "id":101,
      //             "name":"Dolce & Gabana Perfume",
      //             "quantity": 3,
      //             "price":40990.99,
      //             "original_price":"50000",
      //             "views":9,
      //             "remaining":31,
      //             "vendor":"Banita Kariakoo",
      //             "colors":[
      //                "red",
      //                "green",
      //                "blue"
      //             ],
      //             "sizes":[
      //                "Small",
      //                "Medium",
      //                "Large"
      //             ],
      //             "description":"Wearing Size XS TallAnd without further ado, we give you our finest Shopify Theme! It is a subtle, complex and yet an extremely easy to use template for anyone, who wants to create own website in ANY area of expertise.",
      //             "images":[
      //                "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp",
      //                "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp",
      //                "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp",
      //                "https://big-skins.com/frontend/foxic-html-demo/images/skins/fashion/products/product-01-1.webp"
      //             ]
      //          }
      //       ]
      //    }';
      $data = json_decode('{}'); 
      $data->cart = $cart;  
        return view('product', compact('product', 'data', 'random_products'));  
    }

    public function checkout() {  
      $carts = Session::get('cart');

      return view('checkout', compact('carts'));  
    }

    public function place_order(Request $request) {  
      return $request->all();
    }


    public function add_to_card($product_id) {  
      
      $product = json_decode(file_get_contents('https://portal.kalli.co.tz/api/products/details/'.$product_id ), false);
 
      $cart = Session::get('cart');
        
      $cart[] = $product;

      Session::put('cart', $cart);
      //      Session::flash('success','Successfully added to card');
      //      //dd(Session::get('cart'));
      //   return redirect()->back();
      return response()->json(['message' => "Added"], 200); 
    } 

   //  public function deleteCart($id)
   //  {
   //      $cart = Session::get('cart');
   //      unset($cart[$id]);
   //      Session::put('cart', $cart);
   //      return redirect()->back();
   //  }
}
// 