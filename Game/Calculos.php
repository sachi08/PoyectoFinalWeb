<?php
    require 'conexion.class.php';
    $db = new Conexion();
    $jugadores = "SELECT * FROM resultados";

    function endgame($x,$y){
        if  ($x > $y){
            return 1;
        }elseif($x < $y){
            return 2;
        }else{
            return 0;
        }
    function detect($a){
        if($a=='xx'){
            return false;
        }else{
            return true;
        }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <div class="container-table">
            <div class="table__title"></div>
            <div class="table__header">ID</div>
            <div class="table__header">User</div>
            <div class="table__header">ARG-CHI</div>
            <div class="table__header">AUS-URU</div>
            <div class="table__header">PAR-BOL</div>



    <?php
        $i=0;
        /* $id_j[];
        $user_j[];
        $ARG_CHI_j[];
        $AUS_URU_j[];
        $PAR_BOL_j[]; */
        $resultados = mysqli_query($db, $jugadores);
        while($row = mysqli_fetch_assoc($resultados)){
        $i++; 
        $id_j[$i] = $row['jugador_id'];
        $user_j[$i] = $row['user'];
        $ARG_CHI_j[$i] = $row['ARG-CHI'];
        $AUS_URU_j[$i] = $row['AUS-URU'];
        $PAR_BOL_j[$i] = $row['PAR-BOL'];
        $puntos[$i] = $row['puntaje'];
        echo $id_j[$i];
        echo $user_j[$i];
        echo $ARG_CHI_j[$i];
        echo $AUS_URU_j[$i];
        echo $PAR_BOL_j[$i];
        echo '<br>';
        } 
        mysqli_free_result($resultados);
        echo '<br><br><br>';
        $R1=0;
        $R2=0;
        for($j=2; $j<= count($id_j); $j++){
            if($ARG_CHI_j[1]==$ARG_CHI_j[$j]){
                $puntos[$j] += 4;
                echo intval(substr($ARG_CHI_j[$j],0,1));
                echo intval(substr($ARG_CHI_j[$j],1,1));
                
            }elseif(endgame(intval(substr($ARG_CHI_j[1],0,1)),intval(substr($ARG_CHI_j[1],1)))==endgame(intval(substr($ARG_CHI_j[$j],0,1)),intval(substr($ARG_CHI_j[$j],1)))){
                echo intval(substr($ARG_CHI_j[$j],0,1));
                echo intval(substr($ARG_CHI_j[$j],1,1));
                $puntos[$j] += 2;
            }else{
                $puntos[$j] += 0;
                echo intval(substr($ARG_CHI_j[$j],0,1));
                echo intval(substr($ARG_CHI_j[$j],1,1)); 
            }
            echo '<br>';
            echo $puntos[$j];
            echo '<br><br><br>';
        } 

    ?>
        </div>
    </body>
</html>








