<!doctype html>
<html lang="en">
  <head>
    <title>Calculo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: #DAF7A6 ;">
    <div class="container">
      <div class="row">
        <div class="col mt-4">
        <h1>Cálculo de IMC</h1>
          <br>
          <br>
          <?php

            $peso = $_POST ['peso'];
            $altura = $_POST ['altura'];
            $resultado= $peso / ($altura * $altura);

            if($resultado <18){
              echo "Peso bajo. Necesario valorar signos de nutrición";
              echo "<br>";
              echo "Con un peso de: " .$peso;
              echo "<br>";
              echo "Con un altura de: " .$altura;
              echo "<br>";
              echo "El indice de masa corporal es de: " .$resultado;

            }else if($resultado < 24.9){
              echo "Clasificacion: Normal";
              echo "<br>";
              echo "Con un peso de: " .$peso;
              echo "<br>";
              echo "Con un altura de: " .$altura;
              echo "<br>";
              echo "El indice de masa corporal es de: " .$resultado;


            }else if($resultado< 26.9 ){
              echo"Clasificacion: Sobrepeso";
              echo "<br>";
              echo "Con un peso de: " .$peso;
              echo "<br>";
              echo "Con un altura de: " .$altura;
              echo "<br>";
              echo "El indice de masa corporal es de:  " .$resultado;

            }else if($resultado < 27.0 ){
              echo" Clasificacion: obesidad";
              echo "<br>";
              echo "Con un peso de: " .$peso;
              echo "<br>";
              echo "Con un altura de: " .$altura;
              echo "<br>";
              echo "El indice de masa corporal es de: " .$resultado;

            }else if($resultado< 29.9){
              echo"Clasificacion: Obesidad grado 1.";
              echo "<br>";
              echo "Riesgo relativo alto de desarrollar enfermedades cardiovasculares ";
              echo "<br>";
              echo "Con un peso de: " .$peso;
              echo "<br>";
              echo "Con un altura de: " .$altura;
              echo "<br>";
              echo "El indice de masa corporal es de: " .$resultado;

            }else if($resultado< 39.9){
              echo" Clasificacion: Obesidad grado 2.";
              echo "<br>";
              echo "Riesgo relativo muy alto de desarrollar enfermedades cardiovasculares ";
              echo "Con un peso de: " .$peso;
              echo "<br>";
              echo "Con un altura de: " .$altura;
              echo "<br>";
              echo "El indice de masa corporal es de: " .$resultado;

            }else{

              echo" Clasificacion :Obesidad grado 3. Extrema o Morbida";
              echo "<br>";
              echo "Riesgo relativo extremadamente alto de desarrollar enfermedades cardiovasculares ";
              echo "<br>";
              echo "Con un peso de: " .$peso;
              echo "<br>";
              echo "Con un altura de: " .$altura;
              echo "<br>";
              echo "El indice de masa corporal es de: " .$resultado;
            }

          ?>
          <br>
          <br>
          <br>
          <p><img src="img/flecha.png" width="80" height="50" class="d-inline-block align-top" alt="" loading="lazy">
          <a href="index.php"><h4>Regresar</h4></a></p>
          
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
