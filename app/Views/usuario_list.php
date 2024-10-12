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
        <div class="my-5">
            <a href="<?= base_url('usuario')?>"> <button class="btn btn-primary">Agregar nuevo</button></a>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre Completo</th>
                    <th>Título</th>
                </tr>
            </thead>
            <tbody>
            <?php if (!empty($curriculums) && is_array($curriculums)): ?>
                <?php foreach ($curriculums as $cv): ?>
                        <tr>
                       <td><a href="<?= base_url('usuario/show/' . $cv['id']) ?>"><?= esc($cv['nombre_completo']) ?></a></td>
                        <td><?= esc($cv['titulo']) ?></td>
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

