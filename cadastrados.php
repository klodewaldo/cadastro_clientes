<?php
include "app/conexao.php";
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand " href="index.php"> <strong>cadastrados</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrados.php">cadastrados</a>
                    </li>
            </div>
    </div>
    <div>

        <body style="background-image: linear-gradient(170deg, #a76af2 0, #8756e4 25%, #6242d4 50%, #302fc5 75%, #0021b7 100%);">
            <div class="card">

                <div class="table-responsive">
                    <table class="table v-middle">
                        <tr class="bg-light" style="height: 5rem;">
                            <th class="border-top-0" style="text-align: center; padding: 8px;">Nome <br>
                                <?php


                                $sql = "SELECT cli_nome FROM clientes";
                                $result = mysqli_query($conn,  $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo  $row["cli_nome"] .  "<br>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </th>
                            <th class="border-top-0" style="text-align: center; padding: 8px;">data de nascimento <br>
                                <?php


                                $sql = "SELECT cli_nasc FROM clientes";
                                $result = mysqli_query($conn,  $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo  $row["cli_nasc"] .  "<br>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>




                            </th>
                            <th class="border-top-0" style="text-align: center; padding: 8px;">profissão <br>
                                <?php


                                $sql = "SELECT cli_prof FROM clientes";
                                $result = mysqli_query($conn,  $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo  $row["cli_prof"] .  "<br>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?></th>

                            <th class="border-top-0">
                                <form method="POST">
                                    <div class="search-div" style="font-size: 15px;">



                                </form>

                </div>




            </div>

            <a class="textdecoration25" href="index.php">Voltar</a>
        </body>

</html>