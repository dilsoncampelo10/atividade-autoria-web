<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
    <style>
        body{
            background-color: lightgray;
        }
        .acesso{
            color: green;
            text-align: center;
            font-size: 3rem;
        }
        .negado{
            color: red;
            text-align: center;
            font-size: 3rem;
        }
    </style>
</head>
<body>
    <?php
        $user = $_POST["login"];
        $pass = $_POST["senha"];
        if($user == "root" && $pass == "12345%6"){
            echo "<h1 class='acesso'>Bem vindo senhor {$user}</h1>";
        } else{
            echo "<h1 class='negado'>Acesso negado</h1>";
        }
    ?>
    <hr>

</body>
</html>