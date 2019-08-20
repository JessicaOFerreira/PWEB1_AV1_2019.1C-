<?php
    function __e($input) {
        @$input = trim($input);
        @$input = stripslashes($input);
        @$input = htmlspecialchars($input);
        return $input;
    }

    function limparVetor($varPost) {
        $arrayLimpo = [];
        foreach ($varPost as $indice => $valor) {
            $arrayLimpo[$indice] = __e($valor);
        }
        return $arrayLimpo;
    }
    
    // Verificar se o formulário foi enviado
    function formEnviado($postArray) {
        global $dados;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Limpar post
            $dados = limparVetor($postArray);
            return true;
        } else {
            header('Location: ../index.php');
            die();
        }
    }
    
    // Criar mensagem de erro
    function gerarMensagensErro($postArray) {
        global $mensagem_erro;
        if ($postArray["name"]== '') {
            $mensagem_erro["name"] = "Erro: Todos o dados devem ser preenchidos. Informe seu nome completo"."<br>";
        }
        else if ($postArray["email"]== '') {
            $mensagem_erro["email"] = "Erro: Todos o dados devem ser preenchidos. Informe seu email"."<br>";
        }
        else if ($postArray["phone"]== '') {
           $mensagem_erro["phone"] = "Erro: Todos o dados devem ser preenchidos. Informe seu telefone"."<br>";
        }
        else if ($postArray["tmensagem"]== '') {
            $mensagem_erro["tmensagem"] = "Erro: Todos o dados devem ser preenchidos. Informe o tipo de mensagem"."<br>";
        }
        else if ($postArray["tcliente"]== '') {
            $mensagem_erro["tcliente"] = "Erro: Todos o dados devem ser preenchidos. Informe seu tipo de cliente"."<br>";
        }
        else if ($postArray["mensagem"]== '') {
            $mensagem_erro["mensagem"] = "Erro: Todos o dados devem ser preenchidos. Informe sua mensagem"."<br>";
        }
    
    }
    
    ?>
?>