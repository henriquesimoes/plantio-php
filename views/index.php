<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <meta charset="UTF-8">
        <title>Plantio</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ustify-content-between" style="margin-bottom:50px;">
            <a class="navbar-brand" href="#"><img src="" alt="">PLANTIO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Produtos <span class="sr-only">(current)</span></a>
                </li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" name="pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
        <div class="container" id="prodlist">
            <div class="row">
            <?php
                foreach($this->produtos as $produto){
                    echo"
                        <div class='card col-3'>
                            <img class='card-img-top' src='img/".$produto->getImagem().".jpg' alt='Card image cap'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$produto->getNome()."</h5>
                                <h6 class='card-subtitle mb-2 text-muted'>".$produto->getCategoria()."</h6>
                                <p class='card-text'>Preço : <span>".$produto->getPreco()."</span></p>
                                <p class='card-text'>Estoque : <span>".$produto->getEstoque()."</span></p>
                                <a href='#' class='card-link' onclick='add2()'>Editar</a>
                                <a href='delete.php?cod=".$produto->getCodigoProd()."' class='card-link'>Excluir</a>
                            </div>
                        </div>
                    ";
                }      
            ?>

                <div class='card col-3 bg-primary' id='add' onclick="add1()">
                    <div class='card-body row'>
                        <i class=" col-12 fas fa-plus-circle fa-10x" style="color:#fff"></i>
                    </div>
                </div>
            </div>
        </div>
        <form class="col-8 offset-2" id='cadastrar' style="display:none;  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);padding:75px;" action="save.php" method="POST">
                <input type="text" name="id" style="display:none">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputNome">Nome do Produto</label>
                    <input type="text" class="form-control" id="inputNome" placeholder="Nome" name="nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Categoria</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="categoria">
                            <option selected>Escolha</option>
                            <option value="flores">Flores</option>
                            <option value="folhagem">Folhagem</option>
                            <option value="mato">Mato</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2 offset-2">
                        <label for="inputEstoque">Estoque</label>
                        <input type="number_format" class="form-control" id="inputEstoque" name="estoque">
                    </div>
                    <div class="form-group col-md-2 offset-4">
                        <label for="inputPreco">Preço unitário</label>
                        <input type="number_format" class="form-control" id="inputPreco" name="preco">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Confirmar
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="botaozinho">Cadastrar</button>      <button type="button"  class="btn btn-primary" onclick="add1()">voltar</button>
                </form>
                <form class="col-8 offset-2" id='excluir' style="display:none;  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);padding:75px;" action="save.php" method="POST">
                <input type="text" name="id" style="display:none">
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Confirmar
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="botaozinho2">Cadastrar</button>      <button type="button"  class="btn btn-primary" onclick="add1()">voltar</button>
                </form>

        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script> 
            function add1(){

                if(document.getElementById('cadastrar').style.display == "block"){
                    document.getElementById('prodlist').style.filter = "blur(0px)";
                    document.getElementById('cadastrar').style.display = "none";
                }
                else{
                    document.getElementById('prodlist').style.filter = "blur(5px)";
                document.getElementById('cadastrar').style.display="block";
                document.getElementById('cadastrar').style.backgroundColor="#fff";
                }
            }
            function add2(){

                if(document.getElementById('cadastrar').style.display == "block"){
                    document.getElementById('prodlist').style.filter = "blur(0px)";
                    document.getElementById('cadastrar').style.display = "none";
                    document.getElementById('botaozinho').innerHTML = "Editar";
                    
                }
                else{
                    document.getElementById('prodlist').style.filter = "blur(5px)";
                document.getElementById('cadastrar').style.display="block";
                document.getElementById('cadastrar').style.backgroundColor="#fff";
                }
            }
            function add3(){

                if(document.getElementById('cadastrar').style.display == "block"){
                    document.getElementById('prodlist').style.filter = "blur(0px)";
                    document.getElementById('cadastrar').style.display = "none";
                    
                }
                else{
                    document.getElementById('prodlist').style.filter = "blur(20px)";
                document.getElementById('cadastrar').style.display="block";
                document.getElementById('cadastrar').style.backgroundColor="#fff";
                }
            }
        </script>
    </body>
</html>