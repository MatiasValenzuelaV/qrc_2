<?php $this->load->view('layouts/head', $title); ?>

<body>
    <?php $this->load->view('layouts/leftPanel'); ?>
    <?php $this->load->view('layouts/headPanel'); ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item"><?= $bc ?></a>
                <span class="breadcrumb-item active"><?= $sbc ?></span>
            </nav>
        </div>
        <div class="br-pagebody">
            <div class="container-fluid">
                <div class="row justify-content-md-center mg-b-20">
                    <div class="col-md-8 col-sm-12">
                        <div class="card">
                            <div class="card-header tx-medium bg-info tx-uppercase">
                                Párametros de búsqueda
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-lg-2 form-control-label">Perfil</label>
                                        <div class="col-sm-12 col-lg-10">
                                            <select name="account" id="slcPerfil" class="form-control form-control-success">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-lg-2 form-control-label">Personal</label>
                                        <div class="col-sm-12 col-lg-10">
                                            <input id="frmUsuario" maxlength="50" type="text" placeholder="Ingrese el nombre de la persona que desea buscar." class="form-control form-control-success">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header bg-info  d-flex align-items-center justify-content-between pd-y-5 tx-uppercase">
                                <h7 class="mg-b-0 tx-14 tx-white tx-normal">Usuarios registrados</h7>
                                <div class="card-option tx-24">
                                    <button type="button" class="btn btn-black btn-sm" id="btnNuevo"><i class="fas fa-plus-square"></i> Nuevo</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-responsive table-striped" id="table-cabecera">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre Personal</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Perfil</th>
                                            <th class="text-center">Impresora</th>
                                            <th class="text-center">Equipo</th>
                                            <th class="text-center">Clave</th>
                                            <th class="text-center">Editar</th>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-registros">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mdlUsuarios" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="titleUsuarios"></h6>
                    <button type="button" class="close fa-pointer" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-20">
                    <p id="fn_error" class="alert alert-warning d-none"></p>
                    <div class="row">
                        <input type="number" class="d-none" id="mdlID" value="0">
                        <input type="number" class="d-none" id="mdlIDPersona" value="0">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Rut: </label>
                                <input class="form-control" type="text" disabled name="rut" id="mdlRut" placeholder="Ingrese rut de personal">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Nombre: </label>
                                <!-- <input class="form-control" type="text" name="nombre" id="mdlNombre" disabled placeholder="Nombre de la persona"> -->
                                <input list="personal" value="" id="dtlPersonal" class="col-sm-6 custom-select" disabled placeholder="Buscar por rut o nombre del personal">
                                <datalist id="personal">

                                </datalist>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Perfil de usuario: </label>
                                <select name="account" id="mdlPerfil" class="form-control form-control-success">
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Usuario de ingreso: </label>
                                <input class="form-control" type="text" name="usuario" id="mdlUsuario" placeholder="Nombre del usuario">
                            </div>
                        </div>
                    </div>
                    <div class="row d-none" id="frmClave">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Clave de ingreso: </label>
                                <input class="form-control" type="password" name="password" id="mdlPassword" placeholder="Clave de usuario">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Confirmar clave: </label>
                                <input class="form-control" type="password" name="password" id="mdlPasswordC" placeholder="Confirme clave">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Impresora: </label>
                                <select name="account" id="mdlImpresora" class="form-control form-control-success">
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Equipo: </label>
                                <input class="form-control" type="text" name="equipo" id="mdlEquipo" placeholder="Ingrese Nombre de equipo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" id="btnGuardar">Guardar</button>
                    <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="mdlEliminar" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <input type="text" class="d-none" id="idEliminar">
                    <button type="button" class="close fa-pointer" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="fas fa-exclamation-triangle tx-100 tx-warning lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-black  tx-semibold mg-b-20" id="titleEliminar"></h4>
                    <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close" id="btnEliminar">
                        Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="mdlCambioClaveUsuario" class="modal fade">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Cambio clave</h6>
                    <button type="button" class="close fa-pointer" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-20">
                    <p id="fns_error" class="alert alert-warning d-none"></p>
                    <div class="row">
                        <input type="number" class="d-none" id="mdlCambioclaveId">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Nueva clave: </label>
                                <input class="form-control" type="password" name="mdlClave" id="mdlClave" placeholder="Clave Usuario">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Confirmar clave: </label>
                                <input class="form-control" type="password" name="mdlClaveConfirma" id="mdlClaveConfirma" placeholder="Ingrese la nueva clave">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" id="bntCambiar">Cambiar</button>
                    <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('layouts/js'); ?>
    <script src="<?= js_url(); ?>app/usuario.js"></script>
</body>

</html>