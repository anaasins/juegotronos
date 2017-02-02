<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de actores de la serie</title>
  </head>
  <body>
    <table>
      <tr>
        <td><a href="index.php">Index</a></td>
        <td><a href="formulario.html">Actores por temporada</a></td>
      </tr>
    </table>

       <table border="1px">
         <thead>
          <tr>
            <th>Nombre en la serie</th>
            <th>Nombre real</th>
          </tr>
         </thead>
         <?php
         include 'basedatos.php';
         $juegot=new JuegoTronos();
        $actores=$juegot->actoresSerie();
        while ($fila=$actores->fetch_assoc()) {
          echo "<tr><td>" .$fila["serie_name"] ."</td><td>" .$fila["name"] ."</td></tr>";
          }
          ?>
       </table>
  </body>
</html>
