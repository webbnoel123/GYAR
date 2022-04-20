<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
      <table class="table">
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
