<!DOCTYPE html>
<html lang="en">
<thead>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name=" keymords " content="php, informacoes basicas, html " />
    <meta name=" descption " content="Tabela com informacoes basicas com html e php " />
    
    <form action=""  method="post">
    
    <input name="nome" type="text" placeholder="Nome">
    <input name="idade" type="text" placeholder="Idade">
    <input name="telefone" type="text" placeholder="Telefone">

    <div id="button">
        <button class="button">Enivar</butto>
        <button class="button" type="reset">Limpar</button>
</div> 
    
 </form> 
</thead>
    <table border="2">
    <br><caption>Tabela HTML com PHP</caption></br>
       <thead>
            <tr>
               
                <th colspan="">nome</th>
                <th colspan="">idade</th>
                <th colspan="">telefone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_POST['nome']; ?></td>
                <td><?php echo $_POST['idade']; ?></td>
                <td><?php echo $_POST['telefone']; ?></td>
            </tr>
        </tbody>
    </table>

    
</html>