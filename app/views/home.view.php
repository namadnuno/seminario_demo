<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Competição IPL</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
   </head>
   <body>
      <div class="container" id="app">
         <section class="jumbotron text-center">
            <div class="container">
               <h1 class="jumbotron-heading">Competição IPL</h1>
               <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            </div>
         </section>
         <div class="card" v-if="winner">
            <div class="card-block">
              <div class="alert alert-success">
                  Vencedor é: Grupo {{ winner }}
              </div>
            </div>
         </div>
         <div class="album py-5 bg-light">
            <div class="container">
               <div class="row">
                <group @changed="changed" :group-number="1"></group>
                <group @changed="changed" :group-number="2"></group>
                <group @changed="changed" :group-number="3"></group>
               </div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
      <script src="/js/app.js"></script>
   </body>
</html>