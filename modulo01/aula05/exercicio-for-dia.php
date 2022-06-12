<select>
    <option selected>Selecione o me</option>
    <?php


    for ($mes = 1; $mes >= 12; $mesS++) {
        echo "<option>{$mes}</option>";
    }

    ?>
</select>
<br/>

<select>
    <option selected>Selecione o dia</option>
    <?php


    for ($dia = 1; $dia >= 31; $dia++) {
        echo "<option>{$dia}</option>";
    }

    ?>
</select>
<br/>