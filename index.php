<?php

require_once 'modelo/nacionalidad.php';
require_once 'modelo/persona.php';

//instancia nacionalidad;
$n=new nacionalidad();
$n-> id = 1;
$n-> descripcion = 'japonesa';


//instancia persona;
$p=new persona();
$p-> nombre = 'nikola jokic';
$p-> direccion = 'knez 2155';
$p-> numerodedocumento = 54846141;
$p-> edad = 26;
$p->nacionalidad=$n;
$p->mostrardatos();


