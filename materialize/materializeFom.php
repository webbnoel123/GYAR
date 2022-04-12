<!DOCTYPE html>
  <html lang ="en" dir="ltr">
    <head>
        <title>Materialize</title>
        
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <?php
        $html = "
                    
                      <div class='row'><div class='input-field col s6'><input placeholder='Placeholder'  type='text' class='validate'><label >First Name</label></div><div class='input-field col s6'><input type='text' class='validate'><label >Last Name</label></div></div><br><button class='btn waves-effect waves-light' type='submit' name='action'>Submit<i class='material-icons right'>send</i></button><p><label>Checkbox</label><input type='checkbox' /></p><p><label><input name='group1' type='radio' /><span>Yellow</span></label></p><p><label><input name='group1' type='radio' checked /><span>Red</span></label></p><div class='input-field col s12'><select><option value='1'>Option 1</option><option value='2'>Option 2</option><option value='3'>Option 3</option></select></div>";
        for ($i=0; $i < 1000; $i++) {
            echo $html;
        }    
      ?>
        
    </body>
  </html>