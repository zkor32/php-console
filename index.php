<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Console</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP Console</a>
      
    </nav> 
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Consola de PHP</h1>
          <p class="lead">Esto es una Consola</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase: Condicional IF</h3>
                    <?php 
                    $name = "Max";
                    $year = 1998;

                    if($name == "Max" &&  $year >2000){
                        echo "eres Max de este milenio";
                    }else if($name == "Max" ){
                        echo "eres max del mileno pasado";

                    }
                    else {
                        echo "no eres Max";
                    }
                   
                       
                    ?>
                </div> 
            </div>
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Clase: Operadores</h3>
                    <?php 
                    $num1 = 1;
                    $num2 = 3;
                    $resultado= $num1 + $num2;
                    $num1++;
                    $num1++;
                    $num2--;

                    echo "El resultado de la suma es " . ($num1 + $num2). "<br>";
                    echo "El resultado de la resta es " . ($num1 - $num2). "<br>";
                    echo "El resultado de la multiplicación es " . ($num1 * $num2). "<br>";
                    echo "El resultado de la división es " . ($num1 / $num2). "<br>";
                    echo "El resultado del módulo  es " . ($num1 % $num2). "<br>";

                       
                    ?>
                </div> 
            </div>
   
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase: variable de tipos de datos</h3>
                    <?php 
                        $name = "Rafaella Bello";
                        $birthYear = 2019;
                        $weight= 14.5;

                        echo "Mi hija se llama  $name"/* se puede contatenar una variable dentro de un echo*/ . " nació en " . $birthYear . " y pesa " . $weight . " Kilogramos <br>" ;
                        echo "La variable weight es de tipo " . gettype($weight);
                    ?>
                </div> 
            </div>
   
        </div>
      
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>