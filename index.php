<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script>
      $(document).ready(function(){
        $(".wish-icon i").click(function(){
          $(this).toggleClass("fa-heart fa-heart-o");
        });
      });
      
      var stars = document.querySelectorAll('.star-icon');
                  
      document.addEventListener('click', function(e){
        var classStar = e.target.classList;
        if(!classStar.contains('ativo')){
          stars.forEach(function(star){
            star.classList.remove('ativo');
          });
          classStar.add('ativo');
          console.log(e.target.getAttribute('data-avaliacao'));
        }
      });
    </script>

</head>
<body>
    <div class="topo">
      <img class="logo" src="img/dp.png">
      
        <div class="search-box">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <img src="img/icones/search.png" class="search-icon" alt="">
            </form>
        </div>
        
          <a href="minha_conta.php" style="display: grid; color: black;">
            <img id="icn" src="img/icones/172628_user_male_icon.png" alt="" style="margin-left: 20px;
            margin-top: 20px;
            height: 48px;
            width: 48px">
            <label class="text-center" style="margin-left: 15px;">Conta</label>
          </a>
        
        
          <a href="cesta_compras.php" style="display: grid; color: black;">
            <img id="icn" src="img/icones/9245770_business_store_buy_online_e_icon.png" alt="" style="margin-left: 20px;
            margin-top: 20px;
            height: 48px;
            width: 48px">
            <label style="margin-left: 15px;">Carrinho</label>
          </a>
          <div class="cart"><i class="fa fa-shopping-cart"></i>
            <p>0</p>
        </div>
          
    </div>
  


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFF112; width: 100vw;">
  <div class="dropdown">
    <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #FFF112; border: none; color:black">
      <span class="navbar-toggler-icon"></span>
      CATEGORIAS
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">PISOS E REVESTIMENTOS</a>
      <hr>
      <a class="dropdown-item" href="#">FERRAMENTAS</a>
      <hr>
      <a class="dropdown-item" href="#">ELÉTRICA</a>
      <hr>
      <a class="dropdown-item" href="#">ASSETAMENTO E REJUNTAMENTO</a>
      <hr>
      <a class="dropdown-item" href="#">BANHEIRO</a>
      <hr>
      <a class="dropdown-item" href="#">COZINHA E LAVANDERIA</a>
      <hr>
      <a class="dropdown-item" href="#">FERRAGENS</a>
      <hr>
      <a class="dropdown-item" href="#">HIDRÁULICA</a>
      <hr>
      <a class="dropdown-item" href="#">ILUMINAÇÃO</a>
      <hr>
      <a class="dropdown-item" href="#">PINTURA</a>
      <hr>
      <a class="dropdown-item" href="#">PORTAS E JANELAS</a>
    </div>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">PISOS E REVESTIMENTOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FERRAMENTAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ELÉTRICA</a>
      </li>
    </ul>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 20px;
    margin-left: 300px;
    height: 800px;
    width: 1500px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-40" src="img/caroucel/dp_resized.png" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-40" src="img/caroucel/convert_resized.webp" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-40" src="img/caroucel/materiais-de-construcao-em-curitiba8_resized.jpg" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<h3>Promoções</h3>

<div style="display: flex;">

  <div class="card">
  <form action="filtors/criar.php" method="post">
    <span class="wish-icon" style="color: red;"></span>
      <img class="imagem" src="img/furadeira_de_impacto_dwd502si-b2_710w_industrial_dwd502sib2_dewalt_53096_02_1.png" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Furadeira De Impacto Md 1/2 710W Dwd502Si-B2 220V Dewalt</label>

         
          <div class="valores">
            <label class="v_novo">R$389,00</label>
            <label class="parcelas"> 3x R$129,67 no cartão</label>
            <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho" value="">Comprar</button>
          </div>
      </div>
  </div>

  <div class="card">
  <form action="filtors/criar.php" method="post">
    <span class="wish-icon" style="color: red;"></span>
      <img class="imagem" src="img/lixadeira_angular_gws22u_7_2200w_industrial_bosch_15389_04_1.png" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Lixadeira Angular Bosch Gws22 U 06018f90e0 7'' 2200w</label>

         
          <div class="valores">
            <label class="v_novo">R$959,90</label>
            <label class="parcelas">3x R$319,96 no cartão</label>
            <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho" value="">Comprar</button>
          </div>
      </div>
  </div>

  <div class="card">
    <form action="filtors/criar.php" method="post">
    <span class="wish-icon" style="color: red;"></i></span>
      <img class="imagem" src="img/1658270-120L.png" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Betoneira 400l Prime 2cv 380v Com Proteção de Cremalheira E Kit Elétrico de Segurança 40011197 Menegotti</label>

        
          <div class="valores">
            <label class="v_novo">R$6390,00</label>
            <label class="parcelas">3x R$2130,00 no cartão </label>
            <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho" value="">Comprar</button>
          </div>
      </div>
  </div>

  <div class="card">
  <form action="filtors/criar.php" method="post">
    <span class="wish-icon" style="color: red;"></span>
      <img class="imagem" src="img/44993a7f69.webp" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Conjunto 2 Interruptores Paralelo + 1 Tomada 2P+T 10A com Placa 4x2 - Perlex</label>

          
          <div class="valores">
            <label class="v_novo">R$ 18,45</label>
            <label class="parcelas">3x R$6,15 no cartão</label>
            <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho" value="">Comprar</button>
          </div>
      </div>
  </div>

  <div class="card">
  <form action="filtors/criar.php" method="post">
    <span class="wish-icon" style="color: red;"></i></span>
      <img class="imagem" src="img/1022.png" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Carrinho Metasul Plástico Amarelo D’ Mão 3,25×8″</label>

         
          <div class="valores">
            <label class="v_novo">R$292,80</label>
            <label class="parcelas">3x R$97,60 no cartão</label>
            <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho" value="">Comprar</button>
          </div>
      </div>
  </div>

  <div class="card">
  <form action="filtors/criar.php" method="post">
    <span class="wish-icon" style="color: red;"></i></span>
      <img class="imagem" src="img/Lixa_de_Ferro_tatu__56664_std.png" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Folha Lixa Ferro # 120 K-240 Alcar Pacote Com 25 Unidades</label>

          <div class="valores">
            <label class="v_novo">R$66,99</label>
            <label class="parcelas">3x R$22,33 no cartão</label>
            <input type="hidden" name="id_produto" value="">
                    <input type="hidden" name="valor" value="">
                    <button type="submit" class="button" name="addcarrinho" value="">Comprar</button>
          </div>
      </div>
  </div>
  
<!-- barra lateral do site -->
<div class="barraLateral">

<div class="topoCarrinho">
    <p>Meu Carrinho</p>
</div>

<!-- Inicio produto carrinho -->
<div class="item-carrinho">

<div class="linha-da-imagem">
   <img src="assets/img/produto-1.jpg" alt="" class="img-carrinho">
</div>
<p> Curso php</p>
<h2>R$ 497</h2>
<form action="filtros/excluir.php" method="post">
    <input type="hidden" name="id_produto"  value="">
    <button type="submit" style="border:none; background:none;"><i class="fa fa-trash-o" ></button>

</form>
</div>


<!-- fim produto carrinho -->
<div class="item-carrinho-vazio">Seu carrinho está vazio</div>

<div class="rodape">
<h3>Total</h3>
<h2>R$ 497</h2>
</div>



</div>


<!--fim barra lateral do site -->


  </div>


    
</body>
</html>