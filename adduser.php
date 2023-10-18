<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

        $NoEmp = $_POST['NoEmp'];
        $Password = $_POST['Password'];

        if($NoEmp != "" && $Password != ""){
            $sql = "INSERT INTO AutoExpUsers (`NoEmp`, `Password`) VALUES ('$NoEmp', '$Password')";
            
            try{
                echo"$sql";
                mysqli_query($conn, $sql);

                echo"<script> alert('Usuario creado exitosamente!')</script>"; 
                header("location: userindex.php");
            } catch (PDOException){
                 echo"<script> alert('Algo salio mal, por favor intenta nuevamente.')</script>"; 
                 header("location: createuser.php");
            }
        }else{
            header("location: createuser.php");
        }
    }
?>