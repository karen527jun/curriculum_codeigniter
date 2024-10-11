<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Currículums</title>
    <!-- Enlace a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Currículums</h1>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Título</th>
                    <th>Experiencia Laboral</th>
                    <th>Habilidades</th>
                    <th>Educación</th>
                    <th>Idiomas</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($usuarios) && is_array($usuarios)): ?>
                <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?= esc($curriculum['id']) ?></td>
                            <td><?= esc($curriculum['nombre_completo']) ?></td>
                            <td><?= esc($curriculum['email']) ?></td>
                            <td><?= esc($curriculum['telefono']) ?></td>
                            <td><?= esc($curriculum['direccion']) ?></td>
                            <td><?= esc($curriculum['fecha_nacimiento']) ?></td>
                            <td><?= esc($curriculum['titulo']) ?></td>
                            <td><?= esc($curriculum['experiencia_laboral']) ?></td>
                            <td><?= esc($curriculum['habilidades']) ?></td>
                            <td><?= esc($curriculum['educacion']) ?></td>
                            <td><?= esc($curriculum['idiomas']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="11" class="text-center">No se encontraron currículums</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

