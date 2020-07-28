console.log("Iniciou os scripts");

document.getElementById("enviar").addEventListener("click", function(event){
  var cep = document.getElementById('cep').value;
  console.log(cep);
  if(cep === ''){
    alert("Favor informar o CEP para a consulta.");
    event.preventDefault()
  }
});