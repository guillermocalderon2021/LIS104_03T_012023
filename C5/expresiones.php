<?php
$cadena="ER145636y";
$p_carnet="/^[A-Z]{2}[0-9]{6}$/";
var_dump(preg_match($p_carnet,$cadena));
