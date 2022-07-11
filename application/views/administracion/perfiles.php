<?php $this->load->view('layouts/head', $title); ?>
<?php $this->load->view('layouts/leftpanel'); ?>
<?php $this->load->view('layouts/header'); ?>

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="<?= base_url(); ?>">Inicio</a>
            <span class="breadcrumb-item active">Administrar acceso</span>
            <span class="breadcrumb-item active">Usuarios</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="container-fluid">
            <div class="row justify-content-md-center mg-b-20">
                <div class="col-md-8 col-sm-12">
                    <div class="card bd-0">
                        <div class="card-header tx-medium bg-primary tx-white tx-uppercase">
                            Parámetros de búsqueda
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-lg-2 form-control-label">Perfil</label>
                                    <div class="col-sm-12 col-lg-10">
                                        <select class="form-control select2" id="frmPerfil"
                                            data-placeholder="Choose Browser">
                                            <option value="0">SELECCIONE UN PERFIL</option>
                                            <option value="1">ADMINISTRADOR</option>
                                            <option value="2">SUPERVISOR</option>
                                            <option value="3">TECNICO CLIMATIZACION</option>
                                            <option value="4">AYUDANTE DE CLIMATIZACION</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-lg-2 form-control-label">Personal</label>
                                    <div class="col-sm-12 col-lg-10">
                                        <input id="frmPersonal" maxlength="50" type="text"
                                            placeholder="Ingrese el nombre de la persona que desea buscar."
                                            class="form-control form-control-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card bd-0">
                        <div
                            class="card-header bg-primary  d-flex align-items-center justify-content-between pd-y-5 tx-uppercase">
                            <h7 class="mg-b-0 tx-14 tx-white tx-normal">Usuarios registrados</h7>
                            <div class="card-option tx-24">
                                <button type="button" class="btn btn-black btn-sm" id="btnNuevo"><i
                                        class="fas fa-plus-square"></i> Nuevo</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-striped" id="ttable">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tx-center">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Perfil</th>
                                        <th class="text-center">Clave</th>
                                        <th class="text-center">Editar</th>
                                        <th class="text-center">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                </tbody>
                            </table>
                            <nav id="registros-pagina" class="d-none mg-t-30">
                                <ul class="pagination justify-content-center pagination-sm"></ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="mdlUsuarios" class="modal fade" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="mdlNuevoTitle"></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <p id="fn_error" class="alert alert-warning d-none">
                </p>
                <div class="row mg-b-5">
                    <input type="text" class="d-none" id="mfrmID">
                    <input type="text" class="d-none" id="mfrmIDPersonal">
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group col-lg-12">
                            <label class="form-control-label">Rut </label>
                            <input class="form-control" type="text" name="mfrmRut" disabled id="mfrmRut"
                                placeholder="Rut de la persona">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group col-lg-12">
                            <label class="form-control-label">Nombre </label>
                            <input list="personal" value="" id="dtlPersonal" class="col-sm-6 custom-select" disabled
                                placeholder="Buscar por rut o nombre del personal">
                            <datalist id="personal">

                            </datalist>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group col-sm-12">
                            <label class="form-control-label">Perfil: </label>
                            <select class="form-control select2" id="mfrmPerfil" data-placeholder="Choose Browser">
                                <option value="0">SELECCIONE UN PERFIL</option>
                                <option value="1">ADMINISTRADOR</option>
                                <option value="2">SUPERVISOR</option>
                                <option value="3">TECNICO CLIMATIZACION</option>
                                <option value="4">AYUDANTE DE CLIMATIZACION</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group col-sm-12">
                            <label class="form-control-label">Usuario de ingreso </label>
                            <input class="form-control" type="text" name="mfrmUsuario" id="mfrmUsuario"
                                placeholder="Nombre del usuario">
                        </div>
                    </div>

                    <div class="col-sm-6" id="frmClave">
                        <div class="form-group col-lg-12">
                            <label class="form-control-label">Clave </label>
                            <input class="form-control" type="password" name="mfrmClave" id="mfrmClave"
                                placeholder="Clave de ingreso">
                        </div>
                    </div>
                    <div class="col-sm-6" id="frmClaveCon">
                        <div class="form-group col-lg-12">
                            <label class="form-control-label">Confirmar clave </label>
                            <input class="form-control" type="password" name="mfrmClaveCon" id="mfrmClaveCon"
                                placeholder="Confirmar clave">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button"
                    class="btn btn-primary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium"
                    id="btnGuardar">Guardar</button>
                <button type="button"
                    class="btn btn-secondary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium"
                    data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div id="mdlEliminar" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <input type="text" class="d-none" id="idEliminar">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fas fa-exclamation-triangle tx-100 tx-warning lh-1 mg-t-20 d-inline-block"></i>
                <h4 class="tx-black  tx-semibold mg-b-20" id="titleEliminar"></h4>
                <button type="button"
                    class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20"
                    data-dismiss="modal" aria-label="Close" id="btnEliminar">
                    Eliminar</button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layouts/js'); ?>
<script src="<?= js_url(); ?>app/mantenedores/usuarios.js"></script>