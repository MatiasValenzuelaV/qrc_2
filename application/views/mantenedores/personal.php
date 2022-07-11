<?php $this->load->view('layouts/head', $title); ?>
<?php $this->load->view('layouts/leftpanel'); ?>
<?php $this->load->view('layouts/header'); ?>

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="<?= base_url(); ?>">Inicio</a>
            <span class="breadcrumb-item active">Personal</span>
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
                                    <label class="col-sm-12 col-lg-2 form-control-label">Nombre</label>
                                    <div class="col-sm-12 col-lg-10">
                                        <input id="frmNombre" maxlength="50" type="text" placeholder="Ingrese nombre personal a buscar." class="form-control form-control-success">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-lg-2 form-control-label">Rut</label>
                                    <div class="col-sm-12 col-lg-10">
                                        <input id="frmRut" maxlength="50" type="text" placeholder="Ingrese rut personal buscar." class="form-control form-control-success">
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
                        <div class="card-header bg-primary  d-flex align-items-center justify-content-between pd-y-5 tx-uppercase">
                            <h7 class="mg-b-0 tx-14 tx-white tx-normal">Personal registrados</h7>
                            <div class="card-option tx-24">
                                <button type="button" class="btn btn-black btn-sm" id="btnNuevo"><i class="fas fa-plus-square"></i> Nuevo</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-striped" id="tblPersonal">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">RUT</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Cargo</th>
                                        <th class="text-center">Editar</th>
                                        <th class="text-center">Firma</th>
                                        <!-- <th class="text-center">Estado</th> -->
                                        <th class="text-center">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyPersonal">
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
<div id="mdlPersonal" class="modal fade" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical-center modal-md" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="titlePersonal"></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <p id="fn_error" class="alert alert-warning d-none">
                </p>
                <div class="row mg-b-5">
                    <input type="text" class="d-none" id="txtPerId">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="form-control-label">Rut Personal: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="txtRut" id="txtRut" placeholder="Ingrese rut del personal">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nombre Personal: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="txtPersonal" id="txtPersonal" placeholder="Ingrese nombre personal">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Cargo: </label>
                            <select class="form-control" name="slcCargo" id="slcCargo"></select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Correo Personal: </label>
                            <input class="form-control" type="text" name="txtCorreo" id="txtCorreo" placeholder="Ingrese correo personal">
                        </div>
                        <!-- <div class="form-group">
                            <label for="fileIMGPersonal">Archivo firma</label>
                            <input type="file" class="form-control form-control-file" id="fileIMGPersonal">
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-secondary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div id="mdlFirma" class="modal fade" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical-center modal-md" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Firma Personal</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <p id="fn_error" class="alert alert-warning d-none">
                </p>
                <div class="row mg-b-5">
                    <input type="text" class="d-none" id="idPersonalF">
                    <div class="col-sm-12">
                        <label class=" custom-file">
                            <input style="cursor:pointer" id="fileImgPersonal" type="file" accept="image/x-png,image/gif,image/jpeg" class="custom-file-input">
                            <span style="cursor:pointer" class="custom-file-control custom-file-control-inverse"></span>
                        </label>
                    </div>
                    <div class="col-sm-12 tx-center">
                        <img id="firmaPersonal" src="https://qrc.acbingenieria.cl/assets/firmas/dbarrios_firma.png" width="100%" height="100%" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
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
                <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close" id="btnEliminar">
                    Eliminar</button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layouts/js'); ?>
<script src="<?= js_url(); ?>app/mantenedores/personal.js"></script>