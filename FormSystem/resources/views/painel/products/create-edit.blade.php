@extends("painel.templates.template")

@section('content')
    <h1 class="title-pg">
    <a href="{{route('produtos.index')}}"><span class="glyphicon glyphicon-arrow-left" title="Back"></span></a>
    Product management: <b>{{$product->name or 'New Product'}}</b>

    </h1>

    @if(isset($errors) && count($errors) > 0)
        <div class="alert-danger">
            @foreach( $errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>

    @endif
    @if(isset($product))
        <form class="form" method="post" action="{{route('produtos.update', $product->id)}}">
        {!! method_field('PUT')!!}
    @endif
    <form class="form" method="post" action="{{route('produtos.store')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="text" name="name" placeholder="Name:" class="form-control" value="{{$product->name or old('name')}}">
        </div>
        <div class="form-group">
            <label>
                <input type="checkbox" name="active" value="1" @if(isset($product) && $product->active == '1') checked @endif>
                Active?
            </label>
        </div>
        <div class="form-group">
            <input type="text" name="number" placeholder="Number:" class="form-control" value="{{$product->number or old('number')}}">
        </div>
        <div class="form-group">
            <select name="category" class="form-control">
                <option value="">Choose the category</option>
                @foreach($category as $categor)
                    <option value="{{$categor}}"
                            @if(isset($product) && $product->category == $categor)
                                selected
                            @endif
                    >{{$categor}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <textarea type="text" name="description" placeholder="Description:"
                      class="form-control">{{$product->description or old('description')}}</textarea>
        </div>
        <button class="btn-primary">OK</button>
    </form>



@endsection