@extends('templents.templent')

@section('content')
<!-- ======= Search Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <a href="/" class="btn btn-secondary">
            Home</a>
        <a href="/startSearch" class="btn btn-secondary">
            Busca Única</a><hr/>

        <h1>Resultado da Pesquisa</h1>
        @if($results->isEmpty())
        <p>Registro não encontrado</p>
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

        @if ($results->hasPages())
        <div class="row">
            <div class="col-12">
                <nav aria-label="paginacao">
                    <ul class="pagination">
                        <li class="page-item{{ ($results->currentPage() == 1) ? ' disabled' : '' }}">
                            <a href="{{ $results->previousPageUrl() }}" class="page-link" aria-label="Anterior">
                                <span aria-hidden="true">Anterior</span>
                            </a>
                        </li>

                        @for ($i = 1; $i <= $results->lastPage(); $i++)
                            <li class="page-item{{ ($results->currentPage() == $i) ? ' active' : '' }}">
                                <a href="{{ $results->url($i) }}" class="page-link">{{ $i }}</a>
                            </li>
                            @endfor

                            <li
                                class="page-item{{ ($results->currentPage() == $results->lastPage()) ? ' disabled' : '' }}">
                                <a href="{{ $results->nextPageUrl() }}" class="page-link" aria-label="Próximo">
                                    <span aria-hidden="true">Próximo</span>
                                </a>
                            </li>
                    </ul>
                </nav>
            </div>
        </div>
        @endif

    </div>
</section><!-- End Contact Section -->
@endsection