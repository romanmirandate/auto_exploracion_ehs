<?php
    if($_GET["NoEmp"] != null && $_GET["Password"] != null){
        $NoEmpleado = $_GET["NoEmp"];
        $Password = $_GET["Password"];        
    }
    else{
        $NoEmpleado = "";
        $Password = "";
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

<body style="background-color:pink;">
    <section>
        <h1 style="text-align: center;margin: 50px 0; background-color:gray; color:white">Inicio de Sesion</h1>
        
        <div class="container"> 
            
            <form id="form" name="form" action="index.php" method="post">
               <div class="row">                   
                    <div class="form-group col-lg-4">
                        <label for="NoEmp">No. Empleado</label>
                        <input type="number" name="NoEmp" id="NoEmp" max="999999" min="1" class="form-control" value="<?php echo $NoEmpleado ?>" required>
                    </div>
                    <div class="form-group">
                            <label for="Password">Contraseña</label>
                            <input class="form-control" type="password" name="Password" id="Password" value="<?php echo $Password ?>" required>
                    </div>
                    <div>
                        <input type="submit" name="submitButton" id="submitButton" class="btn btn-primary" value="Entrar">                        
                    </div>
               </div>
            </form>
        </div>
    </section>

    <a href="createuser.php">Crear usuario</a>
    

</body>

<img style="bottom:0; position:absolute; display:flex; align-items:center" width="100%" src="AllInOnSafety_RBanner.png" alt="All in on Safety" style="object-fit:contain">

<script> 
    window.onload = function(){
        if(NoEmp.value != "" && Password.value != "") form.submit();
        } 
</script>

</html>
