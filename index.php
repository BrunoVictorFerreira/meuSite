<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro PHP</title>
    <style>
    body{
        
    }
    .caixa{
        display: block;
        margin-left : auto;
        margin-right : auto;
        height: 30px;
        border-radius: 20px; 
        font-family: verdana;
        font-weight: italic; 
        text-align:center;
    }
    .cadastroText{
        font-family: verdana;
        font-weight: italic; 
        text-align:center;
    }
    .botao{
        display: block;
        margin-left : auto;
        margin-right : auto;
        height: 40px;
        border-radius: 10px;
        width: 20%;
        background-color: rgba(0,0,0,.3);
        font-family: verdana;
    }

    </style>
</head>
<body>

<fieldset>
    <form action="cadastrar.php" method="POST">  
        <h1 class="cadastroText">CADASTRO</h1>
        <input type="text" name="nome" placeholder="NOME" class="caixa"/><br>
        <input type="text" name="sobrenome" placeholder="SOBRENOME" class="caixa"/><br>
        <input type="text" name="usuario" placeholder="USUARIO" class="caixa"/><br>
        <input type="password" name="senha" placeholder="SENHA" class="caixa"/><br>
        <input type="submit" value="Enviar" class="botao"/>
    </form>
</fieldset>
</body>
</html>