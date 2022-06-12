<h1>Listar Contatos</h1>

<table class="table table-hover table-striped">
    <thead bgcolor="pink">
        <tr class="active">
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    </thead>
<tbody>
    <?php foreach ($contatos as $cadaContato) {
    $partes = explode(';', $cadaContato);

   echo '<tr>';
      echo '<td>' . $partes[0] . '</td>';
      echo '<td>' . $partes[1] . '</td>';
      echo '<td>' . $partes[2] . '</td>';
      echo '<td>' . $partes[3] . '</td>';
      echo '<td>' . $partes[4] . '</td>';
      echo '<td>' . $partes[5] . '</td>';
   echo '</tr>';
}
?>
</tbody>

</table>