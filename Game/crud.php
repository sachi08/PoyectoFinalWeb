<?php

    !isset($_POST) ? die('Acceso denegado') : '';
    require 'conexion.class.php';

    $db = new Conexion();
    $num='0';
    $name='hola';
    session_start();
    if (isset($_SESSION['user_id'])) {
        $num=($_SESSION['user_id']);
        $name=($_SESSION['user']);
      }

    if(isset($_POST['submit'])){
        $jugador_ID= $num;
        $jugador_USER= $name; 
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
        $query = "INSERT INTO `resultados`(`jugador_id`, `user`, `ARG-CHI`, `AUS-URU`, `PAR-BOL`, `ARG-URU`, `CHI-BOL`, `PAR-AUS`, `ARG-PAR`, `URU-CHI`, `AUS-BOL`, `CHI-PAR`, `AUS-ARG`, `BOL-URU`, `CHI-AUS`, `BOL-ARG`, `URU-PAR`, `COL-ECU`, `BRA-VEN`, `PER-QAT`, `COL-VEN`, `ECU-QAT`, `PER-BRA`, `COL-PER`, `VEN-ECU`, `BRA-QAT`, `BRA-COL`, `ECU-PER`, `QAT-VEN`, `QAT-COL`, `ECU-BRA`, `VEN-PER`, `B1-A4`, `B2-A3`, `A1-B4`, `A2-B3`, `SEMI1`, `SEMI2`, `TERCER`, `FINAL`, `cuartos`, `semis`, `terceros`, `finalistas`) VALUES ('$jugador_ID', '$jugador_USER', '$ARG_CHI', '$AUS_URU', '$PAR_BOL', '$ARG_URU', '$CHI_BOL', '$PAR_AUS', '$ARG_PAR', '$URU_CHI', '$AUS_BOL', '$CHI_PAR', '$AUS_ARG', '$BOL_URU', '$CHI_AUS', '$BOL_ARG', '$URU_PAR', '$COL_ECU', '$BRA_VEN', '$PER_QAT', '$COL_VEN', '$ECU_QAT', '$PER_BRA', '$COL_PER', '$VEN_ECU', '$BRA_QAT', '$BRA_COL', '$ECU_PER', '$QAT_VEN', '$QAT_COL', '$ECU_BRA', '$VEN_PER', '$B1_A4', '$B2_A3', '$A1_B4', '$A2_B3', '$SEMI1', '$SEMI2', '$TERCER', '$FINAL', '$CUARTOS', '$SEMIS', '$TERCEROS', '$FINALISTAS')";
        /* echo $query; */
        /* echo '<br><br><br>'; */    
        $db -> query($query); #funcion que guarda en la base de datos

    }
?>

 <?php
require('../FPDF/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    //ractangulo
    $this->SetFillColor(46,64,83);
    $this->Rect(0,0,210,35,'F');
    // Logo
    $this->Image('img/logo.png',5,5,25,'','png');
    //global $title;
    // Arial bold 15
    $this->SetFont('Arial','B',25);
    // Calculamos ancho y posición del título.
    $this->SetX(10);
    // Movernos a la derecha
    $this->Cell(65);
    $this->SetDrawColor(255,255,28);
    $this->SetFillColor(0,195,255);
    $this->SetTextColor(255,255,28);
    // Título
    $this->Cell(60,10,'Tus Resultados',0,0,'C',0);
    // Salto de línea
    $this->Ln(25);
}

