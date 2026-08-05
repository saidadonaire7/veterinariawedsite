<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrativo Veterinario</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        
        .submenu-item {
            text-align: left;
            font-size: 14px;
        }
        .barra-navegacion {
            background-color: #009688; 
            font-weight: bold;
        }
        .seccion-perfil {
            background-color: #00796b;
            padding: 8px 16px;
            text-align: center;
        }
        .foto-usuario {
            width: 45px;
            height: 45px;
            object-fit: cover;
            border: 2px solid white;
        }
    </style>
</head>
<body class="w3-light-grey">

<div class="w3-bar w3-card barra-navegacion w3-text-white" style="display: flex; align-items: center; justify-content: space-between;">
    
    <div style="display: flex; align-items: center; flex-wrap: wrap;">
        <span class="w3-bar-item" style="background-color: #b6ebe2; padding: 24px 16px;">Clinica Veterinaria Super Mascotas</span>

        <div class="w3-dropdown-hover">
            <button class="w3-button w3-hover-blue" style="padding: 24px 16px;">Mascotas</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-white w3-text-black">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Lista de Mascotas</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item w3-light-grey">Registro de Pacientes</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Actualizar Datos de Mascota</a>
            </div>
        </div>

        <div class="w3-dropdown-hover">
            <button class="w3-button w3-hover-blue" style="padding: 24px 16px;">Cirugías</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-white w3-text-black">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Calendario de Cirugías</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Programar Cirugía</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Seguimiento Postoperatorio</a>
            </div>
        </div>

        <div class="w3-dropdown-hover">
            <button class="w3-button w3-hover-blue" style="padding: 24px 16px;">Vacunación</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-white w3-text-black">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Historial de Vacunación</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Registrar Nueva Vacuna</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Próximas Vacunas</a>
            </div>
        </div>

        <div class="w3-dropdown-hover">
            <button class="w3-button w3-hover-blue" style="padding: 24px 16px;">Farmacia</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-white w3-text-black">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Inventario de Farmacia</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Entrada de Medicamentos</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Medicamentos por Vencer</a>
            </div>
        </div>

        <div class="w3-dropdown-hover">
            <button class="w3-button w3-hover-blue" style="padding: 24px 16px;">Facturación</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-white w3-text-black">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Nueva Factura</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Historial de Facturas</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Pagos Pendientes</a>
            </div>
        </div>

        <div class="w3-dropdown-hover">
            <button class="w3-button w3-hover-blue" style="padding: 24px 16px;">Configuración</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-white w3-text-black">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Datos de la Clínica</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue submenu-item">Usuarios del Sistema</a>
            </div>
        </div>
    </div>

    <div class="seccion-perfil w3-bar-item">
        <img src="https://www.w3schools.com/w3images/avatar2.png" alt="Doctor" class="w3-circle foto-usuario">
        
        <div style="font-size: 13px; margin-top: 3px;">Dr. Ruiz</div>
        
        <div style="font-size: 10px; opacity: 0.8; font-weight: normal; margin-bottom: 5px;">Administrador</div>
        
        <a href="#" class="w3-button w3-red w3-tiny w3-round" style="padding: 2px 8px; font-weight: normal; text-decoration: none;">Cerrar Sesión</a>
    </div>

</div>

<header class="w3-container w3-white w3-center w3-padding-16 w3-border-bottom">
    <h1 class="w3-text-teal" style="margin: 0; font-weight: bold;">Clínica Veterinaria</h1>
    <p class="w3-text-grey" style="margin: 5px 0 0 0;">Control Administrativo</p>
</header>

<div class="w3-container w3-margin-top" style="max-width: 950px; margin: auto;">

    <div class="w3-card-4 w3-white w3-margin-top w3-margin-bottom">
        <div class="w3-container w3-blue">
            <h2>Registro de Pacientes</h2>
        </div>

        <form action="" method="POST" class="w3-container w3-padding-16">
            
       

            <div class="w3-row-padding">
                <div class="w3-half">
                    <label class="w3-text-teal"><b>Nombre de la Mascota</b></label>
                    <input class="w3-input w3-border w3-round" type="text" name="nombre_mascota" placeholder="" required>
                </div>
                <div class="w3-half">
                    <label class="w3-text-teal"><b>Especie</b></label>
                    <select class="w3-select w3-border w3-round" name="especie" required>
                        <option value="" disabled selected>Selecciona</option>
                        <option value="Canino">Perro (Canino)</option>
                        <option value="Felino">Gato (Felino)</option>
                        <option value="Ave">Ave</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
            </div>

            <div class="w3-row-padding w3-margin-top">
                <div class="w3-third">
                    <label class="w3-text-teal"><b>Raza</b></label>
                    <input class="w3-input w3-border w3-round" type="text" name="raza" placeholder="" required>
                </div>
                <div class="w3-third">
                    <label class="w3-text-teal"><b>Peso</b></label>
                    <input class="w3-input w3-border w3-round" type="number" step="0.01" name="peso" placeholder="" required>
                </div>
             
   

    <div class="w3-third">
        <label class="w3-text-teal"><b>Edad</b></label>
        <input class="w3-input w3-border w3-round" type="number" name="edad" min="0" required>
    </div>

  

<div class="w3-row-padding w3-margin-top">
    <div class="w3-half">
        <label class="w3-text-teal"><b>Color o Señas Físicas</b></label>
        <input class="w3-input w3-border w3-round" type="text" name="color" required>
    </div>

    <div class="w3-half">
        <label class="w3-text-teal"><b>Nombre del Responsable</b></label>
        <input class="w3-input w3-border w3-round" type="text" name="responsable" required>
    </div>
</div>

<div class="w3-row-padding w3-margin-top">
    <div class="w3-half">
        <label class="w3-text-teal"><b>Teléfono de Emergencia</b></label>
        <input class="w3-input w3-border w3-round" type="text" name="telefono" required>
    </div>

    <div class="w3-half">
        <label class="w3-text-teal"><b>DNI del Propietario</b></label>
        <input class="w3-input w3-border w3-round" type="text" name="dni_propietario">
    </div>
</div>


            <div class="w3-container w3-margin-top w3-center">
                <button type="submit" name="guardar" class="w3-button w3-blue w3-round" style="min-width: 140px; margin-right: 10px;">Guardar</button>
                <button type="reset" class="w3-button w3-red w3-round" style="min-width: 140px;">Limpiar</button>
            </div>

        </form>
    </div>

</div>

<footer class="w3-container w3-teal w3-center w3-padding-16 w3-margin-top">
    <p>Todos los derechos reservados- 2026</p>
</footer>

</body>
</html>