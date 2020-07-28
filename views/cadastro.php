<?php include_once './estilos.php'; ?>

<div class="container">
<div class="page-header">
    <h1><strong>Cadastrar Local</strong></h1>
</div>
<div class="row">
    <div class="col-md-12">
    <form action="/controllers/CadastroController.php" method="post" class="form-horizontal" role="form">
    
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do local visitado">
    </div>
  
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="cep">CEP</label>
        <input type="text" name="cep" onblur="pesquisacep(this.value);" class="form-control" id="cep">
        </div>

        <div class="form-group col-md-9">
            <label for="logradouro">Logrdouro</label>
            <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Nome da rua">
        </div>

        <div class="form-group col-md-8">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Apartamento, hotel, casa, etc.">
        </div>

        <div class="form-group col-md-4">
            <label for="numero">Numero</label>
            <input type="text" name="numero" class="form-control" id="numero" placeholder="Numero">
        </div>

        <div class="form-group col-md-8">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro">
        </div>

        <div class="form-group col-md-4">
        <label for="uf">Estado</label>
        <select id="uf" name="uf" class="form-control">
            <option selected>Escolher...</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
        </select>
        </div>

        <div class="form-group col-md-8">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" class="form-control" id="cidade">
        </div>

        <div class="form-group col-md-4">
            <label for="data">Data</label>
            <input class="form-control" name="data" type="date" value="<?=date('Y-m-d')?>" id="data">
        </div>

        <div class="col-sm-offset-2 col-sm-10">
            <div class="pull-right">
                <a class="btn btn-info" href="/index.php">Voltar</a>
                <button type="submit" id="enviar" class="btn btn-enviar">Cadastrar</button>
            </div>
        </div>
        
        </div>
        </form>
    </div>
</div>
</div>
<?php require_once "./scripts.php" ?>