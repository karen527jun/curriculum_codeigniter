<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Currículum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2><?php echo $curriculum['nombre_completo']; ?></h2>
    <p><strong>Correo:</strong> <?php echo $curriculum['correo']; ?></p>
    <p><strong>Teléfono:</strong> <?php echo $curriculum['telefono']; ?></p>
    <p><strong>Dirección:</strong> <?php echo $curriculum['direccion']; ?></p>
    <p><strong>Fecha de Nacimiento:</strong> <?php echo $curriculum['fecha_nacimiento']; ?></p>
    <p><strong>Título Profesional:</strong> <?php echo $curriculum['titulo']; ?></p>
    <p><strong>Experiencia Laboral:</strong> <?php echo $curriculum['experiencia']; ?></p>
    <p><strong>Habilidades:</strong> <?php echo $curriculum['habilidades']; ?></p>
    <p><strong>Educación:</strong> <?php echo $curriculum['educacion']; ?></p>
    <p><strong>Idiomas:</strong> <?php echo $curriculum['idiomas']; ?></p>
</div>
</body>
</html>
