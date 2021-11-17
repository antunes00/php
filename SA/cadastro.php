<?php
require_once './conexao.php';
   



    if(isset($_POST['save'])){
     
        $nome = $_POST['nome'];   
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
           
       }

       $cmd=  $con->query("INSERT INTO cpf VALUES 
       ('DEFAULT','$nome ','$email','$telefone', '$genero');");  
     
     header("location: cadastroCPF.php");