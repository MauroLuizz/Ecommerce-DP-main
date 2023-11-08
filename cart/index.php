<?php
ob_start();
require('./sheep_core/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribuidora Portuguesa</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- topo do site -->
    <div class="header">
        <p class="logo">Distribuidora Portuguesa</p>
        <div class="cart"><i class="fa fa-shopping-cart"></i>
            <p>0</p>
        </div>
    </div>
    <!-- Fim do topo -->

    <!-- Corpo do site -->
    <div class="container">

        <!-- linha produto do site -->
        <div class="linha-produtos">

            <!--iniciar produto-->
            <div class="corpo produto"> 
                <div class="imgProduto">
                    <img src="assets/img/produto-1.jpg" alt="" class="produtoMiniatura"/>
                </div>
                <div class="titulo">
                    <p>Curso PHP</p>
                    <H2>R$ 497</H2>
                </div>
            </div>

            <!--fim produto-->


        </div>
        <!-- fim linha produto do site -->

    </div>



    <!--fim do corpo -->


</body>

</html>