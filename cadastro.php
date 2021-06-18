<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    
    <title>Cadastro</title>
    
  </head>
  <body>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <div id= "login">
            <h1>Cadastro</h1>
            <form action="cadastro.php" method="POST">
                <label for="email">Nome completo:</label>
                <input type="text" name="nome" id="email" placeholder="Danilo Gomes de Medeiros" required>
                <label for="data">Data de nascimento: </label>
                <input type="date" name="data" id="data" placeholder="16/07/2002" required>
                <label for="password">Senha:</label>
                <input type="password" name="senha" id="password" placeholder="digite a sua senha" required>
                <input type="submit" value="login">
            </form>
        </div>
  </body>
</html>