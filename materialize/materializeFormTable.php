<!DOCTYPE html>
  <html lang ="en" dir="ltr">
    <head>
        <title>Materialize</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        
        <table>
      <thead>
        <tr>
          <th>#</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th>
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
        $html = "<div class='row'><div class='input-field col s6'><input placeholder='Placeholder' type='text' class='validate'><label >First Name</label></div  <div   class='input-field col s6'><input type='text' class='validate'><label >Last Name</label></div></div><br> <button class='btn waves-effect waves-light' type='submit' name='action'>Submit<i class='material-icons right'>send</i></button><p><label><input type='checkbox' /><span>Tjena tjena</span></label></p><p><label><input name='group1' type='radio' /><span>Yellow</span></label></p><p><label><input name='group1' type='radio' checked /><span>Red</span></label></p><div class='input-field col s12'><select><option value='' disabled selected>Vänligen välj alternativ</option><option value='1'>Option 1</option><option value='2'>Option 2</option><option value='3'>Option 3</option></select></div>";     
        for ($i=0; $i < 1000; $i++) {
            echo $html;
        }    
      ?>
        </body>
  </html>