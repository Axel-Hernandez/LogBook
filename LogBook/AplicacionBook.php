<?php include 'main/conecta.php'; ?>
<!DOCTYPE hmtl>
<html lang="en" dir="ltr">
    <head>
       <meta charset="utf-8">
       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
       <script src="js/jquery-3.5.1.min.js"></script>
       <title>LooGBook</title>
    </head>
   <body>
      <body style="background-color:green">

    <div class="container">
           <h3 class="text-center py-4">¡Bienvenido a LooGBook!</h3>
     <div class="card">
               <p class="text-center text-muted py-3">Iniciar Sesion</p><hr>
      <div class="container">
           <form class="form-group" action="main/login.php" method="post">
                <input type="text" class="form-control"  name="usuario" placeholder="Usuario" requerid>
                <br>
                <input type="password" class="form-control" name="password" id="pass" placeholder="Password" requerid>
                <br>
                  <div class="col">
                     <div class="custom-control custom-swicth">
                       <input type="checkbox" class="custom-control-input" id="ver" onclick="verpass(this)>">
                       <label class="custom-control-label" for="ver">Ver password</label>
                     </div>
                  </div>
                <input type="submit" name="Iniciar Sesion" value="Iniciar Sesion" class="btn btn-success btn-sm btn-block">
              </form>
       </div>
     </div>
   </div>

  <div class="container">
     <h3 class="img-center py-4"><img src="img/log.jpeg" alt="LogBook" witdh="300" height="300"> </h3>
  </div>

   <script type="text/javascript">
   function verpass(cb){
     if (cb.checked)
         $('#pass').attr("type","text");
       else
         $('#pass').attr("type","password");
     }
     </script>
     <script src="js/bootstrap.min.js"></script>
     </body>
</hmtl>
