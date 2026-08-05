<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Editar Mascota</title>
</head>
<body>

<div class="w3-container">
    <header class="w3-container fcolor-d5">
        <h1>Santuario Veterinario</h1>
    </header>
    
    <nav class="w3-bar fcolor-14">
        <a href="frmcliente.php" class="w3-bar-item w3-button w3-mobile">Regresar a Mascotas</a>
    </nav>
</div>

<?php require_once 'ConsultarCliente.php'; ?>

<main class="w3-row-padding w3-container">
    <div class="w3-mobile w3-section" style="width: 80%; margin: auto;">
        <div class="w3-container fcolor-d2">
            <h2>Editar Datos de Mascota</h2>
        </div>

        <form class="w3-card w3-padding" action="actualizarcli.php" method="post">
            <div class="w3-row-padding">
                <div class="w3-third">
                    <label for="ccod" class="w3-label f-color-texto"><b>ID</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="text" id="ccod" name="ccodigo" value="<?php echo $codid; ?>" readonly>
                </div>

                <div class="w3-twothird">
                    <label for="nalum" class="w3-label f-color-texto"><b>Nombre Mascota</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="text" id="nalum" name="cnomcliente" value="<?php echo $nombreCli; ?>" required autofocus>
                </div>
            </div>

            <div class="w3-row-padding w3-margin-top" style="display: flex; gap: 10px;">
                <div style="flex: 1;">
                    <label for="cesp" class="w3-label f-color-texto"><b>Especie</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="text" id="cesp" name="cdireccion" value="<?php echo $especie; ?>" required>
                </div>

                <div style="flex: 1;">
                    <label for="craza" class="w3-label f-color-texto"><b>Raza</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="text" id="craza" name="ctelcasa" value="<?php echo $raza; ?>">
                </div>
            </div>

            <div class="w3-row-padding w3-margin-top" style="display: flex; gap: 10px;">
                <div style="flex: 1;">
                    <label for="cedad" class="w3-label f-color-texto"><b>Edad</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="number" id="cedad" name="cedad" value="<?php echo $edad; ?>">
                </div>

                <div style="flex: 1;">
                    <label for="cpeso" class="w3-label f-color-texto"><b>Peso (kg)</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="number" step="0.01" id="cpeso" name="cpeso" value="<?php echo $peso; ?>">
                </div>
            </div>

            <div class="w3-row-padding w3-margin-top">
                <div class="w3-full">
                    <label for="ccolor" class="w3-label f-color-texto"><b>Color / Señas</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="text" id="ccolor" name="ccolor" value="<?php echo $color; ?>">
                </div>
            </div>

            <div class="w3-row-padding w3-margin-top" style="display: flex; gap: 10px;">
                <div style="flex: 1;">
                    <label for="cresp" class="w3-label f-color-texto"><b>Responsable / Dueño</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="text" id="cresp" name="ccelular" value="<?php echo $responsable; ?>" required>
                </div>

                <div style="flex: 1;">
                    <label for="ctel" class="w3-label f-color-texto"><b>Teléfono</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="tel" id="ctel" name="cemail" value="<?php echo $telefono; ?>">
                </div>
            </div>

            <div class="w3-row-padding">
                <button class="w3-btn w3-blue-gray w3-section" name="cactualizar">Actualizar registro</button>
            </div>
        </form>
    </div>
</main>

<footer class="w3-container fcolor-14" style="position:relative; top: 20px;">
    <p>Santuario Veterinario</p>
</footer>

</body>
</html>