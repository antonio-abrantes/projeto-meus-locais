function limpa_formulario_cep() {
  //Limpa valores do formulário de cep.
  document.getElementById('bairro').value=("");
  document.getElementById('cidade').value=("");
  document.getElementById('uf').value=("");
  document.getElementById('logradouro').value=("");
  document.getElementById('complemento').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
  //Atualiza os campos com os valores.
  var uf = document.getElementById('uf');
  document.getElementById('bairro').value=(conteudo.bairro);
  document.getElementById('cidade').value=(conteudo.localidade);
  uf.value=(conteudo.uf);
  document.getElementById('logradouro').value=(conteudo.logradouro);
  document.getElementById('complemento').value=(conteudo.complemento);

  if(uf.value === 'MG'){
    uf.classList.add('mg-selected');
  }else{
    uf.classList.remove('mg-selected');
  }
}
else {
  //CEP não Encontrado.
  limpa_formulario_cep();
  alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

  //Expressão regular para validar o CEP.
  var validacep = /^[0-9]{8}$/;

  //Valida o formato do CEP.
  if(validacep.test(cep)) {

      //Preenche os campos com "..." enquanto consulta webservice.
      document.getElementById('bairro').value="...";
      document.getElementById('cidade').value="...";
      document.getElementById('uf').value="...";
      document.getElementById('logradouro').value="...";
      document.getElementById('complemento').value="...";

      //Cria um elemento javascript.
      var script = document.createElement('script');

      //Sincroniza com o callback.
      script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

      //Insere script no documento e carrega o conteúdo.
      document.body.appendChild(script);

  }
  else {
      //cep é inválido.
      limpa_formulario_cep();
      alert("Formato de CEP inválido.");
  }
}
else {
  //cep sem valor, limpa formulário.
  if(cep === ""){
    alert("Favor informar o CEP para a consulta.");
  }
  limpa_formulario_cep();
  }
};