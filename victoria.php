<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Has ganado!</title>
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
        .resultado h1 { color: #198754; }
        .resultado a {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            background: #198754;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <h1>¡Enhorabuena!</h1>
        <p>Has ganado la partida.</p>
        <p>¡Has conseguido descubrir la palabra!</p>
        <a href="index.php">Jugar de nuevo</a>
    </div>
</body>
</html>