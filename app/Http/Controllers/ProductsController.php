<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\ProductsCollection; 

class ProductsController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except' => ['index','show']]);//estar logeado
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //muesta una coleccion del recurso
        $prodPag = Product::paginate(2);
        $products = Product::all();
        if($request->wantsJson()){
            return new ProductsCollection($products);
        }
        return view('products.index',['products' => $products,'prodPag'=> $prodPag]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // mostramos un formulario para crear recursos/productos
        $product = new Product;
        return view('products.create',['product'=>$product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // almacena en la base de datos nuevos productos /recursos
        //notas - Guardo de informacion
        //traemos los datos del formulario
        $options = [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,  
        ];

        if(Product::create($options)){
            return redirect('/productos');
        }else{
            return view('products.create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // muestra un recurso - producto
        $product = Product::find($id);

        return view('products.show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // muestra un formulario para editar un producto 
        $product = Product::find($id);
        return view('products.edit',["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //** notas----actualizacion de la base de datos
        // actualizar un producto especifico
        $product = Product::find($id);
        //recuperamos los datos a actualizar
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        // si existe datos los guardamo
        if($product->save()){
            return redirect('/');
        }else{
            return view('products.edit',['product' => $product]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //elimina un recurso/producto
        Product::destroy($id);
        return redirect('/productos');
    }
}
