<?php
    require_once "conn.php";
    $Id = $_GET["Id"];
    $NoEmpleado = $_GET["NoEmpleado"];
    $query = "DELETE FROM AutoExpEhsRecords WHERE Id = '$Id'";
    if (mysqli_query($conn, $query)) {
        header("location: index.php?NoEmpleado=$NoEmpleado");
    } else {
         echo "Algo salio mal, por favor intente de nuevo.";
    }
?>