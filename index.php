<?php
    if($_POST["NoEmp"] != null && $_POST["Password"] != null){ 
        require_once "conn.php";
        $NoEmpleado = $_POST["NoEmp"];
        $Password = $_POST["Password"];

        $sql_query_user = "SELECT COUNT(*) FROM AutoExpUsers WHERE NoEmp= '".$NoEmpleado . "' AND Password= '" .$Password . "'";
        //echo"$sql_query_user";

        if ($result_user = $conn ->query($sql_query_user)) {
            $row = mysqli_fetch_row($result_user);
            if("$row[0]" == 0){
                echo"<script> alert('Usuario incorrecto')</script>";  
                echo"<script> window.location.href='userindex.php'</script>";  
            }                              
        }
    }
    else{
        echo"<script> window.location.href='userindex.php'</script>";    
    }
    
?>

<!DOCTYPE html>
<html lang="en">

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

<body style="background-color:pink; padding: bottom 200px;">

    <section>
        <h1 style="text-align: center;margin: 50px 0; background-color:gray; color:white">BITACORA DE AUTO EXPLORACION - EHS&S L23 ADM, HMO.</h1>

        
        <div class="container">            
            <form action="adddata.php" method="post">
               <div class="row">        
                    <div class="form-group col-lg-4">
                        <label for="NoEmpleado">No. Empleado</label>
                        <input type="text" name="NoEmpleado" id="NoEmpleado" maxlength="6" class="form-control" value="<?php echo $NoEmpleado ?>" required>
                    </div>   
                    <div class="form-group">
                        <label for="Password" hidden>Password</label>
                        <input type="text" name="Password" id="Password" maxlength="30" class="form-control" value="<?php echo $Password ?>" required hidden>                    
                    </div>       
                    <div class="form-group">
                            <label for="FechaExp">Fecha de Exploracion</label>
                            <input class="form-control" type="date" name="FechaExp" id="FechaExp" value="" required>
                    </div>
                    <div class="form-group">
                            <label for="Notas">Notas</label>
                            <input class="form-control" type="text" name="Notas" id="Notas" maxlength="300" value="">
                    </div>
                    <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Enviar">
                    </div>
               </div>
            </form>
        </div>
    </section>
    <section style="margin: 50px 0;">
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-bordered table-striped mb-0; color:pink">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">No. Empleado</th>
                    <th scope="col">Fecha de Exploracion</th>
                    <th scope="col">Notas</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php                         
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM AutoExpEhsRecords WHERE NoEmpleado= ".$_POST["NoEmp"];
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $Id = $row['Id'];
                                $NoEmpleadoGet = $row['NoEmpleado'];
                                $FechaExp = $row['FechaExp'];
                                $Notas = $row['Notas'];
                        
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $NoEmpleadoGet; ?></td>
                        <td><?php echo $FechaExp; ?></td>
                        <td><?php echo $Notas; ?></td>
                        <td><a href="updatedata.php?Id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="deletedata.php?Id=<?php echo $Id; ?>&NoEmpleado=<?php echo $NoEmpleadoGet ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>

</body>


<footer style="width:100%; position:static">
    <img style="bottom:0; display: flex; justify-content: space-around; align-items:center" height="98" width="100%" src="AllInOnSafety_RBanner.png" alt="All in on Safety" style="object-fit:contain">
</footer>
    
<script>
    
</script>

</html>
