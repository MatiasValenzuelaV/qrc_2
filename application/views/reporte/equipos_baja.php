<?php $this->load->view('layouts/head', $title); ?>
<?php $this->load->view('layouts/leftpanel'); ?>
<?php $this->load->view('layouts/header'); ?>

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="<?= base_url(); ?>">Inicio</a>
            <a class="breadcrumb-item" href="<?= base_url(); ?>">Reportes</a>
            <span class="breadcrumb-item active">Equipos dados de baja</span>
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
                            <h7 class="mg-b-0 tx-14 tx-white tx-normal">Registros equipos dados de baja</h7>
                            <div class="card-option tx-24">
                                <button type="button" class="btn btn-primary btn-sm d-none" id="btnExportar"><i class="fas fa-file-excel"></i> Exportar XLSX</button>
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
                                        <th class="text-center">Fecha</th>
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

<?php $this->load->view('layouts/js'); ?>
<script>
    
    function equipos_baja(
        torre,
        edificio,
        descripcion,
        lugar,
        ubicacionf,
        criticidad,
        clinica,
        turno,
        equ,
        activo,
        marca,
        modelo,
        serie
    ) {
        $("#tbodyOT").html(
            '<tr><td colspan="15" class="tx-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>CARGANDO</td></tr>'
        );
        $.ajax({
            type: "POST",
            url: base_url + "OTController/fn_equipos_baja",
            data: {
                mtr_id: 0,
                mtr_torre: torre,
                mtr_edificio: edificio,
                mtr_descripcion: descripcion,
                mtr_lugar: lugar,
                mtr_ubicacionf: ubicacionf,
                mtr_criticidad: criticidad,
                mtr_clinica: clinica,
                mtr_turno: turno,
                equ_nombre: equ,
                mtr_activo: activo,
                mtr_marca: marca,
                mtr_modelo: modelo,
                mtr_serie: serie,
            },
            success: (data) => {
                let json = JSON.parse(data);
                let html = ``;
                let count = 1;
                let total = 0;
                let acti = ``;
                let detalle = ``;
                if (json[0].codesql == 1) {
                    json.map((d) => {
                        total = d.mtr_total;
                        if (d.mtr_activo == "") {
                            acti = "S/R";
                        } else {
                            acti = d.mtr_activo;
                        }
                        detalle = `<i class="fas fa-info-circle fa-pointer" onclick="detalle(${d.mtr_id},'${d.mtr_torre}','${d.mtr_edificio}','${acti}','${d.equ_nombre}','${d.mtr_descripcion}','${d.mtr_lugar}','${d.mtr_ubicacionf}','${d.mtr_criticidad}','${d.mtr_marca}','${d.mtr_modelo}','${d.mtr_serie}','${d.mtr_cliente}','${d.mtr_turno}','${d.mtr_mantencion}','${d.mtr_motor1}','${d.mtr_motor2}','${d.mtr_motor3}','${d.mtr_motor4}')"></i>`;
                        html += `<tr>
						<td class="tx-bold">${count}</td>
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
						<td class="tx-center">${moment(d.mtr_createdat).format('YYYY-MM-DD HH:mm:ss')}</td>		
					</tr>`;
                        count++;
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
                } else {
                    html += `<tr><td colspan="15" class="text-center">No se han encontrado registros, cambie los párametros de búsqueda o intente nuevamente.</td></tr>`;
                    $("#btnExportar").addClass("d-none");
                    $("#tbodyOT").html(html);
                    $("#registros-pagina").addClass("d-none");
                }
            },
        });
    }
    equipos_baja(
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
    );
    $("#btnBuscar").click(function() {
        equipos_baja(
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
        );
    });
    $("#btnExportar").click(function() {
        $.ajax({
            type: "POST",
            url: base_url + "OTController/session_data_excel_equipos_baja",
            data: {
                mtr_torre: $("#frmTorre").val(),
                mtr_edificio: $("#frmEdificio").val(),
                mtr_descripcion: $("#frmDescripcion").val(),
                mtr_lugar: $("#frmLugar").val(),
                mtr_ubicacionf: $("#frmUbiciacion").val(),
                mtr_criticidad: $("#frmCriticidad").val(),
                mtr_clinica: $("#frmClinica").val(),
                mtr_turno: $("#frmTurno").val(),
                equ_nombre: $("#frmEquipo").val(),
                mtr_activo: $("#frmActivo").val(),
                mtr_marca: $("#frmMarca").val(),
                mtr_modelo: $("#frmModelo").val(),
                mtr_serie: $("#frmSerie").val(),
            },
            success: (data) => {
                window.open(base_url + "OTController/export_excel_equipos_baja", "_blank");
            },
        });
    });
</script>