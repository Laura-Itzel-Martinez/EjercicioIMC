<!doctype html>
<html lang="en">
  <head>
    <title>IMC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color:#F08081;">
    <div class="container">
      <h1><p class="text-center">índice de Masa Corporal</p></h1>
      <div class="row-center">
        <div class="col">
          <img src="img/fo.jpg" width="400" height="150" >
        </div>
        <div class="col-sm-4 mt-4"> 
          <form action="peso.php" method="POST">
            <div class="form-group- ">
              <label for="peso">Ingresa tu peso</label>
              <input type="text" name="peso" id="peso" placeholder="peso" class="form-control">
            </div>
            <div class="form-group">
              <label for="altura">Ingresa tu altura </label>
              <input type="text" name="altura" id="altura" placeholder="altura" class="form-control">
            </div>
            <button type="" class="btn btn-warning">Calcular IMC</button>
          </form>
        </div> 
        </div>
      </div>

    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>