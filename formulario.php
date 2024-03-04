<form action="acciones/acciones.php" method="POST" encType="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" />
    </div>
    <div class="mb-3">
        <label class="form-label">Cédula (NIT)</label>
        <input type="text" name="cedula" class="form-control" />
    </div>
    <div class="row">
        <div class="col-md-6">
            <label class="form-label">Seleccione la edad</label>
            <select class="form-select" name="edad">
                <option selected value="">Edad</option>
                <?php
                for ($i = 18; $i <= 50; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Sexo</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" value="Masculino" id="sexo_m" checked>
                <label class="form-check-label" for="Masculino">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" value="Femenino" id="sexo_f">
                <label class="form-check-label" for="Femenino">
                    Femenino
                </label>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Teléfono</label>
        <input type="number" name="telefono" class="form-control" required />
    </div>

    <div class="mb-3">
        <label class="form-label">Seleccione el Cargo</label>
        <select name="cargo" class="form-select" required>
            <option selected value="">Cargo</option>
            <?php
            $cargos = array(
                "Gerente",
                "Asistente",
                "Analista",
                "Desarrollador",
                "Contador",
                "Secretario",
                "Desarrollador Web",
            );
            foreach ($cargos as $cargo) {
                echo "<option value='$cargo'>$cargo</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3 mt-4">
        <label class="form-label">Foto del empleado</label>
        <input class="form-control form-control-sm" type="file" name="avatar" accept="image/png, image/jpeg" required />
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary btn_add">
            Registrar empleado
        </button>
    </div>
</form>