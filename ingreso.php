<!DOCTYPE html>
<html>

<head>
    <title>Inicio del Juego</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-4 mx-auto border border-light border-2 mt-5 bg-danger bg-opacity-75">
        <div class="titulo text-center mb-3 mt-5">
            <h1>Inicio del Juego</h1>
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto mb-3">
                <form action="tablero.php" method="post">
                    <div class="mb-3">
                        <label for="jugador1" class="form-label">Nombre del Jugador 1:</label>
                        <input type="text" class="form-control" id="jugador1" name="jugador1" required value="<?php echo isset($_SESSION['jugador1']) ? $_SESSION['jugador1'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jugador2" class="form-label">Nombre del Jugador 2:</label>
                        <input type="text" class="form-control" id="jugador2" name="jugador2" required value="<?php echo isset($_SESSION['jugador2']) ? $_SESSION['jugador2'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jugador3" class="form-label">Nombre del Jugador 3:</label>
                        <input type="text" class="form-control" id="jugador3" name="jugador3" required value="<?php echo isset($_SESSION['jugador3']) ? $_SESSION['jugador3'] : ''; ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Iniciar Juego</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
