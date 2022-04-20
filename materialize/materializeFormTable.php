<!DOCTYPE html>
  <html lang ="en" dir="ltr">
    <head>
        <title>Materialize</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
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
    <?php
        $html = "<div class='row'><div class='input-field col s6'><input placeholder='Placeholder'  type='text' class='validate'><label>Mail</label></div><div class='input-field col s6'><input type='text' class='validate'><label>Password</label></div></div><br><button class='btn waves-effect waves-light' type='submit' name='action'>Submit</button><p><label>Checkbox</label><input type='checkbox' /></p><p><label><input name='group1' type='radio' /><span>1</span></label></p><p><label><input name='group1' type='radio' checked /><span>2</span></label></p><div class='input-field col s12'><select><option value='1'>Option 1</option><option value='2'>Option 2</option><option value='3'>Option 3</option></select></div>"; for ($i=0; $i < 1000; $i++) {echo $html;}     
      ?>
    </body>
  </html>