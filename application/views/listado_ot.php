<?php $this->load->view('layouts/head', $title); ?>
<?php $this->load->view('layouts/leftpanel'); ?>
<?php $this->load->view('layouts/header'); ?>
<style>
    #QRMAESTRA>img {
        display: initial !important;

    }
    .modal-xl {
        min-width: 1200px !important;
    }
    @media (max-width:1100px){
        .modal-xl {
            min-width: 900px !important;
            top:0;
        }   
    }
    @media (max-width:1100px){
        .modal-xl {
            min-width: 900px !important;
            top:0;
        }   
    }
    @media (max-width:800px){
        .modal-xl {
            min-width: 700px !important;
            top:0;
        }   
    }
    .content-header-etiquetas > .form-group {
        padding: 0 40px;
    }
    .content-header-etiquetas-celular > .form-group {
        padding: 0 40px;
    }
</style>
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="<?= base_url(); ?>">Inicio</a>
            <span class="breadcrumb-item active">Gestión Maestra</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="container-fluid">
            <div class="row justify-content-md-center mg-b-20">
                <div class="col-md-12 col-sm-12">
                    <div class="card bd-0">
                        <div class="card-header bg-primary  d-flex align-items-center justify-content-between pd-y-5 tx-uppercase">
                            <h7 class="mg-b-0 tx-17 tx-white tx-normal">Parámetros de búsqueda</h7>
                            <!-- <div class="card-option">
                                <button type="button" class="btn btn-primary btn-sm" id="bntMinimize"><i class="fas fa-minus-square"></i></button>
                            </div> -->
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Torre: </label>
                                            <input class="form-control" id="frmTorre" placeholder="Ingrese nombre torre">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Edificio: </label>
                                            <input class="form-control" id="frmEdificio" placeholder="Ingrese nombre edificio">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">N° Activo: </label>
                                            <input class="form-control" id="frmActivo" placeholder="Ingrese n° activo a buscar.">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Tipo equipo: </label>
                                            <input class="form-control" type="text" name="frmEquipo" id="frmEquipo" placeholder="Ingrese nombre a buscar.">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Descripcion del equipo: </label>
                                            <input class="form-control" id="frmDescripcion" placeholder="Ingrese descripción del equipo a buscar">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Donde se utiliza: </label>
                                            <input class="form-control" id="frmLugar" placeholder="Lugar donde se utiliza el equipo.">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Ubicación fisica: </label>
                                            <input class="form-control" id="frmUbiciacion" placeholder="Ubicación física del equipo.">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Criticidad: </label>
                                            <input class="form-control" type="number" value="0" min="0" max="3" id="frmCriticidad" placeholder="Nivel de criticidad del equipo.">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Marca: </label>
                                            <input class="form-control" id="frmMarca" placeholder="Ingrese marca tipo de equipo a buscar">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Modelo: </label>
                                            <input class="form-control" id="frmModelo" placeholder="Ingrese modelo tipo de equipo a buscar">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Serie: </label>
                                            <input class="form-control" id="frmSerie" placeholder="Ingrese serie del tipo de equipo a buscar">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Cliente: </label>
                                            <input class="form-control" id="frmClinica" placeholder="Ingrese nombre cliente a buscar">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Turno: </label>
                                            <input class="form-control" id="frmTurno" placeholder="Ingrese turno a buscar">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="card-option tx-24 align-left">
                                <button type="button" class="btn btn-primary btn-sm" id="btnBuscar"><i class="fas fa-search"></i> Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mg-b-20">
                <div class="col-md-12 col-sm-12">
                    <div class="card bd-0">
                        <div class="card-header bg-primary  d-flex align-items-center justify-content-between pd-y-5 tx-uppercase">
                            <h7 class="mg-b-0 tx-14 tx-white tx-normal">Registros maestra</h7>
                            <div class="card-option tx-24">
                            <button type="button" class="btn btn-black btn-sm" id="btnNuevoEquipo"><i class="fas fa-plus"></i> Nuevo</button>
                                <button type="button" class="btn btn-primary btn-sm d-none" id="btnExportar"><i class="fas fa-file-excel"></i> Exportar XLSX</button>
                                <button type="button" class="btn btn-black btn-sm" id="btnImportar"><i class="fas fa-file-import"></i> Importar</button>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-responsive table-striped" id="tblOT">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Torre</th>
                                        <th scope="col">Edificio</th>
                                        <th scope="col">N° Activo</th>
                                        <th scope="col">Equipo</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Donde se utiliza</th>
                                        <th scope="col">Ubicación Física</th>
                                        <th scope="col" class="text-center">Criticidad</th>
                                        <th scope="col">Marca</th>
                                        <th scope="col">Modelo</th>
                                        <th scope="col">Serie</th>
                                        <th class="text-center">Cliente</th>
                                        <th class="text-center">Turno</th>
                                        <th class="text-center">Detalle</th>
                                        <th class="text-center">Eliminar</th>
                                        <!-- <th class="text-center">Periodo de mantención</th> -->
                                        <!-- <th>QR</th> -->
                                        <!-- <th classs="text-center">DETALLE</th> -->
                                    </tr>
                                </thead>
                                <tbody id="tbodyOT">
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
<div id="qrcode"></div>
<div id="fn_importar" class="modal fade" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical-center modal-md" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="titleImportar"></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <p id="fn_error" class="alert alert-warning d-none">
                </p>
                <div class="row mg-b-5">
                    <div class="card-body">
                        <input type="text" class="d-none" id="txtEquidI">
                        <form class="form-horizontal">
                            <!-- <input type="number" id="mfrmID" class="d-none"> -->
                            <div class="form-group row">
                                <div class="col-sm-12 mg-b-40">
                                    <div class="col-sm-12">
                                        <h5 class="mg-b-15"><i class="fas fa-file-excel"></i> PASO 1 <small><b>(Descargar plantilla para carga masiva.)</b></small></h5>
                                    </div>
                                    <!-- <label class="col-sm-12 form-control-label" for="mfrmArchivo">Descargar plantilla para carga masiva.</label> -->
                                    <div class="col-sm-12">
                                        <button type="button" id="btnDescargarPlantilla" class="btn btn-primary"><a href="<?= asset_url(); ?>plantillas/PLANTILLA_MAESTRA_QRC.xlsx" style="color:white">Descargar</a></button>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-12">
                                        <h5 class="mg-b-15"><i class="fas fa-file-excel"></i> PASO 2</h5>
                                    </div>
                                    <!-- <label class="col-sm-12 form-control-label" for="mfrmArchivo">Seleccionar archivo de importación</label> -->
                                    <div class="col-sm-12">
                                        <label class="custom-file">
                                            <input type="file" id="mfrmArchivo" name="mfrmArchivo" accept=".xls, .xlsx" class="custom-file-input">
                                            <span class="custom-file-control custom-file-control-inverse" aria-placeholder="Seleccione archivo...">Seleccione archivo...</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-black btn-sm" id="btnImportData"><i class="fas fa-plus-square"></i> Importar Registros</button> -->
                <button type="button" class="btn btn-primary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" id="btnImportData"> Importar</button>
                <button type="button" id="btnCerrar" class="btn btn-secondary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div id="mdlDetalle" class="modal fade" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical-center modal-xl" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="mdltitle"></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="detalle-tab" data-toggle="tab" href="#detalle" role="tab" aria-controls="detalle" aria-selected="true">Detalle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="etiqueta-tab" data-toggle="tab" href="#etiqueta" role="tab" aria-controls="etiqueta" aria-selected="false">Etiqueta</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                    </li> -->
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="detalle" role="tabpanel" aria-labelledby="home-tab">
                        <p id="fn_error" class="alert alert-warning d-none">
                        </p>
                        <div class="row mg-b-5">
                            <input type="text" class="d-none" id="txtIDMaestra">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Torre: </label>
                                    <input class="form-control" type="text"  name="mdlTorre" id="mdlTorre">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Edificio: </label>
                                    <input class="form-control" type="text"  name="mdlEdificio" id="mdlEdificio">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">N° Activo: </label>
                                    <input class="form-control" type="text"  name="mdlActivo" id="mdlActivo">
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-5">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Equipo: </label>
                                    <input class="form-control" list="slcNombreEquipos" id="inputNombreEquipos" placeholder="Búsque tipo de equipos...">
                                    <datalist id="slcNombreEquipos"></datalist>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Descripción: </label>
                                    <input class="form-control" type="text"  name="mdlDescripción" id="mdlDescripción">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Donde se utiliza: </label>
                                    <input class="form-control" type="text"  name="mdlLugar" id="mdlLugar">
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-5">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Ubicación física: </label>
                                    <input class="form-control" type="text"  name="mdlUbicacion" id="mdlUbicacion">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Criticidad: </label>
                                    <input class="form-control" type="text"  name="mdlCriticidad" id="mdlCriticidad">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Marca: </label>
                                    <input class="form-control" type="text"  name="mdlMarca" id="mdlMarca">
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-5">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Modelo: </label>
                                    <input class="form-control" type="text"  name="mdlModelo" id="mdlModelo">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="form-control-label">Serie: </label>
                                    <input class="form-control" type="text"  name="mdlSerie" id="mdlSerie">
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-5">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Cliente: </label>
                                    <input class="form-control" type="text"  name="mdlCliente" id="mdlCliente">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Turno: </label>
                                    <input class="form-control" type="text"  name="mdlTurno" id="mdlTurno">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="form-control-label">Periodo Mantenimiento: </label>
                                    <input class="form-control" type="text"  name="mdlMantencion" id="mdlMantencion">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h6 class="tx-black mg-b-10"><u>NOMINAL</u></h6>
                        <div class="row mg-b-5">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="form-control-label">Motor1: </label>
                                    <input class="form-control" type="text"  name="mdlM1" id="mdlM1">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="form-control-label">Motor2: </label>
                                    <input class="form-control" type="text"  name="mdlM2" id="mdlM2">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="form-control-label">Motor3: </label>
                                    <input class="form-control" type="text"  name="mdlM3" id="mdlM3">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="form-control-label">Motor4: </label>
                                    <input class="form-control" type="text"  name="mdlM4" id="mdlM4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="etiqueta" role="tabpanel" aria-labelledby="etiqueta-tab">
                        <br>
                        <div class="content-header-etiquetas" style="display:flex;flex-direction:row">
                             <div class="form-group">
                                <label class="form-control-label" style="font-size:10px">Responsable Clínica N° 1: </label>
                                <input class="form-control" type="text"  name="responsableClinica1" id="responsableClinica1">
                            </div>
                             <div class="form-group">
                                <label class="form-control-label" style="font-size:10px">Responsable Clínica N° 2: </label>
                                <input class="form-control" type="text"  name="responsableClinica2" id="responsableClinica2">
                            </div>
                            <div class="form-group" style="display:flex;align-item:center;justify-content:center">
                                <button type="button" class="btn btn-black fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" id="btnEtiquetaPDF"><i class="fas fa-file-pdf"></i> PDF</button></button>
                            </div>
                        </div>   
                        <div class="content-header-etiquetas-celular" style="display:flex;flex-direction:row">    
                            <div class="form-group">
                                <label class="form-control-label" style="font-size:10px">Número Celular N° 1: </label>
                                <input class="form-control" type="text"  name="numeroClinica1" id="numeroClinica1">
                            </div>
                             <div class="form-group">
                                <label class="form-control-label" style="font-size:10px">Número Celular N° 2: </label>
                                <input class="form-control" type="text"  name="numeroClinica2" id="numeroClinica2">
                            </div>
                        </div>                                        
                        <br>                        
                        <div class="row pd-10" style="border: solid 1px black">
                            <div class="col-lg-8 col-sm-12">
                                <div class="row">
                                    <div class="col-6">
                                        <small class="tx-black tx-10">N° DE ACTIVO: </small>
                                    </div>
                                    <div class="col-6">
                                        <small class="tx-black tx-10" id="eActivo"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <small class="tx-black tx-10">DESCRIPCIÓN: </small>
                                    </div>
                                    <div class="col-6">
                                        <small class="tx-black tx-10" id="eDescripcion"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <small class="tx-black tx-10">MARCA: </small>
                                    </div>
                                    <div class="col-6">
                                        <small class="tx-black tx-10" id="eMarca"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <small class="tx-black tx-10">MODELO: </small>
                                    </div>
                                    <div class="col-6">
                                        <small class="tx-black tx-10" id="eModelo"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <small class="tx-black tx-10">N° SERIE: </small>
                                    </div>
                                    <div class="col-6">
                                        <small class="tx-black tx-10" id="eSerie"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <small class="tx-black tx-10">FRECUENCIA MANTENCIÓN: </small>
                                    </div>
                                    <div class="col-6">
                                        <small class="tx-black tx-10" id="eMantencion"></small>
                                    </div>
                                </div>
                                <div class="row" style="display: flex; justify-content: space-around">
                                    <div class="col-6">
                                        <small class="tx-black tx-10">RESPONSABLE CLÍNICA:</small>
                                    </div>
                                    <div class="col-6">
                                        <small class="tx-black tx-10" id="responsable1">FERNADO CAVIA</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <small class="tx-black tx-10">FONO: </small>
                                    </div>
                                    <div class="col-6">
                                        <small class="tx-black tx-10" id="celular1">+56 9 5849 3687</small>
                                    </div>
                                </div>
                                <div class="row" style="display: flex; justify-content: space-around">
                                    <div class="col-6">
                                        <small class="tx-black tx-10">RESPONSABLE CLÍNICA:</small>
                                    </div>
                                    <div class="col-6">
                                        <small class="tx-black tx-10" id="responsable2">PIERRE DELORME</small>
                                    </div>
                                </div>
                                <div class="row mg-b-10">
                                    <div class="col-6">
                                        <small class="tx-black tx-10">FONO: </small>
                                    </div>
                                    <div class="col-6">
                                        <small class="tx-black tx-10" id="celular2">+56 9 99997661</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 tx-center ht-70" style="border: solid 1px black">
                                        <small class="tx-black tx-10">ÚLTIMA MANTENCIÓN: </small>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-5 tx-center" style="border: solid 1px black">
                                        <small class="tx-black tx-10">PRÓXIMA MANTENCIÓN: </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 tx-center">
                                <img src="https://qrc.acbingenieria.cl/assets/img/logoqrc.png" style="margin-bottom:20px" id="imgLogoSet" alt="log" class="img-fluid" height="60%" width="60%">
                                <div class="justify-content-md-center tx-center" id="QRMAESTRA"></div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" id="btnSetEquipo">Guardar</button>
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
<div id="mdlNuevoEquipo" class="modal fade">
    <div class="modal-dialog modal-dialog-vertical-center modal-xl" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Nuevo Equipo en Maestra</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <div class="row mg-b-5">
                    <input type="text" class="d-none" id="txtIDMaestra">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Torre: </label>
                            <input class="form-control" type="text" placeholder="Ingrese nombre torre..."  name="inputModalTorre" id="inputModalTorre">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Edificio: </label>
                            <input class="form-control" type="text"  placeholder="Ingrese edificio..." name="inputModalEdificio" id="inputModalEdificio">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">N° Activo: </label>
                            <input class="form-control" type="text" placeholder="Ingrese N° activo del equipo..."  name="inputModalActivo" id="inputModalActivo">
                        </div>
                    </div>
                </div>
                <div class="row mg-b-5">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Equipo: </label>
                            <input class="form-control" list="slcEquipos" id="inputEquipos" placeholder="Búsque tipo de equipos...">
                            <datalist id="slcEquipos"></datalist>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Descripción: </label>
                            <input class="form-control" type="text" placeholder="Ingrese tipo de equipo..."  name="mdlModalDescripcion" id="mdlModalDescripcion">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Donde se utiliza: </label>
                            <input class="form-control" type="text" placeholder="Ingrese lugar donde se utiliza..."  name="mdlModalLugar" id="mdlModalLugar">
                        </div>
                    </div>
                </div>
                <div class="row mg-b-5">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Ubicación física: </label>
                            <input class="form-control" type="text" placeholder="Ingrese ubicación física del equipo..."  name="mdlModalUbicacion" id="mdlModalUbicacion">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Criticidad: </label>
                            <select class="form-control" name="slcCriticidad" id="sclCriticidad">
                                <option value="0">Criticidad 0</option>
                                <option value="1">Criticidad 1</option>
                                <option value="2">Criticidad 2</option>
                                <option value="3">Criticidad 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Marca: </label>
                            <input class="form-control" type="text" placeholder="Ingrese marca del equipo..."  name="mdlModalMarca" id="mdlModalMarca">
                        </div>
                    </div>
                </div>
                <div class="row mg-b-5">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Modelo: </label>
                            <input class="form-control" type="text" placeholder="Ingrese modelo del equipo..."  name="mdlModalModelo" id="mdlModalModelo">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="form-control-label">Serie: </label>
                            <input class="form-control" type="text" placeholder="Ingrese número de serie del equipo..."  name="mdlModalSerie" id="mdlModalSerie">
                        </div>
                    </div>
                </div>
                <div class="row mg-b-5">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Cliente: </label>
                            <input class="form-control" type="text" placeholder="Ingrese nombre del cliente..."  name="mdlModalCLiente" id="mdlModalCLiente">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Turno: </label>
                            <select class="form-control" name="slcTurno" id="slcTurno">
                                <option value="Dia">Día</option>
                                <option value="Noche">Noche</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-control-label">Periodo Mantenimiento: </label>
                            <input class="form-control" type="text" placeholder="Ene-Feb-Mar-Abr-May-Jun-Jul-Ago-Sept-Oct-Nov-Dic"  name="mdlModalMantencion" id="mdlModalMantencion">
                        </div>
                    </div>
                </div>
                <hr>
                <h6 class="tx-black mg-b-10"><u>NOMINAL</u></h6>
                <div class="row mg-b-5">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="form-control-label">Motor1: </label>
                            <input class="form-control" type="text" placeholder="0.00" name="mdlModal1" id="mdlModal1">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="form-control-label">Motor2: </label>
                            <input class="form-control" type="text" placeholder="0.00" name="mdlModal2" id="mdlModal2">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="form-control-label">Motor3: </label>
                            <input class="form-control" type="text" placeholder="0.00" name="mdlModal3" id="mdlModal3">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="form-control-label">Motor4: </label>
                            <input class="form-control" type="text" placeholder="0.00" name="mdlModal4" id="mdlModal4">
                        </div>
                    </div>
                </div>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" id="btnGuardarEquipoMaestra">Guarda Equipo</button>
                <button type="button" class="btn btn-secondary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('layouts/js'); ?>
