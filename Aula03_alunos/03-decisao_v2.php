<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Condicionais PHP</title>
</head>
<body>
    <h1 class="destaqueP">Estruturas de Controle Condicional</h1>
    <hr>
<!-- ___________________________________________________________________ -->
    <h2 class="destaque">SE Simples</h2>

    <?php
        $numero = 1;
        if ($numero >1) 
    ?>

        <p><?-$numero?>é maior que 1</p>
    <?php

    ?>
<hr>
<!-- ___________________________________________________________________ -->
    <h2 class="destaque">SE Composta</h2>

<?php
    $produto = "Iphone 15 Pro Max";
    $qtdEmEstoque = 0; 
    $qtdCritica = 14; 
?>

    <h3><?=$produto?></h3>
<?php

// Verifica se a quantidade em estoque é menor que a quantidade crítica
     if ($qtdEmEstoque < $qtdCritica) {
        echo "<h3>O produto $produto está em estoque crítico!</h3>";
    } else {
        echo "<h3>O produto $produto está em estoque.</h3>";
}

?>

?>


<hr>
<!-- ___________________________________________________________________ -->
    <h2 class="destaque">Encadeada</h2>

     <!-- Cardápio digital
    1 -> Pastel
    2 -> Pizza
    3 -> Esfiha
    x -> Opção inválida  -->
<?php
    $opcao = 3; 

    if($opcao === 1) { 
?>
        <p>Pastel</p>
<?php
    } elseif($opcao === 2) {
?>
        <p>Pizza</p>
<?php
    } elseif($opcao === 3) {
?>
        <p>Esfiha</p>
<?php
    } else {
?>
        <p>Opção inválida!</p>
<?php
    } 
/*___________________________________________________________________ */
    // Refatorada (Melhorada)
    $opcao = 1; // comece com qualquer valor 

    $opcao = 3;
    
    if ($opcao === 1) {
        $prato = "Pastel";
    } elseif ($opcao === 2) {
        $prato = "Pizza";
    } elseif ($opcao === 3) {
        $prato = "Esfiha";
    } else {
        $prato = "Opção inválida!";
    }
    ?>
    
    <h2 class="destaque">Encadeada</h2>
    
    <!-- Cardápio digital
    1 -> Pastel
    2 -> Pizza
    3 -> Esfiha
    x -> Opção inválida  -->
    
    <p><?php echo $prato; ?></p>
?>
    <p><?=$opcaoEscolhida?></p>
<hr>

<!-- ___________________________________________________________________ -->
<h2 class="destaque">Switch/Case</h2>

<?php
$minhaVariavel = '<h2 class="destaque">Switch/Case</h2>';
?>
    
</body>
</html>