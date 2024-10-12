<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de CV</title>
    <!-- Enlace de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Formulario de Currículum Vitae</h2>
        <div class="my-5">
            <a href="<?= base_url('usuario/lista')?>"> <button class="btn btn-primary">Ver curriculums</button></a>
        </div>
        <!-- Mensajes de validación -->
        <?php if (isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <!-- Formulario de registro INICIO -->
        <form action="usuario/store" method="post" class="needs-validation mt-4" novalidate>
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="nombre_completo" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" name="nombre_completo" id="nombre_completo" required>
                <div class="invalid-feedback">Por favor, ingrese su nombre completo.</div>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" name="correo" id="correo" required>
                <div class="invalid-feedback">Por favor, ingrese un correo electrónico válido.</div>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" name="telefono" id="telefono" pattern="\d*" maxlength="10" required>
                <div class="invalid-feedback">Por favor, ingrese un número de teléfono válido (solo dígitos).</div>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" required>
                <div class="invalid-feedback">Por favor, ingrese su dirección.</div>
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required>
                <div class="invalid-feedback">Por favor, ingrese su fecha de nacimiento.</div>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Título profesional</label>
                <input type="text" class="form-control" name="titulo" id="titulo" required>
                <div class="invalid-feedback">Por favor, ingrese su título profesional.</div>
            </div>
            <div class="mb-3">
                <label for="experiencia" class="form-label">Experiencia laboral</label>
                <textarea class="form-control" name="experiencia" id="experiencia" rows="4" required></textarea>
                <div class="invalid-feedback">Por favor, describa su experiencia laboral.</div>
            </div>
            <div class="mb-3">
                <label for="habilidades" class="form-label">Habilidades</label>
                <textarea class="form-control" name="habilidades" id="habilidades" rows="3" required></textarea>
                <div class="invalid-feedback">Por favor, describa sus habilidades.</div>
            </div>
            <div class="mb-3">
                <label for="educacion" class="form-label">Educación</label>
                <textarea class="form-control" name="educacion" id="educacion" rows="3" required></textarea>
                <div class="invalid-feedback">Por favor, describa su educación.</div>
            </div>
            <div class="mb-3">
                <label for="idiomas" class="form-label">Idiomas</label>
                <textarea class="form-control" name="idiomas" id="idiomas" rows="3" required></textarea>
                <div class="invalid-feedback">Por favor, describa los idiomas que maneja.</div>
            </div>
            <button class="btn btn-primary my-5" type="submit">Enviar</button>
            <br>
        </form>
    </div>

    <!-- script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Validación  de Bootstrap
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })();
    </script>
</body>
</html>
