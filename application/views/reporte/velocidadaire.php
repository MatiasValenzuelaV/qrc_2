<?php $this->load->view('layouts/head', $title); ?>
<?php $this->load->view('layouts/leftpanel'); ?>
<?php $this->load->view('layouts/header'); ?>

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="<?= base_url(); ?>">Inicio</a>
            <span class="breadcrumb-item active">Velocidad de aire</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="container-fluid">
            <div class="row justify-content-md-center mg-b-20">
                <div class="col-md-8 col-sm-12">
                    <div class="card bd-0">
                        <div class="card-header tx-normal tx-14 bg-primary tx-white tx-uppercase">
                            Parámetros de búsqueda
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-lg-2 form-control-label">Nombre Equipo</label>
                                    <div class="col-sm-12 col-lg-10">
                                        <input id="frmEquipos" maxlength="50" type="text" disabled value="Fan Coil" placeholder="Ingrese nombre equipo a buscar." class="form-control form-control-success">
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
                            <h7 class="mg-b-0 tx-14 tx-white tx-normal">Equipos registrados </h7>
                            <div class="card-option tx-24">
                                <!-- <button type="button" class="btn btn-black btn-sm" id="btnNuevo"><i class="fas fa-plus-square"></i> Nuevo</button> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-striped" id="tblEquipos">
                                <thead>
                                    <tr>
                                        <th scope="col">N° Activo</th>
                                        <th scope="col">TIPO DE EQUIPO</th>
                                        <th scope="col">DESCRIPCIÓN</th>
                                        <th>DONDE SE UTILIZA</th>
                                        <th>MARCA</th>
                                        <th>MODELO</th>
                                        <th>SERIE</th>
                                        <th>PERIODO MANTENCIÓN</th>
                                        <th>CLINICA</th>
                                        <th>TURNO</th>
                                        <th>VA</th>
                                        <th>VM</th>
                                        <th>VB</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyEquipos">
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
    // report($("#frmEquipos").val());
    report('Fan Coil');

    function report(r) {
        $.ajax({
            type: 'POST',
            data: {
                equ_nombre: r
            },
            url: base_url + "ReporteController/reporte_velocidad_aire",
            success: data => {
                let html = ``
                let json = JSON.parse(data);
                let vb, vm, va, total = 0;
                let vbc, vmc, vac, fecha = ``;

                json.map(d => {
                    total = d.TOTAL
                    if (d.a1 == null || d.a1 == 0) {
                        vbc = `<td style="background-color:white"></td>`
                    } else {
                        if (d.a1 > 2) {
                            vbc = `<td class="tx-center tx-bold" style="background-color:green">${d['a1']}</td>`
                            // vbc = `<td class="tx-center tx-bold" style="background-color:green">${parseInt(d['a1']).toFixed(2)}</td>`
                        }
                        // if (d.a1 >= 1.6 || d.a1 < 2) {
                        //     vbc = `<td style="background-color:yellow">${d.a1}</td>`
                        // }
                        if (d.a1 >= 1 || d.a1 < 2) {
                            vbc = `<td class="tx-center tx-bold" style="background-color:yellow">${d.a1}</td>`
                        }
                        if (d.a1 < 1) {
                            vbc = `<td class="tx-center tx-bold" style="background-color:red">${d.a1}</td>`
                        }
                    }
                    if (d.mm1 == null || d.mm1 == 0) {
                        vmc = `<td class="tx-center tx-bold" style="background-color:white"></td>`
                    } else {
                        vmc = `<td class="tx-center tx-bold">${d.mm1}</td>`
                    }
                    if (d.b1 == null || d.b1 == 0) {
                        vac = `<td class="tx-center tx-bold" style="background-color:white"></td>`
                    } else {
                        vac = `<td class="tx-center tx-bold">${d.b1}</td>`
                    }
                    if (d.fecha == null) {
                        fecha = ''
                    } else {
                        fecha = d.fecha
                    }
                    html += `<tr>
                        <td>${d.mtr_activo}</td>
                        <td>${d.equ_nombre}</td>
                        <td>${d.mtr_descripcion}</td>
                        <td>${d.mtr_ubicacionf}</td>
                        <td>${d.mtr_marca}</td>
                        <td>${d.mtr_modela}</td>
                        <td>${d.mtr_serie}</td>
                        <td>${d.mtr_mantencion}</td>
                        <td>${d.mtr_clinica}</td>
                        <td>${d.mtr_turno}</td>
                        ${vbc}
                        ${vmc}
                        ${vac}  
                        <td>${fecha}</td>                      
                    </tr>`
                })
                if (total > 10) {
                    $("#tbodyEquipos").html(html);
                    $("#registros-pagina").removeClass("d-none");
                    paginacion(total, "tbodyEquipos");
                } else {
                    $("#tbodyEquipos").html(html);
                    $("#registros-pagina").addClass("d-none");
                }
                // $("#tbodyEquipos").html(html)
            }
        })
    }
    $("#frmEquipos").bind("input propertychange", function() {
        report($("#frmEquipos").val());
    });
</script>