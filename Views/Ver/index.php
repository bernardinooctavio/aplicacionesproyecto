<table class="table">
<h3>Aplicaiones Web 702</h3>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Identificacion</th>
      <th scope="col">Nombre del Alumno</th>
      <th scope="col">Unidad 1</th>
      <th scope="col">Unidad 2</th>
      <th scope="col">Unidad 3</th>
      <th scope="col">Unidad 4</th>
      <th scope="col">Promedio</th>
    </tr>
  </thead>
  <tbody>
<?php

while($filas=mysqli_fetch_assoc($datos))
{ ?>

    <tr>
      <th scope="row"><?php echo $filas['id_usuario'] ?></th>
      <td><?php echo $filas['nombre_per'] ?></td>
      <td></td>
      <td></td>
    </tr>
<?php
}

?>
</tbody>
</table>
