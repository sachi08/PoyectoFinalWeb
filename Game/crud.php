<?php

    !isset($_POST) ? die('Acceso denegado') : '';

    require 'conexion.class.php';

    $db = new Conexion();

    if(isset($_POST['submit'])){
        $jugador_ID= $_POST['id']; 
        $ARG_CHI= $_POST['ARG-CHI-1'].$_POST['ARG-CHI-2'];
        $AUS_URU= $_POST['AUS-URU-1'].$_POST['AUS-URU-2'];
        $PAR_BOL= $_POST['PAR-BOL-1'].$_POST['PAR-BOL-2'];
        $ARG_URU= $_POST['ARG-URU-1'].$_POST['ARG-URU-2'];
        $CHI_BOL= $_POST['CHI-BOL-1'].$_POST['CHI-BOL-2'];
        $PAR_AUS= $_POST['PAR-AUS-1'].$_POST['PAR-AUS-2'];
        $ARG_PAR= $_POST['ARG-PAR-1'].$_POST['ARG-PAR-2'];
        $URU_CHI= $_POST['URU-CHI-1'].$_POST['URU-CHI-2'];
        $AUS_BOL= $_POST['AUS-BOL-1'].$_POST['AUS-BOL-2'];
        $CHI_PAR= $_POST['CHI-PAR-1'].$_POST['CHI-PAR-2'];
        $AUS_ARG= $_POST['AUS-ARG-1'].$_POST['AUS-ARG-2'];
        $BOL_URU= $_POST['BOL-URU-1'].$_POST['BOL-URU-2'];
        $CHI_AUS= $_POST['CHI-AUS-1'].$_POST['CHI-AUS-2'];
        $BOL_ARG= $_POST['BOL-ARG-1'].$_POST['BOL-ARG-2'];
        $URU_PAR= $_POST['URU-PAR-1'].$_POST['URU-PAR-2'];
        $COL_ECU= $_POST['COL-ECU-1'].$_POST['COL-ECU-2'];
        $BRA_VEN= $_POST['BRA-VEN-1'].$_POST['BRA-VEN-2'];
        $PER_QAT= $_POST['PER-QAT-1'].$_POST['PER-QAT-2'];
        $COL_VEN= $_POST['COL-VEN-1'].$_POST['COL-VEN-2'];
        $ECU_QAT= $_POST['ECU-QAT-1'].$_POST['ECU-QAT-2'];
        $PER_BRA= $_POST['PER-BRA-1'].$_POST['PER-BRA-2'];
        $COL_PER= $_POST['COL-PER-1'].$_POST['COL-PER-2'];
        $VEN_ECU= $_POST['VEN-ECU-1'].$_POST['VEN-ECU-2'];
        $BRA_QAT= $_POST['BRA-QAT-1'].$_POST['BRA-QAT-2'];
        $BRA_COL= $_POST['BRA-COL-1'].$_POST['BRA-COL-2'];
        $ECU_PER= $_POST['ECU-PER-1'].$_POST['ECU-PER-2'];
        $QAT_VEN= $_POST['QAT-VEN-1'].$_POST['QAT-VEN-2'];
        $QAT_COL= $_POST['QAT-COL-1'].$_POST['QAT-COL-2'];
        $ECU_BRA= $_POST['ECU-BRA-1'].$_POST['ECU-BRA-2'];
        $VEN_PER= $_POST['VEN-PER-1'].$_POST['VEN-PER-2'];
        $B1_A4= $_POST['B1-A4-1'].$_POST['B1-A4-2'];
        $B2_A3= $_POST['B2-A3-1'].$_POST['B2-A3-2'];
        $A1_B4= $_POST['A1-B4-1'].$_POST['A1-B4-2'];
        $A2_B3= $_POST['A2-B3-1'].$_POST['A2-B3-2'];
        $SEMI1= $_POST['C1-C3-1'].$_POST['C1-C3-2'];
        $SEMI2= $_POST['C2-C4-2'].$_POST['C2-C4-2'];
        $TERCER= $_POST['tercer-1'].$_POST['tercer-2'];
        $FINAL= $_POST['final-1'].$_POST['final-2'];
        $CUARTOS= $_POST['equipo1'].','.$_POST['equipo2'].','.$_POST['equipo3'].','.$_POST['equipo4'].','.$_POST['equipo5'].','.$_POST['equipo6'].','.$_POST['equipo7'].','. $_POST['equipo8'];
        $SEMIS= $_POST['C1'].','.$_POST['C2'].','.$_POST['C3'].','.$_POST['C4'];
        $TERCEROS= $_POST['S3'].','.$_POST['S4'];
        $FINALISTAS= $_POST['S1'].','.$_POST['S2'];
        
        #de esta forma lee la base de datos los datos
        $query = "INSERT INTO `resultados`(`jugador_id`, `ARG-CHI`, `AUS-URU`, `PAR-BOL`, `ARG-URU`, `CHI-BOL`, `PAR-AUS`, `ARG-PAR`, `URU-CHI`, `AUS-BOL`, `CHI-PAR`, `AUS-ARG`, `BOL-URU`, `CHI-AUS`, `BOL-ARG`, `URU-PAR`, `COL-ECU`, `BRA-VEN`, `PER-QAT`, `COL-VEN`, `ECU-QAT`, `PER-BRA`, `COL-PER`, `VEN-ECU`, `BRA-QAT`, `BRA-COL`, `ECU-PER`, `QAT-VEN`, `QAT-COL`, `ECU-BRA`, `VEN-PER`, `B1-A4`, `B2-A3`, `A1-B4`, `A2-B3`, `SEMI1`, `SEMI2`, `TERCER`, `FINAL`, `cuartos`, `semis`, `terceros`, `finalistas`) VALUES ('$jugador_ID', '$ARG_CHI', '$AUS_URU', '$PAR_BOL', '$ARG_URU', '$CHI_BOL', '$PAR_AUS', '$ARG_PAR', '$URU_CHI', '$AUS_BOL', '$CHI_PAR', '$AUS_ARG', '$BOL_URU', '$CHI_AUS', '$BOL_ARG', '$URU_PAR', '$COL_ECU', '$BRA_VEN', '$PER_QAT', '$COL_VEN', '$ECU_QAT', '$PER_BRA', '$COL_PER', '$VEN_ECU', '$BRA_QAT', '$BRA_COL', '$ECU_PER', '$QAT_VEN', '$QAT_COL', '$ECU_BRA', '$VEN_PER', '$B1_A4', '$B2_A3', '$A1_B4', '$A2_B3', '$SEMI1', '$SEMI2', '$TERCER', '$FINAL', '$CUARTOS', '$SEMIS', '$TERCEROS', '$FINALISTAS')";
        echo $query;
        echo '<br><br><br>';    
        $db -> query($query); #funcion que guarda en la base de datos
    
    }


?>