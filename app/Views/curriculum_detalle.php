<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Currículum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto mt-5">
    <div class="card">
        <class class="card-body text-bg-danger">
            <h2 class=""><?php echo $curriculum['nombre_completo']; ?></h2>
        </class>
        <div class="card-body">
            <div class="list-group">
                <p class="list-group-item"><strong>Correo:</strong> <?php echo $curriculum['correo']; ?></p>
                <p class="list-group-item"><strong>Teléfono:</strong> <?php echo $curriculum['telefono']; ?></p>
                <p class="list-group-item"><strong>Dirección:</strong> <?php echo $curriculum['direccion']; ?></p>
                <p class="list-group-item"><strong>Fecha de Nacimiento:</strong> <?php echo $curriculum['fecha_nacimiento']; ?></p>
                <p class="list-group-item"><strong>Título Profesional:</strong> <?php echo $curriculum['titulo']; ?></p>
                <p class="list-group-item"><strong>Experiencia Laboral:</strong> <?php echo $curriculum['experiencia']; ?></p>
                <p class="list-group-item"><strong>Habilidades:</strong> <?php echo $curriculum['habilidades']; ?></p>
                <p class="list-group-item"><strong>Educación:</strong> <?php echo $curriculum['educacion']; ?></p>
                <p class="list-group-item"><strong>Idiomas:</strong> <?php echo $curriculum['idiomas']; ?></p>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('usuario/lista/')?>"> <button  class="btn btn-primary">Volver</button></a>
        </div>
    </div>
</div>
</body>
</html>