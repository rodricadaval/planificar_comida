<?php
// Hay que agregar conexion con la base.
// $sql = "SELECT * FROM planificador_comidas.recetas_actuales WHERE tipo = " . $_POST['tipo'];

// Hardcodeo los datos para mostrar en la datatable con el formato correcto.

$datos = [
	'a' => [0 => ['id_receta' => 1, 'receta' => 'Milanesa de ternera con fritas', 'calorias' => 5000, 'rating' => '****', 'boton' => '<input type="checkbox" class="toggle" name="receta" id = "boton_receta" value = "1">']
		, 1 => ['id_receta' => 2, 'receta' => 'Ensalada', 'calorias' => 800, 'rating' => '***', 'boton' => '<input type="checkbox" class="toggle" name="receta" id = "boton_receta" value = "2">']
		, 2 => ['id_receta' => 3, 'receta' => 'Ravioles de ricota con crema', 'calorias' => 4000, 'rating' => '*****', 'boton' => '<input type="checkbox" class="toggle" name="receta" id = "boton_receta" value = "3">'],
	]
	, 'd' => [0 => ['id_receta' => 4, 'receta' => 'Banana', 'calorias' => 150, 'rating' => '****', 'boton' => '<input type="checkbox" class="toggle" class="toggle" name="receta" id = "boton_receta" value = "4">']
		, 1 => ['id_receta' => 5, 'receta' => 'Yogurt ligth', 'calorias' => 50, 'rating' => '**', 'boton' => '<input type="checkbox" class="toggle" class="toggle" name="receta" id = "boton_receta" value = "5">']
		, 2 => ['id_receta' => 6, 'receta' => 'Tostado de Jamón y Queso', 'calorias' => 300, 'rating' => '*****', 'boton' => '<input type="checkbox" class="toggle" name="receta" id = "boton_receta" value = "6">'],
	]
	, 'm' => [0 => ['id_receta' => 7, 'receta' => 'Milanesa de ternera con fritas', 'calorias' => 5000, 'rating' => '****', 'boton' => '<input type="checkbox" class="toggle" name="receta" id = "boton_receta" value = "7">']
		, 1 => ['id_receta' => 8, 'receta' => 'Milanesa de ternera con fritas', 'calorias' => 5000, 'rating' => '****', 'boton' => '<input type="checkbox" class="toggle" name="receta" id = "boton_receta" value = "8">']
		, 2 => ['id_receta' => 9, 'receta' => 'Milanesa de ternera con fritas', 'calorias' => 5000, 'rating' => '****', 'boton' => '<input type="checkbox" class="toggle" name="receta" id = "boton_receta" value = "9">'],
	]
	, 'c' => [0 => ['id_receta' => 10, 'receta' => 'Milanesa de ternera con fritas', 'calorias' => 5000, 'rating' => '****', 'boton' => '<input type="checkbox" class="toggle" name="receta" id = "boton_receta" value = 10>']
		, 1 => ['id_receta' => 11, 'receta' => 'Milanesa de ternera con fritas', 'calorias' => 5000, 'rating' => '****', 'boton' => '<input type="checkbox" class="toggle" name="receta" id = "boton_receta" value = "11">']
		, 2 => ['id_receta' => 12, 'receta' => 'Milanesa de ternera con fritas', 'calorias' => 5000, 'rating' => '****', 'boton' => '<input type="checkbox" class="toggle" name="receta" id = "boton_receta" value = "12">'],
	],
];

//var_dump($datos[$_POST['tipo']]);

if (isset($_POST['tipo'])) {
	echo json_encode($datos[$_POST['tipo']]);
}

?>