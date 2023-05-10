<?php
    include("con_db.php");

    if (isset($_POST['register'])) { //Si se apreto el boton de Ingresar
        if (
            strlen($_POST['username']) >= 1 && strlen($_POST['password']) >= 1) { //Esta vacio alguno de estos 2 campos?
                $username = trim($_POST ['username']);
                $password = trim($_POST ['password']);
                $nombre = trim($_POST ['nombre']);
                $semestre = trim($_POST ['semestre']);
                $materia1 = trim($_POST ['materia1']);
                $materia2 = trim($_POST ['materia2']);
                $materia3 = trim($_POST ['materia3']);
                $materia4 = trim($_POST ['materia4']);
                $creado = date("d/m/y");
                $consulta = "INSERT INTO datos(usuario, contraseña, creado, nombre, semestre, materia1, materia2, materia3, materia4) VALUES ('$username', '$password', '$creado', '$nombre', '$semestre', '$materia1', '$materia2', '$materia3', '$materia4')";
                $resultado = mysqli_query($conex,$consulta);

                if ($resultado){
                    ?>
                        <h3 class="ok">¡Haz creado tu cuenta correctamente!</h3>
                    <?php
                } else{
                    $resultado
                    ?>
                        
                        <h3 class="bad">Ha habido un error!</h3>
                    <?php
                }
        }else{
            ?>
                <h3 class="bad">FAVOR DE COMPLETAR TODOS LOS CAMPOS!!</h3>
            <?php
        }
    }
?>