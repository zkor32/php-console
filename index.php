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
                <div class="p-3 m-2 bg-dark text-white">
                    <h3>Calculadora</h3>
                    <?php 
                    class Calculadora {
                        public static function sumar($num1,$num2){
                            return $num1 + $num2;
                        }
                        public static function restar($num1,$num2){
                            return $num1 - $num2;
                        }

                    }
                    echo "El resultado es: " . Calculadora::sumar(5,2) . "<br>";
                    echo "El resultado es: " . Calculadora::restar(5,2) . "<br>";

                    /*$calc = new Calculadora();
                    echo "El resultado es: " . $calc->sumar(5,2);
                    */

                    ?>
                </div> 
            </div>
        <div class="col-12">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Clase: Herencia</h3>
                    <?php 

                    class Pet {
                        public $nombre;
                        public $patas;

                       function __construct($nombre, $patas){
                            $this->nombre = $nombre;
                            $this->patas = $patas;
                       }
                       function eat(){
                           return "Esta comiendo";

                       }                
                    }
                    
                    class Perro extends Pet{


                    }
                    $dulcinea = new Perro("Dulcinea",4);
                    echo $dulcinea->nombre . " " . $dulcinea->eat();


                

               
                    ?>
                </div> 
            </div>
        <div class="col-12">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Clase: POO</h3>
                    <?php 

                    class Mascota {
                        public $nombre;
                        public $tipo;
                        public $patas;

                       function __construct($nombre, $tipo, $patas){
                            $this->nombre = $nombre;
                            $this->tipo = $tipo;
                            $this->patas = $patas;
                       }    
                       public function getDesc(){
                           if($this->patas == 0){
                               return "La especie de tu mascota es " . $this->tipo . ", se llama " . $this->nombre . " y no tiene patas " ;
                           }else {

                            return "La especie de tu mascota es " . $this->tipo . ", se llama " . $this->nombre . " y tiene " . $this->patas . " patas.";
                        }

                       }
                    }
                    class Casa {
                        public $habitaciones = 3;
                    }
                    $pareada = new Casa();
                    echo $pareada->habitaciones . "<br>";

                    $perro = new Mascota("Flaco","perro", 4);
                    $gato = new Mascota("Vasili","gato", 4);
                    $culebra = new Mascota("Snake","culebra", 0);

                    echo $perro->getDesc() . "<br>";
                    echo $gato->getDesc() . "<br>";
                    echo $culebra->getDesc();



                

               
                    ?>
                </div> 
            </div>
        <div class="col-12">
                <div class="p-3 m-2 bg-warning text-white">
                    <h3>Clase: Funciones</h3>
                    <?php 
                    function calc ($sign, $num1, $num2){
                        switch($sign){
                            case "+":
                                return $num1 + $num2;
                            break;
                            case "-":
                                return $num1 - $num2;
                            break;
                            default:
                                return 0;
                        }
                    }
                    $result = calc("/", 7, 3);

                    echo "El resultado es: " . $result;

             
            
                    ?>
                </div> 
            </div>
        <div class="col-6">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase: Continue</h3>
                    <?php 
                    $nums= array(1,7,15,32);
                
                    echo $nums[3] . "<br>";
                    for($i=0;$i < count($nums); $i++){

                        echo $nums[$i] . "<br>";
                    }
            
                    ?>
                </div> 
            </div>
        <div class="col-6">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase: Break</h3>
                    <?php 
                    $nums= array(1,7,15,32);
                
                    echo $nums[3] . "<br>";
                    for($i=0;$i < count($nums); $i++){

                        echo $nums[$i] . "<br>";
                    }
            
                    ?>
                </div> 
            </div>
        <div class="col-4">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Clase: Foreach</h3>
                    <?php 
                    $names= array("max","doomboy","jeipi","castoro");

                foreach($names as $name){
                    echo $name . "<br>";
                }
                                 
                    ?>
                </div> 
            </div>
        <div class="col-4">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase: Arrays</h3>
                    <?php 
                    $nums= array(1,7,15,32);
                
                    echo $nums[3] . "<br>";
                    for($i=0;$i < count($nums); $i++){

                        echo $nums[$i] . "<br>";
                    }
            
                    ?>
                </div> 
            </div>
        <div class="col-4">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase: Arrays</h3>
                    <?php 
                    $nums= array("max","doomboy","jeipi","castoro");
                
                    echo $nums[3] . "<br><br>";
                    for($i=0;$i < count($nums); $i++){

                        echo $nums[$i] . "<br>";
                    }
                                 
                    ?>
                </div> 
            </div>
        <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Clase: Bucle while</h3>
                    <?php 
                    $num = -1;
                    while($num < 5){
                    $num++;
                        echo "El numero es: " . $num . "<br>";
                    
                    }
                    ?>
                </div> 
            </div>
        <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h3>Clase: Bucle For</h3>
                    <?php 
                    for($i = 0; $i < 5; $i++){
                        echo "el valor de i es: " . $i . "<br>";
                    }
                 
                       
                    ?>
                </div> 
            </div>
        <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Clase: Condicional Switch</h3>
                    <?php 
                    $num = 4;
                    switch($num){
                        case 1:
                            echo "La calificación es muy baja";
                        break;

                        case 2:
                            echo "La calificación sigue siendo muy baja";
                        break;  

                        case 4:
                            echo "La calificación es mediocre";
                        break; 

                        case 6:
                            echo "La calificación es decente";
                        break;  

                        case 8:
                            echo "La calificación es buena";

                        break;

                        case 10:
                            echo "La calificación es excelente";     
                        break;          


                    }
             /*       

                    if($num == 1){
                        echo "La calificación es muy baja";

                    }
                    else if($num == 2){
                        echo "La calificación sigue siendo muy baja";


                    }   else if($num == 4){
                        echo "La calificación es mediocre";


                    }   else if($num == 6){
                        echo "La calificación es decente";


                    }   else if($num == 10){
                        echo "La calificación es excelente";


                    }
                    else{
                        echo "La calificación no es válida";


                    }*/
                       
                    ?>
                </div> 
            </div>
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