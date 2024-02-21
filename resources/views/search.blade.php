<form action="{{ route('search') }}" method="GET">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="numero_bilhete" placeholder="Nº do Bilhete">
    <input type="text" name="data_nascimento" placeholder="Data de Nascimento">
    <!-- Adicione inputs para os outros campos da tabela -->

    <input type="date" name="data_emissao_inicio" placeholder="Data de Emissão (De)">
    <input type="date" name="data_emissao_fim" placeholder="Data de Emissão (Até)">
    <!-- Adicione inputs para os outros campos de data -->

    <button type="submit">Pesquisar</button>
</form>
