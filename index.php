<?php
  $acao = 'Index';
  require_once 'service.php';
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
  <div class="container mt-3"> <!-- CONTAINER -->
    <div class="card">
      <div class="card-header">
        <nav class="navbar">
          <div class="container-fluid">
            <h1><img src="img/amazon.png" alt=""></h1>
            <form method="post" action="auth.php">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="email" placeholder="E-mail">
                </div>
                <div class="col">
                  <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-2">Entrar</button>
                </div>
              </div>
              <div class="row">
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') {?>
                  <small class="form-text text-danger">Senha e/ou email não confere</small>
                <?php } elseif (isset($_GET['login']) && $_GET['login'] == 'erro2')  { ?>
                  <small class="form-text text-danger">Você precisa fazer o login primeiro</small>
                <?php } ?>
              </div>
            </form>
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
            </tr>
          </thead>
          <tbody>
            <?php foreach($produtos as $produto) { ?>
              <tr>
                <td>
                  <a href="user.php"><img src="upload/<?php if(isset($produto['img'])) echo $produto['img']?>" alt="celular"></a>
                </td>
                <td>
                  <div><?php if(isset($produto['produto'])) echo $produto['produto']?></div>
                  <div><span class="codigo">Marca</span> <?php if(isset($produto['marca'])) echo $produto['marca']?></div>
                  <div><span class="codigo">Códgio</span> <?php if(isset($produto['codigo'])) echo $produto['codigo']?></div>
                </td>
                <td><i class="bi bi-currency-dollar"></i><span id="preco_1"><?php if(isset($produto['preco'])) echo $produto['preco']?></span></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="card-footer text-center">
        <span>&copy; Daniel Ferreira Cubo --- Projetinho CEP-ETP (CRUD)
        </span>
      </div>
    </div>
  </div> <!-- CONTAINER -->
</body>
</html>