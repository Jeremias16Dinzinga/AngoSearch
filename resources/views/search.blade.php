@extends('templents.templent')

@section('content')
<!-- ======= Search Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
    <a href="/" class="btn btn-secondary">
            Home</a><hr/>
        <div class="section-title mt-5">
            <h2>Busca Única</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 mt-lg-0">
                <form action="{{ route('searchUnique') }}" method="GET" class="">
                    <div class="form-row">
                        <div class="col-md-3 form-group">
                            <label for="name">Nome:</label>
                            <input type="text" name="name" class="form-control" id="name" required
                                placeholder="Insira nome" />
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="sexo">Gênero:</label>
                            <select class="form-control" name="sexo" id="sexo">
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="data_nascimento">Data de Nascimento:</label>
                            <input type="date" name="data_nascimento" class="form-control" id="data_nascimento"
                                require />
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="naturalidade">Naturalidade:</label>
                            <input type="text" class="form-control" name="naturalidade" id="naturalidade" required
                                placeholder="Insira a sua origem" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 form-group">
                            <label for="estado_civil">Estado civil:</label>
                            <select class="form-control" name="estado_civil" id="estado_civil">
                                <option value="Solteiro">Solteiro</option>
                                <option value="Casado">Casado</option>
                                <option value="Divorciado">Divorciado</option>
                                <option value="Viúvo">Viúvo</option>
                            </select>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="nome_pai">Altura:</label>
                            <input type="text" name="altura" class="form-control" id="altura" required
                                placeholder="Insira a altura ex:1.7" />
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="nome_pai">Nome do Pai:</label>
                            <input type="text" name="nome_pai" class="form-control" id="nome_pai" required
                                placeholder="Insira o nome do Pai" />
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="nome_mae">Nome da Mãe:</label>
                            <input type="text" class="form-control" name="nome_mae" id="nome_mae" required
                                placeholder="Insira o nome da Mãe" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 form-group">
                            <label for="numero_bilhete">Nº do Bilhete:</label>
                            <input type="text" class="form-control" name="numero_bilhete" id="numero_bilhete" required
                                placeholder="Insira o nº do Bilhete" />
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="data_emissao">Data de Emissão:</label>
                            <input type="date" name="data_emissao" id="data_emissao" class="form-control" required>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="data_validade">Data de validade:</label>
                            <input type="date" name="data_validade" id="data_validade" class="form-control" required>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="provincia">Província:</label>
                            <input type="text" name="provincia" class="form-control" id="provincia" required
                                placeholder="Insira a sua província" />
                        </div>
                    </div>
                    <div class="text-center mt-4"><button type="submit"
                            class="btn get-started-btn scrollto">Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</section><!-- End Contact Section -->

@endsection