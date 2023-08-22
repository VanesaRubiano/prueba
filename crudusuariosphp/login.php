<?php session_start();

if(isset($_SESSION['usuario'])){
    header("Location: pagina2.php");
}

$errores = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
        $password = hash('sha512', $_POST['password']);
       

        try{
            $conexion = new PDO('mysql:host=localhost;dbname=grupo2_entregable', 'root', '');
        }catch(PDOExeption $e){
            echo "Error: " . $e->getMessage();
        }


        $statement = $conexion->prepare('SELECT * FROM users WHERE username = :usuario AND password = :password');
        $statement->execute(array(':usuario' => $usuario, ':password' => $password));
        $resultado = $statement->fetch();

       



        if($resultado !== false){
            $_SESSION['usuario'] = $usuario;
            if($usuario == "admin"){
                header("location: index-admin.php");
            } else {
                header("location: pagina2.php");
            }
        }else{
            $errores = '<li>Datos incorrectos</li>';
        }
    }



require 'views/login.view.php'



?>