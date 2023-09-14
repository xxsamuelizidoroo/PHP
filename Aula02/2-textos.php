<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto (string) no PHP</title>
</head>
<body>
    <h1>Tipos de dados texto no PHP</h1>
    <p>Uma string é uma série de caracteres, onde um caractere é o mesmo que um byte.</p>
    <ul>
        <li>aspas simples</li>
        <li>aspas duplas</li>
    </ul>
    
    <!-- Código PHP para função is_int -->
    <?php
    
        if(is_int(5)) { // true
            echo "´É um inteiro <br>";
        
        }

        if(is-int("Não é um inteiro")) { // false 
            echo "É um inteiro 2 <br>";
        }


        $a = 10;

        if(is_int($a)) { // true 
            echo "É um inteito 3 <br>";
        }
    ?> 

    <!-- Código PHP para tipos de string -->

    <br><hr>
    <h2>Função de verificação</h2>
    <p>Para saber se uma variável é string usamos a função is_string()</p>

    <!-- Código PHP para verificar strings -->
   
</body>
</html>