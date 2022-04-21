<!DOCTYPE html>
  <html lang ="en" dir="ltr">
    <head>
        <title>Materialize</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
    <?php
        $html = "<form><div class='row'><div class='input-field'><input type='text' class='validate'><label>Mail</label></div><div class='input-field'><input type='text' class='validate'><label>Password</label></div></div><br><p><label><input type='checkbox'/><span>checkbox</span></label></p><p><label><input name='group1' type='radio' /><span>1</span></label></p><p><label><input name='group1' type='radio' checked /><span>2</span></label></p><div class='input-field col s12'><select class='browser-default'><option value='1'>Option 1</option><option value='2'>Option 2</option><option value='3'>Option 3</option></select><button class='btn waves-effect waves-light' type='submit' name='action'>Submit</button></div>"; for ($i=0; $i < 1000; $i++) {echo $html;}
      ?>
    </body>
  </html>
