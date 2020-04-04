<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed - Quem Indica</title>

<!-- área css -->
    <link rel="stylesheet" href="css/feed.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/minhaConta.css">
    <!-- <link rel="stylesheet" href="css/feedresponsivo.css"> -->

<!-- área bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!-- área ícones -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/logo_icon.svg" type="image/x-icon">
</head>

<body>

<!-- HEADER -->


    
    
<div class="grid-container">

<header>
    <?php require_once ("header_minhaConta.php"); ?>
</header>




<!-- ASIDE ESQUERDO -->

    <aside class="left">
            <div id="avatar-usuario">
            <img src="imagens/usuario.png" alt="foto teste usuário">
            </div>


            <div class="menu-lateral">
                <div class="coluna">
                <div class="nav nav-pills" id="v-pills-tab" role="tablist">
                <a class="nav-link active" id="v-pills-feed-tab" data-toggle="pill" href="feed.php" role="tab" aria-controls="v-pills-feed" aria-selected="true">Feed</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="minha_conta.php" role="tab" aria-controls="v-pills-profile" aria-selected="false">Perfil</a>
                <a class="nav-link" id="v-pills-amigos-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-amigos" aria-selected="false">Amigos</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mensagens</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Configurações</a>
                <a class="nav-link" id="v-pills-indicacoes-tab" data-toggle="pill" href="servicos.php" role="tab" aria-controls="v-pills-indicacoes" aria-selected="false">Serviços</a>
                <a class="nav-link" id="v-pills-parceiros-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-parceiros" aria-selected="false">Parceiros</a>
                </div>
                </div>

                <div class="coluna">
                <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-feed" role="tabpanel" aria-labelledby="v-pills-feed-tab"></div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
                <div class="tab-pane fade" id="v-pills-amigos" role="tabpanel" aria-labelledby="v-pills-amigos-tab"></div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"></div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"></div>
                <div class="tab-pane fade" id="v-pills-indicaces" role="tabpanel" aria-labelledby="v-pills-indicacoes-tab"></div>
                <div class="tab-pane fade" id="v-pills-parceiros" role="tabpanel" aria-labelledby="v-pills-parceiros-tab"></div>
                </div>
                </div>
            </div>
            
            <div id="explorar-hashtags">
                <h4>Hashtags</h4>
                    <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="#">#BELEZA</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">#LIVROS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">#FILMES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">#RESTAURANTE</a></li>
                    </ul>               
            </div> 
    </aside>

<!-- ASIDE DIREITO -->

    <aside class="right">
                <div class="busca">
                    <form>
                    <div class="input-group">
                    <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Pesquisar">
                    <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                    </form>
                </div>
                

                <div id="cards-servicos">
                    <h4>Serviços</h4>

                    <div class="cards-servicos">

                    <div class="card-1">
                    <img src="imagens/card-teste-servico.jpg" alt="Imagem de capa do card" class="img-thumbnail">
                    </div>

                    <div class="card-2">
                    <img src="imagens/card-teste-servico.jpg" alt="Imagem de capa do card" class="img-thumbnail">
                    </div>

                    <div class="card-3">
                    <img src="imagens/card-teste-servico.jpg" alt="Imagem de capa do card" class="img-thumbnail">
                    </div>

                    </div>
                </div>
    </aside>

<!-- ESCREVER PUBLICAÇÃO -->

        <main class="main">
                <div class="container-fluid gedf-wrapper">

                        <div class="row">

                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                        <div class="form-group">
                                        <label class="sr-only" for="message">post</label>
                                        <textarea class="form-control" id="message" rows="3" placeholder="Escreva a sua indicação"></textarea>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="btn-toolbar justify-content-between">
                                    <div class="btn-group">
                                    <button type="submit" class="btn btn-primary">compartilhar</button>
                                    </div>
                        
                                    <div class="btn-group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i></button>
                                    </div>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#"><i class="fa fa-globe"></i>Público</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-users"></i>Amigos</a>
                                    </div>
                                </div>
                            </div>

<!-- EXEMPLO POSTAGEM -->
                
                            <div class="card gedf-card">

                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                                <div class="mr-2"><img class="rounded-circle" width="45" src="../quem-indica/imagens/usuario.png" alt="">
                                                </div>
                                            <div class="ml-2">
                                                <div class="h5 m-0">@usuário
                                                </div>

                                                <div class="h7 text-muted">Nome do Usuário
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="card-body">
                                <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 10:30
                                    </div>
                                        <a class="card-link" href="#"><h5 class="card-title">Título postagem</h5></a>
                                        <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam omnis nihil, aliquam est, 
                                        voluptates officiis iure soluta
                                        alias vel odit, placeat reiciendis ut libero! Quas aliquid natus cumque quae repellendus. Lorem
                                        ipsum dolor sit amet consectetur adipisicing elit. Ipsa, excepturi. Doloremque, reprehenderit!
                                        Quos in maiores, soluta doloremque molestiae reiciendis libero expedita assumenda fuga quae.
                                        Consectetur id molestias itaque facere? Hic!
                                        </p>
                                    </div>

                                    <div class="card-footer">
                                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Curtir</a>
                                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comentar</a>
                                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartilhar indicação</a>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                </div>
        </main>

<!-- FOOTER -->
        <footer>
            <?php require_once ("footer.php");?>

        </footer>

            
</div> <!--fechamento: div.container -->


<!-- ÁREA SCRIPTS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</body>
</html>