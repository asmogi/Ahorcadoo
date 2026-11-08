<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fin de la partida</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .resultado {
            background: white;
            max-width: 600px;
            margin: 100px auto;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,.2);
        }
        .resultado h1 { color: #dc3545; }
        .resultado a {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            background: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <h1>¡Has perdido!</h1>
        <p>Te has quedado sin intentos.</p>
        <p>¡No te rindas! Puedes volver a intentarlo.</p>
        <a href="index.php">Jugar de nuevo</a>
    </div>
</body>
</html>