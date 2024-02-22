@extends('templents.templent')

@section('content')

    <h1>Search Results</h1>

    @if($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach($results as $result)
                <li>{{ $result->nome }}, natural de {{$result->naturalidade}} : {{ $result->data_emissao }} - {{ $result->data_validade }}</li>            
                <!-- Adicione mais campos conforme necessário -->
            @endforeach
        </ul>
    @endif

 @endsection