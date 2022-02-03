<?php

function saludar(){
    return 'Hola mundo';
}


function saludarme($nombre='Jeaninne'){
    return $nombre;
}

// Lamada de la funcion
echo saludar();

echo saludarme();

?>
