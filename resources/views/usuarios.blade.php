@extends('main')
@section('content')
    <section>

        <form action="{{route('usuarios')}}" method="post" class="form-horizontal" >
            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Usuarios</a></li>
                                </ul>

                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div id="dropzone1" class="pro-ad addcoursepro">
                                                        <form
                                                                class="dropzone dropzone-custom needsclick addcourse"
                                                                id="formulario-usuarios">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="nombre" id="nombre" type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->nombre}}"
                                                                               @endif
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Nombre"
                                                                               value="{{old('nombre')}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="apat" id="apat" type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->apellido_paterno}}"
                                                                               @endif
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Apellido materno"
                                                                               value="{{old('apat')}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="amat" id="amat" type="text"
                                                                               @if(isset($edit_user)) value="{{$edit_user->apellido_materno}}"
                                                                               @endif
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Apellido materno"
                                                                               value="{{old('amat')}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select class="form-control"
                                                                                name="area"
                                                                                id="area">
                                                                            <option value="">Área a la que pertenece..
                                                                            @foreach($cat_direcciones as $direccion)
                                                                                <option value="{{$direccion->id_direccion}}"
                                                                                        @if(isset($edit_user) && $edit_user->id_direcciones == $direccion->id_direccion) selected @endif>{{$direccion->nom_dir}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">

                                                                        <select class="form-control" name="puesto"
                                                                                id="puesto">
                                                                            <option value="">Seleccionar puesto..
                                                                            @if(isset($edit_user))
                                                                                @foreach($cat_puestos as $puesto)
                                                                                    <option value="{{$puesto->id_puesto}}" selected>{{$puesto->nom_puesto}}</option>
                                                                                    @endforeach
                                                                                    @endif

                                                                        </select>
                                                                    </div>

                                                                </div>


                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <!--<div class="form-group">
                                                                    <input name="extension" type="text"
                                                                           class="form-control"
                                                                           required="true"
                                                                           onKeyUp="if(isNaN(this.value)){alert('sólo puede introdicur números');this.value=this.value.substring(0,this.value.lenght-1)}"
                                                                           placeholder="Extensión telefónica"
                                                                           value="//">
                                                                    <div style="color: #fe4138"> !!}</div>

                                                                    </div>-->
                                                                    <div class="form-group">
                                                                        <select class="form-control"
                                                                                name="perfil"
                                                                                id="perfil">
                                                                            <option value="">Seleccionar perfil
                                                                                usuario..
                                                                            </option>
                                                                            @foreach($cat_perfiles as $perfiles)
                                                                                <option value="{{$perfiles->id_perfil}}"
                                                                                        @if(old('perfil')==$perfiles->id_perfil)selected="selected" @endif
                                                                                        @if(isset($edit_user) && $edit_user->id_perfil == $perfiles->id_perfil) selected @endif>{{$perfiles->nom_perfil}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="correo" type="email"
                                                                               @if(isset($edit_user))
                                                                               value="{{$edit_user->correo_electronico}}"
                                                                               @endif
                                                                               class="form-control"
                                                                               required="true" placeholder="Correo"
                                                                               value="{{old('correo')}}">
                                                                        <div style="color: #fe4138">{!! $errors->first('correo', '<small>:message</small>') !!}</div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="contrasena" type="password"
                                                                               @if(!isset($edit_user)) required="true"
                                                                               @endif
                                                                               class="form-control"
                                                                               placeholder="Contraseña"
                                                                               value="{{old('contrasena')}}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input name="confirma-contrasena"
                                                                               type="password"
                                                                               @if(!isset($edit_user)) required="true"
                                                                               @endif
                                                                               class="form-control"
                                                                               placeholder="Confirma contraseña"
                                                                               value="{{old('confirma-contrasena')}}">
                                                                    </div>


                                                                </div>
                                                                @if(isset($edit_user))
                                                                    <p><b>Nota:</b> Si no requiere cambiar la
                                                                        contraseña,
                                                                        dejar en blanco el campo "Contraseña" y "Repetir
                                                                        contraseña"</p>

                                                                @endif
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="payment-adress">
                                                                            <br>

                                                                            <button onclick="document.reload()"
                                                                                    type="submit"
                                                                                    class="btn btn-primary waves-effect waves-light">
                                                                                Guardar
                                                                            </button>
                                                                            <input type="hidden" name="_token"
                                                                                   id="csrf-token"
                                                                                   value="{{csrf_token()}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
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
                                                                    @foreach ($detalle_registrousuarios as $registro)
                                                                        <tr role="row" class="odd">
                                                                            <td class="sorting_1"></td>
                                                                            <td class="sorting_1">{{$registro->nombre}}</td>
                                                                            <td class="sorting_1">{{$registro->apellido_paterno}}</td>
                                                                            <td class="sorting_1">{{$registro->apellido_materno}}</td>
                                                                            <td class="sorting_1">{{$registro->nom_perfil}}</td>
                                                                            <td class="sorting_1">{{$registro->nom_dir}}</td>
                                                                            <td class="sorting_1">{{$registro->nom_puesto}}</td>
                                                                            <td class="sorting_1">{{$registro->correo_electronico}}</td>
                                                                            <td class="sorting_1">
                                                                                <button type="button"
                                                                                        title="Editar registro"
                                                                                        class="pd-setting-ed">
                                                                                    <a href='edit_user/{{$registro->id_usuario}}'>
                                                                                        <i class="fa fa-pencil-square-o"> </i>
                                                                                    </a></button>
                                                                                <button class="btn-delete pd-setting-ed btn-delete"
                                                                                        type="button"
                                                                                        data-toggle="modal"
                                                                                        data-target="#DangerModalalert"
                                                                                        name="delete_user"
                                                                                        id="delete_user"
                                                                                        data-toggle="tooltip"
                                                                                        title="Eliminar registro">
                                                                                    <i class="fa fa-fw fa-trash-o"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
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
                            <span class="educate-icon educate-danger modal-check-pro information-icon-pro"
                                  style="align:center;width:200px"></span>
                            <h2 style="text-align: center">Aviso!</h2><br><br>
                            <h4 style="text-align: center">¿Estas seguro de eliminar usuario?</h4>
                        </div>
                        <div class="modal-footer danger-md">
                            <button class="btn btn-danger" data-dismiss="modal" href="#" style="text-align: left">
                                Cancel
                            </button>
                            <br><br>
                            <form action="./delete_user/{{$registro->id_usuario}}" method="POST">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
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
        @if(isset($alert))
            <div class="row" style="padding: 10px; margin: 30px 20px 0px 20px">
                <div class="col-12">
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{$alert->message}}
                    </div>
                </div>
            </div>
        @endif

        <script src="{{asset('js/form_academia.js')}}" charset="utf-8"></script>

        @endsection

        @section('scripts')
            <script>
                $('.btn-delete').on('click', function (e) {
                    $(this).parents('form:first').submit()
                })
            </script>
@endsection
