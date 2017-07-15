@extends('painel.templates.template')

@section('content')

    <h1 class="title-pg">

    <a href="{{route('produtos.index')}}"><span class="glyphicon glyphicon-arrow-left" title="Back"></span>
    </a>Products: <b>{{$product->name}}</b>

    </h1>

    <p><b>Active:</b>{{$product->active}}</p>
    <p><b>Number:</b>{{$product->number}}</p>
    <p><b>Category:</b>{{$product->category}}</p>
    <p><b>Description:</b>{{$product->description}}</p>

    <hr>
     @if(isset($errors) && count($errors) > 0)
        <div class="alert-danger">
            @foreach( $errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>

    @endif

    {!! Form::open(['route' =>['produtos.destroy', $product->id], 'method'=> 'DELETE']) !!}
    	{!! Form::submit("Delete product: $product->name", ['class'=> 'btn btn-danger']) !!}
    {!! Form::close() !!}	

   


@endsection




