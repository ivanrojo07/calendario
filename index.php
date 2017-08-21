<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>

	<script type="text/javascript" src="calendar.js"></script>
</head>
<script>
	
</script>
<body>
	<form method="POST" action="access_log/index.php">
		<label>Inicio</label>
		<input type="month" id="inicio" name="inicio" onchange="verificarFecha()" required="">
		<br>
		<br>
		<label>Fin</label>
		<input type="month" id="fin" name="fin" onchange="verificarFecha()" required="">
		<br>
		<br>
		<label>Columnas</label>
		<select onchange="fechas()">
			<?php 
			for ($col=1; $col <= 10 ; $col++) { 
				echo '<option value="'.$col.'" id="'.$col.'">'.$col.'</option>';
			}
			 ?>
		</select>
		<br>
		<br>
		<input type="submit" id="enviar" name="submit" onclick="fechas()" value="submit">
	</form>



	<h1 id="diasemana"> Calendario </h1>
        <div id="caja">
            <table id="tabla">
                <tr>
                    <td colspan="7" id="mesYAnno"></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
            </table>
        </div>
        <div id="caja">
            <table id="tabla">
                <tr>
                    <td colspan="7" id="mesYAnno"></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
            </table>
        </div>
    </body>
</div>
</body>
</html>