<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>4</th>
          <th>5</th>
        </tr>
      </thead>
      <tbody>
        <?php
          for ($i=0; $i < 10000; $i++) {
            echo "<tr>";
            echo "<th>".$i."</th>";
            for ($j=0; $j < 5; $j++) {
              echo "<td>".$j."</td>";
            }
            echo "</tr>";
          }
         ?>
      </tbody>
    </table>
  </body>
</html>
