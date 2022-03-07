<?php 
    session_start();
    if(!$_SESSION['user']) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies y Sesiones - bienvenida</title>
    <link rel="icon" href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-5">

    <main class="p-5">
        <div class="p-5">
            <?php 
                echo '<h1>Bienvenido usuario ' . $_SESSION['user'] . '</h1>'; 
                echo '<h1>Su ultima visita fue: ' . $_COOKIE[$_SESSION['user']] . ' </h1>'; 
                

            ?>
            <a href="index.php?logout=true">Cerrar Sesión</a>
        </div>
    </main>

</body>
</html>