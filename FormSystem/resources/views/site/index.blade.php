
@extends('site.templates.template1')

@section('content')
<h1>Home Page</h1>
{{$xss}}

    @if($var1 == '123')
    <p>É igual</p>

    @else
    <p>É diferente</p>
    @endif

    @unless($var1 == '123')
    <p>Não é igual</p>
    @endunless

    @for($i = 0; $i < 10; $i++)
        <p>Valor: {{$i}}</p>
    @endfor

    @if(count($array) > 0)
    @foreach($array as $array1 )
    <p>Valor do forEach: {{$array1}}</p>
    @endforeach
    @else
        <p>Não existe itens para serem impressos </p>
    @endif
{{--
    @forelse($array as $array1 )
        <p>Valor do forEach: {{$array1}}</p>
    @empty
        <p>Não existe itens para serem impressos </p>
    @endforelse
    --}}
@endsection

@push('scripts')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endpush