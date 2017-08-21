<!DOCTYPE html>
<html>
<head>
	<title>Log</title>
</head>
<body>
<?php 
$fecha = date('d-m-Y');
$hora = date('g:i:sa');
if (isset($_POST["submit"])) {
	$inicio ="";
	$fin="";
	if (!empty($_REQUEST['inicio'])) {
		$inicio = $_REQUEST['inicio'];
		

	}

	if (!empty($_REQUEST['fin'])) {
		$fin = $_REQUEST['fin'];

	}
	if (!empty($_SERVER['REMOTE_ADDR'])) {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	
	$log = "log.txt";
	$file=fopen($log, "a+");
	fwrite($file, "\n".$fecha." ".$hora." ".$ip." ".$inicio." ".$fin);
	// fwrite($file, "\n FechaServidor: ");
	// fwrite($file, $fecha);
	// fwrite($file, "\n HoraServidor: ");
	// fwrite($file, $hora);
	// fwrite($file,"\n Fecha-Inicio: ");
	// fwrite($file, $inicio);
	// fwrite($file, "\n Fecha-Fin: ");
	// fwrite($file, $fin);
	// fwrite($file, "\n IP: ");
	// fwrite($file, $ip);
	header("Location:../index.php");
}
$handle = fopen("log.txt", "r");
if ($handle) {
	echo 
	"<table>
	<tr> 
    	<th>Fecha</th> 
    	<th>Hora</th> 
    	<th>IP del usuario que se conecta</th> 
    	<th>Inicio</th> 
    	<th>Fin</th> 
 	</tr><br> ";
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        // list($f, $h, $i, $fi, $ff) = explode(" ", $line);
        $linea = explode(" ", $line);
        $arreglo = array('fecha' => $linea[0] ,
        				'hora' => $linea[1] ,
        				'ip' => $linea[2] ,
        				'inicio' => $linea[3] ,
        				'fin' => $linea[4]);
        echo 
        "<tr> 
	    	<td>{$arreglo['fecha']}</td> 
	    	<td>{$arreglo['hora']}</td> 
	    	<td>{$arreglo['ip']}</td> 
	    	<td>{$arreglo['inicio']}</td> 
	    	<td>{$arreglo['fin']}</td> 
	 	</tr>";
      	// var_dump(explode(" ", $line));

    }
    echo "</table>";

    fclose($handle);
} else {
    // error opening the file.
} 
 ?>
</body>
</html>
