<?php
require('../../assets/fpdf186/fpdf.php');

// variables para la empresa
$nombre_empresa=$_POST['nom_emp'];
$ubicacion_empresa=$_POST['ubi'];
$cargo_ofertado=$_POST['cargo'];
$salario_ofertado=$_POST['salario'];

$salario_texto=numero_a_texto($salario_ofertado);

$dia_inicio=$_POST['day_inicio'];
$mes_inicio=$_POST['month_inicio'];
$año_inicio=$_POST['year_inicio'];
$fecha_inicio_contrato = sprintf("%04d-%02d-%02d", $año_inicio, $mes_inicio, $dia_inicio);
$fecha_inicio_texto = fecha_a_texto($fecha_inicio_contrato);


$dia_fin=$_POST['day_fin'];
$mes_fin=$_POST['month_fin'];
$año_fin=$_POST['year_fin'];
$fecha_fin_contrato = sprintf("%04d-%02d-%02d", $año_fin, $mes_fin, $dia_fin);
$fecha_fin_texto = fecha_a_texto($fecha_fin_contrato);

$funcion_en_empresa=$_POST['funcion'];
$area_en_empresa=$_POST['area'];

//Variables para el representante de la empresa
$nombre_representante=$_POST['R_nom'];
$cedula_representante=$_POST['R_ced'];
$estado_civil_representante=$_POST['R_estado_civil'];
$nacionalidad_representante=$_POST['nacion_repre'];
$domicilio_representante=$_POST['R_Dom'];


//Variables para el contratado
$nombre_contratado=$_POST['C_nom'];
$cedula_contratado=$_POST['c_ced'];
$estado_civil_contratado=$_POST['c_estado_civil'];
$nacionalidad_contratado=$_POST['c_nacion'];
$domicilio_contratado=$_POST['c_domicilio'];
$dia = $_POST['day'];
$mes = $_POST['month'];
$año = $_POST['year'];


$fecha_nacimiento_contratado = sprintf("%04d-%02d-%02d", $año, $mes, $dia);


// ----------------------------Funciones para calculos adicionales

//Convertir la edad de un número a texto
function numero_a_texto($numero) {
    $unidades = [
        0 => 'cero', 1 => 'uno', 2 => 'dos', 3 => 'tres', 4 => 'cuatro', 5 => 'cinco', 
        6 => 'seis', 7 => 'siete', 8 => 'ocho', 9 => 'nueve'
    ];

    $decenas = [
        10 => 'diez', 11 => 'once', 12 => 'doce', 13 => 'trece', 14 => 'catorce', 
        15 => 'quince', 16 => 'dieciséis', 20 => 'veinte', 30 => 'treinta', 
        40 => 'cuarenta', 50 => 'cincuenta', 60 => 'sesenta', 70 => 'setenta', 
        80 => 'ochenta', 90 => 'noventa'
    ];

    $centenas = [
        100 => 'cien', 200 => 'doscientos', 300 => 'trescientos', 400 => 'cuatrocientos',
        500 => 'quinientos', 600 => 'seiscientos', 700 => 'setecientos', 800 => 'ochocientos',
        900 => 'novecientos'
    ];

    if ($numero < 10) {
        return $unidades[$numero];
    } elseif ($numero < 20) {
        return $decenas[$numero];
    } elseif ($numero < 100) {
        $decena = intval($numero / 10) * 10;
        $unidad = $numero % 10;
        return $unidad == 0 ? $decenas[$decena] : $decenas[$decena] . ' y ' . $unidades[$unidad];
    } elseif ($numero < 1000) {
        $centena = intval($numero / 100) * 100;
        $resto = $numero % 100;
        return $resto == 0 ? $centenas[$centena] : $centenas[$centena] . ' ' . numero_a_texto($resto);
    } elseif ($numero < 1000000) {
        $miles = intval($numero / 1000);
        $resto = $numero % 1000;
        $miles_texto = $miles == 1 ? "mil" : numero_a_texto($miles) . " mil";
        return $resto == 0 ? $miles_texto : $miles_texto . ' ' . numero_a_texto($resto);
    } elseif ($numero < 1000000000) {
        $millones = intval($numero / 1000000);
        $resto = $numero % 1000000;
        $millones_texto = $millones == 1 ? "un millón" : numero_a_texto($millones) . " millones";
        return $resto == 0 ? $millones_texto : $millones_texto . ' ' . numero_a_texto($resto);
    } else {
        return "Cantidad fuera de rango";
    }
}

