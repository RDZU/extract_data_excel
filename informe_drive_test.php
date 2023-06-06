<?php



set_time_limit(3600);   
ini_set("memory_limit","256M");


$ficheros  = scandir('Valladolid/');
//print_r($ficheros);
include_once('comunidad_autonoma.php');
include_once('conexion.php');
require 'Classes/PHPExcel/IOFactory.php'; //Agregamos la librería 




$get_datos_coordenadas =  get_coordenadas_ccaa("CYL");

$latitud = $get_datos_coordenadas['latitud'];
$longitud = $get_datos_coordenadas['longitud'];

foreach ($ficheros as $files)
{
    if(substr($files,0,3) == 'OSP')
    {
	//Variable con el nombre del archivo
	$nombreArchivo = 'Valladolid/'.$files;
	// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);
    $verificacion =  $objPHPExcel->getActiveSheet()->getCell('B2')->getValue();
        if($verificacion == 'SA Single Site Service Verification Check')
        {
        //Asigno la hoja de calculo activa
            $objPHPExcel->setActiveSheetIndex(0);
        //Obtengo el numero de filas del archivo
        //$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
        
            $site_completo =  $objPHPExcel->getActiveSheet()->getCell('H3')->getValue();
            $site = substr($site_completo,13);
            $ccaa = substr($site_completo,-8,3);
            $latitud = $get_datos_coordenadas['latitud'];
            $longitud = $get_datos_coordenadas['longitud'];
            $provincia = $get_datos_coordenadas['provincia'];
            $fecha = $objPHPExcel->getActiveSheet()->getCell('D5')->getValue();
            $fecha =  date($format = "Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($fecha));
            $direccion = $objPHPExcel->getActiveSheet()->getCell('D4')->getValue();
            $dl_max = $objPHPExcel->getActiveSheet()->getCell('F10')->getValue();
            $ul_max = $objPHPExcel->getActiveSheet()->getCell('F11')->getValue();
            $pci = $objPHPExcel->getActiveSheet()->getCell('C18')->getValue();
    /*
            echo 'site:'. $verificacion.'\n';echo PHP_EOL;
            echo 'site:'. $site.'\n';echo PHP_EOL;
            echo '             fecha:'. $fecha.'\n';
            echo '           dl max'. $dl_max.'\n';
            echo '           ul min'. $ul_max.'\n';
            echo '          pci'. $pci.'\n';
            echo '          direccion'. $direccion.'\n';
        */
            
            $str_query = "insert into 
            table_name (name1,name2,name3,name4,name5,name6,name7,name8,name9,name10,field_name) 
            values ('ORANGE','$fecha',NULL,'$provincia','$pci','$site','$ul_max','$dl_max','$latitud','$longitud',GETDATE())
            ;";
            //echo $str_query;
           
            $rsDatos=sqlsrv_prepare($con,$str_query);
            sqlsrv_execute($rsDatos);
       }
    }
      
}
    exit();

?>