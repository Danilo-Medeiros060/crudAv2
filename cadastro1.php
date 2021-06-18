<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <title>Cadastro</title>
    
  </head>
  <body>
        <?php
        include "conexao.php";

        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO `pessoas`(`nome`, `data`, `senha`) VALUES ('$nome','$data','$senha')";

          if (mysqli_query($conn, $sql)) {
         mensagem("<center> $nome cadastrado com sucesso! </center>", 'success');
        } else {
            mensagem("$nome NÃO cadastrado", 'danger');
        }
      ?>
  <center> <a href="index.php" class="btn btn-primary"> voltar </a> </center>
  </body>
</html>