list($year, $month, $day) = explode('-', $fecha_nacimiento_contratado);
$fecha_nacimiento = new DateTime($fecha_nacimiento_contratado);
$hoy = new DateTime();
$edad_numero_contratado = $hoy->diff($fecha_nacimiento)->y;
$edad_letras_contratado = numero_a_texto($edad_numero_contratado);

//función para convertir la fecha de numero a texto
function fecha_a_texto($fecha) {
 
    $fecha_formateada = DateTime::createFromFormat('Y-m-d', $fecha);

    if (!$fecha_formateada) {
        return "Fecha no válida";
    }

    $meses = [
        1 => 'enero', 2 => 'febrero', 3 => 'marzo', 4 => 'abril', 5 => 'mayo', 6 => 'junio',
        7 => 'julio', 8 => 'agosto', 9 => 'septiembre', 10 => 'octubre', 11 => 'noviembre', 12 => 'diciembre'
    ];
    
    $dia = $fecha_formateada->format('j'); 
    $mes = $meses[$fecha_formateada->format('n')];
    $anio = $fecha_formateada->format('Y'); 
    
    return "$dia de $mes de $anio";
}

//Función para convertir el día en letras y dar el formato deseado
function fecha_a_texto_extendido($fecha) {
    $fecha_formateada = DateTime::createFromFormat('Y-m-d', $fecha);

    if (!$fecha_formateada) {
        return "Fecha no válida";
    }

    $meses = [
        1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo', 6 => 'Junio',
        7 => 'Julio', 8 => 'Agosto', 9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre'
    ];
    
    $dia = $fecha_formateada->format('j');
    $dia_en_letras = numero_a_texto($dia); 
    $mes = $meses[$fecha_formateada->format('n')];
    $anio = $fecha_formateada->format('Y');
    
    return "$dia_en_letras ($dia) días del mes de $mes de $anio";
}

// Transformando la fecha de inicio de contrato a texto extendido
$fecha_inicio_trabajo = fecha_a_texto_extendido($fecha_inicio_contrato);

//Estructura asignada a la hoja del PDF
class PDF extends FPDF
{ 
    function Header()
    {  
    }
    function Footer()
    {
      
        $this->SetY(-15);
      
        $this->SetFont('Arial', 'I', 8);
   
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }
}


$pdf = new PDF();
$pdf->SetMargins(20, 20, 20); 
$pdf->AddPage();

//primer párrafo:
$text = "Entre la firma personal, $nombre_empresa, debidamente inscrita por ante Registro Mercantil Primero de la Circunscripción Judicial del Estado Táchira, domiciliada en $ubicacion_empresa, representada en este acto por $nombre_representante, mayor de edad, $nacionalidad_representante, titular de la Cédula de Identidad No. V-$cedula_representante, $estado_civil_representante, quien a los efectos del presente contrato se denominará \"LA ENTIDAD DE TRABAJO\" por una parte, y por la otra, el (la) ciudadano (a), $nombre_contratado , $nacionalidad_contratado. de $edad_letras_contratado ($edad_numero_contratado) años de edad, titular de la cédula de identidad No. V-$cedula_contratado, De estado civil $estado_civil_contratado, domiciliado (a) en $domicilio_contratado y hábil, quien en adelante y a los mismos efectos se denominará \"EL CONTRATADO\", se ha convenido en celebrar como en efecto se celebra el presente CONTRATO DE TRABAJO A TIEMPO DETERMINADO, de conformidad con los artículos 59, 60 y 61 de la Ley Orgánica del Trabajo para los Trabajadores y Trabajadoras, el cual se regirá por las siguientes cláusulas:\n\n";

//Segundo Párrafo:
$text.="PRIMERA: \"EL CONTRATADO\" prestará sus servicios a LA ENTIDAD DE TRABAJO bajo un contrato a tiempo determinado, para atender tareas específicas derivadas de la naturaleza de la empresa, con vigencia desde el $fecha_inicio_texto hasta el $fecha_fin_texto, siendo renovable si ambas partes así lo acuerdan. LA ENTIDAD DE TRABAJO se reserva el derecho de realizar evaluaciones de desempeño para determinar la continuidad de la relación laboral.\n\n";

