@extends('templents.templent')

@section('content')
<!-- ======= Search Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <h1>Resultado da Pesquisa</h1>
        @if($results->isEmpty())
        <p>Registro não encontrado</p>
        <a href="/startSearch" class="btn-get-started scrollto">< Voltar</a>               
        @else
        <div class="table-responsive">
            <table class="table table-striped table-sm text-justify" style="font-size: 10px;">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">|Género</th>
                        <th scope="col">|Estado Civil</th>
                        <th scope="col">|Nascimento</th>
                        <th scope="col">|Natural</th>
                        <th scope="col">|Altura</th>
                        <th scope="col">|BI</th>
                        <th scope="col">|Emissão do BI</th>
                        <th scope="col">|Validade do BI</th>
                        <th scope="col">|Nome do Pai</th>
                        <th scope="col">|Nome da Mãe</th>
                        <th scope="col">|Residência</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $result)
                    <tr>
                        <td>{{ $result->nome }}</td>
                        <td>{{$result->sexo}}</td>
                        <td>{{$result->estado_civil}}</td>
                        <td>{{$result->data_nascimento}}</td>
                        <td>{{$result->naturalidade}}</td>
                        <td>{{$result->altura}}</td>
                        <td>{{$result->numero_bilhete}}</td>
                        <td>{{$result->data_emissao}}</td>
                        <td>{{$result->data_validade}}</td>
                        <td>{{$result->nome_pai}}</td>
                        <td>{{$result->nome_mae}}</td>
                        <td>{{$result->residencia}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</section><!-- End Contact Section -->
@endsection