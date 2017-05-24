<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Reporte Granja</title>
</head>
<body>
	<h2>Reporte de las Granjas</h2>

	<table style="border: 1">
		<thead>
		<th>Id</th>
		<th>Ubicacion</th>
		<th>Tipo</th>
		<th>Id Empresa</th>
		</thead>
		<tbody>
		<tr></tr>
		@foreach($granjas as $granja)
		<tr>
			<td>{{ $granja->id }}</td>
			<td>{{ $granja->ubicacion }}</td>
			<td>{{ $granja->tipo }}</td>
			<td>{{ $granja->idEmpresa }}</td>

		</tr>
		@endforeach
		</tbody>
	</table>

</body>
</html>