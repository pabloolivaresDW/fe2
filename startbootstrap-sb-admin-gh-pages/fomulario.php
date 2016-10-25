<?
// Función para evitar inyecciones
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

$nombre = isset($_POST['nombre']) ? Filtro($_POST['nombre']) : '';
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$rut = isset($_POST['RUT']) ? Filtro($_POST['RUT']) : '';

?>

<!DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Formuario Listo</title>
	</head>

	<body>
		<? echo $nombre ?>
		<? echo $rut ?>
		<? echo $sexo ?>
	</body>
	</html>