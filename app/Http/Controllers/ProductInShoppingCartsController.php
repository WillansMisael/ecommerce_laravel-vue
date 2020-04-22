<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductInShoppingCartsController extends Controller
{   
    public function __contruct(){
        $this->middleware("shopping_cart");
    }
    public function store(Request $request){
        $request->shopping_cart;
    }
    public function destroy($id){
        
    }
}
