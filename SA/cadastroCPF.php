<?php 

require_once "cabecalho.php";

?>

<?php 


require_once "rodape.php"
?>
<form action="cadastro.php" method="post">
        <fieldset class="margin-border">
           
            <h4 class="title">Cadastro CPF</h4>
            <hr>
             
            <table> 
                <tr>
                    <td>    
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome">
                    </td>
                    <td>    
                        <label for="codigo"> E-mail </label>
                        <input type="email" name="email" id="email" style="display:flex;">
                    </td>
                    
                </tr>   
            </table> 
              
              
              
            <table>

            <td>
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone">
            </td>

            <td>
                <label for="genero">Gênero: </label>
                <select name="genero" style="display:flex;" id="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outros">Outros</option>
                <select>
            </td>

            </table>

            <br><br>
            
                    
            <div class="row">
                <div class="col s4"> 
                    <button class="btn waves-effect waves-light" type="submit" name="save">Salvar
                        <i class="material-icons right">save</i>
                    </button>
                </div>
                <div class="col s4">
                    <button class="btn waves-effect grey darken-3" type="reset" name="delete">limpar
                        <i class="material-icons right">delete_sweep</i>
                    </button>

                </div>
                <div class="col s4">
                    <a href="../index.php" class="btn waves-effect green accent-4">
                        Editar
                        <i class="material-icons right">edit</i>
                     </button>   
                    </a>
                </div>

            </div>

           
            
        
          
      
           
        </fieldset>
        

    </form>