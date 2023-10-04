<?php
  //Conexão com o Banco de Dados
  require_once 'conn.php';

  $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

  if($acao == 'insertNewProduct') {
    //Recebendo dados do Formulário de Cadastro de Produtos
    //echo '<pre>';
    //  print_r($_FILES['imagem']);
    //echo '</pre>';
    
    //Nós vamos usar
    //echo $_FILES['imagem']['name'];
    move_uploaded_file($_FILES['imagem']['tmp_name'], 'upload/'.$_FILES['imagem']['name']);

    //values('$_FILES['imagem']['name']')

    //echo '<pre>';
    //  print_r($_POST);
    //echo '</pre>';

    $query = 'insert into db_amazon.tb_produtos (img, produto, marca, preco) values (:img, :produto, :marca, :preco)';
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':img', $_FILES['imagem']['name']);
    $stmt->bindValue(':produto', $_POST['produto']);
    $stmt->bindValue(':marca', $_POST['marca']);
    $stmt->bindValue(':preco', $_POST['preco']);
    $stmt->execute();

    header('Location: p_inserir.php?msg=sucesso');
  } elseif ($acao == 'Index') {
    //echo 'chegamos na index';
    $db = 'select codigo, img, produto, marca, preco from db_amazon.tb_produtos';
    $produtos = $conn->query($db)->fetchAll(PDO::FETCH_ASSOC);

    //Listagem dos produtos
    //echo '<pre>';
    //  print_r($produtos);
    //echo '</pre>';
  } elseif ($acao == 'User') {
    //echo 'chegamos na index user';
    $db = 'select codigo, img, produto, marca, preco from db_amazon.tb_produtos';
    $produtos = $conn->query($db)->fetchAll(PDO::FETCH_ASSOC);

    //Listagem dos produtos
    //echo '<pre>';
    //  print_r($produtos);
    //echo '</pre>';
  } elseif($acao == 'adm') {
    $db = 'select * from db_amazon.tb_produtos';
    $produtos = $conn->query($db)->fetchAll(PDO::FETCH_ASSOC);

    //Listagem dos produtos
    //echo '<pre>';
    //  print_r($produtos);
    //echo '</pre>';

  }

?>