// Pie de página
function Footer()
{
    //ractangulo
    $this->SetFillColor(46,64,83);
    $this->Rect(0,280,210,25,'F');
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    
    $this->SetTextColor(255,255,28);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',15);

//encabezado de ls grupos
$pdf->SetFont('Times','B',20);
$pdf->Ln(6);
$pdf->SetTextColor(0,195,255);
$pdf->Cell(90,5,'GRUPO A',0,0,'C');
$pdf->Cell(10,5,'',0,0,'C',);
$pdf->Cell(90,5,'GRUPO B',0,0,'C');
$pdf->Ln();

//Primera Fecha
$pdf->SetFont('Times','',10);
$pdf->Ln(6);
$pdf->SetFillColor(255,255,28);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,5,'Fecha 1',0,0,'C',1);
$pdf->Cell(10,5,'',0,0,'C',);
$pdf->Cell(90,5,'Fecha 1',0,0,'C',1);
$pdf->Ln(9);
    //primera columna
    $pdf->Image('img/escudo_argentina.png',7,59,10,'','png');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(10,10,$_POST['ARG-CHI-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['ARG-CHI-2'],0,0,'L');
    $pdf->Image('img/escudo_chile.png',27,60,10,'','png');
    //Segunda columna
    $pdf->Image('img/escudo_australia.png',40,60,10,'','png');
    $pdf->Cell(27,10,$_POST['AUS-URU-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['AUS-URU-2'],0,0,'L');
    $pdf->Image('img/escudo_uruguay.png',60,60,10,'','png');
    //tercera columna
    $pdf->Image('img/escudo_paraguay.png',70,60,10,'','png');
    $pdf->Cell(21,10,$_POST['PAR-BOL-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['PAR-BOL-2'],0,0,'L');
    $pdf->Image('img/escudo_bolivia.png',90,60,10,'png');
    //cuarta columna
    $pdf->Image('img/escudo_colombia.png',110,60,10,'','png');
    $pdf->Cell(32,10,$_POST['COL-VEN-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['COL-VEN-2'],0,0,'L');
    $pdf->Image('img/escudo_ecuador.png',130,60,10,'','png');
    //quinta columna
    $pdf->Image('img/escudo_brasil.png',140,60,10,'','png');
    $pdf->Cell(22,10,$_POST['BRA-VEN-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['BRA-VEN-2'],0,0,'L');
    $pdf->Image('img/escudo_brasil.png',160,60,10,'','png');
    //sexta columna
    $pdf->Image('img/escudo_peru.png',170,60,10,'','png');
    $pdf->Cell(21,10,$_POST['PER-QAT-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['PER-QAT-2'],0,0,'L');
    $pdf->Image('img/escudo_qatar.png',190,60,10,'png');


//Segunda Fecha
$pdf->SetFont('Times','',10);
$pdf->Ln(15);
$pdf->SetFillColor(255,255,28);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,5,'Fecha 2',0,0,'C',1);
$pdf->Cell(10,5,'',0,0,'C',);
$pdf->Cell(90,5,'Fecha 2',0,0,'C',1);
$pdf->Ln(9);
    //primera columna
    $pdf->Image('img/escudo_argentina.png',7,85,10,'','png');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(10,10,$_POST['ARG-URU-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['ARG-URU-2'],0,0,'L');
    $pdf->Image('img/escudo_uruguay.png',27,85,10,'','png');
    //Segunda columna
    $pdf->Image('img/escudo_chile.png',40,85,10,'','png');
    $pdf->Cell(27,10,$_POST['CHI-BOL-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['CHI-BOL-2'],0,0,'L');
    $pdf->Image('img/escudo_bolivia.png',60,85,10,'','png');
    //tercera columna
    $pdf->Image('img/escudo_paraguay.png',70,85,10,'','png');
    $pdf->Cell(21,10,$_POST['PAR-AUS-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['PAR-AUS-2'],0,0,'L');
    $pdf->Image('img/escudo_australia.png',90,85,10,'png');
    //cuarta columna
    $pdf->Image('img/escudo_colombia.png',110,85,10,'','png');
    $pdf->Cell(32,10,$_POST['COL-VEN-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['COL-VEN-2'],0,0,'L');
    $pdf->Image('img/escudo_colombia.png',130,85,10,'','png');
    //quinta columna
    $pdf->Image('img/escudo_ecuador.png',140,85,10,'','png');
    $pdf->Cell(22,10,$_POST['ECU-QAT-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['ECU-QAT-2'],0,0,'L');
    $pdf->Image('img/escudo_qatar.png',160,85,10,'','png');
    //sexta columna
    $pdf->Image('img/escudo_peru.png',170,85,10,'','png');
    $pdf->Cell(21,10,$_POST['PER-BRA-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['PER-BRA-2'],0,0,'L');
    $pdf->Image('img/escudo_brasil.png',190,85,10,'png');

//tercera Fecha
$pdf->SetFont('Times','',10);
$pdf->Ln(15);
$pdf->SetFillColor(255,255,28);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,5,'Fecha 3',0,0,'C',1);
$pdf->Cell(10,5,'',0,0,'C',);
$pdf->Cell(90,5,'Fecha 3',0,0,'C',1);
$pdf->Ln(9);
    //primera columna
    $pdf->Image('img/escudo_argentina.png',7,110,10,'','png');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(10,10,$_POST['ARG-PAR-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['ARG-PAR-2'],0,0,'L');
    $pdf->Image('img/escudo_paraguay.png',27,110,10,'','png');
    //Segunda columna
    $pdf->Image('img/escudo_uruguay.png',40,110,10,'','png');
    $pdf->Cell(24,10,$_POST['URU-CHI-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['URU-CHI-2'],0,0,'L');
    $pdf->Image('img/escudo_chile.png',58,110,10,'','png');
    //tercera columna
    $pdf->Image('img/escudo_australia.png',70,110,10,'','png');
    $pdf->Cell(23,10,$_POST['AUS-BOL-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['AUS-BOL-2'],0,0,'L');
    $pdf->Image('img/escudo_bolivia.png',90,110,10,'png');
    //cuarta columna
    $pdf->Image('img/escudo_colombia.png',110,110,10,'','png');
    $pdf->Cell(32,10,$_POST['COL-PER-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['COL-PER-2'],0,0,'L');
    $pdf->Image('img/escudo_peru.png',130,110,10,'','png');
    //quinta columna
    $pdf->Image('img/escudo_ecuador.png',140,110,10,'','png');
    $pdf->Cell(22,10,$_POST['VEN-ECU-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['VEN-ECU-2'],0,0,'L');
    $pdf->Image('img/escudo_ecuador.png',160,110,10,'','png');
    //sexta columna
    $pdf->Image('img/escudo_brasil.png',170,110,10,'','png');
    $pdf->Cell(21,10,$_POST['BRA-QAT-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['BRA-QAT-2'],0,0,'L');
    $pdf->Image('img/escudo_qatar.png',190,110,10,'png');

//cuarta Fecha
$pdf->SetFont('Times','',10);
$pdf->Ln(15);
$pdf->SetFillColor(255,255,28);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,5,'Fecha 4',0,0,'C',1);
$pdf->Cell(10,5,'',0,0,'C',);
$pdf->Cell(90,5,'Fecha 4',0,0,'C',1);
$pdf->Ln(9);
    //primera columna
    $pdf->Image('img/escudo_chile.png',7,133,10,'','png');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(10,10,$_POST['CHI-PAR-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['CHI-PAR-2'],0,0,'L');
    $pdf->Image('img/escudo_paraguay.png',27,133,10,'','png');
    //Segunda columna
    $pdf->Image('img/escudo_australia.png',40,133,10,'','png');
    $pdf->Cell(27,10,$_POST['AUS-ARG-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['AUS-ARG-2'],0,0,'L');
    $pdf->Image('img/escudo_argentina.png',60,133,10,'','png');
    //tercera columna
    $pdf->Image('img/escudo_bolivia.png',70,133,10,'','png');
    $pdf->Cell(21,10,$_POST['BOL-URU-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['BOL-URU-2'],0,0,'L');
    $pdf->Image('img/escudo_uruguay.png',90,133,10,'png');
    //cuarta columna
    $pdf->Image('img/escudo_brasil.png',110,133,10,'','png');
    $pdf->Cell(32,10,$_POST['BRA-COL-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['BRA-COL-2'],0,0,'L');
    $pdf->Image('img/escudo_colombia.png',130,133,10,'','png');
    //quinta columna
    $pdf->Image('img/escudo_ecuador.png',140,133,10,'','png');
    $pdf->Cell(22,10,$_POST['ECU-PER-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['ECU-PER-2'],0,0,'L');
    $pdf->Image('img/escudo_peru.png',160,133,10,'','png');
    //sexta columna
    $pdf->Image('img/escudo_qatar.png',170,133,10,'','png');
    $pdf->Cell(21,10,$_POST['QAT-VEN-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['QAT-VEN-2'],0,0,'L');
    $pdf->Image('img/escudo_qatar.png',190,133,10,'png');

//quinta Fecha
$pdf->SetFont('Times','',10);
$pdf->Ln(15);
$pdf->SetFillColor(255,255,28);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,5,'Fecha 5',0,0,'C',1);
$pdf->Cell(10,5,'',0,0,'C',);
$pdf->Cell(90,5,'Fecha 5',0,0,'C',1);
$pdf->Ln(9);
    //primera columna
    $pdf->Image('img/escudo_chile.png',7,157,10,'','png');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(10,10,$_POST['CHI-AUS-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['CHI-AUS-2'],0,0,'L');
    $pdf->Image('img/escudo_australia.png',27,157,10,'','png');
    //Segunda columna
    $pdf->Image('img/escudo_bolivia.png',40,157,10,'','png');
    $pdf->Cell(27,10,$_POST['BOL-ARG-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['BOL-ARG-2'],0,0,'L');
    $pdf->Image('img/escudo_argentina.png',60,157,10,'','png');
    //tercera columna
    $pdf->Image('img/escudo_uruguay.png',70,157,10,'','png');
    $pdf->Cell(21,10,$_POST['URU-PAR-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['URU-PAR-2'],0,0,'L');
    $pdf->Image('img/escudo_paraguay.png',90,157,10,'png');
    //cuarta columna
    $pdf->Image('img/escudo_qatar.png',110,157,10,'','png');
    $pdf->Cell(32,10,$_POST['QAT-COL-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['QAT-COL-2'],0,0,'L');
    $pdf->Image('img/escudo_colombia.png',130,157,10,'','png');
    //quinta columna
    $pdf->Image('img/escudo_ecuador.png',140,157,10,'','png');
    $pdf->Cell(22,10,$_POST['ECU-BRA-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['ECU-BRA-2'],0,0,'L');
    $pdf->Image('img/escudo_brasil.png',160,157,10,'','png');
    //sexta columna
    $pdf->Image('img/escudo_peru.png',170,157,10,'','png');
    $pdf->Cell(21,10,$_POST['VEN-PER-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['VEN-PER-2'],0,0,'L');
    $pdf->Image('img/escudo_peru.png',190,157,10,'png');


//linea
$pdf->SetDrawColor(0,195,255);
$pdf->SetLink(3);
$pdf->Line(10,175,200,175);

//cuartos de final
$pdf->SetFont('Times','',10);
$pdf->Ln(25);
$pdf->SetFillColor(255,255,28);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,5,'Cuartos De Final',0,0,'C',1);
$pdf->Cell(10,5,'',0,0,'C',);
$pdf->Cell(90,5,'Cuartos De Final',0,0,'C',1);
$pdf->Ln(9);

    //primera columna
    $pdf->Image('img/escudo_'.$_POST['equipo1'].'.png',20,191,10,'','png');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(23,10,$_POST['B1-A4-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['B1-A4-2'],0,0,'L');
    $pdf->Image('img/escudo_'.$_POST['equipo2'].'.png',40,191,10,'','png');
    //Segunda columna
    $pdf->Image('img/escudo_'.$_POST['equipo3'].'.png',60,191,10,'','png');
    $pdf->Cell(33,10,$_POST['B2-A3-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['B2-A3-2'],0,0,'L');
    $pdf->Image('img/escudo_'.$_POST['equipo4'].'.png',80,191,10,'','png');
    //tercera columna
    $pdf->Image('img/escudo_'.$_POST['equipo5'].'.png',120,191,10,'','png');
    $pdf->Cell(51,10,$_POST['A1-B4-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['A1-B4-2'],0,0,'L');
    $pdf->Image('img/escudo_'.$_POST['equipo6'].'.png',140,191,10,'','png');
    //cuarta columna
    $pdf->Image('img/escudo_'.$_POST['equipo7'].'.png',160,191,10,'','png');
    $pdf->Cell(32,10,$_POST['A2-B3-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['A2-B3-2'],0,0,'L');
    $pdf->Image('img/escudo_'.$_POST['equipo8'].'.png',180,191,10,'png');

//linea
$pdf->SetDrawColor(0,195,255);
$pdf->SetLink(3);
$pdf->Line(10,208,200,208);

//semifinal
$pdf->SetFont('Times','',10);
$pdf->Ln(23);
$pdf->SetFillColor(255,255,28);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,5,'Semifinal',0,0,'C',1);
$pdf->Cell(10,5,'',0,0,'C',);
$pdf->Cell(90,5,'Semifinal',0,0,'C',1);
$pdf->Ln(9);

    //primera columna
    $pdf->Image('img/escudo_'.$_POST['C1'].'.png',40,223,10,'','png');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(43,10,$_POST['C1-C3-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['C1-C3-2'],0,0,'L');
    $pdf->Image('img/escudo_'.$_POST['C3'].'.png',60,223,10,'','png');
    //segunda columna
    $pdf->Image('img/escudo_'.$_POST['C2'].'.png',140,223,10,'','png');
    $pdf->Cell(94,10,$_POST['C2-C4-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['C2-C4-2'],0,0,'L');
    $pdf->Image('img/escudo_'.$_POST['C4'].'.png',160,223,10,'png');





//linea
$pdf->SetDrawColor(0,195,255);
$pdf->SetLink(3);
$pdf->Line(10,240,200,240);

//Finales
$pdf->SetFont('Times','',10);
$pdf->Ln(23);
$pdf->SetFillColor(255,255,28);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,5,'Tercer Puesto',0,0,'C',1);
$pdf->Cell(10,5,'',0,0,'C',);
$pdf->Cell(90,5,'Final',0,0,'C',1);
$pdf->Ln(9);

    //primera columna - TERCER PUESTO
    $pdf->Image('img/escudo_'.$_POST['S3'].'.png',40,255,10,'','png');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(43,10,$_POST['tercer-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['tercer-2'],0,0,'L');
    $pdf->Image('img/escudo_'.$_POST['S4'].'.png',60,255,10,'','png');
    //segunda columna - FINAL
    $pdf->Image('img/escudo_'.$_POST['S1'].'.png',140,255,10,'','png');
    $pdf->Cell(94,10,$_POST['final-1'],0,0,'R');
    $pdf->SetFont('Times','',8);
    $pdf->Cell(3,10,'vs',0,0,'C');
    $pdf->SetFont('Times','',10);
    $pdf->Cell(5,10,$_POST['final-2'],0,0,'L');
    $pdf->Image('img/escudo_'.$_POST['S2'].'.png',160,255,10,'png');




$pdf->Output('I','TusResultados'.$name.'pdf',1);

?>