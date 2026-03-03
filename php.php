
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reloj en espejo</title>
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contenedor {
            background: white;
            padding: 25px 35px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input {
            padding: 8px;
            width: 80px;
            border-radius: 8px;
            border: 1px solid #ccc;
            text-align: center;
        }

        input[type="submit"] {
            width: 120px;
            background: #4facfe;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background: #00c6fb;
        }

        .resultado {
            margin-top: 20px;
            font-size: 20px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h2>Reloj en espejo</h2>

    <form method="post">
        Hora:<br>
        <input type="number" name="hora" min="0" max="12" required><br><br>

        Minuto:<br>
        <input type="number" name="minuto" min="0" max="59" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {
        $hora = intval($_POST["hora"]);
        $minuto = intval($_POST["minuto"]);

        if ($minuto == 0) {
            $hora_real = 12 - $hora;
            $minuto_real = 0;
        } else {
            $minuto_real = 60 - $minuto;
            $hora_real = 11 - $hora;
        }

        if ($hora_real < 0) {
            $hora_real = $hora_real + 12;
        }

        echo "<div class='resultado'>Hora real: $hora_real : $minuto_real</div>";
    }
    ?>
</div>

</body>
</html>
