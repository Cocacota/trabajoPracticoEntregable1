<?php
include "tpEntregable1.php";

function entreNumeros($a,$b){
    do{
        echo "Ingrese un número: ";
        $n = trim(fgets(STDIN));
    } while($n < $a || $n > $b);
    return $n;
}

$fin = true;
$cole = new viaje();

do {
    echo "\nElija una opción:\n";
    echo "1. Cargar el código del viaje.\n";
    echo "2. Cargar el destino del viaje.\n";
    echo "3. Cargar los pasajeros máximos del viaje.\n";
    echo "4. Cargar los datos de un pasajero.\n";
    echo "5. Modificar los datos de un pasajero.\n";
    echo "6. Mostrar los datos del viaje.\n";
    echo "7. Salir.\n";
    
    $opcion = entreNumeros(1,7);

    switch($opcion){
        case 1:
            echo "Ingrese el código: ";
            $codigo = trim(fgets(STDIN));
            $cole->setCodigo($codigo);
            break;
        case 2:
            echo "Ingrese el destino: ";
            $destino = trim(fgets(STDIN));
            $cole->setDestino($destino);
            break;
        case 3:
            echo "Ingrese la cantidad máxima de pasajeros: ";
            $max = trim(fgets(STDIN));
            $cole->setMaxPasajeros($max);
            break;
        case 4:
            echo "Ingrese el documento del pasajero: ";
            $documento = trim(fgets(STDIN));
            echo "Ingrese el nombre del pasajero: ";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese el apellido del pasajero: ";
            $apellido = trim(fgets(STDIN));
            $pas = ["documento"=>$documento, "nombre"=>$nombre, "apellido"=>$apellido];
            echo $cole->cargarPasajero($pas);
            break;
        case 5:
            echo "Ingrese el documento del pasajero: ";
            $documento = trim(fgets(STDIN));
            echo "Ingrese el nombre del pasajero: ";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese el apellido del pasajero: ";
            $apellido = trim(fgets(STDIN));
            $pas = ["documento"=>$documento, "nombre"=>$nombre, "apellido"=>$apellido];
            echo $cole->modificarPasajero($pas);
            break;
        case 6:
            echo $cole->__toString();
            break;
        case 7:
            $fin=false;
            break;
    }
} while($fin);

?>
