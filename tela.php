<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body class="bg-body-tertiary">

    <div class="container text-center bg-body-tertiary">

        <div class="row">

                <div class="col-1">
                    &nbsp;
                </div>

                <div class="col bg-primary">

                        <nav class="navbar bg-dark" data-bs-theme="dark">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">Sistema de Votação</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <div class="navbar-nav">
                                        <a class="nav-link active" aria-current="page" href="index.php">Votação</a>
                                        <a class="nav-link" href="votacao.php">Resultados</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                </div>

                <div class="col-1">
            &nbsp;
          </div>
        </div>

            <div class="row">
            <div class="col-1">
              &nbsp;
              </div>
             
                <div class="col bg-white">
                  &nbsp;
                 </div>

                 <div class="col-1">
                  &nbsp;
              </div>
          </div>
          
          <div class="row">
            <div class="col-1">
              
              &nbsp;
          </div>

            <div class="col bg-white">
                <!implementando o formulario para votacao ->
                    <div bs-primary >
                    <div class="col bg-white d-flex justify-content-center">
                       <div><br>
                       <h3 class="text-start fs-3">Escolha uma opção</h3>

                       <form method="post" action="votacao.php">
                        <input type="radio" name="opcao" value="opcao1"> Opção 1<br>
                        <input type="radio" name="opcao" value="opcao2"> Opção 2<br>
                        <input type="radio" name="opcao" value="opcao3"> Opção 3<br><br>
                        <button class="btn btn-success" type="submit" name="submit" value="Votar">Votar</button>
                        
                        <!-- 
                        <input type="radio" class="btn-check" name="opcao" id="opcao1" autocomplete="off">
                        <label class="btn btn-secondary" for="opcao1">Opção 1</label>

                        <input type="radio" class="btn-check" name="opcao" id="opcao2" autocomplete="off">
                        <label class="btn btn-secondary" for="opcao2">Opção 2</label>

                        <input type="radio" class="btn-check" name="opcao" id="opcao3" autocomplete="off">
                        <label class="btn btn-secondary" for="opcao3">Opção 3</label>

                        <button class="btn btn-primary" type="submit" name="submit">Enviar Voto</button>
                        -->
                    
                    </form>  
                        <br>
                       &nbsp;
                    </div>
                </div> 
            </div>
            </div>

            <div class="col-1">
                &nbsp;
            </div>
        

        </div>
    </div>
</body>

</html>

<div class="d-flex justify-content-center">
<?php
    echo '<a href="?logout">Cancelar sessão</a>';
?>