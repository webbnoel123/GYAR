<!DOCTYPE HTML>
<html lang="en" dir="ltr">
   <head>
      <title>pure</title>
      <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
   </head>
   <body>
      <?php
         $html = "<form class='pure-form pure-form-stacked'><fieldset><label>Email</label><input type='email' placeholder='Email'/><label>Password</label><input type='password' placeholder='Password'/><select><option>1</option><option>2</option><option>3</option></select><label class='pure-checkbox'><input type='checkbox'/>Checkbox</label><label class='pure-radio'><input type='radio' name='optionsRadios' value='option1' checked=''/>1</label><label class='pure-radio'><input type='radio' name='optionsRadios' value='option2'/>2</label><button type='submit' class='pure-button pure-button-primary'>Submit</button></fieldset></form>";for ($i=0; $i < 1000; $i++) { echo $html;}
         ?>
   </body>
</html>