<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>bootstrap</title>
      <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
      <?php
         $html = '<form><div class="form-group"><label>Email</label><input type="email" class="form-control" placeholder="Enter email"></div><div class="form-group"><label>Password</label><input type="password" class="form-control" placeholder="Password"></div><div class="form-check"><input type="checkbox" class="form-check-input"><label class="form-check-label">Checkbox</label></div><select class="form-control"><option>1</option><option>2</option><option>3</option></select><div class="form-check"><input class="form-check-input" type="radio" name="exampleRadios" value="option1" checked><label class="form-check-label">1</label></div><div class="form-check"><input class="form-check-input" type="radio" name="exampleRadios" value="option2"><label class="form-check-label">2</label></div><button type="submit" class="btn btn-primary">Submit</button></form>';
         for ($i=0; $i < 1000; $i++) {
           echo $html;
         }
         ?>
   </body>
</html>
