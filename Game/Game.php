<?php 


if(isset($_POST['submit'])){
    var_dump($_POST);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title>Polla</title>
</head>
<body>
<form method="post" action="crud.php">
<div class="container">
<div class="row"> <!-- cabecera de la tabla - fila principal-->
    <!-- Grupo A -->
    <div id="" class=" col-xs-12 col-sm-6 col-md-6"> <!-- tamaño de la columna -->
        <p class="text-center">Grupo A</p>
        <!-- Primer partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_argentina.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Argentina</h6>
                <select class="form-control" name="ARG-CHI-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Chile</h6>
                <select class="form-control" name="ARG-CHI-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_chile.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido -->
        <br>
        <!-- segundo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_australia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Australia</h6>
                <select class="form-control" name="AUS-URU-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Uruguay</h6>
                <select class="form-control" name="AUS-URU-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_uruguay.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre segundo partido -->
        <br>
        <!-- tercer partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_paraguay.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Paraguay</h6>
                <select class="form-control" name="PAR-BOL-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Bolivia</h6>
                <select class="form-control" name="PAR-BOL-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_bolivia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre tercer partido -->
        <br>
        <!-- cuarto partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_argentina.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Argentina</h6>
                <select class="form-control" name="ARG-URU-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Uruguay</h6>
                <select class="form-control" name="ARG-URU-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_uruguay.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre cuarto partido -->
        <br>
        <!-- qinto partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_chile.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Chile</h6>
                <select class="form-control" name="CHI-BOL-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Bolivia</h6>
                <select class="form-control" name="CHI-BOL-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_bolivia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre quinto partido -->
        <br>
        <!-- sexto partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_paraguay.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Paraguay</h6>
                <select class="form-control" name="PAR-AUS-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Australia</h6>
                <select class="form-control" name="PAR-AUS-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_australia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre sexto partido -->
        <br>
        <!-- septimo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_argentina.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Argentina</h6>
                <select class="form-control" name="ARG-PAR-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Paraguay</h6>
                <select class="form-control" name="ARG-PAR-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
            <img src="../img/escudo_paraguay.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre septimo partido -->
        <br>
        <!-- octavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_uruguay.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Uruguay</h6>
                <select class="form-control" name="URU-CHI-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Chile</h6>
                <select class="form-control" name="URU-CHI-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_chile.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre octavo partido -->
        <br>
        <!-- noveno partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
            <img src="../img/escudo_australia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Australia</h6>
                <select class="form-control" name="AUS-BOL-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Bolivia</h6>
                <select class="form-control" name="AUS-BOL-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_bolivia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre noveno partido -->
        <br>
        <!-- decimo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_chile.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Chile</h6>
                <select class="form-control" name="CHI-PAR-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Paraguay</h6>
                <select class="form-control" name="CHI-PAR-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_paraguay.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre decimo partido -->
        <br>
        <!-- onceavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_australia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Australia</h6>
                <select class="form-control" name="AUS-ARG-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Argentina</h6>
                <select class="form-control" name="AUS-ARG-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_argentina.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre onceavo partido -->
        <br>
        <!-- doceavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_bolivia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Bolivia</h6>
                <select class="form-control" name="BOL-URU-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Uruguay</h6>
                <select class="form-control" name="BOL-URU-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_uruguay.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre doceavo partido -->
        <br>
        <!-- treceavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_chile.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Chile</h6>
                <select class="form-control" name="CHI-AUS-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Australia</h6>
                <select class="form-control" name="CHI-AUS-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_australia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre treceavo partido -->
        <br>
        <!-- catorceavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_bolivia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Bolivia</h6>
                <select class="form-control" name="BOL-ARG-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Argentina</h6>
                <select class="form-control" name="BOL-ARG-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_argentina.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre catorceavo partido -->
        <br>
        <!-- quinceavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_uruguay.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Uruguay</h6>
                <select class="form-control" name="URU-PAR-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Paraguay</h6>
                <select class="form-control" name="URU-PAR-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_paraguay.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre quiceavo partido -->
    </div> <!-- cierre columna grupo A -->


    <!-- ------------------------------------------------------------------------------------------------------------------ -->


    <!-- APERTURA GRUPO B -->
    <div id="" class="col-xs-12 col-sm-6 col-md-6"> <!-- tamaño de la columna -->
        <p class="text-center">Grupo B</p>
        <!-- primer partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_colombia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>COLOMBIA</h6>
                <select class="form-control" name="COL-ECU-1" style="width:60px">
                    <option valiu="0">0</option>
                    <option valiu="1">1</option>
                    <option valiu="2">2</option>	
                    <option valiu="3">3</option>	
                    <option valiu="4">4</option>
                    <option valiu="5">5</option>	
                    <option valiu="6">6</option>
                    <option valiu="7">7</option>	
                    <option valiu="8">8</option>	
                    <option valiu="9">9</option>
                    <option valiu="10">10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>ECUADOR</h6>
                <select class="form-control" name="COL-ECU-2" style="width:60px">
                    <option valiu="0">0</option>
                    <option valiu="1">1</option>
                    <option valiu="2">2</option>	
                    <option valiu="3">3</option>	
                    <option valiu="4">4</option>
                    <option valiu="5">5</option>	
                    <option valiu="6">6</option>
                    <option valiu="7">7</option>	
                    <option valiu="8">8</option>	
                    <option valiu="9">9</option>
                    <option valiu="10">10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_ecuador.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div> <!-- cierre fila partido --> <!-- cierre primer partido -->
        <br>
        <!-- segundo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_brasil.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>BRASIL</h6>
                <select class="form-control" name="BRA-VEN-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>VENEZUELA</h6>
                <select class="form-control" name="BRA-VEN-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_venezuela.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre segundo partido -->
        <br>
        <!-- tercer partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_peru.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Perú</h6>
                <select class="form-control" name="PER-QAT-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Qatar</h6>
                <select class="form-control" name="PER-QAT-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_qatar.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre tercer partido -->
        <br>
        <!-- cuarto partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_colombia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Colombia</h6>
                <select class="form-control" name="COL-VEN-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Venezuela</h6>
                <select class="form-control" name="COL-VEN-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_venezuela.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre cuarto partido -->
        <br>
        <!-- qinto partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_ecuador.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Ecuador</h6>
                <select class="form-control" name="ECU-QAT-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Qatar</h6>
                <select class="form-control" name="ECU-QAT-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_qatar.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre quinto partido -->
        <br>
        <!-- sexto partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_peru.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Perú</h6>
                <select class="form-control" name="PER-BRA-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Brasil</h6>
                <select class="form-control" name="PER-BRA-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_brasil.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre sexto partido -->
        <br>
        <!-- septimo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_colombia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Colombia</h6>
                <select class="form-control" name="COL-PER-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Perú</h6>
                <select class="form-control" name="COL-PER-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_peru.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre septimo partido -->
        <br>
        <!-- octavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_venezuela.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Venezuela</h6>
                <select class="form-control" name="VEN-ECU-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Ecuador</h6>
                <select class="form-control" name="VEN-ECU-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
            <img src="../img/escudo_ecuador.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre octavo partido -->
        <br>
        <!-- noveno partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_brasil.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Brasil</h6>
                <select class="form-control" name="BRA-QAT-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Qatar</h6>
                <select class="form-control" name="BRA-QAT-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_qatar.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre noveno partido -->
        <br>
        <!-- decimo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_brasil.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Brasil</h6>
                <select class="form-control" name="BRA-COL-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Colombia</h6>
                <select class="form-control" name="BRA-COL-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_colombia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre decimo partido -->
        <br>
        <!-- onceavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_ecuador.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Ecuador</h6>
                <select class="form-control" name="ECU-PER-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Perú</h6>
                <select class="form-control" name="ECU-PER-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_peru.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre onceavo partido -->
        <br>
        <!-- doceavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_qatar.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Qatar</h6>
                <select class="form-control" name="QAT-VEN-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Venezuela</h6>
                <select class="form-control" name="QAT-VEN-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_venezuela.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre doceavo partido -->
        <br>
        <!-- treceavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_qatar.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Qatar</h6>
                <select class="form-control" name="QAT-COL-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Colombia</h6>
                <select class="form-control" name="QAT-COL-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_colombia.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre treceavo partido -->
        <br>
        <!-- catorceavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_ecuador.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Ecuador</h6>
                <select class="form-control" name="ECU-BRA-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Brasil</h6>
                <select class="form-control" name="ECU-BRA-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_brasil.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre catorceavo partido -->
        <br>
        <!-- quinceavo partido -->
        <div class="row"> <!-- fila para el primer partido -->
            <div id="" class="img-wrap col-xs-12 col-sm-3 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_venezuela.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Venezuela</h6>
                <select class="form-control" name="VEN-PER-1" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-1">
                <p>vs</p>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <h6>Perú</h6>
                <select class="form-control" name="VEN-PER-2" style="width:60px">
                    <option valiu=0>0</option>
                    <option valiu=1>1</option>
                    <option valiu=2>2</option>	
                    <option valiu=3>3</option>	
                    <option valiu=4>4</option>
                    <option valiu=5>5</option>	
                    <option valiu=6>6</option>
                    <option valiu=7>7</option>	
                    <option valiu=8>8</option>	
                    <option valiu=9>9</option>
                    <option valiu=10>10</option>				
                </select>
            </div>
            <div id="" class="img-wrap col-xs-12 col-sm-43 col-md-3"> <!-- tamaño de la columna para imagen-->
                <img src="../img/escudo_peru.png" class="img-thumbnail img-sm" width=60px heigh=60px >
            </div>
        </div><!-- cierre fila partido --> <!-- cierre quiceavo partido -->
    </div> <!-- cierre grupo B -->
</div><!-- cierre division de pantalla -->





<!-- CUARTOS DE FINAL -->



<br>
<br>
<div class="container"> <!-- cuartos de final -->
    <h4 class="text-center">CUARTOS DE FINAL</h4><br> 
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6"><!-- lado izquiero -->
            <!-- 1B vs 4A -->
            <h5 class="text-center">C1</h5> 
            <div class="row"> <!-- comienzo de c1 -->
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>1B</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <select class="form-control" name="equipo1" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="B1-A4-1" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1">
                    <p class="text-center">vs</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <select class="form-control" name="equipo2" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="B1-A4-2" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>4A</p>
                </div>
            </div><!-- cierre fila partido --> <!-- cierre c1 -->
            <br>
            <!-- 2B vs 3A -->
            <h5 class="text-center">C3</h5> 
            <div class="row"> <!-- comienzo de c3 -->
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>2B</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <select class="form-control" name="equipo3" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="B2-A3-1" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1">
                    <p class="text-center">vs</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <select class="form-control" name="equipo4" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="B2-A3-2" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>3A</p>
                </div>
            </div><!-- cierre fila partido --> <!-- cierre c3 -->
        </div> <!-- cierre de lado izquierdo -->

        
        <div class="col-xs-12 col-sm-6 col-md-6"><!-- lado derecho -->
            <!-- 1A vs 4B -->
            <h5 class="text-center">C2</h5> 
            <div class="row"> <!-- comienzo de c1 -->
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>1A</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <select class="form-control" name="equipo5" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="A1-B4-1" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1">
                    <p class="text-center">vs</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <select class="form-control" name="equipo6" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="A1-B4-2" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>4B</p>
                </div>
            </div><!-- cierre fila partido --> <!-- cierre c1 -->
            <br>
            <!-- 2A vs 3B -->
            <h5 class="text-center">C4</h5> 
            <div class="row"> <!-- comienzo de c1 -->
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>2A</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <select class="form-control" name="equipo7" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="A2-B3-1" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1">
                    <p class="text-center">vs</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <select class="form-control" name="equipo8" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="A2-B3-2" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>3B</p>
                </div>
            </div><!-- cierre fila partido --> <!-- cierre c4 -->
        </div> <!-- cierre de lado derecho -->
        <br>   
    </div> <!-- cierre cuartos de final -->
</div>




<!-- SEMIFINAL -->



<br>
<br>
<div class="container"> <!-- SEMIFINAL -->
    <h4 class="text-center">SEMIFINAL</h4><br> 
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6"><!-- lado izquiero -->
            <!-- 1C vs 3C -->
            <h5 class="text-center">S1</h5> 
            <div class="row"> <!-- comienzo de S1 -->
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>img1</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <P class="text-center">C1</P>
                    <select class="form-control" name="C1" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="C1-C3-1" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1">
                    <p class="text-center">vs</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <P class="text-center">C3</P>
                    <select class="form-control" name="C3" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="C1-C3-2" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>img2</p>
                </div>
            </div><!-- cierre fila partido --> <!-- cierre S1 -->
        </div> <!-- cierre de lado izquierdo -->

        
        <div class="col-xs-12 col-sm-6 col-md-6"><!-- lado derecho -->
            <!-- 1A vs 4B -->
            <h5 class="text-center">S2</h5> 
            <div class="row"> <!-- comienzo de S2 -->
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>img1</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <P class="text-center">C2</P>
                    <select class="form-control" name="C2" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="C2-C4-1" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1">
                    <p class="text-center">vs</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <P class="text-center">C4</P>
                    <select class="form-control" name="C4" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="C2-C4-2" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>img2</p>
                </div>
            </div><!-- cierre fila partido --> <!-- cierre S2 -->
        </div> <!-- cierre de lado derecho -->
        <br>   
    </div> <!-- cierre DE SEMIFINAL -->
</div>


<!-- tercer puesto -->


<div class="container text-center">
<h4 class="text-center">TERCER PUESTO</h4><br> 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12"><!-- tercer puesto -->
            <!-- PERDEDOR S1 vs PERDEDOR S2 -->
            <div class="row"> <!-- comienzo de TERCER PUEST -->
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>img1</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <P class="text-center">Perdedor S1</P>
                    <select class="form-control" name="S3" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="tercer-1" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1">
                    <p class="text-center">vs</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <P class="text-center">Perdedor S2</P>
                    <select class="form-control" name="S4" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="tercer-2" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>img2</p>
                </div>
            </div><!-- cierre fila partido --> <!-- cierre tercer puesto -->
        </div> <!-- cierre container tercer puesto -->
    </div>    
</div>

<!-- Final -->


<div class="container text-center">
<h4 class="text-center">FINAL</h4><br> 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12"><!-- tercer puesto -->
            <!-- ganador s1 vs ganador s2 -->
            <div class="row"> <!-- comienzo de TERCER PUEST -->
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>img1</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <P class="text-center">Ganador S1</P>
                    <select class="form-control" name="S3" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="final-1" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1">
                    <p class="text-center">vs</p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <P class="text-center">Ganador S2</P>
                    <select class="form-control" name="S4" style="width:120px">
                        <option valiu=argentina>Equipo...</option>
                        <option valiu=argentina>Argentina</option>
                        <option valiu=australia>Australia</option>
                        <option valiu=bolibia>Bolivia</option>
                        <option valiu=brasil>Brasil</option>
                        <option valiu=chile>Chile</option>	
                        <option valiu=colombia>Colombia</option>
                        <option valiu=ecuador>Ecuador</option>
                        <option valiu=paraguay>Paraguay</option>	
                        <option valiu=peru>Perú</option>
                        <option valiu=qatar>Qatar</option>	
                        <option valiu=uruguay>Uruguay</option>
                        <option valiu=venezuela>Venezuela</option>				
                    </select>
                    <select class="form-control" name="final-2" style="width:120px">
                        <option valiu=0>0</option>
                        <option valiu=1>1</option>
                        <option valiu=2>2</option>	
                        <option valiu=3>3</option>	
                        <option valiu=4>4</option>
                        <option valiu=5>5</option>	
                        <option valiu=6>6</option>
                        <option valiu=7>7</option>	
                        <option valiu=8>8</option>	
                        <option valiu=9>9</option>
                        <option valiu=10>10</option>				
                    </select>
                </div>
                <div id="" class="img-wrap col-xs-12 col-sm-2 col-md-2"> <!-- tamaño de la columna para imagen-->
                    <p>img2</p>
                </div>
            </div><!-- cierre fila partido --> <!-- cierre tercer puesto -->
        </div> <!-- cierre container tercer puesto -->
    </div>    
</div>

<br>
<br>
<p>id: <input type="text" name="id"></p>
<input  type="submit" name="submit" value="enviar" style="width:120px">
<br>
</div><!-- cierre container principal -->
</form><!-- cierre del formulario -->
</body>
</html>