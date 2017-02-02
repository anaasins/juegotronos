<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina informativa sobre Juego de Tronos.</title>
  </head>
  <body>
    <table>
      <tr>
        <td>Logo</td>
        <td><a href="actores.php">Actores.</a></td>
        <td><a href="formulario.html">Actores por temporada.</a></td>
      </tr>
    </table>
      <h2>RESUMEN DE LA SERIE: </h2><br>
      <?php
        include 'basedatos.php';
        $juegot=new JuegoTronos();

        $resumen=$juegot->resumenSerie();
        while ($fila=$resumen->fetch_assoc()) {
          echo $fila["plot"];
        }
       ?>

  </body>
</html>
