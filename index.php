  

<?php

    //Esta es una de las maneras para pedir datos por pantalla 
    //El comando <script> es de JavaScript
    //window.prompt Es para dar el mensaje que va a salir en la pantalla
    //window.prompt + (variable) es para definir el mensaje recibido por el usuario
    $ventana_usuario = (string) <<<FIN
    <script>
        let usuario = window.prompt("Ingrese el usuario");
    </script>
FIN;
    $ventana_contraseña = (string) <<<FIN
    <script>
        let contrasena = window.prompt("Ingrese la contraseña");
    </script>
FIN;



    echo $ventana_usuario;
    $usuario = (string) <<<FIN
    <script> 
        document.write(usuario); 
    </script>
FIN;

    echo $ventana_contraseña;
    $contrasena = (string) <<<FIN
    <script>
        document.write(contrasena);
    </script>
FIN;
var_dump($usuario);
var_dump($contraseña);


    //Como Funciona GOTO
    //goto saltar; Cumple la funcion de saltar hacia donde este el label "saltar:" y repita la accion dentro de saltar hasta que regrese a goto saltar;
    $num = (int) 0;
    
    saltar:
    $num++;
    print_r($num);
    echo "<br>";
    if($num<5){
        goto saltar;
    }


    //EJEMPLO CICLO "FOREACH"
    $lista = (array) ["VidejoJuegos","Twitch", function(){ return 'Hola';}];
    
    $lista2 = (array) ['Pasatiempo1' => "VidejoJuegos", 'Pasatiempo2' => "Twitch" ];

    print_r($lista[2]());
    echo "<br>";
    foreach ($lista as $key => $value) {
        print_r($key);
        echo "<br>";
        print_r($value);
        echo "<br>";
        
    }


    //COMO FUNCIONA "WHILE"
    //EJEMPLO 1
        $Llave = 10;
    while($Llave==true){
        $Llave--;
        $cadena = (string) <<<FIN
        Me gaste $Llave <br>
FIN;
        print_r($cadena);
    }

    //EJEMPLO 2
    $Clave = 11;
    llamar:
    $Clave--;
    while($Clave){
        $cadena = (string) <<<FIN
        Me gaste $Clave <br>
FIN;
        print_r($cadena);
        goto llamar;
    }


    //EJEMPLO 3
    $papitas = (int) 10;
    while($papitas){
        if($papitas<=10){
            $papitas--;
            $cadena = (string) <<<FIN
        Me comi $papitas <br>
FIN;
        print_r($cadena);
            continue;
        }
    }


?>