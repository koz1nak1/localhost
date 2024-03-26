<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon">
    <title>Registration form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

</body>
 <div class="container mt-4">

   <?php
     if ($_COOKIE['user'] == ''):
     ?>
   <a class="row">
     <div class="col">
       <h1>Registration form</h1>
       <form action="php/check.php" method="post">
           <input type="text" class="form-control" name="login"
                  id="login" placeholder="login"><br>
           <input type="text" class="form-control" name="name"
                  id="name" placeholder="user name"><br>
           <input type="text" class="form-control" name="pass"
                  id="pass" placeholder="password"><br>
           <button class="btn btn-success" type="submit">Register</button>
       </form>
   </div>
      <div class="col">
          <h1> Authentication form</h1>
          <form action="php/auth.php" method="post">
              <input type="text" class="form-control" name="login"
                     id="login" placeholder="login"><br>
              <input type="text" class="form-control" name="pass"
                     id="pass" placeholder="password"><br>
              <button class="btn btn-success" type="submit">Enter</button>
          </form>
      </div>

     <?php else: ?>
       <p>Hi <?=$_COOKIE['user']?><br>
           <br>
       <a href="/php/exit.php">Exit</a><br>
           <br>
       <a href="/password_change.php" >Password change</a><br>
           <br>
       </p>
           </a>
     <?php endif;?>
  </div>

 </div>

</body>
</html>