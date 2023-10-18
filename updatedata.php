<!DOCTYPE html>
<html lang="en">
<?php
    require_once "conn.php";
    if(isset($_POST["NoEmpleado"]) && isset($_POST["FechaExp"]) && isset($_POST["Notas"])){
        $NoEmpleado = $_POST['NoEmpleado'];
        $FechaExp = $_POST['FechaExp'];
        $Notas = $_POST['Notas'];

        $sql = "UPDATE AutoExpEhsRecords SET `NoEmpleado`= '$NoEmpleado', `FechaExp`= '$FechaExp', `Notas`= '$Notas'  WHERE Id= ".$_GET["Id"];

        if (mysqli_query($conn, $sql)) {
            echo"<script> window.location.href='index.php?NoEmpleado=$NoEmpleado'</script>";
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Exploracion EHS&S L23</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Update Data</h1>
        <div class="container">
            <?php 
                require_once "conn.php";
                $sql_query = "SELECT * FROM AutoExpEhsRecords WHERE Id = ".$_GET["Id"];
                if ($result = $conn ->query($sql_query)) {
                    while ($row = $result -> fetch_assoc()) { 
                        $Id = $row['Id'];
                        $NoEmpleado = $row['NoEmpleado'];
                        $FechaExp = $row['FechaExp'];
                        $Notas = $row['Notas'];

            ?>
                            <form action="updatedata.php?Id=<?php echo $Id; ?>" method="post">
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label for="NoEmpleado">No. Empleado</label>
                                        <input type="text" name="NoEmpleado" id="NoEmpleado" maxlength="6" placeholder="123456" class="form-control" value="<?php echo $NoEmpleado ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="FechaExp">Fecha de Exploracion</label>
                                        <input class="form-control" type="date" name="FechaExp" id="FechaExp" value="<?php echo $FechaExp ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Notas">Notas</label>
                                        <input class="form-control" type="text" name="Notas" id="Notas" maxlength="300" value="<?php echo $Notas ?>">
                                    </div>
                                        <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                                        <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                            </form>
            <?php 
                    }
                }
            ?>
        </div>
    </section>
</body>

</html>