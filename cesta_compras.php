<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_compra.css">
    <title>Minha cesta</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<?php 
    include("logica-usuario.php");

    
    if(isset($_SESSION["success"])) { ?>
        <p class="alert-success"><?=$_SESSION["success"]?></p>
    <?php }

    unset($_SESSION["success"]);

    if(isset($_SESSION["danger"])) { ?>
        <p class="alert-danger"><?=$_SESSION["danger"]?></p>
    <?php } ?>

    <?php
    unset($_SESSION["danger"]); //não mostrar o alerta de "não poder acessar" a pagina home.

    if(usuarioEstaLogado()){
    ?>

    <div class="topo">
        <a href="index.php">
            <img class="logo" src="img/dp.png">   
        </a>
         
    </div>
    <label class="txt_inicio">Minha cesta</label>

    <div class="corpo">
        <div class="prod">
            <div class="titulo">
                <label class="txt_titulo" style="margin-left: 20px;">Produto</label>
                <label class="txt_titulo" style="margin-left: 400px;">Quantidade</label>
                <label class="txt_titulo" style="margin-left: 100px;">Valor Unitário</label>
                <label class="txt_titulo" style="margin-left: 100px;">Total</label>
            </div>
            <hr class="linha">
            <div class="produtos">
                <img src="" alt="" class="img_compra">
                <label style="margin-left: 20px;">Nome do Produto</label>
                <div class="input-container">
                    <button id="decrement">-</button>
                    <input type="number" id="meu-input" value="0" min="0" max="100">
                    <button id="increment">+</button>
                </div>
                <label style="position: absolute; margin-left: 720px;">R$ XX,XX</label>
                <label style="position: absolute; margin-left: 900px;">R$ XX,XX</label>                       
            </div>
            <hr class="linha"> 
        </div>
        <div class="compra">
            <label class="txt_titulo2" style="margin-left: 10px;">SUBTOTAL</label>
            <label class="txt_titulo2" style="margin-left: 100px;">R$ XX,XX</label>

            <div class="cep">
                <input type="number" class="cep_txt" placeholder="Digite seu CEP">
                <button class="btn3" >CALCULAR</button>
            </div>
            <a href="https://buscacepinter.correios.com.br/app/endereco/index.php" style="margin-left: 20px;" target="_blank">Não sabe seu CEP?</a>
            <br>

            <label for="" style="margin-top: 50px; margin-left: 10px;">Cupom de desconto</label>
            <div class="cep" style="margin-top: 0; ">
                <input type="text" class="cep_txt" placeholder="">
                <button class="btn3" >CALCULAR</button>
            </div>
            
            
            
            <label class="total" style="margin-left: 10px;">TOTAL</label>
            <label class="total" style="margin-left: 100px;">R$ XX,XX</label>
            <label class="" style="margin-left: 10px;">Frete</label>
            <label class="" style="margin-left: 145px;">R$ XX,XX</label>

            <input type="button" class="btn2" value="FINALIZAR COMPRA">
            <a class="btn1" type="button" href="">CONTINUAR COMPRANDO</a>
            
            


        </div>

    </div>

    <?php }
    else { 
        header('Location: login.php');
    exit();

        ?>

    <?php } ?>

    
</body>
<script>
        const input = document.getElementById("meu-input");
        const decrementButton = document.getElementById("decrement");
        const incrementButton = document.getElementById("increment");

        decrementButton.addEventListener("click", function () {
            if (parseInt(input.value) > parseInt(input.min)) {
                input.value = parseInt(input.value) - 1;
            }
        });

        incrementButton.addEventListener("click", function () {
            if (parseInt(input.value) < parseInt(input.max)) {
                input.value = parseInt(input.value) + 1;
            }
        });
    </script>
</html>