<h1>Listar Contatos</h1>

<table class="table table-hover table-striped" border=2>
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
<tbody>
    <?php foreach ($contatos as $cadaContato) {
    $partes = explode(';', $cadaContato);

   echo '<tr>';
      echo '<td>' . $partes[0] . '</td>';
      echo '<td>' . $partes[1] . '</td>';
      echo '<td>' . $partes[2] . '</td>';
      echo "<td>
        <a href='#' class='btn btn-info btn-sm'>Excluir</a>
     </tr>";
   echo '</tr>';
}
?>
</tbody>

</table>