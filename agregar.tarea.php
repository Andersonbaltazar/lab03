<?php 
session_start();

if (!isset($_SESSION["tareas"])){
    $_SESSION["tareas"] = [];
}

$tarea = $_SESSION["tareas"];

$nueava_tarea = $_POST["tarea"];

$tareas[] = $nueava_tarea;

header("lacation:index.php");
?>