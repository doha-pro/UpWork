<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Test</title>

</head>
<body>
   <form action="./response.php" method="post">
   <div>
      <label for="name">Name</label>
      <input type="text" name="name" id="name">
   </div>   
   <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email"  >
   </div>
      
      <input type="hidden" name="ipAddress" value="<?=
    $_SERVER['REMOTE_ADDR']
      ?>">
      <input type="submit" value="Submit">
      
   </form>
</body>
</html>