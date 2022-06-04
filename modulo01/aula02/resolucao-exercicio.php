<form action=""  method="post">
<input name="n1" type="text" placeholder="Numero 1">
<input name="n2" type="text" placeholder="Numero 2">

<button name="soma">Somar</button>
<button name="subtracao">Subtrair</button>
<button name="multiplicacao">Multiplicar</button>
<button name="divisao">Dividir</button>
</br>
</form>

<?php 
     if ($_POST) {

        if (isset($_POST['subtracao'])) {
         echo $_POST['1'] - $_POST['2'];
        }

        if (isset($_POST['soma'])) {
            echo $_POST['1'] + $_POST['2'];
        }
        if (isset($_POST['multiplicacao'])) {
            echo $_POST['1'] * $_POST['2'];
        }
        if (isset($_POST['divisao'])) {
            echo $_POST['1'] / $_POST['2'];
        }
         var_dump($_POST);
    }
?>