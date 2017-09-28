/* Aqui va el codigo de excel*/
/*Este es el excel*/
<?php
/*$mysqli= new mysqli('localhost','root','','constitucion');
$sql = "SELECT * FROM usuarios where 	Tipos_usuarios_idTipos_usuarios=3";
$resultado=$mysqli->query($sql);*/
/* Anita la huerfanita*/
$conexion = mysqli_connect ("localhost", "root", "");
 mysqli_select_db ($conexion,"constitucion" );
 $sql = "SELECT * FROM usuarios where 	Tipos_usuarios_idTipos_usuarios=3";
 $resultado = mysqli_query ($conexion,$sql ) or die (mysqli_error());
 $registros = mysqli_num_rows ($resultado);

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Mexico_City');
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
/** Include PHPExcel */
require_once dirname(__FILE__) . '/excel/PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
// Set document properties
echo date('H:i:s') , " Set document properties" , EOL;
$objPHPExcel->getProperties()->setCreator("Cecilia Andrade Tinajero")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("PHPExcel Test Document")
							 ->setSubject("PHPExcel Test Document")
							 ->setDescription("Test document for PHPExcel, generated using PHP classes.")
							 ->setKeywords("office PHPExcel php")
							 ->setCategory("Test result file");
// Add some data
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('A')->setWidth(15);
$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('B')->setWidth(15);
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ID Usuario')
            ->setCellValue('B1', 'Nombre');

            $i = 2;
  while ($registro = mysqli_fetch_object ($resultado)) {
     $objPHPExcel->setActiveSheetIndex(0)
          ->setCellValue('A'.$i, $registro->idUsuarios)
           ->setCellValue('B'.$i, $registro->Nombre);
     $i++;
  }
// Rename worksheet
echo date('H:i:s') , " Rename worksheet" , EOL;
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle('Reporte Alumnos');


//Crea una segunda hoja
$objPHPExcel->createSheet();
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(1)->getColumnDimension('A')->setWidth(15);
$objPHPExcel->setActiveSheetIndex(1)->getColumnDimension('B')->setWidth(15);
$objPHPExcel->setActiveSheetIndex(1)
            ->setCellValue('A1', 'Materia')
            ->setCellValue('B1', 'Calificacion');

            $sqlmat = "SELECT Nombre_materia,Calificacion_idCalificacion FROM materias";
            $resultado2 = mysqli_query ($conexion,$sqlmat ) or die (mysqli_error());
            $registros2 = mysqli_num_rows ($resultado2);

            $i = 2;
            while ($registro = mysqli_fetch_object ($resultado2)) {
               $objPHPExcel->setActiveSheetIndex(1)
                    ->setCellValue('A'.$i, $registro->Nombre_materia)
                     ->setCellValue('B'.$i, $registro->Calificacion_idCalificacion);
               $i++;
            }
$objPHPExcel->setActiveSheetIndex(1);
$objPHPExcel->getActiveSheet(1)->setTitle('Reporte Calificaciones');



$objPHPExcel->createSheet();
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(2)->getColumnDimension('A')->setWidth(15);
$objPHPExcel->setActiveSheetIndex(2)->getColumnDimension('B')->setWidth(15);
$objPHPExcel->setActiveSheetIndex(2)
            ->setCellValue('A1', 'Nombre')
            ->setCellValue('B1', 'Horario')
            ->setCellValue('C1', 'Salon');


            $sqlmaterias = "SELECT *FROM materias";
            $resultado3 = mysqli_query ($conexion,$sqlmaterias ) or die (mysqli_error());
            $registros3 = mysqli_num_rows ($resultado3);

            $i = 2;
            while ($registro = mysqli_fetch_object ($resultado3)) {
               $objPHPExcel->setActiveSheetIndex(2)
                    ->setCellValue('A'.$i, $registro->Nombre_materia)
                    ->setCellValue('B'.$i, $registro->Horario)
                     ->setCellValue('C'.$i, $registro->Salon);
               $i++;
            }
$objPHPExcel->setActiveSheetIndex(2);
$objPHPExcel->getActiveSheet(2)->setTitle('Reporte Materias');






$callStartTime = microtime(true);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('REPORTES.xlsx');
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;
?>
