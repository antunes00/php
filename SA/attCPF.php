<?php 

require_once "cabecalho.php";

?>

<?php 


require_once "rodape.php"
?>
<form action="cadastro.php" method="post">
        <fieldset class="margin-border">
           
            <h4 class="title">Consulta CNPJ</h4>
            <hr>
             
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
             