<?php $this->load->view('layouts/head', $title); ?>
<?php $this->load->view('layouts/leftpanel'); ?>
<?php $this->load->view('layouts/header'); ?>

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="<?= base_url(); ?>inicio">Inicio</a>
            <span class="breadcrumb-item active">Gestión Mantención</span>
            <span class="breadcrumb-item active">Listado mantenciones</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="container-fluid">
            <div class="row justify-content-md-center mg-b-20">
                <div class="col-md-12 col-sm-12">
                    <div class="card bd-0">
                        <div class="card-header bg-primary  d-flex align-items-center justify-content-between pd-y-5 tx-uppercase">
                            <h7 class="mg-b-0 tx-17 tx-white tx-normal">Parámetros de búsqueda</h7>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-lg-2 col-sm-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Año: </label>
                                            <input class="form-control" id="frmAnio" value="<?php echo date('Y'); ?>" type="number" placeholder="Ingrese nombre torre">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Periodo Mantención: </label>
                                            <select class="form-control select2" id="fFechaMan" data-placeholder="Choose Browser">
                                                <option value="">PERIODO MANTENCION</option>
                                                <option value="01">ENERO</option>
                                                <option value="02">FEBRERO</option>
                                                <option value="03">MARZO</option>
                                                <option value="04">ABRIL</option>
                                                <option value="05">MAYO</option>
                                                <option value="06">JUNIO</option>
                                                <option value="07">JULIO</option>
                                                <option value="08">AGOSTO</option>
                                                <option value="09">SEPTIEMBRE</option>
                                                <option value="10">OCTUBRE</option>
                                                <option value="11">NOVIEMBRE</option>
                                                <option value="12">DICIEMBRE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Tipo Equipo: </label>
                                            <select class="form-control select2" id="fEquipo" data-placeholder="SELECCIONE UN TIPO DE EQUIPO">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Estado: </label>
                                            <select class="form-control select2" id="fEstado" data-placeholder="SELECCIONE ESTADO MANTENCIÓN">
                                                <option value="0">SELECCIONE ESTADO MANTENCIÓN</option>
                                                <option value="1">MANTENCIÓN ACTIVA</option>
                                                <option value="2">MANTENCIÓN EN PROCESO</option>
                                                <option value="3">MANTENCIÓN FINALIZADA</option>
                                                <option value="4">MANTENCIÓN PENDIENTE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Clinica: </label>
                                            <input class="form-control" id="frmClinica" placeholder="Ingrese Nombre clinica">
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Marca: </label>
                                            <input type="text" class="form-control" placeholder="Búsqueda por marca equipo" name="fMarca" id="fMarca">
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Modelo: </label>
                                            <input type="text" class="form-control" placeholder="Búsqueda por modelo equipo" name="fModelo" id="fModelo">
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">N° Activo: </label>
                                            <input type="text" class="form-control" placeholder="Búsqueda por n° activo" name="fActivo" id="fActivo">
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Serie: </label>
                                            <input type="text" class="form-control" placeholder="Búsqueda por serie equipo" name="fSerie" id="fSerie">
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Edificio: </label>
                                            <input type="text" class="form-control" placeholder="Búsqueda por nombre edificio" name="fEdificio" id="fEdificio">
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Descripción: </label>
                                            <input type="text" class="form-control" placeholder="Búsqueda por descripción del equipo" name="fDescripcion" id="fDescripcion">
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Donde se utiliza: </label>
                                            <input type="text" class="form-control" placeholder="Búsqueda por donde es utilizado el equipo" name="fDondeSeUtiliza" id="fDondeSeUtiliza">
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Ubicación: </label>
                                            <input type="text" class="form-control" placeholder="Búsqueda por ubicación del equipo" name="fUbicacion" id="fUbicacion">
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Criticidad: </label>
                                            <input class="form-control" type="text" name="frmEquipo" id="frmEquipo" placeholder="Ingrese nombre a buscar.">
                                        </div>
                                    </div> -->
                                </div>
                                <!-- <div class="form-group row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Turno: </label>
                                            <input class="form-control" id="frmDescripcion" placeholder="Ingrese descripción del equipo a buscar">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Equipo: </label>
                                            <input class="form-control" id="frmLugar" placeholder="Lugar donde se utiliza el equipo.">
                                        </div>
                                    </div>

                                </div> -->
                            </form>
                        </div>
                        <div class="card-footer d-none">
                            <div class="card-option tx-24 align-left">
                                <button type="button" class="d-none btn btn-primary btn-sm" id="btnBuscar"><i class="fas fa-search"></i> Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 tx-black tx-bold" id="total_registros"></div>
            <div class="row mg-b-20">
                <div class="col-md-12 col-sm-12">
                    <div class="card bd-0">
                        <div class="card-header bg-primary  d-flex align-items-center justify-content-between pd-y-5 tx-uppercase">
                            <h7 class="mg-b-0 tx-14 tx-white tx-normal mg-5">Registros de mantenciones</h7>
                            <div class="card-option tx-24">
                                <!-- <button type="button" class="btn btn-primary btn-sm d-none" id="btnExportar"><i class="fas fa-file-excel"></i> Exportar XLSX</button> -->
                                <!-- <button type="button" class="btn btn-black btn-sm" id="btnImportar"><i class="fas fa-file-import"></i> Importar</button> -->
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-responsive table-striped" id="tblOT">
                                <thead>
                                    <tr>
                                        <th scope="col-2"></th>
                                        <th scope="col" class="tx-center">Estado</th>
                                        <th scope="col-6" class="tx-center">Fecha Mantención</th>
                                        <th class="tx-center">Tipo Mantención</th>
                                        <th scope="col">Clinica</th>
                                        <th scope="col">Equipo</th>
                                        <th scope="col">Activo</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Ubicación</th>
                                        <th scope="col">Marca</th>
                                        <th scope="col">Modelo</th>
                                        <th scope="col">Serie</th>
                                        <th class="tx-center" scope="col">OT</th>
                                        <th class="tx-center" scope="col">EDITAR</th>
                                        <?php if ($this->session->userdata('usu_id') == 31) { ?>
                                            <th class="tx-center" scope="col">DETALLE</th>
                                        <?php } ?>
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
<div id="mdl_detalle" class="modal fade" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical-center modal-lg" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="title">Detalle Mantención</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="fn_error" class="alert alert-warning d-none">
                </p>
                <div class="row mg-b-1">
                    <div class="card-body">
                        <input type="text" class="d-none" id="txtEquidI">
                        <form class="form">
                        <div class="row">
                                    <div class="col-sm-6">
                                        <label class="form-control-label">Fecha mantención asignada: </label>
                                        <input class="form-control" type="text" name="mdlFechaMan" id="mdlFechaMan" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                            <label class="form-control-label">Equipo: </label>
                                            <input class="form-control" type="text" name="mdlEquipoMan" id="mdlEquipoMan" disabled>
                                        </div>
                                </div>  
                                <div class="row">
                                    <div class="col-sm-6">
                                            <label class="form-control-label">Marca: </label>
                                            <input class="form-control" type="text" name="mdlMarcaMan" id="mdlMarcaMan" disabled>
                                        </div>
                                  
                                    <div class="col-sm-6">
                                            <label class="form-control-label">Serie: </label>
                                            <input class="form-control" type="text" name="mdlSerieMan" id="mdlSerieMan" disabled>
                                        </div>
                                </div>  
                                <div class="row">

                                    <div class="col-sm-12">
                                            <label class="form-control-label">Observacion: </label>
                                            <input class="form-control" type="text" name="mdlObservacionMan" id="mdlObservacionMan" disabled>
                                        </div>
                                   
                                    
                                </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnCerrar" class="btn btn-secondary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php $this->load->view('layouts/js'); ?>
