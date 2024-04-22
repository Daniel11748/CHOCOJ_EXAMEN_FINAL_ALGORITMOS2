<!DOCTYPE html>
<html>

<head>
    <title>Inicio del Juego</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();

    // Definir jugadores con sus datos iniciales
    $jugadores = [
        'jugador1' => ['nombre' => 'Jugador 1', 'casillaAcumulado' => 0, 'dado' => 0],
        'jugador2' => ['nombre' => 'Jugador 2', 'casillaAcumulado' => 0, 'dado' => 0],
        'jugador3' => ['nombre' => 'Jugador 3', 'casillaAcumulado' => 0, 'dado' => 0]
    ];

    // Procesar el lanzamiento del dado para cada jugador
    if (isset($_POST['valor'])) {
        foreach ($jugadores as $key => $jugador) {
            // Obtener el valor anterior y lanzar el dado
            $valorantiguo = $_POST['valor'][$key];
            $dado = rand(1, 12);
            // Actualizar los datos del jugador
            $jugadores[$key]['dado'] = $dado;
            $jugadores[$key]['casillaAcumulado'] = $valorantiguo + $dado;
        }
    }
    ?>
    <div class="container" style="text-align: center;">
        <h1>JUEGO DE SERPIENTES Y ESCALERAS</h1>
        <div class="row">
            <!-- Mostrar información de cada jugador -->
            <?php foreach ($jugadores as $key => $jugador) : ?>
                <div class="col-lg-4">
                    <h2><?= $jugador['nombre'] ?></h2>
                    <form action="tablero.php" method="post">
                        <!-- Input oculto para enviar el valor acumulado del jugador -->
                        <input type="hidden" name="valor[<?= $key ?>]" value="<?= $jugador['casillaAcumulado'] ?>">
                        <button type="submit" class="btn btn-primary">Lanzar Dado</button>
                    </form>
                    <p>Tirada: <?= $jugador['dado'] ?></p>
                    <p>Acumulado: <?= $jugador['casillaAcumulado'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Mostrar resultado del lanzamiento -->
        <?php if (isset($_POST['valor'])) : ?>
            <div class="row">
                <div class="col-lg-12">
                    <div style="border:solid; background-color:yellow">
                        <?php foreach ($jugadores as $key => $jugador) : ?>
                            <h1>TIRO!! <?= $jugador['nombre'] ?></h1>
                            <h1><?= $jugador['dado'] ?></h1>
                            <!-- Mostrar mensaje de victoria si el jugador llega a 100 -->
                            <?php if ($jugador['casillaAcumulado'] == 100) : ?>
                                <h2>FELICIDADES <?= $jugador['nombre'] ?> GANASTE!!!</h2>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
