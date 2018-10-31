<table class="table">
<h3></h3>
<h4>Materias</h4>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Clave</th>
      <th scope="col">Materias</th>
      <th scope="col">Unidades</th>
    </tr>
  </thead>
  <tbody>
<?php

while($filas=mysqli_fetch_assoc($datos))
{

  ?>

    <tr>
      <th scope="row"><?php echo $filas['id_materia'] ?></th>
      <td><?php echo $filas['desc_materia'] ?></td>
      <td><?php echo $filas['no_unidades'] ?></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
       <td></td>

    </tr>
    <?php
}

?>

</tbody>
</table>
