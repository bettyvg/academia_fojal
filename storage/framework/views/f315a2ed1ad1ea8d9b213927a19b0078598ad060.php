
<?php $__env->startSection('content'); ?>

    <section>
        <form action="<?php echo e(route('registroplatica')); ?>" method="post" class="form-horizontal">
            <?php if(isset($alert)): ?>
                <div class="row" style="padding: 10px; margin: 30px 20px 0px 20px">
                    <div class="col-12">
                        <div  class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php echo e($alert->message); ?>

                    </div>
                </div>
            <?php endif; ?>

                <?php if(isset($alert2)): ?>
                    <div class="row" style="padding: 10px;">
                        <div class="col-12">
                            <div class="alert alert-<?php echo e($alert2->type); ?>">
                                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                <?php echo e($alert2->message); ?>

                            </div>
                        </div>
                    </div>

                <?php endif; ?>

             <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
             <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#registroplatica">Registro plática informativa</a></li>
                                <li><a href="#modificacioninscritos"> Consulta de registros</a></li>
                            </ul>

                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="registroplatica">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad add-professors">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    <br>
                                                                    <input name="nombre" id="nombre" type="text"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->nombre); ?>" <?php endif; ?>
                                                                           required="true"
                                                                           class="form-control"
                                                                           placeholder="Nombre">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="apellido_paterno" id="apellido_paterno" type="text"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->apellido_paterno); ?>" <?php endif; ?>
                                                                           required="true"
                                                                           class="form-control"
                                                                           placeholder="Apellido paterno">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="apellido_materno" id="apellido_materno" type="text"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->apellido_materno); ?>" <?php endif; ?>
                                                                           required="true"
                                                                           class="form-control"
                                                                           placeholder="Apellido materno">
                                                                </div>
                                                                <div class="form-group ">
                                                                    <select name="genero" id="genero" class="form-control"
                                                                        <?php if(isset($registro)): ?> value="<?php echo e($registro->genero); ?>" <?php endif; ?>>
                                                                        <option value="none" selected="" disabled="" style="color: darkgrey;">Genero</option>
                                                                        <option value="Masculino">Masculino</option>
                                                                        <option value="Femenino">Femenino</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select required='true' class="form-control select2"  name="estado_nacimiento" id="estado_nacimiento" <?php if(isset($registro)): ?> value="<?php echo e($registro->estado); ?>" <?php endif; ?>>
                                                                        <option value="none" selected="" disabled="">Estado de nacimiento</option>
                                                                        <?php $__currentLoopData = $cat_entidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entidades): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($entidades->cve_ent); ?>"> <?php echo e($entidades->nom_ent); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select required='true' class="form-control select2"  name="municipio" id="municipio">
                                                                        <option value="none" selected="" disabled="">Municipio de donde nos visita</option>
                                                                        <?php $__currentLoopData = $cat_municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($municipios->cve_compuesta_ent_mun); ?>"> <?php echo e($municipios->nom_mun); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Fecha de nacimiento</span>
                                                                    <input name="fecha_nacimiento" id="fecha_nacimiento" type="date"
                                                                           class="form-control"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->fecha_nacimiento); ?>" <?php endif; ?>
                                                                           required="true">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="rfc" id="rfc" type="text"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->rfc); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           required="true" placeholder="RFC">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="correo" id="correo" type="email"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->correo); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           required="true" placeholder="Correo">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="telefono" id="telefono" type="number"
                                                                           <?php if(isset($registro)): ?> value="<?php echo e($registro->telefono); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           placeholder="Teléfono">
                                                                </div>

                                                                <div class="form-group">
                                                                    <select required='true' class="form-control select2"  name="id_escolaridad" id="id_escolaridad">
                                                                        <option value="none" selected="" disabled="">Escolaridad</option>
                                                                        <?php $__currentLoopData = $cat_escolaridad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $escolaridad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($escolaridad->id_escolaridad); ?>"><?php echo e($escolaridad->nivel." ".$escolaridad->estatus); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">

                                                                    <input name="ocupacion" id="ocupacion" type="text"
                                                                           <?php if(isset($registro)): ?> required="true" value="<?php echo e($registro->ocupacion); ?>" <?php endif; ?>
                                                                           class="form-control"
                                                                           placeholder="Ocupación">
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <br>
                                                                    <button type="submit"
                                                                            class="btn btn-primary waves-effect waves-light" id="guardar">
                                                                        Guardar
                                                                    </button>
                                                                    <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(csrf_token()); ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tabla de registros evaluación   -->
                                <div class="product-tab-list tab-pane fade data-table-area mg-b-15" id="modificacioninscritos">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="sparkline13-list">
                                                    <div class="sparkline13-hd">
                                                        <div class="main-sparkline13-hd">
                                                            <!--<h1>Projects <span class="table-project-n">Data</span> Table</h1>-->
                                                        </div>
                                                    </div>
                                                    <div class="sparkline13-graph">
                                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                                            <div id="toolbar">
                                                                <select class="form-control dt-tb">
                                                                    <option value="all">Exportar todo</option>
                                                                    <option value="selected">Exportar Seleccionados
                                                                    </option>
                                                                </select>
                                                            </div>

                                                            <table id="table" data-toggle="table"
                                                                   data-pagination="true"
                                                                   data-show-columns="true"
                                                                   data-show-pagination-switch="true"
                                                                   data-show-toggle="true" data-resizable="true"
                                                                   data-cookie="true"
                                                                   data-cookie-id-table="saveId"
                                                                   data-show-export="true"
                                                                   data-click-to-select="true"
                                                                   data-toolbar="#toolbar">
                                                                <thead>
                                                                <tr>
                                                                    <th data-field="state" data-checkbox="true"></th>
                                                                    <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" >Nombre</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido paterno</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido materno</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Genero</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Estado de nacimiento</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Municipio</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Fecha de nacimiento</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >RFC</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Correo</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Teléfono</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Nivel Escolaridad</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Estatus Escolaridad</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Ocupación</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Fecha de registro</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php $__currentLoopData = $detalle_registrop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1"></td>
                                                                        <td class="sorting_1"><?php echo e($Items->nombre); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->apellido_paterno); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->apellido_materno); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->genero); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->cve_ent); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->cve_compuesta_ent_mun); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->fecha_nacimiento); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->rfc); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->correo); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->telefono); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->nivel); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->estatus); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->ocupacion); ?></td>
                                                                        <td class="sorting_1"><?php echo e($Items->created_at); ?></td>
                                                                    </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tabla de registros de platica -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

                </div>
        </form>
        <br>
        <?php if(isset($alert) && $alert != null && isset($alert->type)): ?>
            <div class="alert alert-<?php echo e($alert->type); ?>" role="alert">
                <?php echo e($alert->message); ?>

            </div>
        <?php endif; ?>
        <script src="<?php echo e(asset('build/js/form_academia.js')); ?>" charset="utf-8"></script>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /var/www/html/academia_fojal/resources/views/registroplatica.blade.php */ ?>