<?php

class Partido{

public  $Id;
public  $EquipoLocal;
public  $EquipoVisitante;
public  $FechaPartido;
public  $Arbitro;


public function MostarDatos()
    {
        echo '----------------------------------------------------------------------------------<Br>';
         echo 'Datos del Partido:';
         echo '----------------------------------------------------------------------------------<Br>';
        echo 'Id del partido: ' . $this->Id . '<Br>';
        echo 'El id del equipo local es: ' . $this->EquipoLocal->Id . '<Br>';
        echo 'El nombre del equipo local es: ' . $this->EquipoLocal->NombreEquipo . '<Br>';
        echo 'El NOmbre del dt local es: ' . $this->EquipoLocal->DirectorTecnico->Nombre. '<Br>';
        echo 'El apellido es: ' . $this->EquipoLocal->DirectorTecnico->Apellido. '<Br>';
        echo 'El Id es: ' . $this->EquipoLocal->DirectorTecnico->Id. '<Br>';
        
        foreach ($this->EquipoLocal->ListaJugadores as $lj) {
            echo '----------------------------------------------------------------------------------<Br>';
            echo 'id del jugador: '.$lj->Id.'<br>';
            echo 'Nombre : '.$lj->Nombre.'<Br>';
            echo 'Apellido: '.$lj->Apellido.'<Br>';
           
            echo '----------------------------------------------------------------------------------<Br>';
        }

        echo '----------------------------------------------------------------------------------<Br>';
         echo 'Datos del equipo visitante:';
         echo '----------------------------------------------------------------------------------<Br>';
        echo 'El id del equipo visitante es: ' . $this->EquipoVisitante->Id . '<Br>';
        echo 'El nombre del equipo visitante es: ' . $this->EquipoVisitante->NombreEquipo . '<Br>';
        echo 'El nombre del dt visitante es: ' . $this->EquipoVisitante->DirectorTecnico->Nombre . '<Br>';
        echo 'El apellido es: ' . $this->EquipoVisitante->DirectorTecnico->Apellido . '<Br>';
        echo 'Su id es: ' . $this->EquipoVisitante->DirectorTecnico->Id . '<Br>';
        echo 'Fecha del partido: ' . $this->FechaPartido . '<Br>';
        echo '----------------------------------------------------------------------------------<Br>';
         echo 'Datos del arbitro:';
         echo '----------------------------------------------------------------------------------<Br>';
        echo 'Arbitro: ' . $this->Arbitro->Id . '<Br>';
        echo 'Arbitro: ' . $this->Arbitro->Nombre . '<Br>';
        echo 'Arbitro: ' . $this->Arbitro->Apellido . '<Br>';
        echo 'Arbitro: ' . $this->Arbitro->Gremio . '<Br>';
       


    
        foreach ($this->EquipoVisitante->ListaJugadores as $lj) {
            echo '----------------------------------------------------------------------------------<Br>';
            echo 'id del jugador: '. $lj->Id . '<br>';
            echo 'Nombre : '. $lj->Nombre . '<Br>';
            echo 'Apellido: '. $lj->Apellido. '<Br>';
           
            echo '----------------------------------------------------------------------------------<Br>';
        }
    }
}



