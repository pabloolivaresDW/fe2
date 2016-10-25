<?
// Función para evitar inyecciones
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

$nombre = isset($_POST['nombre']) ? Filtro($_POST['nombre']) : '';
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$rut = isset($_POST['rut']) ? Filtro($_POST['rut']) : '';
$basura = isset($_POST['basura']) ? Filtro($_POST['basura']) : '';
$alcalde=isset($_POST['alcalde']) ? Filtro($_POST['alcalde']) : '';
$concejales=isset($_POST['concejales']) ? Filtro($_POST['concejales']) : '';
?>

<!DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>

		<title>Formulario Listo</title>
		<!-- Bootstrap Core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">

    	<!-- Custom CSS -->
    	<!-- link href="css/sb-admin.css" rel="stylesheet">

   		<!-- Custom Fonts -->
    	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div class="panel panel-default">
				<div class="panel-heading">
      				<h3 class="panel-title">Datos enviados</h3>
    			</div>

    	<div class="panel panel-body">
				<b>Tu nombre:</b>
				<? echo $nombre; ?>
			

			<div class="form-group">
				<b>Tu rut:</b>
				<? echo $rut; ?>
			</div>

			<div class="form-group">
				Tu genero <b><?php echo ($sexo == 'f' ? 'masculino' : 'femenino'); ?></b></b>
				<? echo $sexo; ?>
			</div>

			<div class="form-group">
				<b>Alcalde:</b>
				<? echo $alcalde; ?>
			</div>

			<b>Concejal:</b>
				<? echo $concejales; ?>

			<div class="form-group">
				Tu <b><?php echo ($basura == 1 ? 'sí' : 'no'); ?></b> recibiras basura</b>
			</div>
		</div>
		</div>
	</body>
	</html>