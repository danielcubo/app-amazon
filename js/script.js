function add(operacao, produto) {
  let qtde = document.getElementById('qtde_'+ produto)
  let preco = document.getElementById('preco_'+ produto)
  let total = document.getElementById('total_'+produto)

  if(operacao == 'less' && qtde.innerHTML == 0) {
    alert('Atenção! A quantidade não pode ser menor que zero')
  } else {
    operacao == 'sum' ? qtde.innerHTML++ : qtde.innerHTML--
    total.innerHTML = Number(qtde.innerHTML * preco.innerHTML)
    totalGeral()      
  }
}

function totalGeral() {
  let soma = 0

  for(let i = 1; i < 4; i ++) {
    soma = soma + Number(document.getElementById('total_'+i).innerHTML)
  }
  document.getElementById('total_geral').innerHTML = soma
}

function editar(id) {

  alert(id)

  //criar um input para a entrada do texto
  let divProduto = document.getElementById('produto')
  let inputProduto = document.createElement('input')
  inputProduto.type = 'text'
  inputProduto.name = 'produto'
  inputProduto.className = 'form-control'
  divProduto.appendChild(inputProduto)

  let spanMarca = document.getElementById('marca')
  let inputMarca   = document.createElement('input')
  inputMarca.type = 'text'
  inputMarca.name = 'marca'
  inputMarca.className = 'form-control'
  spanMarca.appendChild(inputMarca)

  let spanPreco = document.getElementById('preco')
  let inputPreco   = document.createElement('input')
  inputPreco.type = 'text'
  inputPreco.name = 'preco'
  inputPreco.className = 'form-control'
  spanPreco.appendChild(inputPreco)

  let spanEstoque = document.getElementById('estoque')
  let inputEstoque = document.createElement('input')
  inputEstoque.type = 'text'
  inputEstoque.name = 'estoque'
  inputEstoque.className = 'form-control'
  spanEstoque.appendChild(inputEstoque)

  let spanVendas = document.getElementById('vendas')
  let inputVendas  = document.createElement('input')
  inputVendas.type = 'text'
  inputVendas.name = 'vendas'
  inputVendas.className = 'form-control'
  spanVendas.appendChild(inputVendas)

  let spanCompras = document.getElementById('compras')
  let inputCompras = document.createElement('input')
  inputCompras.type = 'text'
  inputCompras.name = 'compras'
  inputCompras.className = 'form-control'
  spanCompras.appendChild(inputCompras)

  //criar um button para envio do form
  let button = document.createElement('button')
  button.type = 'submit'
  button.className = 'btn btn-primary'

  //criar um icone para o botão
  let icone = documet.createElement('i')
  icone.className = 'bi bi-floppy'

  //Construir a Árvore de elementos
  //form.appendChild()

  

}