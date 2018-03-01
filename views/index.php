<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <meta charset="UTF-8">
        <title>Plantio</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="" alt="">PLANTIO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Produtos <span class="sr-only">(current)</span></a>
                </li>
            </div>
        </nav>

        <?php
            foreach($this->produtos as $produto){
                echo"
                    <div class='card' style='width: 18rem;'>
                        <img class='card-img-top' src='lib/imagens/".$produto->getImagem().".jpg' alt='Card image cap'>
                        <div class='card-body'>
                            <h5 class='card-title'>".$produto->getNome()."</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>".$produto->getCategoria()."</h6>
                            <p class='card-text'>Preço : <span>".$produto->getPreco()."</span></p>
                            <p class='card-text'>Estoque : <span>".$produto->getEstoque()."</span></p>

                            <a href='#' class='btn btn-primary'>Go somewhere</a>
                            <a href='#' class='card-link'>Card link</a>
                            <a href='#' class='card-link'>Another link</a>
                        </div>
                    </div>
                ";
            }      
        ?>


        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    </body>
</html>