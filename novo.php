<?php
require_once ( "../validacoes/variaveis.php" );
require_once ( "../validacoes/validar.php" );


formEnviado($_POST);

// 
gerarMensagensErro($dados);

if (@$mensagem_erro["name"]!= '') {
    echo $mensagem_erro["name"];
    echo  "<a href='../index.php'>Clique para voltar ao formulário</a>";
}
else if (@$mensagem_erro["email"]!= '') {
    echo $mensagem_erro["email"];
    echo  "<a href='../index.php'>Clique para voltar ao formulário</a>";
}
else if (@$mensagem_erro["phone"]!= '') {
    echo $mensagem_erro["phone"];
    echo  "<a href='../index.php'>Clique para voltar ao formulário</a>";
}
else if (@$mensagem_erro["tmensagem"]!= '') {
    echo $mensagem_erro["tmensagem"];
    echo  "<a href='../index.php'>Clique para voltar ao formulário</a>";
}
else if (@$mensagem_erro["tcliente"]!= '') {
    echo $mensagem_erro["tcliente"];
    echo  "<a href='../index.php'>Clique para voltar ao formulário</a>";
}
else if (@$mensagem_erro["mensagem"]!= '') {
    echo $mensagem_erro["mensagem"];
    echo  "<a href='../index.php'>Clique para voltar ao formulário</a>";
}

else {
    $name=__e($_POST["name"]);
    $email=__e($_POST["email"]);
    $phone=__e($_POST["phone"]);
    $tmensagem=__e($_POST["tmensagem"]);
    $tcliente=__e($_POST["tcliente"]);
    $mensagem=__e($_POST["mensagem"]);
    $ligacao=__e($_POST["ligsim"]);
}

?>

<!DOCTYPE HTML>
<html>
<header></header>
<body>

    <div class='principal'>
        <h1>Verifique os dados do seu Formulário:</h1>
        <p><strong>Seu nome completo é:</strong> <br><?php echo "$name"?></p> 
        <p><strong>Seu email:</strong> <br><?php echo "$email"?> </p>
        <p><strong>Telefone para contato:</strong><br><?php echo "$phone" ?></p>
        <p><strong>Tipo de mensagem:</strong><br><?php echo "$tmensagem" ?></p>
        <p><strong>Tipo de cliente:</strong><br><?php echo "$tcliente" ?></p>
        <p><strong>Sua mensagem:</strong><br><?php echo "$mensagem" ?></p>
        <p><strong>Gostaria de receber ligações:</strong><br><?php echo "$ligacao" ?></p>
        <br>
    </div>

    <style>
        body{
            background-color:rgb(255,255,255);
        }
        .principal{
            display:block;
            height:1100px;
            width:900px;
            text-align:;
            margin:auto;
        }

        .principal h1{
            text-align:center;
            font-size:25px;
            color:rgb(80,80,80);
        }
        .principal p{
            font-size:18px;
            color:rgb(92,92,92); 
        }
    </style>
</body>

</html>