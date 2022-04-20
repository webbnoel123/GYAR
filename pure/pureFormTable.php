<!DOCTYPE HTML>
<html lang="sv">
   <head>
      <meta charset="UTF-8">
      <title>Pure</title>
      <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
   </head>
   <body>
      <?php
         $html = "<form class='pure-form pure-form-stacked'><fieldset><label>Email</label><input type='email' placeholder='Email'/><label>Password</label><input type='password' placeholder='Password'/><label>State</label><select><option>1</option><option>2</option><option>3</option></select><label class='pure-checkbox'><input type='checkbox'/>Remember me</label><label class='pure-radio'><input type='radio' name='optionsRadios' value='option1' checked=''/>1</label><label class='pure-radio'><input type='radio' name='optionsRadios' value='option2'/>2</label><button type='submit' class='pure-button pure-button-primary'>Sign in</button></fieldset></form>";for ($i=0; $i < 1000; $i++) { echo $html;}
         ?>
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
            <?php for ($i=0; $i < 10000; $i++) { echo "<tr>"; echo "<th>".$i."</th>"; for ($j=0; $j < 5; $j++){ echo "<td>".$j."</td>"; } echo "</tr>";}?>
         </tbody>
      </table>
   </body>
</html>