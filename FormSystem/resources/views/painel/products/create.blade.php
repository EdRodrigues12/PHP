@extends("painel.templates.template")

@section('content')
    <h1 class="title-pg">Product management</h1>

    @if(isset($errors) && count($errors) > 0)
        <div class="alert-danger">
            @foreach( $errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>

    @endif

    <form class="form" method="post" action="{{route('produtos.store')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="text" name="name" placeholder="Name:" class="form-control" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label>
                <input type="checkbox" name="active" value="1">
                Active?
            </label>
        </div>
        <div class="form-group">
            <input type="text" name="number" placeholder="Number:" class="form-control" alue="{{old('number')}}">
        </div>
        <div class="form-group">
            <select name="category" class="form-control">
                <option value="">Choose the category</option>
                @foreach($category as $categor)
                    <option value="{{$categor}}">{{$categor}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <textarea type="text" name="description" placeholder="Description:"
                      class="form-control" alue="{{old('description')}}">Description</textarea>
        </div>
        <button class="btn-primary">OK</button>
    </form>



@endsection