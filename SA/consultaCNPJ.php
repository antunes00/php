<?php 

require_once "cabecalho.php";

?>

<?php 


require_once "rodape.php"
?>
    <?php

if (isset($_GET['submit'])) {
    $cnpj = $_GET['cnpj'];
    $url = "https://www.receitaws.com.br/v1/cnpj/$cnpj&quot;;"
    . $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resultado = json_decode(curl_exec($ch));
    foreach ($resultado as $res=>$index) {
        $$res = $index;
       
    }
    curl_close($ch);
 }
?>


<form action="#" method="get">
        <fieldset class="margin-border">
           
            <h4 class="title">Consulta CNPJ</h4>
            <hr>
            <h5>Busca por CNPJ:</h1>
            <label for="">Digite o CNPJ:</label>
            <input type="text" name="cnpj" id="cnpj">
            <input type="submit" name="submit" value="Enviar">

             
            <table> 
                <tr>
                    <td>    
                        <label for="cnpj">CNPJ: </label>
                        <input type="text" name="cnpj" id="cnpj">
                    </td>
                </tr>   
            </table>
            <table> 
                <tr>
                    <td>    
                        <label for="abertura">Abertura: </label>
                        <input type="text" name="abertura" id="abertura">
                    </td>
                    <td>    
                        <label for="complemento">Complemento: </label>
                        <input type="text" name="complemento" id="complemento">
                    </td>
                </tr>
                   
            </table>
            <table> 
                <tr>
                    <td>    
                        <label for="fantasia">Fantasia: </label>
                        <input type="text" name="fantasia" id="fantasia">
                    </td>
                    <td>    
                        <label for="logradouro">Logradouro: </label>
                        <input type="text" name="logradouro" id="logradouro">
                    </td>
                </tr>
                   
            </table>
            <table> 
                <tr>
                    <td>    
                        <label for="natureza_juridica">Natureza Juridica: </label>
                        <input type="text" name="natureza_juridica" id="natureza_juridica">
                    </td>
                    <td>    
                        <label for="numero">Número: </label>
                        <input type="text" name="numero" id="numero">
                    </td>
                    <td>    
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome">
                    </td>
                </tr>
            </table>
            <table> 
                <tr>
                    <td>    
                        <label for="status">Status: </label>
                        <input type="text" name="status" id="status">
                    </td>
                    <td>    
                        <label for="tipo">Tipo: </label>
                        <input type="text" name="tipo" id="tipo">
                    </td>
                </tr>
                   
            </table>
             