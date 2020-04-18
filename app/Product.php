<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //el modelo siempre en singular->tabla en plural
    public $fillable = ['title','image_url','description','price']; //datos que se pueden modificar

    //*** notas Formulario para actualizacion y creacion
    //estos metodos cambian la url del formulario
    //si se tiene un id manda a actualizar y si no manda a guardar
    public function url(){
        return $this->id ? 'productos.update' : 'productos.store';
    }
    // cambia de metodos del from si hay id manda PUT si no POST
    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
