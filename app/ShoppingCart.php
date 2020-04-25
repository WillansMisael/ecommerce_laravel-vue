<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //
    public static function findOrCreateById($shopping_cart_id){
        if ($shopping_cart_id) {
            return ShoppingCart::find($shopping_cart_id);
        }else{
            return ShoppingCart::create();
        }
    }
    public function products()
    {       
        //orm para relacionar muchos a muchos primero va la tabla 
        //con la que tiene relacion y luego la tabla que los relaciona
        return $this->belongsToMany('App\Product','product_in_shopping_carts');
    }

    public function productsCount()
    {       
        return $this->products()->count();
    }
    public function amount(){
        //calcular monto
        return $this->products()->sum("price")/100;
    }
}
