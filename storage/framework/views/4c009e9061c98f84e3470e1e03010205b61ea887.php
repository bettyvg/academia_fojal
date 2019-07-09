<?php $__env->startSection('content'); ?>
    <section>
        <form action="<?php echo e(route('BuscarEvaCapacitadores')); ?>" method="post" class="form-horizontal">
            <?php echo csrf_field(); ?>
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
                    <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                        <div class="container-fluid" style="margin: 40px 0px 0px 0px">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-payment-inner-st">
                                        <ul id="myTabedu1" class="tab-review-design">
                                            <li class="active"><a href="#description">Detalle encuestas</a></li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content custom-product-edit">
                                            <!-- Detalle de encuestas   -->
                                            <div id="myTabContent" class="tab-content custom-product-edit">
                                                <div class="product-tab-list tab-pane fade active in" id="description">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="review-content-section">
                                                                <div id="dropzone1" class="pro-ad addcoursepro">

                                                                <div class="sparkline13-graph">
                                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                                        <div class="from-group col-lg-12">
                                                                            <div class="col-lg-2"><label>Elegir capacitador</label></div>
                                                                            <div class="col-lg-4">
                                                                            <select
                                                                                    class="form-control"
                                                                                    name="id_capacitador"
                                                                                    id="id_capacitador">
                                                                                <option value="">Seleccionar
                                                                                    capacitador..
                                                                                </option>
                                                                                <?php $__currentLoopData = $cat_capacitador; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $capacitadores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="<?php echo e($capacitadores->id_capacitador); ?>" <?php if(old('id_capacitador')==$capacitadores->id_capacitador): ?>selected="selected"<?php endif; ?>><?php echo e($capacitadores->nom_cap." ". $capacitadores->apellido_paterno." ".$capacitadores->apellido_materno); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                            </div>
                                                                            <br><br>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <div class="col-lg-2"><label>Desde</label></div>
                                                                            <div class="col-lg-4">
                                                                        <input name="fecha1" id="fecha1"
                                                                               type="date"
                                                                               class="form-control"
                                                                               placeholder="Fecha del curso"
                                                                               value="<?php echo e(old('fecha1')); ?>">
                                                                            </div>
                                                                            <br><br>
                                                                        </div>

                                                                        <div class="col-lg-12">
                                                                            <div class="col-lg-2"><label>Hasta</label></div>
                                                                            <div class="col-lg-4">
                                                                        <input name="fecha2" id="fecha2"
                                                                               type="date"
                                                                               class="form-control"
                                                                               placeholder="Fecha del curso"
                                                                               value="<?php echo e(old('fecha2')); ?>">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-12 col-md-offset-2">
                                                                            <br>
                                                                            <button type="submit"
                                                                                    class="btn btn-primary waves-effect waves-light" style="width: 30%"  id="buscar">
                                                                                Buscar
                                                                            </button>

                                                                        </div>

                                                                        <table name="tbl_buscar" id="tbl_buscar" data-toggle="table"
                                                                               data-show-columns="true"
                                                                               data-resizable="true"
                                                                               data-cookie="true"
                                                                               data-cookie-id-table="saveId"
                                                                               data-show-export="true"
                                                                               data-click-to-select="true"
                                                                               data-toolbar="#toolbar" >
                                                                            <thead>
                                                                            <tr >
                                                                                <th data-field="fecha">Fecha del curso</th>
                                                                                <th data-field="nombrepar" >Nombre participante</th>
                                                                                <th data-field="Ejecutivo">Capacitador</th>
                                                                                <th data-field="sesion">Sesion</th>
                                                                                <th data-field="cve_compuesta_ent_mun">Municipio</th>
                                                                                <th data-field="id_institucion">Institución</th>
                                                                                <th data-field="Puntualidad" data-checkbox="false">
                                                                                    Puntualidad
                                                                                </th>
                                                                                <th data-field="Conocimiento">
                                                                                    Dominio del tema
                                                                                </th>
                                                                                <th data-field="Capacidad">Técnica de exposición</th>
                                                                                <th data-field="Claridad">Ejemplos aplicados a las empresas</th>
                                                                                <th data-field="Utilidad">Ejercicios al finalizar cada tema </th>
                                                                                <th data-field="ModeloEmprendimiento">
                                                                                    Empatía con el grupo
                                                                                </th>
                                                                                <th data-field="AisteFojal">Fluidez para hablar
                                                                                </th>
                                                                                <th data-field="PersonaJuridica">Impartió todos los temas
                                                                                </th>
                                                                                <th data-field="AltaHacienda">Capacidad  de resolver preguntas sobre el tema</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <?php $__currentLoopData = $busqueda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1"><?php echo e($Items->fecha); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->nombrepar); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->nombre_cap->nom_cap); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->sesion); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->nombre_municipio->nom_mun); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->nombre_institucion->nombre_inst); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->puntualidad); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->dominiotema); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->exposicion); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->ejemplos); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->ejercicios); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->empatiagrupo); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->fluidez); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->todostemas); ?></td>
                                                                                    <td class="sorting_1"><?php echo e($Items->capresolver); ?></td>
                                                                                </tr>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </tbody>
                                                                        </table>
                                                                        <?php echo e($busqueda->render()); ?>

                                                                    </div>
                                                                </div>
                                                                <br><br>
                                                               <!-- <table class="table table-bordered table-hover dataTable"  id="tabla_accionistas">
                                                                    <tr role="row">
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="text-align: center">Total Excelente</th>
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="text-align: center">Total Buena</th>
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="text-align: center">Total Regular</th>
                                                                        <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="text-align: center">Total mala</th>
                                                                    </tr>
                                                                </table>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tabla de registros de evaluación -->
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
        <script src="<?php echo e(asset('js/form_academia.js')); ?>" charset="utf-8"></script>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\laragon\www\academia_fojal\resources\views/BuscarEvaCapacitadores.blade.php */ ?>