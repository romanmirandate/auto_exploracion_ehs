<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

        $NoEmpleado = $_POST['NoEmpleado'];
        $FechaExp = $_POST['FechaExp'];
        $Notas = $_POST['Notas'];
        $Password = $_POST["Password"];

        if($NoEmpleado != "" && $FechaExp != ""){
            $sql = "INSERT INTO AutoExpEhsRecords (`NoEmpleado`, `FechaExp`, `Notas`) VALUES ('$NoEmpleado', '$FechaExp', '$Notas')";
            if (mysqli_query($conn, $sql)) {
                header("location: userindex.php?NoEmp=$NoEmpleado&Password=$Password");
            } else {
                 echo "Algo salio mal, por favor intenta nuevamente.";
            }
        }else{
            echo "No Empleado y Fecha de Exploracion necesitan un valor!";
        }
    }
?>