<?php $__env->startSection('content'); ?>
    <section>

        <form action= "<?php echo e(route('modificaUsuarios')); ?>" method="post" class="form-horizontal">

            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Lista de Usuarios</a></li>
                                </ul>

                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
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
                                                                                   data-show-refresh="true"
                                                                                   data-show-pagination-switch="true"
                                                                                   data-show-toggle="true" data-resizable="true"
                                                                                   data-cookie="true"
                                                                                   data-cookie-id-table="saveId"
                                                                                   data-show-export="true"
                                                                                   data-click-to-select="true"
                                                                                   data-toolbar="#toolbar">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th data-field="state"
                                                                                        data-checkbox="true"></th>
                                                                                    <th class="sorting_asc" tabindex="0" rowspan="1"
                                                                                        colspan="1">Nombre
                                                                                    </th>
                                                                                    <th class="sorting" tabindex="0" rowspan="1"
                                                                                        colspan="1">Apellido paterno
                                                                                    </th>
                                                                                    <th class="sorting" tabindex="0" rowspan="1"
                                                                                        colspan="1">Apellido materno
                                                                                    </th>
                                                                                    <th class="sorting" tabindex="0" rowspan="1"
                                                                                        colspan="1">Perfil
                                                                                    </th>
                                                                                    <th class="sorting" tabindex="0" rowspan="1"
                                                                                        colspan="1">Área
                                                                                    </th>
                                                                                    <th class="sorting" tabindex="0" rowspan="1"
                                                                                        colspan="1">Puesto
                                                                                    </th>
                                                                                    <th class="sorting" tabindex="0" rowspan="1"
                                                                                        colspan="1">Correo
                                                                                    </th>
                                                                                    <th class="sorting" tabindex="0" rowspan="1"
                                                                                        colspan="1">Acciones
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <?php $__currentLoopData = $detalle_registrousuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="sorting_1"></td>
                                                                                        <td class="sorting_1"><?php echo e($registro->nombre); ?></td>
                                                                                        <td class="sorting_1"><?php echo e($registro->apellido_paterno); ?></td>
                                                                                        <td class="sorting_1"><?php echo e($registro->apellido_materno); ?></td>
                                                                                        <td class="sorting_1"><?php echo e($registro->nom_perfil); ?></td>
                                                                                        <td class="sorting_1"><?php echo e($registro->nom_dir); ?></td>
                                                                                        <td class="sorting_1"><?php echo e($registro->nom_puesto); ?></td>
                                                                                        <td class="sorting_1"><?php echo e($registro->correo_electronico); ?></td>
                                                                                        <td class="sorting_1">
                                                                                            <button type="button"
                                                                                                    title="Editar registro"
                                                                                                    class="pd-setting-ed">
                                                                                                <a href='edit_user/<?php echo e($registro->id_usuario); ?>'>
                                                                                                    <i class="fa fa-pencil-square-o"> </i>
                                                                                                </a></button>
                                                                                            <button class="btn-delete pd-setting-ed btn-delete"
                                                                                                    type="button" data-toggle="modal"
                                                                                                    data-target="#DangerModalalert"
                                                                                                    name="delete_user"
                                                                                                    id="delete_user"
                                                                                                    data-toggle="tooltip"
                                                                                                    title="Eliminar registro"                                                                                            >
                                                                                                <i class="fa fa-fw fa-trash-o"></i>
                                                                                            </button>
                                                                                        </td>
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
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tabla de registros usuarios   -->
                                    <div class="product-tab-list tab-pane fade data-table-area mg-b-15"
                                         id="modificacionusuarios">
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
                                                                       data-show-refresh="true"
                                                                       data-show-pagination-switch="true"
                                                                       data-show-toggle="true" data-resizable="true"
                                                                       data-cookie="true"
                                                                       data-cookie-id-table="saveId"
                                                                       data-show-export="true"
                                                                       data-click-to-select="true"
                                                                       data-toolbar="#toolbar">
                                                                    <thead>
                                                                    <tr>
                                                                        <th data-field="state"
                                                                            data-checkbox="true"></th>
                                                                        <th class="sorting_asc" tabindex="0" rowspan="1"
                                                                            colspan="1">Nombre
                                                                        </th>
                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                            colspan="1">Apellido paterno
                                                                        </th>
                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                            colspan="1">Apellido materno
                                                                        </th>
                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                            colspan="1">Perfil
                                                                        </th>
                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                            colspan="1">Área
                                                                        </th>
                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                            colspan="1">Puesto
                                                                        </th>
                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                            colspan="1">Correo
                                                                        </th>
                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                            colspan="1">Acciones
                                                                        </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php $__currentLoopData = $detalle_registrousuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <tr role="row" class="odd">
                                                                            <td class="sorting_1"></td>
                                                                            <td class="sorting_1"><?php echo e($registro->nombre); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->apellido_paterno); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->apellido_materno); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->nom_perfil); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->nom_dir); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->nom_puesto); ?></td>
                                                                            <td class="sorting_1"><?php echo e($registro->correo_electronico); ?></td>
                                                                            <td class="sorting_1">
                                                                                    <button type="button"
                                                                                            title="Editar registro"
                                                                                            class="pd-setting-ed">
                                                                                        <a href='edit_user/<?php echo e($registro->id_usuario); ?>'>
                                                                                            <i class="fa fa-pencil-square-o"> </i>
                                                                                        </a></button>
                                                                                    <button class="btn-delete pd-setting-ed btn-delete"
                                                                                            type="button" data-toggle="modal"
                                                                                            data-target="#DangerModalalert"
                                                                                            name="delete_user"
                                                                                            id="delete_user"
                                                                                            data-toggle="tooltip"
                                                                                            title="Eliminar registro"                                                                                            >
                                                                                        <i class="fa fa-fw fa-trash-o"></i>
                                                                                    </button>
                                                                            </td>
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
                                    <!-- Tabla de registros de usuraios -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




<!--INICIO MODAL AVISO ELIMINACION DE USUARIO-->
            <div id="DangerModalalert" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <span class="educate-icon educate-danger modal-check-pro information-icon-pro" style="align:center;width:200px"></span>
                            <h2 style="text-align: center">Aviso!</h2><br><br>
                            <h4 style="text-align: center">¿Estas seguro de eliminar usuario?</h4>
                        </div>
                        <div class="modal-footer danger-md">
                            <button class="btn btn-danger" data-dismiss="modal" href="#" style="text-align: left">Cancel</button><br><br>
                            <form action="./delete_user/<?php echo e($registro->id_usuario); ?>">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button onclick="document.reload()"
                                        class="btn btn-info btn-delete"
                                        type="button" data-toggle="modal"
                                        data-target="#DangerModalalert"
                                        name=delete_user"
                                        id="delete_user"
                                        data-toggle="tooltip"
                                        title="Aceptar"
                                        >Aceptar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        <br>
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
            </div>
        <?php endif; ?>

        <script src="<?php echo e(asset('js/form_academia.js')); ?>" charset="utf-8"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $('.btn-delete').on('click', function(e) {
                $(this).parents('form:first').submit()
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\academia_fojal\resources\views/ModificaUsuarios.blade.php ENDPATH**/ ?>