<?php

require_once 'modelos/arbitro.php';
require_once 'modelos/equipo.php';
require_once 'modelos/directorTecnico.php';
require_once 'modelos/jugador.php';
require_once 'modelos/partido.php';

$a = new Arbitro();
$a->Id='1';
$a->Nombre='Raul';
$a->Apellido='la Molina';
$a->Gremio='Arbitros Unidos';

$dt1 = new DirectorTecnico();
$dt1->Id='2';
$dt1->Nombre='Gabriel';
$dt1->Apellido='Heinze';

$dt2 = new DirectorTecnico();
$dt2->Id='3';
$dt2->Nombre='Omar';
$dt2->Apellido='De Felippe';

$j1 = new Jugador();
$j1->Id=4;
$j1->Nombre='Ramiro';
$j1->Apellido='Sordo';

$j2 = new Jugador();
$j2->Id=5;
$j2->Nombre='Walter';
$j2->Apellido='Samuel';

$j3 = new Jugador();
$j3->Id=6;
$j3->Nombre='Gabriel';
$j3->Apellido='Batistuta';

$j4 = new Jugador();
$j4->Id=7;
$j4->Nombre='Lionel';
$j4->Apellido='Messi';

$e1 = new Equipo();
$e1->NombreEquipo='Newells Old Boys';
$e1->DirectorTecnico=$dt1;

$e1->ListaJugadores[] = $j1;
$e1->ListaJugadores[] = $j2;




$e2 = new Equipo();
$e2->NombreEquipo='Argentina';
$e2->DirectorTecnico=$dt2;
$e2->ListaJugadores[] = $j3;
$e2->ListaJugadores[] = $j4;



$p = new Partido();
$p->Id = 10;
$p->EquipoLocal= $e1;
$p->EquipoVisitante =$e2;
$p->FechaPartido= '25/06/2023';
$p->Arbitro = $a;

$p-> MostarDatos();