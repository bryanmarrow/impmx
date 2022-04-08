

    <div class="container px-0 pt-5 mt-5 mt-lg-5">
        <div class="d-sm-flex align-items-end justify-content-between ps-lg-2 ps-xxl-0 mt-2 mt-lg-0 pt-4 mb-3">
            <div class="me-4">
                <h3 class="pb-1">Registro | Solistas</h3>
            </div>
        </div>
        <form class="formCampeonato needs-validation m-3" novalidate>
            <div class="row">            
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="form-label">Código de confirmación de Dancer Pass</label>
                            <!-- <input class="form-control" id="codFullPass" type="text" name="codfullpass" value="SXWZO3996" placeholder="Código de confirmación de Full Pass" required> -->
                            <div class="input-group">
                                <input class="form-control" id="codFullPass" type="text" name="codfullpass" value="SXWZO3996" placeholder="Código de confirmación de Dancer Pass">
                                <button class="btn btn-primary" id="btnValidarCodigo" type="button">Validar Código</button>
                            </div>
                            <div class="text-dark alertValidarCodigo"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label for="fl-text" class="form-label">Nombre</label>
                            <input class="form-control" type="text" name="nombre_p" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label for="fl-text" class="form-label">Apellidos</label>
                            <input class="form-control" type="text" name="apellidos_p" placeholder="Apellidos" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label for="fl-text" class="form-label">Email</label>
                            <input class="form-control" type="email" name="email_p" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="form-group">
                            <label class="form-label">Fecha de nacimiento:</label> <span class="text-muted">*</span>
                            <input class="form-control" type="date" name="fecha_nac" required="">
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <label class="mb-2 form-label">Género</label>
                        <div class="form-group d-block">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="masculino" value="Masculino" name="genero_p" required>
                                <label class="form-check-label" for="masculino">Masculino</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="femenino" value="Femenino" name="genero_p"  required>
                                <label class="form-check-label" for="femenino">Femenino</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="form-group">
                            <label for="select-input" class="form-label">Estado</label>
                            <select class="form-select" name="estado_p" required>
                                <option value="">Seleccione una categoría</option>
                                <?php 
                                    $estados=$basededatosimpmx->connect()->prepare("SELECT * FROM tbl_estados order by estado ASC");
                                    $estados->execute();
                                    $Allestados=$estados->fetchAll();
                                    foreach($Allestados as $estado){
                                ?>
                                    <option value="<?= $estado['id'] ?>" ><?= $estado['estado'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label for="fl-text" class="form-label">Ciudad</label>
                            <input class="form-control" type="text" name="ciudad_p" placeholder="Ciudad" required>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="form-group">
                            <label for="select-input" class="form-label">Categoría</label>
                            <select class="form-select" name="categoria_p" required>
                                <option value="">Seleccione una categoría</option>
                                <?php 
                                    $categorias=$basededatosimpmx->connect()->prepare("SELECT * FROM tbl_categorias WHERE tipo='$form' and status=0 order by categoria ASC");
                                    $categorias->execute();
                                    $Allcategorias=$categorias->fetchAll();
                                     foreach($Allcategorias as $categoria){
                                ?>
                                    <option value="<?= $categoria['id'] ?>" ><?= $categoria['categoria'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="form-group">
                            <label class="form-label">Adjuntar comprobante de pago</label>
                            <input class="form-control" type="file" id="comprobantepago" name="comprobantepago" accept="application/pdf, image/jpg, image/png" placeholder="Comprobante de pago" required>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="form-group ">
                            <label for="fl-text" class="form-label">No. telefónico</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                <i class='bx bxs-phone-call bx-xs'></i>
                                </span>
                                <input type="tel" class="form-control" name="num_telefono" placeholder="No. telefónico" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $form ?>" name="tipoForm">
                    <input type="hidden" value="1" class="validCodigo" name="validCodigo">
            </div>
            <button class="btn btn-primary" type="submit">Enviar información</button>
        </form>
    </div>

</main>