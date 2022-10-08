<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Curriculo</title>
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Curriculo</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Cadastrar</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php 
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include("novo-curriculo.php");
                        break;
                        case "listar": 
                            include("listar-curriculo.php");
                        break;
                        case "salvar":
                            include("salvar-curriculo.php");
                        break;
                        case "editar":
                            include("editar-curriculo.php");
                        break;
                        default:
                            print "
                                <h3>Seja bem vindo!</h3>
                                <br>
                                <hr>
                                <br>
                                <p>
                                    Pagina web desenvolvida para um trabalho de redes de computadores, pelo aluno Fernando. 
                                    O objetivo é criar uma aplicação com um crud onde o usuario ira conseguir manipular seu 
                                    curriculo de forma objetiva.
                                </p>
                                <br>
                                <hr>
                                <br>
                                <h5>Integrantes do projeto</h5>
                                <br>
                                <p>
                                    Alan Candiotto
                                    <br>
                                    Fernando Hasckel
                                    <br>
                                    Otavio Augusto
                                </p>

                            ";
                    }

                ?>
            </div>
        </div>
    </div>

    <script src="bootstrap.bundle.min.js"></script>

  </body>
</html>