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
            <h3>Nome do Administrador</h3>
            <div class="btn-toolbar">
              <div class="btn-group me-2">
                <button type="submit" class="btn btn-primary">Voltar</button>
              </div>
            </div>
          </div>
        </nav>
       </div>
      <div class="card-body">
        <h3>Editar de Produto</h3>

        <label class="form-label" for="">Código</label>
        <input class="form-control" name="produto" type="text">

        <label class="form-label" for="">Produto</label>
        <input class="form-control" name="produto" type="text">
      
        <label class="form-label" for="preco">Preço</label>
        <input class="form-control" name="preco" type="text">
      
        <label class="form-label" for="vendas">Vendas</label>
        <input class="form-control" name="vendas" type="text">
      
        <label class="form-label" for="compras">Compras</label>
        <input class="form-control" name="compras" type="text">
      
        <label class="form-label" for="estoque">Estoque</label>
        <input class="form-control" name="estoque" type="text">

        <div class="text-center m-5">
          <button type="submit" class="btn btn-primary mb-2"><i class="bi bi-floppy m-2"></i><span class="m-2">Salvar</span></button>
        </div>
      </div>
      <div class="card-footer text-center">
        <span>&copy; Daniel Ferreira Cubo --- Projetinho CEP-ETP (CRUD)</span>
      </div>
    </div>
  </div> <!-- CONTAINER -->
</body>
</html>