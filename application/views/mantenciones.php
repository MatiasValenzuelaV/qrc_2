<?php $this->load->view('layouts/head', $title); ?>
<?php $this->load->view('layouts/leftpanel'); ?>
<?php $this->load->view('layouts/header'); ?>

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="<?= base_url(); ?>">Inicio</a>
            <span class="breadcrumb-item active">Mantenciones</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="container-fluid">
            <div class="row justify-content-md-center mg-b-20">
                <div class="col-md-12 col-sm-12">
                    <div class="card bd-0">
                        <div class="card-header tx-medium bg-primary tx-white tx-uppercase">
                            Nueva Mantención
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Fecha Mantención: <span class="tx-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                                <input style="z-index:2 !important;" id="frmFMantencion" type="text" class="form-control fc-datepicker fa-pointer" placeholder="YYYY-MM-DD">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Tipo Mantención: <span class="tx-danger">*</span> </label>
                                            <select class="form-control select2" id="frmTipo" data-placeholder="Choose Browser">
                                                <option value="0">SELECCIONE UN TIPO MANTENCION</option>
                                                <option value="1">PREVENTIVA</option>
                                                <!-- <option value="2">CORRECTIVA</option>
                                                <option value="3">RONDA</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Técnico: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" id="frmTecnico1" data-placeholder="Choose Browser">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Ayudante: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" id="frmTecnico2" data-placeholder="Choose Browser">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="bd-t-0 d-flex justify-right">
                                <!-- <button type="button" class="btn btn-black btn-sm" id="btnGuardaMantencion"><i class="fas fa-plus-square"></i> Nueva Mantención</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mg-b-20">
                <div class="col-md-12 col-sm-12">
                    <div class="card bd-0">
                        <div class="card-header bg-primary  d-flex align-items-center justify-content-between pd-y-5 tx-uppercase">
                            <h7 class="mg-b-0 tx-14 tx-white tx-normal">Seleccione equipos que requieran mantención...</h7>
                            <div class="card-option tx-24">
                                <button type="button" class="btn btn-black btn-sm" id="btnGuardaMantencion"> Nueva Mantención</button>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Clinica: </label>
                                            <select class="form-control select2" id="fClinica" data-placeholder="Choose Browser">
                                                <option value="">SELECCIONE UNA CLINICA</option>
                                                <option value="CAS">CAS</option>
                                                <option value="MO">MO</option>
                                                <option value="Barberia">Centro barberia</option>
                                                <option value="Clínica O">Clínica O</option>
                                                <option value="Centro WC">Centro WC</option>
                                                <option value="Alfombras">Centro de Alfombras</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Criticidad: </label>
                                            <select class="form-control select2" id="fCriticidad" data-placeholder="Choose Browser">
                                                <option value="-1">SELECCIONE NIVEL CRITICIDAD</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Periodo Mantención: </label>
                                            <select class="form-control select2" id="fFechaMan" data-placeholder="Choose Browser">
                                                <option value="">PERIODO MANTENCION</option>
                                                <option value="Ene">ENERO</option>
                                                <option value="Feb">FEBRERO</option>
                                                <option value="Mar">MARZO</option>
                                                <option value="Abr">ABRIL</option>
                                                <option value="May">MAYO</option>
                                                <option value="Jun">JUNIO</option>
                                                <option value="Jul">JULIO</option>
                                                <option value="Ago">AGOSTO</option>
                                                <option value="Sep">SEPTIEMBRE</option>
                                                <option value="Oct">OCTUBRE</option>
                                                <option value="Nov">NOVIEMBRE</option>
                                                <option value="Dic">DICIEMBRE</option>
                                                <option value="SOLO POR SOLICITUD SE HACE MANTENCION">POR SOLICITUD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Turno: </label>
                                            <select class="form-control select2" id="fTurno" data-placeholder="Choose Browser">
                                                <option value="">SELECCIONE TURNO</option>
                                                <option value="dia">dia</option>
                                                <option value="noche">noche</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3  col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Tipo Equipo: </label>
                                            <select class="form-control select2" id="fEquipo" data-placeholder="SELECCIONE UN TIPO DE EQUIPO">
                                            </select>
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
                                </div>
                            </form>
                            <div class="col-12 tx-black tx-bold" id="total_registros"></div>
                            <table class="table table-responsive table-striped" id="tblOT">
                                <thead>
                                    <tr>
                                        <th class="tx-center"></th>
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
                                        <th class="text-center">Clinica</th>
                                        <th class="text-center">Turno</th>
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
<div id="mdlEliminar" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
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
<script src="<?= js_url(); ?>app/mantencion.js"></script>
<script>
    $("#frmTipo").val(1);
    moment.locale('es');
    let mm = moment().format('MMM').charAt(0).toUpperCase() + moment().format('MMM').slice(1);
    let mesActual = mm.replace('.', '')
    $("#fFechaMan").val(mesActual);
    listadoComboEquipos();
    lista_maestra_mant();

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
                // $("#fEquipo").val('Unidad Manejadora De Aire')
                lista_maestra_mant();
            }
        })
    }

    function lista_maestra_mant() {
        $("#tbodyOT").html('<tr><td class="tx-center tx-30" colspan="14"><i class="fas fa-spinner fa-spin"></i></td></tr>')
        $.ajax({
            type: 'POST',
            url: base_url + 'MantencionesController/maestra_mantencion',
            data: {
                mtr_criticidad: $("#fCriticidad").val(),
                mtr_clinica: $("#fClinica").val(),
                mtr_turno: $("#fTurno").val(),
                mtr_mantencion: $("#fFechaMan").val(),
                mtr_equipo: $("#fEquipo").val(),
                mtr_activo: $("#fActivo").val(),
                mtr_serie: $("#fSerie").val(),
                mtr_modelo: $("#fModelo").val(),
                mtr_marca: $("#fMarca").val(),
                mtr_edificio: $("#fEdificio").val(),
                mtr_descripcion: $("#fDescripcion").val(),
                mtr_lugar: $("#fDondeSeUtiliza").val(),
                mtr_ubicacionf: $("#fUbicacion").val(),
            },
            success: data => {
                let json = JSON.parse(data);
                let html = ``;
                let total = 0;
                if (json[0].codesql == 1) {
                    json.map((d) => {
                        total = d.mtr_total;
                        if (d.mtr_activo == "") {
                            acti = "S/R";
                        } else {
                            acti = d.mtr_activo;
                        }
                        html += `<tr>
                        <td class="tx-center">
                            <input style="margin-top:0!important;margin-left:0!important" class="form-check-input" id="${d.mtr_id}" type="checkbox" value="">                            
                        </td>
						<td>${d.mtr_torre}</td>
						<td>${d.mtr_edificio}</td>
						<td>${acti}</td>
						<td>${d.equ_nombre}</td>
						<td>${d.mtr_descripcion}</td>
						<td>${d.mtr_lugar}</td>
						<td>${d.mtr_ubicacionf}</td>						
						<td class="text-center">${d.mtr_criticidad}</td>						
						<td>${d.mtr_marca}</td>
						<td>${d.mtr_modelo}</td>
						<td>${d.mtr_serie}</td>
						<td class="tx-center">${d.mtr_cliente}</td>						
						<td class="tx-center">${d.mtr_turno}</td>			
					</tr>`;
                    });
                    if (total > 10) {
                        $("#tbodyOT").html(html);
                        $("#registros-pagina").removeClass("d-none");
                        paginacion(total, "tbodyOT");
                        $("#btnExportar").removeClass("d-none");
                    } else {
                        $("#tbodyOT").html(html);
                        $("#registros-pagina").addClass("d-none");
                    }
                    $("#total_registros").html(`TOTAL REGISTROS: ${total}`);
                } else {
                    html += `<tr><td colspan="15" class="text-center">No se han encontrado registros, cambie los párametros de búsqueda o intente nuevamente.</td></tr>`;
                    $("#btnExportar").addClass("d-none");
                    $("#tbodyOT").html(html);
                    $("#registros-pagina").addClass("d-none");
                    $("#total_registros").html(`TOTAL REGISTROS: 0`)
                }
            }
        })
    }
    $("#fCriticidad").change(function() {
        lista_maestra_mant();
    })
    $("#fFechaMan").change(function() {
        lista_maestra_mant();
    })
    $("#fClinica").change(function() {
        lista_maestra_mant();
    })
    $("#fTurno").change(function() {
        lista_maestra_mant();
    })
    $("#fEquipo").change(function() {
        lista_maestra_mant();
    })
    $("#fActivo").bind("input propertychange", function() {
        lista_maestra_mant();
    })
    $("#fSerie").bind("input propertychange", function() {
        lista_maestra_mant();
    })
    $("#fModelo").bind("input propertychange", function() {
        lista_maestra_mant();
    })
    $("#fMarca").bind("input propertychange", function() {
        lista_maestra_mant();
    })
    $("#fEdificio").bind("input propertychange", function() {
        lista_maestra_mant();
    })
    $("#fDescripcion").bind("input propertychange", function() {
        lista_maestra_mant();
    })
    $("#fDondeSeUtiliza").bind("input propertychange", function() {
        lista_maestra_mant();
    })
    $("#fUbicacion").bind("input propertychange", function() {
        lista_maestra_mant();
    })

    function valida_vacios() {
        if ($("#frmTipo").val() == 0) {
            $("#frmTipo").focus();
            mdtoast(
                `Favor seleccione tipo de mantención a registrar.`, {
                    duration: 3000,
                    type: mdtoast.WARNING,
                }
            );
            return false
        }
        if ($("#frmTecnico1").val() == 0) {
            $("#frmTecnico1").focus();
            mdtoast(
                `Favor seleccione personal de mantención.`, {
                    duration: 3000,
                    type: mdtoast.WARNING,
                }
            );
            return false;
        }
        if ($("#frmTecnico2").val() == 0) {
            $("#frmTecnico2").focus();
            mdtoast(
                `Favor seleccione ayudante de mantención.`, {
                    duration: 3000,
                    type: mdtoast.WARNING,
                }
            );
            return false;
        }
        if (document.querySelectorAll('.form-check-input:checked').length <= 0) {
            mdtoast(
                `Para generar nuevas mantenciones, seleccione los equipos que se requieran.`, {
                    duration: 3000,
                    type: mdtoast.WARNING,
                }
            );
            return false;
        }
        return true
    }

    function guarda_mantencion(id) {
        $.ajax({
            type: "POST",
            url: base_url + "MantencionesController/guarda_mantencion",
            data: {
                man_fecha: $("#frmFMantencion").val(),
                man_tipo: $("#frmTipo").val(),
                man_tecnico1: $("#frmTecnico1").val(),
                man_tecnico2: $("#frmTecnico2").val(),
                mtr_id: id,
            },
            success: data => {
                let json = JSON.parse(data);
                console.log(json);
            },
        });
    }

    $("#btnGuardaMantencion").click(function() {
        if (valida_vacios()) {
            [...document.querySelectorAll(".form-check-input:checked")].map((d) => {
                guarda_mantencion(d.id);
            });
            setTimeout(function() {
                mdtoast(
                    `Se han registrado nuevas mantenciones con exito.`, {
                        duration: 3000,
                        type: mdtoast.SUCCESS,
                    }
                );
                lista_maestra_mant();
            }, 1000);
        }
    });
</script>