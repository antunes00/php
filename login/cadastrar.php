<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>


<html lang ="pt-br">
    
<head>
    <meta charset="utf-8"/>
    <title>projeto login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="corpo-form-cad">
    <h1>Cadastrar</h1>
<form method="POST" >
<input type="text" name="nome" placeholder="Nome completo" maxlength="30">
<input type="text" name="telefone"placeholder="telefone" maxlength="30">
<input type="email" name="email"placeholder="Usuário" maxlength="40">
<input type="password" name="senha"placeholder="Senha" maxlength="15">
<input type="email" name="confSenha"placeholder="confirmar Senha" maxlength="15">
<input type="submit" value="Cadastrar">

</form>
</div>
<? php

if(isset($_POST['nome']))

{
  $nome = addslashes ($_POST['nome']);
  $telefone = addslashes($_POST['telefone']);
  $email   = addslashes ($_POST['email']);
  $senha  = addslashes ($_POST['senha']);
  $confirmarSenha = addslashes($_POST['confSenha']);

  if(!empty($nome ) && !empty($telefone) && !empty($email) && !empty(
      $senha) && !empty($confirmarSenha))
    {
       $u -> conectar("login1","localhost","root","");
       if($u->msgErro =="")
         {   
             if ($senha == $confirmarSenha)
          {
           
            if($u->cadastrar($nome,$telefone,$email,$senha)) 
          {
            echo "cadastrado com sucesso! Acesse para entrar!";
          }
          else
          {
              echo "Email ja cadastrado!";
          }

       }
       else
       {
           echo "senha e confirmar senha nao correspondem!";
         }
        }
        
       else
       {
           echo "Erro:" .$u->msgErro;
       }
    }else
    {
        echo "Preencha todos os campos!";

    }  
}

?>

</body>
</html>    