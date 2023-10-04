<?php
  $user_auth = false;
  $user_id = null;
  $user_email = null;


  //Recuperando dados do formulário de login
  //echo '<pre>';
  //  print_r($_POST);
  //echo '</pre>';

  $login_email = isset($_POST['email']) ? $_POST['email'] : '';
  $login_senha = isset($_POST['senha']) ? $_POST['senha'] : '';

  require_once 'conn.php';

  //Consultando o Banco de Dados
  $db = 'select * from db_amazon.tb_usuarios';
  $users = $conn->query($db)->fetchAll(PDO::FETCH_ASSOC);

  //Recuperando dados do Banco de Dados
  echo '<pre>';
    print_r($users);
  echo '</pre>';

  //Realizando a verificação de uruário com o Banco de Dados
  foreach($users as $user) {
    if($user['email'] == $login_email && $user['senha'] == $login_senha) {
      $user_auth = true;
      $user_id = $user['id'];
      $user_email = $user['email'];
    }
  }

  session_start();

  if($user_auth) {
    //echo 'autenticado';
    $_SESSION['auth'] = 'y';
    $_SESSION['id'] = $user_id;
    $_SESSION['email'] = $user_email;

    if($user_id == 1) {
      header('Location: adm.php');
    } else {
      header('Location: user.php');
    }
  } else {
    //echo 'não atenticado';
    $_SESSION['auth'] = 'n';
    header('Location: index.php?login=erro');
  }
?>