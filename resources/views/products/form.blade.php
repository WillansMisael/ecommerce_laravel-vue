{!! Form::open(['route' => [$product->url(),$product->id],'method' => $product->method(),'class' => 'app-form']) !!}
    <div>
        {!! Form::label('title', 'Titulo del producto form.blade') !!}
        {!! Form::text('title',$product->title, ['class' => 'form-control']) !!}
    </div>

    <div>
        {!! Form::label('description', 'Descripcion del producto') !!}
        {!! Form::textarea('description',$product->description, ['class' => 'form-control']) !!}
    </div>

    <div>
        {!! Form::label('price', 'Titulo del producto') !!}
        {!! Form::number('price',$product->price, ['class' => 'form-control']) !!}
    </div>

    <div class="">
        <input type="submit" value="Guardar" name="Guardar" class="btn btn-primary">
    </div>
{!! Form::close() !!}