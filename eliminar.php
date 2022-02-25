<?php
if (isset($_GET['id'])) :
    $id = $_GET['id'];

    include 'conexion-db.php';

    $sql = "
    DELETE FROM citas
    WHERE id = $id;
    ";

    $resultado = $conn->query($sql);

    header('location:lista-citas.php');

    // if ($resultado) {
    //     header('location:listas-citas.php?resultado=ok');
    // } else {
    //     header('location:listas-citas.php?eliminar=ko');
    // }

endif;  