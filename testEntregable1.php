<?php
include "Viaje.php";
include "ResposableV.php";
include "Pasajero.php";
include "pasajeroEspecial.php";
include "pasajeroVIP.php";

function entreNumeros($a,$b){//verifica si esta ingresando un numero entre los esperados
    do{
        echo "Ingrese un número: \n";
        $n = trim(fgets(STDIN));
    } while($n < $a || $n > $b);
    return $n;
}
$fin = false;
$cole=new viaje(0,"",0,[],null,0,0);
do {
    echo "\nElija una opción:\n";
    echo "1. Cargar el código del viaje.\n";
    echo "2. Cargar el destino del viaje.\n";
    echo "3. Cargar los pasajeros máximos del viaje.\n";
    echo "4. Cargar el importe del viaje. \n";
    echo "5. Cargar lo abonado por los pasajeros.\n";
    echo "6. Cargar los datos de un pasajero.\n";
    echo "7. Modificar los datos de un pasajero.\n";
    echo "8. cargar el responsable del viaje.\n";
    echo "9. Mostrar los datos del viaje.\n";
    echo "10. Vender pasaje. \n";
    echo "11. Salir.\n";
    
   
    
    
    $opcion = entreNumeros(1,11);

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
            echo "ingrese el importe inicial del viaje.\n";
            $importe=trim(fgets(STDIN));
            
                $cole->setImporte($importe);
            
            break;
        case 5:
            
            echo "ingrese lo abonado por los pasajeros.\n";
            $abono=trim(fgets(STDIN));
            $cole->setCostosAbonado($abono);
            
        case 6:
            echo "Ingrese el numero de ticket: ";
            $ticket = trim(fgets(STDIN));
            echo "Ingrese el nombre del pasajero: ";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese el numero de asiento del pasajero: ";
            $asiento = trim(fgets(STDIN));
            echo "Ingrese 'si', si el pasajero tiene asiento de vuelta 'no' en caso contrario: ";
            $v=trim(fgets(STDIN));
            if($v=="si"){
                $vuelta=true;
            }elseif($v=="no"){
                $vuelta=false;
            }
            echo "ingrese 1 si es un pasajero comun, 2 si es un vip,o 3 si es un pasajero con nesecidades especiales. \n";
            $tipo=entreNumeros(1,3);
            if($tipo==1){
                $pas = new Pasajero($nombre,$asiento,$ticket,$vuelta);
            }elseif($tipo==2){
                echo "ingrese el numero de viajero frecuente. \n";
                $nroVip=trim(fgets(STDIN));
                echo "ingrese la cantidad de millas que tiene. \n";
                $millas=trim(fgets(STDIN));
                $pas=new PasajeroVIP($nombre,$asiento,$ticket,$vuelta,$nroVip,$millas);
            }elseif($tipo==3){
                echo "ingrese true si usa silla de ruedas.\n";
                $ruedas=trim(fgets(STDIN));
                echo "ingrese true si nesesita comidas especiales.\n";
                $comida=trim(fgets(STDIN));
                $pas=new PasajeroEspecial($nombre,$asiento,$ticket,$vuelta,$ruedas,$comida);
            }
            echo $cole->cargarPasajero($pas);
        
            
            break;
        case 7:
            echo "Ingrese el numero de ticket: ";
            $ticket = trim(fgets(STDIN));
            echo "Ingrese el nombre del pasajero: ";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese el numero de asiento del pasajero: ";
            $asiento = trim(fgets(STDIN));
            echo "Ingrese 'si' si el pasajero tiene asiento de vuelta: ";
            $v=trim(fgets(STDIN));
            if($v=="si"){
                $vuelta=true;
            }elseif($v=="no"){
                $vuelta=false;
            }
            echo "ingrese 1 si es un pasajero comun, 2 si es un vip,o 3 si es un pasajero con nesecidades especiales. \n";
            $tipo=entreNumeros(1,3);
            if($tipo==1){
                $pas = new Pasajero($nombre,$asiento,$ticket,$vuelta);
            }elseif($tipo==2){
                echo "ingrese el numero de viajero frecuente. \n";
                $nroVip=trim(fgets(STDIN));
                echo "ingrese la cantidad de millas que tiene. \n";
                $millas=trim(fgets(STDIN));
                $pas=new PasajeroVIP($nombre,$asiento,$ticket,$vuelta,$nroVip,$millas);
            }elseif($tipo==3){
                echo "ingrese true si usa silla de ruedas.\n";
                $ruedas=trim(fgets(STDIN));
                echo "ingrese true si nesesita comidas especiales.\n";
                $comida=trim(fgets(STDIN));
                $pas=new PasajeroEspecial($nombre,$asiento,$ticket,$vuelta,$ruedas,$comida);
            }
            echo $cole->modificarPasajero($pas);
            
            break;
        
        case 8:
            echo "ingrese el nombre del responsable\n";
            $nombre=trim(fgets(STDIN));
            echo "ingrese el apellido del reponsable\n";
            $apellido=trim(fgets(STDIN));
            echo "ingrese el numero de licencia del responsable\n";
            $nroLi=trim(fgets(STDIN));
            echo "ingrese el numero de empleado del responsable\n";
            $nroEm=trim(fgets(STDIN));
            $res=new ResponsableV($nroEm,$nroLi,$nombre,$apellido);
            
            $cole->setResponsable($res);
            
            break;
        case 9:
            echo $cole->__toString();
            break;
        case 10:
            if($cole->hayPasajeDisponible()){
              echo "Ingrese el numero de ticket: ";
            $ticket = trim(fgets(STDIN));
            echo "Ingrese el nombre del pasajero: ";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese el numero de asiento del pasajero: ";
            $asiento = trim(fgets(STDIN));
            echo "Ingrese 'si' si el pasajero tiene asiento de vuelta: ";
            $v=trim(fgets(STDIN));
            if($v=="si"){
                $vuelta=true;
            }elseif($v=="no"){
                $vuelta=false;
            }
            echo "ingrese 1 si es un pasajero comun, 2 si es un vip,o 3 si es un pasajero con nesecidades especiales. \n";
            $tipo=entreNumeros(1,3);
            if($tipo==1){
                $pas = new Pasajero($nombre,$asiento,$ticket,$vuelta);
            }elseif($tipo==2){
                echo "ingrese el numero de viajero frecuente. \n";
                $nroVip=trim(fgets(STDIN));
                echo "ingrese la cantidad de millas que tiene. \n";
                $millas=trim(fgets(STDIN));
                $pas=new PasajeroVIP($nombre,$asiento,$ticket,$vuelta,$nroVip,$millas);
            }elseif($tipo==3){
                echo "ingrese true si usa silla de ruedas.\n";
                $ruedas=trim(fgets(STDIN));
                echo "ingrese true si nesesita comidas especiales.\n";
                $comida=trim(fgets(STDIN));
                $pas=new PasajeroEspecial($nombre,$asiento,$ticket,$vuelta,$ruedas,$comida);
            }
            
             
            echo $cole->venderPasaje($pas); 
            }else{
                echo "no hay mas pasajes disponibles.\n";
            }
            break;
        case 11:
            $fin=true;
            break;
    }
} while(!$fin);

?>