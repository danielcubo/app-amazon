<?php
  require_once 'session.php';
  
  //echo '<pre>';
  //  print_r($_SESSION);
  //echo '</Pre>';
  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Bootstrap ICONS CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Style.css-->
  <link rel="stylesheet" href="css/style.css">

  <!-- BLUNDEL POPPER E BOOTSTRAP CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <script src="js/script.js"></script>
  <link rel="icon" href="img/amazon.png">
  <title>Amazon</title>
</head>
<body>
  <div class="container"> <!-- CONTAINER -->
    <div class="card">
      <div class="card-header">
        <nav class="navbar">
          <div class="container-fluid">
            <h1><img src="img/amazon.png" alt=""></h1>
            
            <h3><i class="bi bi-cart-check m-3"></i><?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?></h3>
            <a href="user.php" class="btn btn-primary mb-2">Voltar</a>
          </div>
        </nav>
       </div>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Imagem</th>
              <th>Produto</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th>total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="img/celular.jpeg" alt="celular">
              </td>
              <td>
                <div>Celular Top</div>
                <div><span class="codigo">Códgio</span> 123456</div>
              </td>
              <td><i class="bi bi-currency-dollar"></i><span id="preco_1">1000</span></td>
              <td>
                <span class="badge bg-danger" onclick="add('less',1)"><i class="bi bi-dash"></i></span>
                <span id="qtde_1"></span>
                <span class="badge bg-success" onclick="add('sum',1)"><i class="bi bi-plus"></i></span>
              </td>
              <td><i class="bi bi-currency-dollar"></i><span id="total_1"></span></td>
            </tr>
            <tr>
              <td>
                <img src="img/notebook.jpg" alt="notebook">
              </td>
              <td>
                <div>Notebook Top</div>
                <div><span class="codigo">Códgio</span> 123456</div>
              </td>
              <td><i class="bi bi-currency-dollar"></i><span id="preco_2">1000</span></td>
              <td>
                <span class="badge bg-danger" onclick="add('less',2)"><i class="bi bi-dash"></i></span>
                <span id="qtde_2"></span>
                <span class="badge bg-success" onclick="add('sum',2)"><i class="bi bi-plus"></i></span>
              </td>
              <td><i class="bi bi-currency-dollar"></i><span id="total_2"></span></td>
            </tr>
            <tr>
              <td>
                <img src="img/pc-gamer.jpeg" alt="pc gamer">
              </td>
              <td>
                <div>PC Gamer Top</div>
                <div><span class="codigo">Códgio</span> 123456</div>
              </td>
              <td><i class="bi bi-currency-dollar"></i><span id="preco_3">1000</span></td>
              <td>
                <span class="badge bg-danger" onclick="add('less',3)"><i class="bi bi-dash"></i></span>
                <span id="qtde_3"></span>
                <span class="badge bg-success" onclick="add('sum',3)"><i class="bi bi-plus"></i></span>
              </td>
              <td><i class="bi bi-currency-dollar"></i><span id="total_3"></span></td>
            </tr>
            <tr>
              <td>
                <span>Sub-Total</span>
              </td>
              <td colspan="4"><i class="bi bi-currency-dollar"></i><span id="total_geral"></span></td>
            </tr>
          </tbody>
        </table>
        <div class="text-center">
          <a href="pay.php" class="btn btn-primary mb-2"><i class="bi bi-cash-stack m-2"></i><span class="m-2">Ir para o pagamento</span></a>
        </div>
      </div>
      <div class="card-footer text-center">
        <span>&copy; Daniel Ferreira Cubo --- Projetinho CEP-ETP (CRUD)
        </span>
      </div>
    </div>
  </div> <!-- CONTAINER -->
</body>
</html>