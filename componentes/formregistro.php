<?php if($form=='solistas') { ?>
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

<?php } if($form=='parejas'){ ?>

    
        <div class="col-lg-12">
            <?php for ($i=1; $i < 3; $i++) { ?>
                <div class="row">
                    <div class="col-12">
                        <h5 class="text-dark">
                        <?=  index_informacion_competidor ?> <?php print($i) ?>
                        </h5>
                        <hr class="mt-2 mb-4">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="nombre_p<?php print($i) ?>"><?= index_nombre ?>:</label> <span class="text-muted">*</span>
                            <input id="nombre_p<?php print($i) ?>" name="nombre_p<?php print($i) ?>" type="text" class="form-control" placeholder="<?= index_ingresa_tu_nombre ?>" required>
                            <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                        </div>
                    </div>
                
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="apellidos_p<?php print($i) ?>"><?= index_apellidos ?>:</label> <span class="text-muted">*</span>
                            <input id="apellidos_p<?php print($i) ?>" name="apellidos_p<?php print($i) ?>" type="text" class="form-control" placeholder="<?= index_ingresa_tus_apellidos ?>" required>
                            <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                        <label><?= index_fecha_de_nacimiento ?>:</label> <span class="text-muted">*</span>
                        <input class="form-control"  type="date" name="date_birthday_p<?php print($i) ?>" required>
                        <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="email_p<?php print($i) ?>"><?= index_correo_electronico ?>:</label> <span class="text-muted">*</span>
                            <input id="email_p<?php print($i) ?>" name="email_p<?php print($i) ?>" type="email" class="form-control" placeholder="<?= index_ingresa_tu_correo_electronico ?>" required>
                            <div class="invalid-feedback"><?= index_campo_requerido ?></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <fieldset class="form-group">
                            <label><?= index_genero ?></label>
                            <div class="pt-3 form-check">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="Masculino<?php print($i) ?>" value="Masculino" name="genero_p<?php print($i) ?>" required>
                                    <label class="custom-control-label" for="Masculino<?php print($i) ?>"><?= index_masculino ?></label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="Femenino<?php print($i) ?>" value="Femenino" name="genero_p<?php print($i) ?>" required>
                                    <label class="custom-control-label" for="Femenino<?php print($i) ?>"><?= index_femenino ?></label>
                                      
                                </div>
                                
                            </div>
                            
                        </fieldset>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pais_p<?php print($i) ?>"><?= index_pais ?>:</label> <span class="text-muted">*</span>
                            <select class="form-select" name="pais_p<?php print($i) ?>" required> 
                                <option value=""><?= index_seleccione_su_pais ?></option>
                                <?php  
                                    $paises=$basededatos->connect()->prepare("SELECT * FROM tbl_paises WHERE status=0 order by pais ASC");
                                    $paises->execute();
                                    $Allpaises=$paises->fetchAll();
                                    foreach($Allpaises as $pais){

                                ?>
                                    <option value="<?= $pais['pais'] ?>" ><?= $pais['pais'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback"><?= index_campo_requerido ?></div>
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

                            if(isset($_SESSION['lang'])){
                                $lang=$_SESSION['lang'];
                                $categorias=$basededatos->connect()->prepare("SELECT * FROM tbl_categorias WHERE tipo='$form' and status=0 order by categoria_$lang ASC");
                                $categorias->execute();
                                $Allcategorias=$categorias->fetchAll();
                            
                        ?>
                            <?php foreach($Allcategorias as $categoria){ ?>
                                <option value="<?= $categoria['categoria_es'] ?>" ><?= $categoria['categoria_'.$lang] ?></option>
                            <?php } ?>
                        <?php                                                                              
                            }else{
                                $categorias=$basededatos->connect()->prepare("SELECT * FROM tbl_categorias WHERE tipo='$form' and status=0 order by categoria_es ASC");
                                $categorias->execute();
                                $Allcategorias=$categorias->fetchAll();
                                
                        ?>
                            <?php foreach($Allcategorias as $categoria){ ?>
                                <option value="<?= $categoria['categoria_es'] ?>" ><?= $categoria['categoria_es'] ?></option>
                            <?php } ?>

                        <?php                                
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-5">
                <div class="form-group">
                    <label for="hotel_num"><?= index_hotelnum ?>:</label> <span class="text-muted">*</span>
                    <input id="hotel_num" name="hotel_num" type="text" class="form-control hotel_num" placeholder="<?= index_ingresa_hotelnum ?>" required>
                </div>
            </div>
        </div>
        <!-- <input type="text" name="idform" class="form-control tipoform" value="<?= $form ?>" hidden>
        <input type="text" name="costo" class="form-control costo"  value="<?= SampleCart['item_amt_'.$form] ?>" hidden> -->
    
<?php } ?>