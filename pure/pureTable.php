<!DOCTYPE HTML>
<html lang="en" dir="ltr">
   <head>
      <title>pure</title>
      <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
   </head>
   <body>
      <table class="pure-table">
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