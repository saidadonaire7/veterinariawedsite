<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Santuario - Control Veterinario</title>
</head>
<body>

<div class="w3-container">
    <header class="w3-container fcolor-d5">
        <h1>Santuario Veterinario</h1>
    </header>
    
    <nav class="w3-bar fcolor-14">
        <a href="#" class="w3-bar-item w3-button w3-mobile">Principal</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile">Mascotas</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile">Contacto</a>
    </nav>
</div>

<main class="w3-row-padding w3-container">
    <div class="w3-col s6 w3-mobile w3-section">
        <div class="w3-container fcolor-d2">
            <h2>Registrar Mascota</h2>
        </div>
        
        <form id="mascotaForm" class="w3-card w3-padding" action="guardarcli.php" method="post">
            <div class="w3-row-padding">
                <div class="w3-full">
                    <label for="cnom" class="w3-label f-color-texto"><b>Nombre de la Mascota</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="text" id="cnom" name="cnomcliente" placeholder="" required>
                </div>
            </div>
            
            <div class="w3-row-padding w3-margin-top" style="display: flex; gap: 10px;">
                <div style="flex: 1;">
                    <label for="cesp" class="w3-label f-color-texto"><b>Especie</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="text" id="cesp" name="cdireccion" placeholder="" required>
                </div>
                <div style="flex: 1;">
                    <label for="craza" class="w3-label f-color-texto"><b>Raza</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="text" id="craza" name="ctelcasa" placeholder="">
                </div>
            </div>

            <div class="w3-row-padding w3-margin-top" style="display: flex; gap: 10px;">
                <div style="flex: 1;">
                    <label for="cedad" class="w3-label f-color-texto"><b>Edad (años)</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="number" id="cedad" name="cedad" placeholder="">
                </div>
                <div style="flex: 1;">
                    <label for="cpeso" class="w3-label f-color-texto"><b>Peso (kg)</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="number" step="0.01" id="cpeso" name="cpeso" placeholder="">
                </div>
            </div>

            <div class="w3-row-padding w3-margin-top">
                <div class="w3-full">
                    <label for="ccolor" class="w3-label f-color-texto"><b>Color / Señas</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="text" id="ccolor" name="ccolor" placeholder="">
                </div>
            </div>

            <div class="w3-row-padding w3-margin-top" style="display: flex; gap: 10px;">
                <div style="flex: 1;">
                    <label for="cresp" class="w3-label f-color-texto"><b>Responsable / Dueño</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="text" id="cresp" name="ccelular" placeholder="" required>
                </div>
                <div style="flex: 1;">
                    <label for="ctel" class="w3-label f-color-texto"><b>Teléfono</b></label>
                    <input class="w3-input w3-border fcolor-l5" type="tel" id="ctel" name="cemail" placeholder="">
                </div>
            </div>
            
            <div class="w3-row-padding">
                <button type="submit" class="w3-btn w3-blue-gray w3-section" name="cguardar">Guardar Mascota</button>
            </div>
        </form>
    </div>

    <div class="w3-col s6 w3-mobile w3-section">
        <div class="w3-container fcolor-d2">
            <h2>Mascotas Registradas</h2>
        </div>

        <?php
        require_once 'manipularcli.php';

        $porPagina = 5;
        $paginaActual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
        if ($paginaActual < 1) $paginaActual = 1;

        $totalClientes = modificarcliente::totalRegistros();
        $totalPaginas = ceil($totalClientes / $porPagina);

        $inicio = ($paginaActual - 1) * $porPagina;
        $listaclientes = modificarcliente::limitRegistros($inicio, $porPagina);
        ?>

        <table class="w3-table w3-table-all w3-hoverable w3-striped w3-card">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mascota</th>
                    <th>Especie</th>
                    <th>Responsable</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($listaclientes)) {
                foreach ($listaclientes as $cliente) { ?>
                    <tr>
                        <td><?php echo $cliente->id; ?></td>
                        <td><?php echo $cliente->nombre; ?></td>
                        <td><?php echo $cliente->especie; ?></td>
                        <td><?php echo $cliente->responsable; ?></td>
                        <td>
                            <a href="editcli.php?idcli=<?php echo $cliente->id ?>" class="w3-btn w3-teal">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="eliminacli.php?id=<?php echo $cliente->id ?>" class="w3-btn w3-red" onclick="return confirm('¿Desea eliminar este registro?');">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php }
            } else { ?>
                <tr>
                    <td colspan="5" class="w3-center">No hay mascotas registradas.</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <?php if ($totalPaginas > 1): ?>
            <div class="w3-center w3-section">
                <div class="w3-bar w3-border w3-round">
                    <?php if ($paginaActual > 1): ?>
                        <a href="frmcliente.php?pagina=<?php echo $paginaActual - 1; ?>" class="w3-button">&lt;&lt;</a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                        <a href="frmcliente.php?pagina=<?php echo $i; ?>" class="w3-button <?php echo ($i == $paginaActual) ? 'fcolor-d2' : ''; ?>">
                            <?php echo $i; ?>
                        </a>
                    <?php endfor; ?>

                    <?php if ($paginaActual < $totalPaginas): ?>
                        <a href="frmcliente.php?pagina=<?php echo $paginaActual + 1; ?>" class="w3-button">&gt;&gt;</a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>

<footer class="w3-container fcolor-14" style="position:relative; top: 20px;">
    <p>Santuario Veterinario 2026</p>
</footer>

</body>
</html>