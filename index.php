<?php
include 'app/conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CADASTRO DE CLIENTES</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="background-color:powderblue;">
    <div>
    <nav class=" menu - navbar navbar-expand-lg navbar-light bg-light">
        <a class=" menu - navbar-brand " href="index.php">cadastro de clientes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastrados.php">cadastrados</a>
                </li>
          
                
             
        </div>
        </div>

        <section class="container">

            <section class="container">
                <section class="row">
                    <section class="col-12 col-lg-12 mt-5 p-3 bg-light border rounded shadow  ">
                        <form name="for_cli" action="app/cadastrar.php" method="post" enctype="multipart/form-data">
                            <label>digite seu nome:</label>
                            <input class="form-control" type="text" name="cli_nome" />
                            <label>data de nascimento</label>
                            <input type="date" name="cli_nasc">
                            <label>digite sua profissão</label>
                            <input type="text" name="cli_prof">
                            <br> <br>
                            <input type="submit" value="Cadastrar" />
                        </form>

                    </section>
                </section>
            </section>
            <hr>
        </section>

</body>

</html>