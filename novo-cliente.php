<h1> Novo Cliente </h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome: </label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone: </label>
        <input type="number" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail: </label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento: </label>
        <input type="date" name="data" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>