<script src="https://unpkg.com/xlsx@0.16.3/dist/xlsx.full.min.js"></script>
<script src="https://unpkg.com/file-saverjs@1.3.6/FileSaver.min.js"></script>
<script src="https://unpkg.com/tableexport@5.2.0/dist/js/tableexport.min.js"></script>
<script>
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = document.getElementById("mfrmArchivo").files[0].name;
        var nextSibling = e.target.nextElementSibling
        nextSibling.innerText = fileName
    })
</script>
<script src="<?= js_url(); ?>app/listado_ot.js"></script>
<script>
    const etiquetaTab = document.querySelector('#etiqueta-tab') 
    etiquetaTab.addEventListener('click',()=>{
        const idMaestra = $("#txtIDMaestra").val()   
        generaEtiquetaDescription(idMaestra)
    })

    function generaEtiquetaDescription(idMaestra){
        $.ajax({
            type:'POST',
            url: base_url + 'OTController/description_etiqueta',
            data:{mtr_id: idMaestra},
            success: (json) =>{
                let data = JSON.parse(json)
                const {mtr_id,mtr_activo,mtr_descripcion,mtr_marca,mtr_modela,mtr_serie,mtr_mantencion,RESPONSABLE1,NUMERO1,RESPONSABLE2,NUMERO2,equ_nombre,mtr_clinica} = data[0]
                $("#etiqueta").addClass("tab-pane fade show active");
                $("#detalle").removeClass("show active");
                $("#etiqueta-tab").addClass("nav-link active");
                $("#detalle-tab").removeClass("active");                
                $("#eActivo").html(mtr_activo.toUpperCase());                                
                $("#eDescripcion").html(mtr_descripcion.toUpperCase());
                $("#eMarca").html(mtr_marca.toUpperCase());
                $("#eModelo").html(mtr_modela.toUpperCase());
                $("#eSerie").html(mtr_serie.toUpperCase());
                $("#eMantencion").html(mtr_mantencion.toUpperCase());
                $("#QRMAESTRA").html(``);
                $("#responsable1").html(`${RESPONSABLE1.toUpperCase()}`);
                $("#celular1").html(`${NUMERO1.toUpperCase()}`);
                $("#responsable2").html(`${RESPONSABLE2.toUpperCase()}`);
                $("#celular2").html(`${NUMERO2.toUpperCase()}`);

                $("#responsableClinica1").val(`${RESPONSABLE1.toUpperCase()}`);
                $("#numeroClinica1").val(`${NUMERO1.toUpperCase()}`);
                $("#responsableClinica2").val(`${RESPONSABLE2.toUpperCase()}`);
                $("#numeroClinica2").val(`${NUMERO2.toUpperCase()}`);
                mtr_clinica.toLowerCase() === "cas" || mtr_clinica.toLowerCase() === "mo"
                    ? (document.getElementById("imgLogoSet").src =
                            "https://qrc.acbingenieria.cl/assets/img/logoqrc.png")
                    : (document.getElementById("imgLogoSet").src =
                            "https://qrc.acbingenieria.cl/assets/img/logoqrc.png");
                mtr_clinica.toLowerCase() === "cas" || mtr_clinica.toLowerCase() === "mo"
                    ? document.getElementById("imgLogoSet").setAttribute("height", "60%")
                    : document.getElementById("imgLogoSet").setAttribute("height", "60%");
                mtr_clinica.toLowerCase() === "cas" || mtr_clinica.toLowerCase() === "mo"
                    ? document.getElementById("imgLogoSet").setAttribute("width", "60%")
                    : document.getElementById("imgLogoSet").setAttribute("width", "60%");
                generateQR("QRMAESTRA", `${mtr_id},${equ_nombre}`);

            }
        })        
    }
    function listado_equipos_by_idmaestra(mtr_id){
        $.ajax({
            type:'POST',
            url:base_url+'OTController/listado_equipos_by_idmaestra',
            data:{mtr_id:mtr_id},
            success: data => {
                let json = JSON.parse(data)
                let html = ``
                json.map(d => {
                    html += `<option value="${d.equ_nombre}">${d.equ_nombre}</option>`
                })
                $("#slcNombreEquipos").html(html);
                setTimeout(() => {
                    listado_equipos_by_idmaestra2($("#txtIDMaestra").val())
                }, 500);
            }
        })
    }
    function listado_equipos_by_idmaestra2(mtr_id){
        $.ajax({
            type:'POST',
            url:base_url+'OTController/listado_equipos_by_idmaestra',
            data:{mtr_id:mtr_id},
            success: data => {
                let json = JSON.parse(data)               
                $('#inputNombreEquipos').val(`${json[0].equ_nombre}`)
            }
        })
    }
    function updateResponsables(mtr_id = $("#txtIDMaestra").val()){
        $.ajax({
            type:'POST',
            url: base_url + 'OTController/update_description_etiqueta',
            data:{  mtr_id: mtr_id,
                    r1:$("#responsableClinica1").val(),
                    r2:$("#responsableClinica2").val(),
                    n1:$("#numeroClinica1").val(),
                    n2:$("#numeroClinica2").val()},
            success: (json) =>{
                let data = JSON.parse(json)
                console.log(data)
                generaEtiquetaDescription(mtr_id)
            }
        }) 
    }

    function listado_equipos_nombre(){
        $.ajax({
            type:'GET',
            url:base_url + 'OTController/listado_equipos_nombres',
            success: json => {
                let html = ``;
                let data = JSON.parse(json);
                data.map(d => {
                    html += `<option value="${d.equ_nombre}" data-value="${d.equ_id}">${d.equ_id}</option>`
                })
                $("#slcEquipos").html(html);
            }
        })
    } 

    $("#responsableClinica1").bind("input propertychange", function () {
        updateResponsables()
    });
    $("#numeroClinica1").bind("input propertychange", function () {
        updateResponsables()
    });
    $("#responsableClinica2").bind("input propertychange", function () {
        updateResponsables()
    });
    $("#numeroClinica2").bind("input propertychange", function () {
        updateResponsables()
    });

    document.querySelector('#btnNuevoEquipo').addEventListener('click',(e) => {
        $('#mdlNuevoEquipo').modal()
        $("#inputModalTorre").removeClass('is-invalid')
        $("#inputModalEdificio").removeClass('is-invalid')
        $("#inputModalActivo").removeClass('is-invalid')
        $("#mdlModalDescripcion").removeClass('is-invalid')
        $("#mdlModalLugar").removeClass('is-invalid')
        $("#mdlModalUbicacion").removeClass('is-invalid')
        $("#sclCriticidad").removeClass('is-invalid')
        $("#mdlModalMarca").removeClass('is-invalid')
        $("#mdlModalModelo").removeClass('is-invalid')
        $("#mdlModalSerie").removeClass('is-invalid')
        $("#mdlModalMantencion").removeClass('is-invalid')
        $("#mdlModalCLiente").removeClass('is-invalid')
        $("#slcTurno").removeClass('is-invalid')
        $("#mdlModal1").removeClass('is-invalid')
        $("#mdlModal2").removeClass('is-invalid')
        $("#mdlModal3").removeClass('is-invalid')
        $("#mdlModal4").removeClass('is-invalid')
        //LIMPIA CAMPOS
        $("#inputModalTorre").val('')
        $("#inputModalEdificio").val('')
        $("#inputModalActivo").val('')
        $("#mdlModalDescripcion").val('')
        $("#mdlModalLugar").val('')
        $("#mdlModalUbicacion").val('')
        $("#sclCriticidad").val('')
        $("#mdlModalMarca").val('')
        $("#mdlModalModelo").val('')
        $("#mdlModalSerie").val('')
        $("#mdlModalMantencion").val('')
        $("#mdlModalCLiente").val('')
        $("#slcTurno").val('')
        $("#mdlModal1").val('')
        $("#mdlModal2").val('')
        $("#mdlModal3").val('')
        $("#mdlModal4").val('')
        listado_equipos_nombre();
    })
    $("#inputModalTorre").change(function(){
        if($("#inputModalTorre").val() === ''){
            $("#inputModalTorre").addClass('is-invalid')
        }else{
            $("#inputModalTorre").removeClass('is-invalid')
        }
    })
    function valida_campos_vacios(){
        if($("#inputModalTorre").val() === ''){
            mdtoast(`Favor ingreso Torre para guardar equipo...`, {
                duration: 3000,
                type: mdtoast.WARNING,
            });
            $("#inputModalTorre").addClass('is-invalid')
            $("#inputModalTorre").focus();
            return false
        }
        if($("#inputModalEdificio").val() === ''){
            mdtoast(`Favor ingreso Edificio para guardar equipo...`, {
                duration: 3000,
                type: mdtoast.WARNING,
            });
            $("#inputModalEdificio").addClass('is-invalid')
            $("#inputModalEdificio").focus();
            return false
        }
        if($("#inputModalActivo").val() === ''){
            mdtoast(`Favor ingreso Número activo para guardar equipo...`, {
                duration: 3000,
                type: mdtoast.WARNING,
            });
            $("#inputModalActivo").focus();
            return false
        }
        return true
    }
    function add_maestra_equipo(){
        if(valida_campos_vacios()){
            let value_string_equipo = document.getElementById("inputEquipos").value;
            let data_value_equipo = document.querySelector("#slcEquipos"  + " option[value='" + value_string_equipo+ "']").dataset.value;
            let data_value_id = parseInt(data_value_equipo)
    
            $.ajax({
                type:'POST',
                url:base_url+'OTController/add_equipo_maestra',
                data:{
                    mtr_torre:$("#inputModalTorre").val(),
                    mtr_edificio: $("#inputModalEdificio").val(),
                    mtr_activo:$("#inputModalActivo").val(),
                    equ_id: data_value_id,
                    mtr_descripcion: $("#mdlModalDescripcion").val(),
                    mtr_lugar: $("#mdlModalLugar").val(),
                    mtr_ubicacionf: $("#mdlModalUbicacion").val(),
                    mtr_criticidad: $("#sclCriticidad").val(),
                    mtr_marca: $("#mdlModalMarca").val(),
                    mtr_modela: $("#mdlModalModelo").val(),
                    mtr_serie: $("#mdlModalSerie").val(),
                    mtr_mantencion: $("#mdlModalMantencion").val(),
                    mtr_clinica: $("#mdlModalCLiente").val(),
                    mtr_turno: $("#slcTurno").val(),
                    mtr_motor1: parseFloat($("#mdlModal1").val()),
                    mtr_motor2: parseFloat($("#mdlModal2").val()),
                    mtr_motor3: parseFloat($("#mdlModal3").val()),
                    mtr_motor4: parseFloat($("#mdlModal4").val()),
                },
                success: json => {
                    let data = JSON.parse(json);
                    if (data[0].SQLCODE == 1) {
                        mdtoast(`${data[0].SQLMSG}`, {
                            duration: 3000,
                            type: mdtoast.SUCCESS,
                        });
                        $('#mdlNuevoEquipo').modal('hide')
                        listado_maestra(
                            $("#frmTorre").val(),
                            $("#frmEdificio").val(),
                            $("#frmDescripcion").val(),
                            $("#frmLugar").val(),
                            $("#frmUbiciacion").val(),
                            $("#frmCriticidad").val(),
                            $("#frmClinica").val(),
                            $("#frmTurno").val(),
                            $("#frmEquipo").val(),
                            $("#frmActivo").val(),
                            $("#frmMarca").val(),
                            $("#frmModelo").val(),
                            $("#frmSerie").val()
                        )
                    }else{
                        mdtoast(`${data[0].SQLMSG}`, {
                            duration: 3000,
                            type: mdtoast.ERROR,
                        });
                    }
                }
            })
        }
    }
    document.querySelector('#btnGuardarEquipoMaestra').addEventListener('click', (e) => {       
       
        add_maestra_equipo()
    })
</script>