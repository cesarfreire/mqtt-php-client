<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>NodeMCU - Cesar</title>
      <link rel="stylesheet" type="text/css" href="css.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
      <body>
         <div class="container" style="margin-top: 100px;">
            <div class="card text-center">
               <div class="card-header">
                  Temperatura
               </div>
               <div class="card-body">
                  <h5 class="card-title" id="temperatura"></h5>
                  <a href="#" class="btn btn-primary" onClick="window.location.reload();">Atualizar</a>
               </div>
               <div class="card-footer text-muted">
                  <p id="depurador"><b>Debug / respostas do servidor:</b></p>
                  <div id="debug"></div>
               </div>
            </div>
         </div>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
       </body>
</html>
