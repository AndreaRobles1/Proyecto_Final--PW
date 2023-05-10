<?php
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conex = new mysqli("localhost","root","","registros");

        $sql = "SELECT * FROM datos WHERE usuario='$username' AND contraseña='$password'";
        $verificar = $conex->query($sql);

        if ($verificar->num_rows > 0) {
            $usuario_info = mysqli_fetch_assoc($verificar);
        
            session_start();
            $_SESSION['id'] = $usuario_info['id'];
            $_SESSION['username'] = $usuario_info['usuario'];
            $_SESSION['creado'] = $usuario_info['creado'];
            $_SESSION['nombre'] = $usuario_info['nombre'];
            header("Location: index.php");
            exit();
        }
        else {
            echo "Usuario y/o contraseña incorrectos";
        }
        $conex->close();
    }
?>
