<?php if($form=='solistas') { ?>
    <div class="col-lg-4">
        <div class="form-group mb-2">
            <label class="form-label">Código de confirmación de Dancer Pass</label>
            <input class="form-control" id="codFullPass" type="text" name="codfullpass" value="" placeholder="Código de confirmación de Full Pass" required>
            <!-- <div class="input-group">
                <input class="form-control" id="codFullPass" type="text" name="codfullpass" value="" placeholder="Código de confirmación de Dancer Pass">
                <button class="btn btn-primary" id="btnValidarCodigo" type="button">Validar Código</button>
            </div>
            <div class="text-dark alertValidarCodigo"></div> -->
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
                <option value="">Seleccione su estado</option>
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
                        $querycategorias="SELECT b.id, b.categoria_es
                        FROM tbl_categorias_eventos a
                        INNER JOIN tbl_categorias b ON a.idCategoria = b.id
                        INNER JOIN tbl_eventos c ON a.idEvento = c.id
                        WHERE c.token ='$tokenEvento' and b.tipo='$form'";
                        $categorias=$basededatos_el2023->connect()->prepare($querycategorias);
                        $categorias->execute();    
                        $Allcategorias=$categorias->fetchAll();
                        foreach($Allcategorias as $categoria){
                ?>
                    <option value="<?= $categoria['id'] ?>" ><?= $categoria['categoria_es'] ?></option>
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

<?php } if($form=='parejas'){ ?>

    
        <!-- <div class="col-lg-12"> -->
            <?php for ($i=1; $i < 3; $i++) { ?>
                <div class="row">
                    <div class="col-12">
                        <h5 class="text-dark">
                        <?=  index_informacion_competidor ?> <?php print($i) ?>
                        </h5>
                        <hr class="mt-2 mb-4">
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="form-label">Código de confirmación de Dancer Pass</label>
                            <input class="form-control" id="codFullPass" type="text" name="codfullpass_p<?php print($i) ?>" value="" placeholder="Código de confirmación de Full Pass" required>
                            <!-- <div class="input-group">
                                <input class="form-control" id="codFullPass" type="text" name="codfullpass_p<?php print($i) ?>" value="" placeholder="Código de confirmación de Dancer Pass" required>
                                <button class="btn btn-primary" id="btnValidarCodigo" type="button">Validar Código</button>
                            </div>
                            <div class="text-dark alertValidarCodigo"></div> -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="nombre_p<?php print($i) ?>" class="form-label"><?= index_nombre ?>:</label> <span class="text-muted">*</span>
                            <input id="nombre_p<?php print($i) ?>" name="nombre_p<?php print($i) ?>" type="text" class="form-control" placeholder="<?= index_ingresa_tu_nombre ?>" required>
                            <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                        </div>
                    </div>
                
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="apellidos_p<?php print($i) ?>" class="form-label"><?= index_apellidos ?>:</label> <span class="text-muted">*</span>
                            <input id="apellidos_p<?php print($i) ?>" name="apellidos_p<?php print($i) ?>" type="text" class="form-control" placeholder="<?= index_ingresa_tus_apellidos ?>" required>
                            <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                        <label class="form-label"><?= index_fecha_de_nacimiento ?>:</label> <span class="text-muted">*</span>
                        <input class="form-control"  type="date" name="date_birthday_p<?php print($i) ?>" required>
                        <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="email_p<?php print($i) ?>" class="form-label"><?= index_correo_electronico ?>:</label> <span class="text-muted">*</span>
                            <input id="email_p<?php print($i) ?>" name="email_p<?php print($i) ?>" type="email" class="form-control" placeholder="<?= index_ingresa_tu_correo_electronico ?>" required>
                            <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <label class="mb-2 form-label"><?= index_genero ?></label>
                        <div class="form-group d-block m-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="Masculino<?php print($i) ?>" value="Masculino" name="genero_p<?php print($i) ?>" required>
                                <label class="form-check-label" for="Masculino<?php print($i) ?>"><?= index_masculino ?></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="Femenino<?php print($i) ?>" value="Femenino" name="genero_p<?php print($i) ?>"  required>
                                <label class="form-check-label" for="Femenino<?php print($i) ?>"><?= index_femenino ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="form-group">
                            <label for="estado_p<?php print($i) ?>" class="form-label">Estado:</label> <span class="text-muted">*</span>
                            <select class="form-select" name="estado_p<?php print($i) ?>" required> 
                                <option value="">Seleccione su estado</option>
                                <?php 
                                    $estados=$basededatosimpmx->connect()->prepare("SELECT * FROM tbl_estados order by estado ASC");
                                    $estados->execute();
                                    $Allestados=$estados->fetchAll();
                                    foreach($Allestados as $estado){
                                ?>
                                    <option value="<?= $estado['id'] ?>" ><?= $estado['estado'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="form-group ">
                            <label for="fl-text" class="form-label">No. telefónico</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                <i class='bx bxs-phone-call bx-xs'></i>
                                </span>
                                <input type="tel" class="form-control" name="num_telefono_p<?php print($i) ?>" placeholder="No. telefónico" required>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="categoria"><?= index_categoria ?>:</label> <span class="text-muted">*</span>
                        <select class="form-select" name="categoria" required>
                            <option value=""><?= index_seleccione_su_categoria ?></option>
                            <?php 
                                    $querycategorias="SELECT b.id, b.categoria_es
                                    FROM tbl_categorias_eventos a
                                    INNER JOIN tbl_categorias b ON a.idCategoria = b.id
                                    INNER JOIN tbl_eventos c ON a.idEvento = c.id
                                    WHERE c.token ='$tokenEvento' and b.tipo='$form'";
                                    $categorias=$basededatos_el2023->connect()->prepare($querycategorias);
                                    $categorias->execute();    
                                    $Allcategorias=$categorias->fetchAll();
                                    foreach($Allcategorias as $categoria){
                            ?>
                                <option value="<?= $categoria['id'] ?>" ><?= $categoria['categoria_es'] ?></option>
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
            </div>
            <input type="hidden" value="<?= $form ?>" name="tipoForm">
            <!-- <input type="hidden" value="1" class="validCodigo" name="validCodigo"> -->
    
<?php } if($form=='grupos'){ ?>

        <!-- <div class="col-sm-12 col-lg-8"> -->
            <div class="row">
                <div class="col-12">
                    <h5 class="text-dark">
                        <?= index_informacion_general ?>
                    </h5>
                    <hr class="mt-2 mb-4">
                </div>
                <div class="col-md-4 col-sm-12 mb-2">
                    <div class="form-group">
                        <label for="nombregrupo_p" class="form-label"><?= index_nombre_del_grupo ?>:</label> <span class="text-muted">*</span>
                        <input id="nombregrupo_p" name="nombregrupo_p" type="text" class="form-control" placeholder="<?= index_nombre_del_grupo ?>"  required>
                        <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                    </div>
                </div>    
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="nomrepresentante_p" class="form-label"><?= index_nombre_del_representante ?>:</label> <span class="text-muted">*</span>
                        <input id="nomrepresentante_p" name="nomrepresentante_p" type="text" class="form-control" placeholder="Ingresa tu nombre" required>
                        <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="emailrepresentante_p" class="form-label"><?= index_correo_electronico ?>:</label> <span class="text-muted">*</span>
                        <input id="emailrepresentante_p" name="emailrepresentante_p" type="text" class="form-control" placeholder="<?= index_ingresa_tu_correo_electronico ?>" required>
                        <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                    </div>
                </div>   
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="numtelrep" class="form-label"><?= index_no_telefonico ?>:</label> <span class="text-muted">*</span>
                        <input id="numtelrep" name="numtelrep" type="text" class="form-control" placeholder="" required>
                        <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                    </div>
                </div>    
                <div class="col-md-4 mb-2">
                    <div class="form-group">
                        <label for="estado" class="form-label">Estado:</label> <span class="text-muted">*</span>
                        <select class="form-select" name="estado" required>
                            <option value="">Seleccione su estado</option>
                            <?php 
                                $estados=$basededatosimpmx->connect()->prepare("SELECT * FROM tbl_estados order by estado ASC");
                                $estados->execute();
                                $Allestados=$estados->fetchAll();
                                foreach($Allestados as $estado){
                            ?>
                                <option value="<?= $estado['id'] ?>" ><?= $estado['estado'] ?></option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="categoria_p" class="form-label"><?= index_categoria ?>:</label> <span class="text-muted">*</span>
                        <select class="form-select " name="categoria_p" required>
                            <option value=""><?= index_seleccione_su_categoria ?></option>
                            <?php 
                                    $querycategorias="SELECT b.id, b.categoria_es
                                    FROM tbl_categorias_eventos a
                                    INNER JOIN tbl_categorias b ON a.idCategoria = b.id
                                    INNER JOIN tbl_eventos c ON a.idEvento = c.id
                                    WHERE c.token ='$tokenEvento' and b.tipo='$form'";
                                    $categorias=$basededatos_el2023->connect()->prepare($querycategorias);
                                    $categorias->execute();    
                                    $Allcategorias=$categorias->fetchAll();
                                    foreach($Allcategorias as $categoria){
                            ?>
                                <option value="<?= $categoria['id'] ?>" ><?= $categoria['categoria_es'] ?></option>
                            <?php } ?> 
                        </select>
                        <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="form-group">
                        <label for="numintegrantes" class="form-label"><?= index_no_de_integrantes ?>:</label> <span class="text-muted">*</span>
                        <select class="form-select" name="numintegrantes" id="numintegrantes" onchange="integrantesgrupos(this.value)"; required>
                            <option value="">0</option>                         
                            <?php for ($i=1; $i < 30 ; $i++) {  ?>
                            <option value="<?php print($i); ?>"><?php print($i); ?></option>
                            <?php } ?>
                        </select>
                        <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="form-group">
                        <label class="form-label">Adjuntar comprobante de pago</label>
                        <input class="form-control" type="file" id="comprobantepago" name="comprobantepago" accept="application/pdf, image/jpg, image/png" placeholder="Comprobante de pago" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="tipoForm" class="form-control tipoForm" value="<?= $form ?>" hidden>
                    </div>
                </div>
                
                <div class="col-12">
                    <h5 class="text-dark">
                        <?= index_informacion_de_integrantes ?>
                    </h5>
                    <hr class="mt-2 mb-4">
                </div>             
            </div>
            <div class="row" id="integrantesgrupo">
            
            </div>
        <!-- </div> -->


<?php } if($form=='reservacion'){ ?>
    <div class="col-lg-4">
        <div class="form-group mb-2">
            <label for="fl-text" class="form-label">Nombre del titular de la habitación</label>
            <input class="form-control" type="text" name="nombre_p" placeholder="Nombre" required>
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
            <label for="select-input" class="form-label">Tipo de habitación</label>
            <select class="form-select" name="tipo_habitacion"  required>
                <option value="">Seleccione una categoría</option>
                <option value="Sencilla">Sencilla</option>    
                <option value="Doble">Doble</option>    
                <option value="Triple">Triple</option>
                <option value="Cuádruple">Cuádruple</option>    
            </select>
        </div>
    </div>
    <div class="col-lg-4 mb-2">
        <div class="form-group">
            <label for="select-input" class="form-label">Hotel</label>
            <select class="form-select" id="select_hotel" name="nom_hotel" required>
                <option value="">Seleccione una categoría</option>
                <option value="Hotel City Express">Hotel City Express</option>    
                <option value="Hotel Loa Inn">Hotel Loa Inn</option>    
                <option value="Hotel 5 de Mayo">Hotel 5 de Mayo</option>    
                <option value="Hotel 5 de Mayo">Hotel Nube</option>
                <option value="0">Otro</option>
            </select>
        </div>
    </div>
    <div id="nom_hotel" class="col-lg-4 d-none">
        <div class="form-group mb-2">
            <label for="fl-text" class="form-label">Nombre de Hotel</label>
            <input class="form-control" type="text" id="nom_hotel_add" name="nom_otrohotel" placeholder="Nombre de Hotel">
        </div>
    </div>
    <div class="col-lg-4 mb-2">
        <div class="form-group">
            <label class="form-label">Fecha de entrada:</label> <span class="text-muted">*</span>
            <input class="form-control" type="date" name="fecha_entrada" required="">
        </div>
    </div>
    <div class="col-lg-4 mb-2">
        <div class="form-group">
            <label class="form-label">Fecha de salida:</label> <span class="text-muted">*</span>
            <input class="form-control" type="date" name="fecha_salida" required="">
        </div>
    </div>
    <div class="col-lg-4 mb-2">
        <div class="form-group">
            <label for="select-input" class="form-label">Estado</label>
            <select class="form-select" name="estado_p" required>
                <option value="">Seleccione su estado</option>
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
    <div class="col-lg-12 mb-4">
        <div class="form-group">
            <label class="form-label">Adjuntar comprobante de pago de reserva*</label>
            <input class="form-control" type="file" id="comprobantepago" name="comprobantepago" accept="application/pdf, image/jpg, image/png" placeholder="Comprobante de pago" required>
        </div>
    </div>
    <input type="hidden" value="<?= $form ?>" name="tipoForm">
    <input type="hidden" value="1" class="validCodigo" name="validCodigo">

<?php } ?>