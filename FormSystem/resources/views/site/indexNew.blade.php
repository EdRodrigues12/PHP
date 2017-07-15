@extends('site.templates.template1')

@section('content')

<h1>Home Page</h1>

<!--<form class="form" action="{{route('produtos.index')}}" >
	<button class="btn-primary">Product Management</button>
</form>-->
<a href="{{route('produtos.index')}}"><span class="glyphicon glyphicon-share-alt" title="Product management"></span></a>
    Product management</b>

@endsection

