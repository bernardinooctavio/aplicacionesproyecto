<table class="table">
<h3>Sistemas</h3>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Grupos</th>
    </tr>
  </thead>
  <tbody>
<?php
while($filas=mysqli_fetch_assoc($datos))
{ ?>

    <tr>
      <th scope="row"><?php echo $filas['id_grupo'] ?></th>
        <th scope="row"><?php echo $filas['desc_grupo'] ?></th>
      <td></td>
      <td></td>
    </tr>
<?php
}

?>
</tbody>
</table>