//Tercer Párrafo:
$text .= "SEGUNDO: EL CONTRATADO se compromete a prestar sus servicios a $nombre_empresa en el cargo de $cargo_ofertado en el área de $area_en_empresa, dentro del horario establecido por LA ENTIDAD DE TRABAJO, de lunes a viernes, con descansos los fines de semana. Dichos horarios podrán ser modificados según las necesidades de la empresa, respetando siempre los límites establecidos por la legislación laboral vigente.\n\n";

//Cuarta párrafo:
$text .= "TERCERA: El objetivo principal del CONTRATADO será desempeñar las actividades relacionadas con $funcion_en_empresa, así como cualquier otra tarea inherente a su cargo que le sea asignada por su superior directo.\n\n";

//Quinto párrafo
$text .= "CUARTA: Como compensación por sus servicios, LA ENTIDAD DE TRABAJO pagará al CONTRATADO una remuneración mensual de $salario_texto bolívares (Bs.  $salario_ofertado), la cual se cancelará en pagos semanales mediante depósito bancario o cualquier otro medio acordado entre las partes. Además, EL CONTRATADO recibirá los beneficios legales estipulados por la Ley Orgánica del Trabajo y demás normativas aplicables.\n\n";


//Sexto parrafo
$text .= "QUINTA: EL CONTRATADO se compromete a cumplir con los Procedimientos de LA ENTIDAD DE TRABAJO, así como con las políticas, reglamentos internos, y disposiciones dictadas por la empresa, respetando las normas laborales vigentes y todas las disposiciones aplicables en el desempeño de sus funciones.\n\n";

//Septimo párrafo
$text .= "SEXTA: EL CONTRATADO deberá proporcionar de manera oportuna y completa toda la información que sea requerida por el representante de la empresa. Asimismo, estará obligado a asistir a reuniones u otras actividades necesarias, independientemente del lugar donde se realicen.\n\n";

//Octavo párrafo
$text .= "SEPTIMA: EL CONTRATADO se compromete a cumplir sus funciones con diligencia, responsabilidad y ética. Será responsable de cualquier conducta que, por dolo, negligencia, imprudencia o falta de pericia, cause perjuicio a la empresa, respondiendo patrimonialmente por los daños ocasionados y exonerando de responsabilidad a LA ENTIDAD DE TRABAJO.\n\n";

//Noveno Párrafo
$text .= "OCTAVA: LA ENTIDAD DE TRABAJO se reserva el derecho de rescindir el presente contrato si los servicios prestados no cumplen con los lineamientos establecidos o si EL CONTRATADO actúa con negligencia, imprudencia, falta de pericia o mala fe, perjudicando a LA ENTIDAD DE TRABAJO o sus asociados. Además de las causales previstas por la ley, el incumplimiento de las normas internas de la empresa será motivo justificado para la terminación del contrato y la relación laboral.\n\n";

//Decimo Párrafo
$text .= "NOVENA: EL CONTRATADO se compromete a mantener la más estricta confidencialidad sobre toda la información y conocimientos adquiridos durante la prestación de sus servicios a LA ENTIDAD DE TRABAJO. Asimismo, declara que no realizará, por cuenta propia o ajena, actividades que puedan afectar los intereses de la empresa o que sean contrarias a los principios de lealtad y fidelidad hacia su empleador. El incumplimiento de esta obligación facultará a LA ENTIDAD DE TRABAJO para tomar las acciones legales pertinentes por los daños ocasionados.\n\n";

//Décimo primer párrafo
$text .= "DECIMA: La interpretación de este Contrato se guiará por el espíritu, propósito y razón que motivaron su firma. Cualquier imprevisto será resuelto conforme a la legislación aplicable. Las dudas o controversias que no puedan resolverse de forma amistosa serán decididas por los Tribunales competentes de la Circunscripción Judicial del Estado Táchira ";

$text .= "Así lo decimos y firmamos por vía privada pero con carácter irrevocable en la ciudad de San Cristóbal, a los $fecha_inicio_trabajo.-\n\n\n";

$text .= "                  LA ENTIDAD DE TRABAJO                            EL CONTRATADO";

$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 8, utf8_decode($text));
$pdf->Output();
?>
