<?php

require_once "../../modelo/altura.php";
require_once "../../modelo/club.php";
require_once "../../modelo/listJugadores.php";
require_once "consultarTodos.php";

header('Content-Type: application/json');

$resp = new ConsultarTodos();

$c1 = new Club();
$c1->Nombre= "Paris Saint-Germain Football Club";
$c1->Fundacion= "2 de agosto de 1970 (52 años)";
$c1->Presidente= "Nasser Al-Khelaifi";

$c2 = new Club();
$c2->Nombre=  "Manchester United Football Club";
$c2->Fundacion= "5 de marzo de 1878 (144 años)";
$c2->Presidente= "Joel Glazer";

$a1 = new Altura();
$a1->Altura= "1.70 m";

$a2 = new Altura();
$a2->Altura= "1.75 m";

$lj1 = new listJugadores();
$lj1->Id=1;
$lj1->Nombre = "Lionel Andrés Messi";
$lj1->Apodos=  "La Pulga,  El Mesías,  D10S";
$lj1->Club=$c1;
$lj1->Altura=$a1;

$lj2 = new listJugadores();
$lj2->Id=2;
$lj1->Nombre =  "Lisandro Martínez";
$lj1->Apodos=  "Licha";
$lj1->Club=$c2;
$lj1->Altura=$a2;

$resp->listJugadores =$lj1;
$resp->listJugadores =$lj2;

echo json_encode($resp);
