<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Enviar</button><br><br>

    <?php

        $nome = $_POST["nome"];

        $email = $_POST["email"];

        echo "Seu nome é $nome", " e seu email é $email";

        echo '<br><br><br><br>';

    ?>

<!--exercicio 1-->
    <form method="post" action="">
        <label for="number1">Número 1:</label>
        <input type="number" id="number1" name="number1" required><br><br>

        <label for="number2">Número 2:</label>
        <input type="number" id="number2" name="number2" required><br><br>

        <button type="submit">Enviar</button><br><br>

    <?php
        $number1 = $_POST["number1"];

        $number2 = $_POST["number2"];
        
        $result = 0;

        $result = $number1+$number2;

        printf("%d", $result);

        echo '<br><br><br><br>';
    ?>

<!--exercicio 2-->
<form method="post" action="">
        <label for="number3">Número fatorial:</label>
        <input type="number" id="number3" name="number3" required><br><br>

        <button type="submit">Enviar</button><br><br>

    <?php
        $number3 = $_POST["number3"];
        
        $resultfat = 1;

        for($i=1; $i<=$number3; $i++)
        {
            $resultfat = $resultfat*$i;
        }

        printf("%d", $resultfat);

        echo '<br><br><br><br>';
    ?>

<!--exercicio 3-->
<form method="post" action="">
        <label for="user">Nome:</label>
        <input type="text" id="user" name="user" required><br><br>

        <label for="year">Ano de nascimento:</label>
        <input type="number" id="year" name="year" required><br><br>

        <button type="submit">Enviar</button><br><br>

    <?php
        $user = $_POST["user"];

        $year = $_POST["year"];
        
        $age = 0;

        $age = 2024-$year;

        printf("%d", $age);

        echo '<br><br><br><br>';
    ?>
    
</body>
</html>