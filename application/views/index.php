<?php $this->load->view('layouts/head', $title); ?>
<?php $this->load->view('layouts/leftpanel'); ?>
<?php $this->load->view('layouts/header'); ?>

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="<?= base_url(); ?>">Inicio</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    </div>
    <div class="br-pagebody">        
        <!-- <div class="container-fluid">
            <div class="form-group row">
                <div class="col-sm-6 col-lg-2">
                    <select class="form-control select2" id="selectAnoMantenciones">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <select class="form-control select2" id="selectMesesMantenciones">
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
                    </select>
                </div>
            </div>
        </div> -->
        <div class="container-fluid d-none" id="contentMantenciones">         
            
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="card bd-0">
                        <div class="card-header bg-primary  d-flex align-items-center justify-content-between pd-y-5 tx-uppercase">
                            <h7 class="mg-b-0 tx-14 tx-white tx-normal">Mantenciones pendientes</h7>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-striped" id="ttable">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tx-center"></th>
                                        <th scope="col" class="tx-center">#</th>
                                        <th scope="col" class="tx-center">Estado</th>
                                        <th scope="col">Fecha</th>
                                        <th class="text-center">Tipo Mantención</th>
                                        <th class="text-center">Clinica</th>
                                        <th class="text-center">Equipo</th>
                                        <th class="text-center">Modelo</th>
                                        <th class="text-center">Activo</th>
                                        <th class="text-center">Serie</th>
                                        <th class="text-center">Descripción</th>
                                        <th class="text-center">Ubicación</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyM">
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
        <br>
        <div class="container-fluid">
            <div class="form-group row">
                <div class="col-sm-6 col-lg-2">
                    <select class="form-control select2" id="slcAño">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <select class="form-control select2" id="slcMeses">
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
                    </select>
                </div>
            </div>
            <div class="row mg-b-20">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card bd-0">
                        <div class="card-header tx-medium bg-primary tx-white tx-uppercase">
                            Resumen general mantenciones CAS-MO
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <table class="table table-responsive table-bordered" id="tblPersonal" style="font-size:12px!important">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="tx-center">TOTAL MANTENCION DIA</th>
                                                <th scope="col" class="tx-center">TOTALIDAD</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody1">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-7 col-md-12 col-sm-12 justify-content-md-center">
                                    <div id="container1"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <table class="table table-responsive table-bordered" id="tblPersonal" style="font-size:12px!important">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="tx-center">TOTAL MANTENCION NOCHE</th>
                                                <th scope="col" class="tx-center">TOTALIDAD</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody2">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-7 col-md-12 col-sm-12">
                                    <div id="container2"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <table class="table table-responsive table-bordered" id="tblPersonal" style="font-size:12px!important">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="tx-center">TOTAL MANTENCION GENERAL</th>
                                                <th scope="col" class="tx-center">TOTALIDAD</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody3">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-7 col-md-12 col-sm-12">
                                    <div id="container3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card bd-0 mg-b-25">
                        <div class="card-header tx-medium bg-primary tx-white tx-uppercase">
                            Resumen general mantenciones CAS
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <table class="table table-responsive table-bordered" id="tblPersonal" style="font-size:12px!important">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="tx-center">TOTAL MANTENCION</th>
                                                <th scope="col" class="tx-center">TOTALIDAD</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody4">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6 col-sm-12 justify-content-md-center">
                                    <div id="container4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bd-0 mg-b-25">
                        <div class="card-header tx-medium bg-primary tx-white tx-uppercase">
                            Resumen general mantenciones MO
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <table class="table table-responsive table-bordered" id="tblPersonal" style="font-size:12px!important">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="tx-center">TOTAL MANTENCION</th>
                                                <th scope="col" class="tx-center">TOTALIDAD</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody5">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6 col-sm-12 justify-content-md-center">
                                    <div id="container5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bd-0">
                        <div class="card-header tx-medium bg-primary tx-white tx-uppercase">
                            Total de criticos [0,1,2,3]
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 justify-content-md-center">
                                    <div id="container6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layouts/js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/locale/af.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
    'use strict'

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }
    moment.locale('es');
    $("#slcMeses").val(capitalizeFirstLetter(moment().format('MMM').replace('.', '')))
    $("#selectMesesMantenciones").val(capitalizeFirstLetter(moment().format('MMM').replace('.', '')))
    let fecha_convertida = capitalizeFirstLetter(moment().format('MMM').replace('.', ''));
    console.log(fecha_convertida);
    $("#slcAño").val(moment().format('YYYY'))
    $("#selectAnoMantenciones").val('2021')

    function charts(id, title, data) {
        Highcharts.chart(id, {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: title
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    // size:150,
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: data
            }],
            exporting: {
                enabled: false
            },
            credits: {
                enabled: false
            }
        });
    }
    const lista_dia = (turno = 'DIA', j = 'ene') => {
        $.ajax({
            type: 'POST',
            url: 'https://apiqrc.acbingenieria.cl/total_mantener',
            data: {
                turno: turno,
                mes: $("#slcMeses").val(),
                año: $("#slcAño").val()
            },
            success: data => {
                console.log(data[0]);
                let html = `<tr>
                    <td class="tx-center">TOTAL REALIZADOS</td>
                    <td class="tx-center"><b>${data[1]}</b></td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL PENDIENTES</td>
                    <td class="tx-center" style="color:red;"><b>${data[2]}</b></td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL OBESERVACIONES</td>
                    <td class="tx-center"><b>0</b></td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL A MANTENER</td>
                    <td class="tx-center"><b>${data[0]}</b></td>
                </tr>`;
                $("#tbody1").html(html);
                let array = [{
                    name: 'Pendientes',
                    y: data[2],
                    color: "#bc0000"
                }, {
                    name: 'Observaciones',
                    y: 0.00
                }, {
                    name: 'Realizadas',
                    y: data[1],
                    color: "#73c9f4"
                }]
                charts('container1', 'Mantención turno día', array)
            }
        })
    }
    const lista_noche = (turno = 'Noche', j = 'ene') => {
        $.ajax({
            type: 'POST',
            url: 'https://apiqrc.acbingenieria.cl/total_mantener',
            data: {
                turno: turno,
                mes: $("#slcMeses").val(),
                año: $("#slcAño").val()
            },
            success: data => {
                let html = `<tr>
                    <td class="tx-center">TOTAL REALIZADOS</td>
                    <td class="tx-center"><b>${data[1]}</b></td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL PENDIENTES</td>
                    <td class="tx-center" style="color:red;">${data[2]}</td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL OBESERVACIONES</td>
                    <td class="tx-center"><b>0</b></td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL A MANTENER</td>
                    <td class="tx-center"><b>${data[0]}</b></td>
                </tr>`;
                $("#tbody2").html(html);
                let array = [{
                    name: 'TOTAL PENDIENTES',
                    y: data[2],
                    color: "#bc0000"
                }, {
                    name: 'TOTAL OBSERVACIONES',
                    y: 0.00
                }, {
                    name: 'TOTAL REALIZADAS',
                    y: data[1],
                    color: "#73c9f4"
                }]
                charts('container2', 'Mantención turno noche', array)
            }
        })
    }
    const lista_total = (j = 'ene') => {
        $.ajax({
            type: 'POST',
            url: 'https://apiqrc.acbingenieria.cl/total',
            data: {
                mes: $("#slcMeses").val(),
                año: $("#slcAño").val()
            },
            success: data => {
                let html = `<tr>
                    <td class="tx-center">TOTAL REALIZADOS</td>
                    <td class="tx-center"><b>${data[1]}</b></td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL PENDIENTES</td>
                    <td class="tx-center" style="color:red;">${data[2]}</td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL OBESERVACIONES</td>
                    <td class="tx-center"><b>0</b></td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL A MANTENER</td>
                    <td class="tx-center"><b>${data[0]}</b></td>
                </tr>`;
                $("#tbody3").html(html);
                let array = [{
                    name: 'TOTAL PENDIENTES',
                    y: data[2],
                    color: "#bc0000"
                }, {
                    name: 'TOTAL OBSERVACIONES',
                    y: 0.00
                }, {
                    name: 'TOTAL REALIZADAS',
                    y: data[1],
                    color: "#73c9f4"
                }]
                charts('container3', '% GENERAL MANTENCIONES', array)
            }
        })
    }
    const total_cliente = (c, id, t) => {
        $.ajax({
            type: 'POST',
            url: 'https://apiqrc.acbingenieria.cl/total_cliente',
            data: {
                c: c,
                mes: $("#slcMeses").val(),
                año: $("#slcAño").val()
            },
            success: data => {
                let html = `<tr>
                    <td class="tx-center">TOTAL REALIZADOS</td>
                    <td class="tx-center"><b>${data[1]}</b></td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL PENDIENTES</td>
                    <td class="tx-center" style="color:red;">${data[2]}</td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL OBESERVACIONES</td>
                    <td class="tx-center"><b>0</b></td>
                </tr>
                <tr>
                    <td class="tx-center">TOTAL A MANTENER</td>
                    <td class="tx-center"><b>${data[0]}</b></td>
                </tr>`;
                $(`#tbody${id}`).html(html);
                let array = [{
                    name: 'TOTAL PENDIENTES',
                    y: data[2],
                    color: "#bc0000"
                }, {
                    name: 'TOTAL OBSERVACIONES',
                    y: 0.00
                }, {
                    name: 'TOTAL REALIZADAS',
                    y: data[1],
                    color: "#73c9f4"
                }]
                charts(`container${id}`, t, array)
            }
        })
    }
    listado_mantenciones_activas();
    const lista_criticos = () => {
        $.ajax({
            type: 'POST',
            url: 'https://apiqrc.acbingenieria.cl/total_criticos',
            data: {
                mes: $("#slcMeses").val(),
                ano: $("#slcAño").val()
            },
            success: data => {
                console.log(data);
                charts_bar(data[0], data[1][0].total_mantener);
            }
        })
    }

    function charts_bar(data, total_mantener) {
        Highcharts.chart('container6', {
            chart: {
                type: 'bar'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ['<b>FANCOIL <small>[CRITICOS N°0]</small></b>', '<b>CRITICOS N°1</b>',
                    '<b>CRITICOS N°2</b>', '<b>CRITICOS N°3</b>'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: `TOTAL DE CRITICOS <b>${total_mantener}</b>`
                }
            },
            legend: {
                reversed: true
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                },
                series: {
                    stacking: 'normal'
                }
            },
            series: data,
            exporting: {
                enabled: false
            },
            credits: {
                enabled: false
            }
        });
    }

    function listado_mantenciones_activas() {
        $.ajax({
            type: 'POST',
            url: 'https://qrc.acbingenieria.cl/PersonalController/fn_listado_mantenciones',
            data: {
                per_id: <?= $this->session->userdata('per_id') ?>,
                ano: $("#selectAnoMantenciones").val(),
                mes: $("#selectMesesMantenciones").val()
            },
            success: data => {
                let json = JSON.parse(data);
                if (json.length > 0) {
                    $("#contentMantenciones").removeClass('d-none');
                    let html = ``;
                    let cont = 1;
                    let tipo = ``
                    let colorEstado = ''                    
                    let estado = ``;
                    json.map(d => {
                        if (d.man_estado == 1) {
                            estado = 'MANTENCIÓN ACTIVA'
                            colorEstado = `<td style="background-color:#333"></td>`
                        }
                        if (d.man_estado == 2) {
                            estado = 'MANTENCIÓN EN PROCESO'
                            colorEstado = `<td style="background-color:#fff600"></td>`
                        }
                        if (d.man_estado == 3) {
                            estado = 'MANTENCIÓN FINALIZADA'
                            colorEstado = `<td style="background-color:#007719"></td>`                            
                        }

                        if (d.man_tipo == 1) {
                            tipo = 'MAN. PREVENTIVA'
                        }
                        if (d.man_tipo == 2) {
                            tipo = 'MAN. CORRECTIVA'
                        }
                        if (d.man_tipo == 3) {
                            tipo = 'MAN. RONDA'
                        }
                        html += `<tr>
                            ${colorEstado}
                            <td class="tx-center tx-bold">${cont}</td>
                            <td>${estado}</td>
                            <td>${d.man_fecha}</td>
                            <td class="tx-center">${tipo}</td>
                            <td class="tx-center">${d.mtr_clinica}</td>
                            <td class="tx-center">${d.equ_nombre}</td>
                            <td class="tx-center">${d.mtr_modela}</td>
                            <td class="tx-center">${d.mtr_activo}</td>
                            <td class="tx-center">${d.mtr_serie}</td>
                            <td class="tx-center">${d.mtr_descripcion}</td>
                            <td class="tx-center">${d.mtr_ubicacionf}</td>
                        </tr>`;
                        cont++
                    })
                    $("#tbodyM").html(html);
                } else {
                    $("#contentMantenciones").addClass('d-none')
                }
            }
        })
    }
    lista_dia();
    lista_noche();
    lista_total();
    total_cliente('CAS', 4, 'Mantenciones Clinica VITACURA CAS')
    total_cliente('MO', 5, 'Clinica Manquehue MO')
    lista_criticos();
    $("#slcMeses").change(function() {
        lista_dia();
        lista_noche();
        lista_total();
        total_cliente('CAS', 4, 'Mantenciones Clinica VITACURA CAS')
        total_cliente('MO', 5, 'Clinica Manquehue MO')
        lista_criticos()
    })
    $("#slcAño").change(function() {
        lista_dia();
        lista_noche();
        lista_total();
        total_cliente('CAS', 4, 'Mantenciones Clinica VITACURA CAS')
        total_cliente('MO', 5, 'Clinica Manquehue MO')
        lista_criticos()
    })
    $("#selectMesesMantenciones").change(()=>listado_mantenciones_activas())
</script>