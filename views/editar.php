<?php 

include_once '../models/Conexao.php';
include_once '../models/Manager.php';
include_once './estilos.php';

$manager = new Manager();
$id = $_POST['id'];

?>

<div class="container">
<div class="page-header">
    <h1><strong>Editar Local</strong></h1>
</div>
<div class="row">

    <?php foreach($manager->getLocalPorId('locais', $id) as $local): ?>

    <div class="col-md-12">
    <form action="/controllers/EditController.php" method="post" class="form-horizontal" role="form">

        <input type="hidden" value="<?=$local['id']?>" id="id" name="id">

        <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="<?=$local['nome']?>" class="form-control" id="nome" placeholder="Nome do local visitado">
    </div>
  
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="cep">CEP</label>
        <input type="text" value="<?=$local['cep']?>" name="cep" onblur="pesquisacep(this.value);" class="form-control" id="cep">
        </div>

        <div class="form-group col-md-9">
            <label for="logradouro">Logradouro</label>
            <input type="text" value="<?=$local['logradouro']?>" name="logradouro" class="form-control" id="logradouro" placeholder="Nome da rua">
        </div>

        <div class="form-group col-md-8">
            <label for="complemento">Complemento</label>
            <input type="text" value="<?=$local['complemento']?>" name="complemento" class="form-control" id="complemento" placeholder="Apartamento, hotel, casa, etc.">
        </div>

        <div class="form-group col-md-4">
            <label for="numero">Numero</label>
            <input type="text" value="<?=$local['numero']?>" name="numero" class="form-control" id="numero" placeholder="Numero">
        </div>

        <div class="form-group col-md-8">
            <label for="bairro">Bairro</label>
            <input type="text" value="<?=$local['bairro']?>" name="bairro" class="form-control" id="bairro" placeholder="Bairro">
        </div>

        <div class="form-group col-md-4">
        <label for="uf">Estado</label>
        <select id="uf" name="uf" class="form-control" value="<?=$local['uf']?>">
            <option <?=($local['uf'] == '')?'selected':''?>>Escolher...</option>
            <option value="AC" <?=($local['uf'] == 'AC')?'selected':''?> >AC</option>
            <option value="AL" <?=($local['uf'] == 'AL')?'selected':''?>>AL</option>
            <option value="AP" <?=($local['uf'] == 'AP')?'selected':''?>>AP</option>
            <option value="AM" <?=($local['uf'] == 'AM')?'selected':''?>>AM</option>
            <option value="BA" <?=($local['uf'] == 'BA')?'selected':''?>>BA</option>
            <option value="CE" <?=($local['uf'] == 'CE')?'selected':''?>>CE</option>
            <option value="DF" <?=($local['uf'] == 'DF')?'selected':''?>>DF</option>
            <option value="ES" <?=($local['uf'] == 'ES')?'selected':''?>>ES</option>
            <option value="GO" <?=($local['uf'] == 'GO')?'selected':''?>>GO</option>
            <option value="MA" <?=($local['uf'] == 'MA')?'selected':''?>>MA</option>
            <option value="MT" <?=($local['uf'] == 'MT')?'selected':''?>>MT</option>
            <option value="MS" <?=($local['uf'] == 'MS')?'selected':''?>>MS</option>
            <option value="MG" <?=($local['uf'] == 'MG')?'selected':''?>>MG</option>
            <option value="PA" <?=($local['uf'] == 'PA')?'selected':''?>>PA</option>
            <option value="PB" <?=($local['uf'] == 'PB')?'selected':''?>>PB</option>
            <option value="PR" <?=($local['uf'] == 'PR')?'selected':''?>>PR</option>
            <option value="PE" <?=($local['uf'] == 'PE')?'selected':''?>>PE</option>
            <option value="PI" <?=($local['uf'] == 'PI')?'selected':''?>>PI</option>
            <option value="RJ" <?=($local['uf'] == 'RJ')?'selected':''?>>RJ</option>
            <option value="RN" <?=($local['uf'] == 'RN')?'selected':''?>>RN</option>
            <option value="RS" <?=($local['uf'] == 'RS')?'selected':''?>>RS</option>
            <option value="RO" <?=($local['uf'] == 'RO')?'selected':''?>>RO</option>
            <option value="RR" <?=($local['uf'] == 'RR')?'selected':''?>>RR</option>
            <option value="SC" <?=($local['uf'] == 'SC')?'selected':''?>>SC</option>
            <option value="SP" <?=($local['uf'] == 'SP')?'selected':''?>>SP</option>
            <option value="SE" <?=($local['uf'] == 'SE')?'selected':''?>>SE</option>
            <option value="TO" <?=($local['uf'] == 'TO')?'selected':''?>>TO</option>
        </select>
        </div>

        <div class="form-group col-md-8">
        <label for="cidade">Cidade</label>
        <input type="text" value="<?=$local['cidade']?>" name="cidade" class="form-control" id="cidade">
        </div>

        <div class="form-group col-md-4">
            <label for="data">Data</label>
            <input class="form-control" value="<?php echo isset($local['data']) ? date('Y-m-d') : $local['data']; ?>" name="data" type="date" id="data">
        </div>

        <div class="col-sm-offset-2 col-sm-10">
            <div class="pull-right">
                <a class="btn btn-info" href="/index.php">Voltar</a>
                <button type="submit" id="enviar" class="btn btn-enviar">Editar</button>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
</div><br>
</div>
<?php require_once "./scripts.php" ?>