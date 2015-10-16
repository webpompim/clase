<?php

require_once ("modelo/ModelEmpleado.php");

$emp = new ModelEmpleado();
$datos = $emp->get_personas();

require_once ("vistas/datosEmpleado.php");
