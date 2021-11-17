<?php 

require_once "cabecalho.php";

?>

<?php 


require_once "rodape.php"
?>


<div class="form-row justify-content-center">
        <main class="shadow-lg py-3 px-md-5 mt-5 mb-5 bg-white text-dark rounded border mr-3">

            <div class="form-group justify-content-center">
                <form action="consultaCNPJ.php">
                    <img src="./img/cnpj.png" alt="cnpj">
            </div>
            <div class="form-group justify-content-center">  
            </div>

            <div class="form-group justify-content-center">
                <input type="submit" name="consultaCNPJ" value="Consulta CNPJ" class="ml-4 btn btn-dark justify-content-center">
            </div>
            </form>
        </main>
        <main class="shadow-lg py-3 px-md-5 mt-5 mb-5 bg-white text-dark rounded border">

        <div class="form-group justify-content-center">
            
                <img src="img/cpf.jpg" alt="cpf">
        </div>

        <div class="form-group justify-content-center"> 
        </div>

        <div class="form-group justify-content-center">
            <form action="cadastroCPF.php">
            <input type="submit" name="consultaCPF" value="Cadastro CPF" class="ml-4 btn btn-dark justify-content-center">
            </form>
        </div>
    </form>
    </main>

</div>