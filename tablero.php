<!DOCTYPE html>
<html>

<head>
    <title>Inicio del Juego</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php
    $jugador1casillaAcumulado = 0;
    $dado = 0;
    $filaActual = 0;
    $resta = 0;
    if (isset($_POST['valor'])) {
        $dado  = rand(1, 12);
        $valorantiguo = $_POST['valor'];
        $jugador1casillaAcumulado = $valorantiguo + $dado;
        if ($jugador1casillaAcumulado > 100) {

            $resta = $jugador1casillaAcumulado - 100;
            $jugador1casillaAcumulado = 100 - $resta;
        }

        switch ($jugador1casillaAcumulado) {
            case '6':
                $jugador1casillaAcumulado = 63;
                $mensaje = "¡¡FELICIDADES!! EN CASILLA 6 HAY UNA ESCALERA, SUBES A LA CASILLA 63";
                $alerta = 1;
                break;
            case '29':
                $jugador1casillaAcumulado = 29;
                $mensaje = "¡¡FELICIDADES!! EN CASILLA 29* HAY UNA ESCALERA, SUBES A LA CASILLA 50";
                $alerta = 1;
                break;
            case '72':
                $jugador1casillaAcumulado = 96;
                $mensaje = "¡¡FELICIDADES!! EN CASILLA 72 HAY UNA ESCALERA, SUBES A LA CASILLA 93";
                $alerta = 1;
                break;
            case '79':
                $jugador1casillaAcumulado = 99;
                $mensaje = "¡¡FELICIDADES!! EN CASILLA 79 HAY UNA ESCALERA, SUBES A LA CASILLA 99";
                $alerta = 1;
                break;
            case '37':
                $jugador1casillaAcumulado = 3;
                $mensaje = "¡¡MALA TIRADA!! EN CASILLA 37 HAY UNA SERPIENTE, BAJAS A LA CASILLA 3";
                $alerta = 1;
                break;
            case '34':
                $jugador1casillaAcumulado = 9;
                $mensaje = "¡¡MALA TIRADA!! EN CASILLA 34 HAY UNA SERPIENTE, BAJAS A LA CASILLA 9";
                $alerta = 1;
                break;
            case '69':
                $jugador1casillaAcumulado = 47;
                $mensaje = "¡¡MALA TIRADA!! EN CASILLA 69 HAY UNA SERPIENTE, BAJAS A LA CASILLA 47";
                $alerta = 1;
                break;
            case '95':
                $jugador1casillaAcumulado = 58;
                $mensaje = "¡¡MALA TIRADA!! EN CASILLA 95 HAY UNA SERPIENTE, BAJAS A LA CASILLA 58";
                $alerta = 1;
                break;

            default:
                if ($dado > 1 && $resta == 0) {

                    $mensaje = "USTED AVANZO $dado CASILLAS";
                } elseif ($dado == 1 && $resta == 0) {
                    $mensaje = "USTED AVANZO $dado CASILLA";
                } elseif ($resta > 0) {
                    $casilla = ($resta > 1) ? 'CASILLAS' : 'CASILLA';
                    $mensaje = "USTED regreso $resta $casilla";
                    $resta = 0;
                }
                $alerta = 1;
                break;
        }
    }
    ?>
    <div class="container" style="text-align: center;">

        <h1>JUEGO DE SERPIENTES Y ESCALERAS</h1>
        <div class="row">
            <div class="col border border-light border-2 bg-secondary bg-opacity-75 mb-5">
                <div class="row">
                    <div class="col-lg-6 mt-2">

                        <form action="tablero.php" method="post">
                            <div class="row">
                                <h1>JUGADOR 1</h1>
                                <div class="col-lg-4">
                                    <label class="form-label" for="valor">POSICION</label><input class="form-control" type="text" id="valor" name="valor" min="1" max="10" value="<?= $jugador1casillaAcumulado ?>" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label" for="dado">DADO</label><input class="form-control" type="text" id="dado" name="dado" min="1" max="10" value="<?= $dado ?>" required>
                                    <input type="hidden" name="Nojugada">
                                </div>
                                <div class="col-lg-4 mt-4">
                                    <input type="submit" id="enviar" name="enviar" class="btn btn-primary" value="TIRAR!">
                                </div>
                            </div>
                            <div class="row">
                                <h1>JUGADOR 2</h1>
                                <div class="col-lg-4">
                                    <label class="form-label" for="valor">POSICION</label><input class="form-control" type="text" id="valor" name="valor" min="1" max="10" value="<?= $jugador1casillaAcumulado ?>" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label" for="dado">DADO</label><input class="form-control" type="text" id="dado" name="dado" min="1" max="10" value="<?= $dado ?>" required>
                                    <input type="hidden" name="Nojugada">
                                </div>
                                <div class="col-lg-4 mt-4">
                                    <input type="submit" id="enviar" name="enviar" class="btn btn-warning" value="TIRAR!">
                                </div>
                            </div>
                            <div class="row">
                                <h1>JUGADOR 3</h1>
                                <div class="col-lg-4">
                                    <label class="form-label" for="valor">POSICION</label><input class="form-control" type="text" id="valor" name="valor" min="1" max="10" value="<?= $jugador1casillaAcumulado ?>" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label" for="dado">DADO</label><input class="form-control" type="text" id="dado" name="dado" min="1" max="10" value="<?= $dado ?>" required>
                                    <input type="hidden" name="Nojugada">
                                </div>
                                <div class="col-lg-4 mt-4">
                                    <input type="submit" id="enviar" name="enviar" class="btn btn-danger" value="TIRAR!">
                                </div>
                            </div>
                            <div class="row mt-3">

                                <div class="col-lg-4">
                                    <a href="tablero.php" id="enviar" name="enviar" class="btn btn-warning">REINICIAR PARTIDA</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mt-5">
                        <?php
                        if ($dado > 0) {

                        ?>
                            <?php
                            if ($jugador1casillaAcumulado == 100) {
                                echo "<div style='border:solid; background-color:green'>";

                            ?>
                                <h1>FELICITACIONAS ERES EL GANADOR!!</h1>
                    </div>
                <?php } else {
                                echo "<div style='border:solid; background-color:skyblue'>";
                ?>

                    <h1>LANZAMIENTO NUMERO </h1>
                    <h1><?= $dado ?></h1>

                    <h2><?= $mensaje ?></h2>
                </div>
        <?php

                            }
                        } ?>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <img src="./images/serpiente1.png" alt="" style="z-index:2; margin-top:-25px; margin-left:-180px; position: absolute; width:220px; height:375px; transform: rotate(20deg)">
        <img src="./images/serpiente1.png" alt="" style="z-index:2; margin-top:350px; margin-left:60px; position: absolute; width:150px; height:300px; transform: rotate(-45deg)">
        <img src="./images/serpiente1.png" alt="" style="z-index:2; margin-top:390px; margin-left:-180px; position: absolute; width:100px; height:230px;">
        <img src="./images/serpiente1.png" alt="" style="z-index:2; margin-top:170px; margin-left:100px; position: absolute; width:100px; height:230px;  transform: rotate(40deg)">
        <img src="./images/esccalera1.png" alt="" style="z-index:2; margin-top:20px; margin-left:-260px; position: absolute; width:50px; height:160px; transform: rotate(5deg)">
        <img src="./images/esccalera1.png" alt="" style="z-index:2; margin-top:320px; margin-left:190px; position: absolute; width:50px; height:160px; transform: rotate(30deg)">
        <table class="tablero" style="z-index: 1;">
            <img src="./images/esccalera1.png" alt="" style="z-index:2; margin-top:175px; margin-left:-135px; position: absolute; width:100px; height:480px; transform: rotate(-20deg)">
            <img src="./images/esccalera1.png" alt="" style="z-index:2; margin-top:10px; margin-left:110px; position: absolute; width:100px; height:170px; transform: rotate(-10deg) ">

            <?php
            if ($jugador1casillaAcumulado == 0) {


            ?>
                <img src="./images/ficha1.png" alt="" style="z-index:2;  width:60px; height:60px; margin-top:555px; margin-left:-400px; position: absolute;">
                <img src="./images/ficha2.png" alt="" style="z-index:2;  width:60px; height:60px; margin-top:480px; margin-left:-400px; position: absolute;">
                <img src="./images/ficha3.png" alt="" style="z-index:2;  width:60px; height:60px; margin-top:400px; margin-left:-400px; position: absolute;">


            <?php
            }
            ?>
            <table class="tablero bg-light" style="z-index: 1; border: solid;">
                <?php
                $colores = [
                    '0' => 'yellow',
                    '1' => 'blue',
                    '2' => 'red',
                ];
                $NoCasilla = 101;
                $coloranterior = '';

                for ($fila = 0; $fila < 10; $fila++) {
                    $columna1 = 0;

                    echo "<tr class=>";
                    for ($columna = 0; $columna < 10; $columna++) {


                        echo "<td class=''>";

                        $colorquetoca  = rand(0, 2);
                        while ($colorquetoca == $coloranterior) {
                            $colorquetoca  = rand(0, 2);
                        }

                        if ($colorquetoca == $coloranterior) {
                            if ($colorquetoca == 2) {
                                $colorquetoca = 0;
                            } else {
                                $colorquetoca = $colorquetoca + 1;
                            }
                        }
                        $coloranterior = $colorquetoca;
                        if ($fila > 0) {
                            if ($columna1 == 0) {

                                $NoCasilla = $NoCasilla - 10;
                                $columna1 = 1;
                            } else {
                                if ($fila % 2 == 0) {

                                    $NoCasilla = $NoCasilla - 1;
                                } else {
                                    $NoCasilla = $NoCasilla + 1;
                                }
                            }
                        } else {

                            $NoCasilla = $NoCasilla - 1;
                        }


                        if ($jugador1casillaAcumulado == $NoCasilla && $jugador1casillaAcumulado > 0 && $jugador1casillaAcumulado < 101) {
                            echo "<div class='ficha' style='width:60px; height:60px; border: solid; background-color:$colores[$colorquetoca]'><img src='./images/ficha1.png' alt='' style='z-index:2;  width:60px; height:60px;  '></div>";
                        } else {

                            echo "<div class='ficha' style='width:60px; height:60px; border: solid; background-color:$colores[$colorquetoca]'><p>$NoCasilla</p></div>";
                        }
                    }
                    echo '</td>';
                }
                echo '</tr>';

                ?>

            </table>
    </div>
    </div>
    </div>
</body>
</body>

</html>