<script>
    moment.locale('es');
    let mm = moment().format('MM').charAt(0).toUpperCase() + moment().format('MM').slice(1);
    let mesActual = mm.replace('.', '')
    $("#fFechaMan").val(mesActual);
    $(document).ready(function() {
        console.log(moment());
        listadoComboEquipos();
        listado_mantenciones();

        function listadoComboEquipos() {
            let data = {
                equ_nombre: ''
            }
            $.ajax({
                type: 'POST',
                url: `${base_url}EquiposController/fn_lista_equipos`,
                data: data,
                success: x => {
                    let html = `<option value="">SELECCIONE UN TIPO DE EQUIPO</option>`;
                    let json = JSON.parse(x);
                    json.map(d => {
                        html += `<option value="${d.equ_nombre}">${d.equ_nombre}</option>`
                    })
                    $("#fEquipo").html(html);
                }
            })
        }

        function listado_mantenciones() {
            $.ajax({
                type: 'POST',
                url: base_url + 'MantencionesController/fn_listado_mantenciones',
                data: {
                    periodo: $("#frmAnio").val(),
                    estado: $("#fEstado").val(),
                    clinica: $("#frmClinica").val(),
                    equipo: $("#fEquipo").val(),
                    periodoM: $("#fFechaMan").val(),
                    mtr_marca: $("#fMarca").val(),
                    mtr_modelo: $("#fModelo").val(),
                    mtr_activo: $("#fActivo").val(),
                    mtr_serie: $("#fSerie").val(),
                    mtr_descripcion: $("#fDescripcion").val(),
                    mtr_lugar: $("#fDondeSeUtiliza").val(),
                    mtr_ubicacionf: $("#fUbicacion").val(),
                },
                success: data => {
                    let json = JSON.parse(data)
                    let html = ``;
                    let estado = ``;
                    let ot,detalle,editar = ``;
                    let tipo = ``;
                    let colorEstado = ``;
                    let total = 0;
                    if (json.length > 0) {
                        total = json[0].mtr_total;
                        json.map(d => {
                            <?php if ($this->session->userdata('usu_id') == 31) { ?>
                                if (d.man_estado == 1) {
                                        estado = 'MANTENCIÓN ACTIVA'
                                        ot = ''
                                        detalle = ''
                                        colorEstado = `<td style="background-color:#333"></td>`
                                        editar = ''
                                    }
                                    if (d.man_estado == 2) {
                                        estado = 'MANTENCIÓN EN PROCESO'
                                        ot = '';
                                        detalle = ''
                                        colorEstado = `<td style="background-color:#fff600"></td>`
                                        editar = ``
                                    }
                                    if (d.man_estado == 3) {
                                        estado = 'MANTENCIÓN FINALIZADA'
                                        ot = `<i class="fas fa-file-pdf fa-pointer" onclick="OTPDF(${d.otd_id})"></i>`
                                        detalle = `<i class="fas fa-info-circle fa-pointer" onclick="viewOT(${d.man_id})"></i>`
                                        colorEstado = `<td style="background-color:#007719"></td>`
                                        editar = `<i class="fas fa-info-circle fa-pointer" onclick="viewDetalle(${d.man_id},'${d.man_fecharegistro}','${d.equ_nombre}','${d.mtr_descripcion}','${d.mtr_edificio}','${d.mtr_marca}','${d.mtr_serie}','${d.observacion}')"></i>`
                                    }
                                    if (d.man_tipo == 1) {
                                        tipo = 'MAN. PREVENTIVA'
                                    }
                                    if (d.man_tipo == 3) {
                                        tipo = 'MAN. RONDA'
                                    }
                                    if (d.man_tipo == 2) {
                                        tipo = 'MAN. CORRECTIVA'
                                        
                                    }
                                    html += `<tr>                                                            
                                            ${colorEstado}    
                                            <td class="tx-bold">${estado}</td>
                                            <td class="tx-center tx-bold">${d.man_fecha}</td>
                                            <td scope="col-6" class="tx-center">${tipo}</td>
                                            <td>${d.mtr_clinica}</td>
                                            <td>${d.equ_nombre}</td>
                                            <td>${d.mtr_activo}</td>
                                            <td>${d.mtr_descripcion}</td>
                                            <td>${d.mtr_ubicacionf}</td>
                                            <td>${d.mtr_marca}</td>
                                            <td>${d.mtr_modela}</td>
                                            <td>${d.mtr_serie}</td>
                                            <td class="tx-center" id="OT${d.otd_id}">${ot}</td>
                                            <td class="tx-center">${detalle}</td>
                                            <td class="tx-center">${editar}</td>
                                        </tr>`

                            <?php } else { ?>    
                                <?php if ($this->session->userdata('usu_id') == 9) { ?>
                                    if (d.man_estado == 1) {
                                        estado = 'MANTENCIÓN ACTIVA'
                                        ot = ''
                                        detalle = ''
                                        colorEstado = `<td style="background-color:#333"></td>`
                                    }
                                    if (d.man_estado == 2) {
                                        estado = 'MANTENCIÓN EN PROCESO'
                                        ot = '';
                                        detalle = ''
                                        colorEstado = `<td style="background-color:#fff600"></td>`
                                    }
                                    if (d.man_estado == 3) {
                                        estado = 'MANTENCIÓN FINALIZADA'
                                        ot = `<i class="fas fa-file-pdf fa-pointer" onclick="OTPDF(${d.otd_id})"></i>`
                                        detalle = `<i class="fas fa-info-circle fa-pointer" onclick="viewOT(${d.man_id})"></i>`
                                        colorEstado = `<td style="background-color:#007719"></td>`
                                    }
                                    if (d.man_tipo == 1) {
                                        tipo = 'MAN. PREVENTIVA'
                                    }
                                    if (d.man_tipo == 3) {
                                        tipo = 'MAN. RONDA'
                                    }
                                    if (d.man_tipo == 2) {
                                        tipo = 'MAN. CORRECTIVA'
                                    }
                                    html += `<tr>                                                            
                                            ${colorEstado}    
                                            <td class="tx-bold">${estado}</td>
                                            <td class="tx-center tx-bold">${d.man_fecha}</td>
                                            <td scope="col-6" class="tx-center">${tipo}</td>
                                            <td>${d.mtr_clinica}</td>
                                            <td>${d.equ_nombre}</td>
                                            <td>${d.mtr_activo}</td>
                                            <td>${d.mtr_descripcion}</td>
                                            <td>${d.mtr_ubicacionf}</td>
                                            <td>${d.mtr_marca}</td>
                                            <td>${d.mtr_modela}</td>
                                            <td>${d.mtr_serie}</td>
                                            <td class="tx-center" id="OT${d.otd_id}">${ot}</td>
                                            <td class="tx-center">${detalle}</td>
                                        </tr>`
                                <?php } else { ?>
                                    if (d.man_estado != 2) {
                                        if (d.man_estado == 1) {
                                            estado = 'MANTENCIÓN ACTIVA'
                                            ot = ''
                                            detalle = ''
                                            colorEstado = `<td style="background-color:#333"></td>`
                                        }
                                        if (d.man_estado == 2) {
                                            estado = 'MANTENCIÓN EN PROCESO'
                                            ot = '';
                                            detalle = ''
                                            colorEstado = `<td style="background-color:#fff600"></td>`
                                        }
                                        if (d.man_estado == 3) {
                                            estado = 'MANTENCIÓN FINALIZADA'
                                            ot = `<i class="fas fa-file-pdf fa-pointer" onclick="OTPDF(${d.otd_id})"></i>`
                                            detalle = `<i class="fas fa-info-circle fa-pointer" onclick="viewOT(${d.man_id})"></i>`
                                            colorEstado = `<td style="background-color:#007719"></td>`
                                        }
                                        if (d.man_tipo == 1) {
                                            tipo = 'MAN. PREVENTIVA'
                                        }
                                        if (d.man_tipo == 3) {
                                            tipo = 'MAN. RONDA'
                                        }
                                        html += `<tr>                                                            
                                                ${colorEstado}    
                                                <td class="tx-bold">${estado}</td>
                                                <td class="tx-center tx-bold">${d.man_fecha}</td>
                                                <td scope="col-6" class="tx-center">${tipo}</td>
                                                <td>${d.mtr_clinica}</td>
                                                <td>${d.equ_nombre}</td>
                                                <td>${d.mtr_activo}</td>
                                                <td>${d.mtr_descripcion}</td>
                                                <td>${d.mtr_ubicacionf}</td>
                                                <td>${d.mtr_marca}</td>
                                                <td>${d.mtr_modela}</td>
                                                <td>${d.mtr_serie}</td>
                                                <td class="tx-center"  id="OT${d.otd_id}">${ot}</td>
                                                <td class="tx-center">${detalle}</td>
                                            </tr>`
                                    }
                                <?php } ?>
                            <?php } ?>
                        })
                        console.log(total);
                        if (total > 10) {
                            $("#registros-pagina").removeClass("d-none");
                            $("#tbodyOT").html(html);
                            paginacion(total, "tbodyOT");
                        } else {
                            $("#registros-pagina").addClass("d-none");
                            $("#tbodyOT").html(html);
                        }
                    } else {
                        $("#tbodyOT").html(`<tr><td colspan="14" class="tx-center">No se han encontrado registros, cambie los parámetros de búsqueda e intentelo nuevamente.</td></tr>`)
                    }
                }
            })
        }

        $("#fEquipo").change(function() {
            listado_mantenciones();
        })
        $("#fEstado").change(function() {
            listado_mantenciones();
        })
        $("#frmClinica").bind("input propertychange", async function() {
            listado_mantenciones();
        })
        $("#frmAnio").change(function() {
            listado_mantenciones();
        })
        $("#fFechaMan").change(function() {
            listado_mantenciones();
        })
        $("#fActivo").bind("input propertychange", function() {
            listado_mantenciones();
        })
        $("#fSerie").bind("input propertychange", function() {
            listado_mantenciones();
        })
        $("#fModelo").bind("input propertychange", function() {
            listado_mantenciones();
        })
        $("#fMarca").bind("input propertychange", function() {
            listado_mantenciones();
        })
        $("#fEdificio").bind("input propertychange", function() {
            listado_mantenciones();
        })
        $("#fDescripcion").bind("input propertychange", function() {
            listado_mantenciones();
        })
        $("#fDondeSeUtiliza").bind("input propertychange", function() {
            listado_mantenciones();
        })
        $("#fUbicacion").bind("input propertychange", function() {
            listado_mantenciones();
        })
        OTPDF = function(otd_id) {
            $(`#OT${otd_id}`).html('<i class="fas fa-spinner fa-spin"></i>')
            $.ajax({
                type: "POST",
                url: "https://apiqrc.acbingenieria.cl/OTPDF",
                data: {
                    ot_id: otd_id
                },
                success: (data) => {
                    if (data == "TERMINO") {
                        $(`#OT${otd_id}`).html(`<i class="fas fa-file-pdf fa-pointer" onclick="OTPDF(${otd_id})"></i>`)
                        window.open(
                            base_url + "assets/pdf/" + otd_id + ".pdf",
                            "_blank"
                        );
                    }
                },
            });
           
        }
        viewOT = function(otd_id) {
           window.open(`${base_url}otEdit/${otd_id}`)
        }
        viewDetalle = (man_id,fecha_mantencion,equipo,descripcion,edificio,marca,serie,observacion) => {
            $("#mdl_detalle").modal()
            $("#mdlFechaMan").val(moment(fecha_mantencion).format('YYYY-MM-DD HH:mm'))
            $("#mdlEquipoMan").val(equipo)
            $("#mdlDescripcionMan").val(descripcion)
            $("#mdlEdificioMan").val(edificio)
            $("#mdlMarcaMan").val(marca)
            $("#mdlSerieMan").val(serie)
            $("#mdlObservacionMan").val(observacion)
            console.log(man_id,fecha_mantencion,descripcion,edificio,marca,serie,observacion)
        }
    });
</script>