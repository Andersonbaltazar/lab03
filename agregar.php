<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Tarea</title>
</head>
<body>
<h2>Lista 1</h2>
<?php
    $cursos[]= 'Aritmetica';
    $cursos[]= 'Geografía';
    $cursos[]= 'Lenguaje';
    $cursos[]= 'Calculo';

    imprimir_vector_indexado($cursos);
    echo '<hr>';

    $cursos[1]='Java';
    imprimir_vector_indexado($cursos);
    echo '<hr>';

    $cursos[2]='Python';
    imprimir_vector_indexado($cursos);
    echo '<hr>';

    $cursos[3]=2024;
    imprimir_vector_indexado($cursos);
    echo '<hr>';

    $dias=array('Lunes','Martes','Miercoles','Jueves','Viernes');
    imprimir_vector_indexado($dias);


    for ($i=0; $i < count($cursos); $i++) { 
    echo '<br>'.'Curso '. $i.' = '.$cursos[$i].'<br>';
}

 ?>
</body>
</html>