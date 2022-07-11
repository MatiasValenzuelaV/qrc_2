<?php $this->load->view('layouts/head', $title); ?>

<body>
    <?php $this->load->view('layouts/leftPanel'); ?>
    <?php $this->load->view('layouts/headPanel'); ?>
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="index.html"><?= $bc; ?></a>
                <span class="breadcrumb-item active"><?= $sbc; ?></span>
            </nav>
        </div>
        <div class="br-pagebody">
            <div class="container-fluid">
                <div class="row justify-content-md-center mg-b-20">
                    <div class="col-md-8 col-sm-12">
                        <div class="card">
                            <div class="card-header tx-medium bg-info tx-uppercase">
                                Parámetros de búsqueda
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-lg-2 form-control-label">Impresora</label>
                                        <div class="col-sm-12 col-lg-10">
                                            <input id="frmImpresora" maxlength="50" type="text" placeholder="Ingrese el nombre de la impresora que desea buscar." class="form-control form-control-success">
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
                                <h7 class="mg-b-0 tx-14 tx-white tx-normal">Impresoras registrados</h7>
                                <div class="card-option tx-24">
                                    <button type="button" class="btn btn-black btn-sm" id="btnNuevo"><i class="fas fa-plus-square"></i> Nuevo</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-striped" id="tblImpresora">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre Impresora</th>
                                            <th class="text-center">Editar</th>
                                            <th class="text-center">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbodyImpresora">
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
    <div id="mdlImpresoras" class="modal fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-vertical-center modal-md" role="document">
            <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="titleImpresora"></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body pd-25">
                    <p id="fn_error" class="alert alert-warning d-none">
                    </p>
                    <div class="row mg-b-5">
                        <input type="text" class="d-none" id="txtId">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">Impresora: </label>
                                <input class="form-control" type="text" name="txtImpresora" id="txtImpresora" placeholder="Ingrese nombre impresora">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" id="btnGuardarImpresora">Guardar</button>
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
                    <input type="text" class="d-none" id="codeEliminar">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="contEliminar" id="contEliminar">
                        <i class="fas fa-exclamation-triangle tx-100 tx-warning lh-1 mg-t-20 d-inline-block"></i>
                        <h4 class="tx-black  tx-semibold mg-b-20" id="titleEliminar"></h4>
                    </div>
                    <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" id="btnEliminar">
                        Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('layouts/js'); ?>
    <script src="<?= js_url(); ?>app/impresoras.js"></script>
</body>

</html>