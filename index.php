<!doctype html>
<html lang="pt-BR">

<head>
    <title>QUEM INDICA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="imagens/LOGO.png" type="image/x-icon">
</head>

<body>
    <?= require_once ("header_deslog.php"); ?>

    
    <section class="banner_top">
        
            
        
            <div class="row">

                <div class="col-md-6 d-inline-block">
              
                    <img src="imagens/services.png" class="service" alt="">
                </div>

                <div class="col-md-6 d-inline text-center">
                    <div class="but text-justify">
                    
                        <h3 class="text-center" id="margem_texto"><strong>Estamos prontos para ajudar você encontrar o profissional que precisa!</strong></h3>
                        <br>
                        <p class="texto_home">&emsp;&emsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam explicabo quam neque voluptatum quidem. 
                            Eius ducimus exercitationem numquam cum, deserunt praesentium illum earum voluptates quas dolor facilis, ipsa 
                            aperiam autem!</p>
                        <p class="texto_home">&emsp;&emsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam explicabo quam neque voluptatum quidem. 
                            Eius ducimus exercitationem numquam cum, deserunt praesentium illum earum voluptates quas dolor facilis, ipsa 
                            aperiam autem!</p>

                    </div>
                </div>
            </div>

    </section>

    <section class="banner_cadastro">     
                    
        <div class="d-flex justify-content-center">
        <form class="alinha_form">
            <div class="form-row align-items-center">
                <div class="col-auto">
                <label class="sr-only" for="inlineFormInput">Nome</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Nome e sobrenome">
                </div>
                <div class="col-auto">
                <label class="sr-only" for="inlineFormInputGroup">Usuário</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="usuario">
                </div>
                </div>
                <div class="col-auto">
                <button type="submit" class="btn btn-info mb-2 btn-azul">Cadastrar</button>
                </div>
            </div>
        </form>
        </div>

    </section>

    <section class="banner_middle">
        
            
        
            <div class="row">

                <div class="col-md-6 d-inline-block">
                <div class="but text-justify">
                    
                        <h3 class="text-center" id="margem_texto"><strong>Não só de serviços e produtos que vivemos... aqui seu encontro é perfeito com cultura e lazer!</strong></h3>
                        <br>
                        <p class="texto_meio">&emsp;&emsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam explicabo quam neque voluptatum quidem. 
                            Eius ducimus exercitationem numquam cum, deserunt praesentium illum earum voluptates quas dolor facilis, ipsa 
                            aperiam autem!</p>
                        <p class="texto_meio">&emsp;&emsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam explicabo quam neque voluptatum quidem. 
                            Eius ducimus exercitationem numquam cum, deserunt praesentium illum earum voluptates quas dolor facilis, ipsa 
                            aperiam autem!</p>

                    </div>
              
                    
                </div>

                <div class="col-md-6 d-inline text-center">

                <img src="imagens/rede_social.png" class="img_rede_social" alt="">
                    
                </div>
            </div>

    </section>
<?= require_once ("footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>