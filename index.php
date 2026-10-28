
<?php
    $titulo = "Mi primera página PHP";
    $mensaje = "¡Bienvenido a mi página web!";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 50px;
        }

        .contenedor {
            background-color: white;
            max-width: 600px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #cccccc;
        }

        h1 {
            color: #2c3e50;
        }

        p {
            color: #555555;
        }
    </style>
</head>

<body>

    <div class="contenedor">
        <h1><?php echo $titulo; ?></h1>
        <p><?php echo $mensaje; ?></p>
        <p>La fecha actual es: <?php echo date("d/m/Y"); ?></p>
    </div>

</body>
</html>
