<?php
require('../../assets/fpdf186/fpdf.php');

// variables para la empresa
$nombre_empresa=$_POST['nom_emp'];
$ubicacion_empresa=$_POST['ubi'];
$cargo_ofertado=$_POST['cargo'];
$salario_ofertado=$_POST['salario'];

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
        0 => 'cero', 1 => 'uno', 2 => 'dos', 3 => 'tres', 4 => 'cuatro', 
        5 => 'cinco', 6 => 'seis', 7 => 'siete', 8 => 'ocho', 9 => 'nueve'
    ];
    
    $decenas = [
        10 => 'diez', 11 => 'once', 12 => 'doce', 13 => 'trece', 14 => 'catorce', 
        15 => 'quince', 16 => 'dieciséis', 20 => 'veinte', 30 => 'treinta', 
        40 => 'cuarenta', 50 => 'cincuenta', 60 => 'sesenta', 70 => 'setenta', 
        80 => 'ochenta', 90 => 'noventa'
    ];
    
    if ($numero < 10) {
        return $unidades[$numero];
    } elseif ($numero < 20) {
        return $decenas[$numero];
    } else {
        $decena = intval($numero / 10) * 10;
        $unidad = $numero % 10;
        if ($unidad == 0) {
            return $decenas[$decena];
        } else {
            return $decenas[$decena] . ' y ' . $unidades[$unidad];
        }
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
$text = "Entre la firma personal, $nombre_empresa, debidamente inscrita por ante Registro Mercantil Primero de la Circunscripción Judicial del Estado Táchira, en fecha 01 de agosto de 2024, anotado bajo el No. 78, Tomo 12-A, domiciliada en $ubicacion_empresa, representada en este acto por $nombre_representante, mayor de edad, $nacionalidad_representante, titular de la Cédula de Identidad No. V-$cedula_representante, $estado_civil_representante, quien a los efectos del presente contrato se denominará \"LA ENTIDAD DE TRABAJO\" por una parte, y por la otra, el (la) ciudadano (a), $nombre_contratado , $nacionalidad_contratado. de $edad_letras_contratado ($edad_numero_contratado) años de edad, titular de la cédula de identidad No. V-$cedula_contratado, De estado civil $estado_civil_contratado, domiciliado (a) en $domicilio_contratado y hábil, quien en adelante y a los mismos efectos se denominará \"EL CONTRATADO\", se ha convenido en celebrar como en efecto se celebra el presente CONTRATO DE TRABAJO A TIEMPO DETERMINADO, de conformidad con los artículos 59, 60 y 61 de la Ley Orgánica del Trabajo para los Trabajadores y Trabajadoras, el cual se regirá por las siguientes cláusulas:\n\n";

//Segundo Párrafo:
$text .= "PRIMERA: \"EL CONTRATADO prestará sus servicios a LA ENTIDAD DE TRABAJO en un Contrato a TIEMPO DETERMINADO, con el objeto de cubrir las actividades extras que se presentan por incremento en la producción de la firma personal, por los pedidos de inicio de año, posterior al reintegro de las vacaciones colectivas, además de la puesta en marcha de todo el proceso productivo, lo que se extiende por varios meses, después de inicio de operaciones por lo que se contratan los servicios temporales de EL CONTRATADO, conforme lo preceptúa el dispositivo de los artículos 62 y 64 de la Ley Orgánica del Trabajo, Las Trabajadoras y Trabajadores (LOTTT), literal a, por lo que inicia el $fecha_inicio_texto, teniendo un tiempo de duración hasta el $fecha_fin_texto, siendo este contrato renovable por mutuo acuerdo entre las partes, en caso de que medien razones especiales que justifiquen su prórroga., LA ENTIDAD DE TRABAJO realizará las correspondientes evaluaciones de desempeño y otras que considere necesarias al CONTRATADO a fin de determinar la continuidad de la relación laboral, siendo que en el caso de que la misma proceda permanecerán vigentes las condiciones aquí convenidas.\n\n";

//Tercer Párrafo:
$text .= "SEGUNDA: EL CONTRATADO se compromete a prestar sus servicios a $nombre_empres, como $cargo_ofertado en la firma personal, o en cualquier otro lugar que se le indique eventualmente cuando circunstancias así lo requieran. El servicio será prestado en cualquiera de los dos horarios o turnos convenidos en la empresa ya sea el diurno o mixto, según las necesidades en el área de $area, de Lunes a Viernes, con los días sábados y domingos de descanso, así como los feriados de ley. Dichos horarios, podrán ser modificados según las necesidades de la firma personal lo cuál se comunicará previamente al trabajador, pero siempre dentro de los limites de jormada establecidos en la Ley Orgánica del Trabajo para los Trabajadores y Trabajadoras, quien en éste acto manifiesta estar conforme.\n\n";

// $text .= "TERCERA: EL CONTRATADO tendrá en su cargo como Objetivo principal: $funcion, realizar las distintas actividades del proceso. En éste orden de ideas, el trabajador tendrá que cumplir las funciones inherentes a su cargo y a la fase del proceso laboral en el que se desempeñe. Igualmente se obliga a acatar las instrucciones que le imparta su jefe inmediato de la ENTIDAD DE TRABAJO, y a realizar cualquier otra actividad o función inherente a su cargo y relacionada con su desempeño dentro de la empresa.\n\n";

// $text .= "CUARTA: Como remuneración por sus servicios LA ENTIDAD DE TRABAJO, le pagará a EL CONTRATADO, mensualmente la cantidad de ".monto_aaa_texto($salario) ." (Bs. $salario) el cual será cancelado en pagos semanales, mediante depósito en Cuenta Bancaria que se aperture a tal efecto, o en su defecto en el domicilio del patrono, mediante otro instrumento o forma de pago. Adicionalmente EL CONTRATADO recibirá todos los beneficios de ley establecidos en la Ley Orgánica del Trabajo para los Trabajadores y Trabajadoras y la demás normativa especial vigente.\n\n";

//Sexto parrafo
$text .= "QUINTA: EL CONTRATADO se compromete a cumplir con el Manual de Normas y Procedimientos que existe en LA ENTIDAD DE TRABAJO, así como todas las políticas reglamento interno, órdenes y disposiciones dictadas por LA ENTIDAD DE TRABAJO, así como con las normas contenidas en la Ley Orgánica del Trabajo para los Trabajadores y Trabajadoras, Reglamento de la Ley Orgánica del Trabajo, en la Ley Orgánica de Prevención, Condiciones y Medio Ambiente de Trabajo, su Reglamento y demás disposiciones legales y reglamentarias vigentes en la materia. A éste respecto, deberá mantener una conducta acorde con los procedimientos que a tal efecto dicte LA ENTIDAD DE TRABAJO y cumplirá con la normativa pertinente en materia de Salud y Seguridad Laboral, obligándose a suscribir toda la documentación pertinente y a portar los equipos de protección personal según sea el caso. Igualmente EL CONTRATADO declara expresamente que LA ENTIDAD DE TRABAJO lo ha instruido sobre los riesgos posibles que se puedan presentar en el desarrollo de su trabajo.\n\n";

//Septimo párrafo
$text .= "SEXTA: EL CONTRATADO deberá proporcionar en forma oportuna y completa toda la información que el representante de la firma personal requiera, así mismo estará obligado a acudir a las reuniones, talleres y otros que sean necesarios, independientemente del lugar donde se lleven a cabo.\n\n";

//Octavo párrafo
$text .= "SEPTIMA: EL CONTRATADO igualmente se compromete a cumplir sus funciones con probidad y responsabilidad y en este sentido, será responsable de las conductas que por dolo o negligencia, imprudencia e impericia menoscaben o perjudiquen a la empresa, respondiendo patrimonialmente por los daños ocasionados, dejando a salvo a LA ENTIDAD DE TRABAJO.\n\n";

//Noveno Párrafo
$text .= "OCTAVA: LA ENTIDAD DE TRABAJO, se reserva expresamente el derecho de rescindir el presente contrato cuando la prestación del servicio o ejecución de los trabajos encomendados, no se realicen de acuerdo con los lineamientos señalados o cuando EL CONTRATADO actuase con negligencia, imprudencia, impericia o malas intenciones en perjuicio de LA ENTIDAD DE TRABAJO y sus relacionados. Se consideran causas justificadas para poner término al presente contrato y a la relación de trabajo, además de las establecidas en la ley, el incumplimiento de la normativa o reglamento interno de la empresa.\n\n";

//Decimo Párrafo
$text .= "NOVENA: EL CONTRATADO se compromete a mantener en la más absoluta confidencialidad toda la información y conocimientos que adquiera en relación a los servicios prestados a LA ENTIDAD DE TRABAJO. Asimismo, EL CONTRATADO declara expresamente que no ejecutará por cuenta propia o ajena, dentro o fuera de la sede de la empresa, trabajos o actividades que pudieran afectar los intereses de la misma, por ser contrarios a la fidelidad y lealtad debidos al patrono. El incumplimiento por parte de EL CONTRATADO de ésta obligación, otorgará el derecho a LA ENTIDAD DE TRABAJO de ejercer las acciones legales por los daños y perjuicios ocasionados por dicho incumplimiento.\n\n";

//Décimo primer párrafo
$text .= "DECIMA: En lo relativo a la interpretación de este Contrato, sus signatarios atenderán al espíritu, propósito y razón que los anima a su celebración. Los imprevistos surgidos se resolverán de conformidad con lo preceptuado en la Legislación de la Materia aplicable al caso. Las dudas o controversias de cualquier naturaleza que pudieran suscitarse con motivo del presente contrato y que no puedan ser resueltas amigablemente por las partes, serán decididas por los Tribunales competentes de la Circunscripción Judicial del Estado Táchira ";

$text .= "Así lo decimos y firmamos por vía privada pero con carácter irrevocable en la ciudad de San Cristóbal, a los $fecha_inicio_trabajo.-\n\n\n";

$text .= "                  LA ENTIDAD DE TRABAJO                            EL CONTRATADO";




$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 8, utf8_decode($text));
$pdf->Output();
?>
