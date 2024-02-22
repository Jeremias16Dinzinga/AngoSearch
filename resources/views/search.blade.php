@extends('templents.templent')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        
        <div class="section-title mt-5">
            <h2>Busca Única</h2>
        </div>

        <div class="row">

            <div class="col-lg-12 mt-lg-0">

                <form action="{{ route('search') }}" method="GET" class="">
                    <div class="form-row">
                        <div class="col-md-1 form-group">
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nome"
                                data-rule="minlen:4" data-msg="Porfavor insera nome!" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" name="numero_bilhete" id="numero_bilhete"
                                placeholder="Nº do Bilhete" data-rule="minlen:12"
                                data-msg="Porfavor insera nº de bilhete!" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" name="data_nascimento" class="form-control" id="data_nascimento"
                                placeholder="Data de Nascimento" data-rule="minlen:10"
                                data-msg="Porfavor insira data!" />
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-1 form-group">
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" name="naturalidade" id="naturalidade"
                                placeholder="Natural" data-rule="minlen:3" data-msg="Porfavor insera nº de bilhete!" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="date" name="data_emissao_inicio" id="data_emissao_inicio" class="form-control"
                                placeholder="Data de Emissão (De)" data-msg="Porfavor insira data de emissão do BI!">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="date" name="data_emissao_fim" id="data_emissao_fim" class="form-control"
                                placeholder="Data de Emissão (Até)" data-msg="Porfavor insira data de validade do BI!">
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="mb-3">

                    </div>
                    <div class="text-center"><button type="submit"
                            class="btn get-started-btn scrollto">Pesquisar</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

@endsection