<?php $this->load->view('layouts/head', $title); ?>
<?php $this->load->view('layouts/leftpanel'); ?>
<?php $this->load->view('layouts/header'); ?>
<style>
    .table td,
    .table th {
        border-top: 0px solid #333;
    }

    table>tbody {
        font-size: 10px;
        font-weight: bold;
    }

    .form-control:disabled,
    .dataTables_filter input:disabled,
    .form-control[readonly],
    .dataTables_filter input[readonly] {
        color: black;
        font-weight: bold;
        font-size: 0.700rem;
    }

    .form-control-font {
        font-size: 0.58rem;
    }
</style>
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="<?= base_url(); ?>">Inicio</a>
            <span class="breadcrumb-item active">OT</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="container-fluid">
            <div class="row justify-content-md-center mg-b-20">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header tx-medium  tx-uppercase tx-black">
                            Orden de Trabajo
                        </div>
                        <div class="card-body form-layout form-layout">
                            <input maxlength="50" type="number" id="idMAN" value="<?=$man_id?>" disabled class="form-control form-control-success d-none">
                            <input maxlength="50" type="number" id="idMTR" value="<?=$mtrID?>" disabled class="form-control form-control-success d-none">
                            <input maxlength="50" type="number" id="idOT" value="" disabled class="form-control form-control-success d-none">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-lg-2 form-control-label">N° OT:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input maxlength="50" type="text" id="frmOtCorrelativo" value="OT00001" disabled class="form-control form-control-success tx-center">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-lg-2 form-control-label">EQUIPO:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input maxlength="50" type="text" id="equipoFRM" disabled class="form-control form-control-success tx-center">
                                    </div>
                                    <label class="col-sm-12 col-lg-2 form-control-label">ACTIVO:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input maxlength="50" type="text" id="activoFRM" disabled class="form-control form-control-success tx-center">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-lg-2 form-control-label">UBICACIÓN:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input id="ubicacionFRM" maxlength="50" type="text" value="Piso 3 Mo" disabled class="form-control form-control-success tx-center">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-lg-2 form-control-label">DESCRIPCIÓN:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input id="descripcionFRM" maxlength="50" type="text" value="Sur Habitación 1326" disabled class="form-control form-control-success tx-center">
                                    </div>
                                    <label class="col-sm-12 col-lg-2 form-control-label">CLIENTE:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input id="clienteFRM" maxlength="50" type="text" value="Mo" disabled class="form-control form-control-success tx-center">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-lg-2 form-control-label">MARCA:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input id="marcaFRM" maxlength="50" type="text" value="Sur Habitación 1326" disabled class="form-control form-control-success tx-center">
                                    </div>
                                    <label class="col-sm-12 col-lg-2 form-control-label">PERIODO EJECUCIÓN:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input id="periodoFRM" maxlength="50" type="text" value="OCTUBRE, 2021" disabled class="form-control form-control-success tx-center">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-lg-2 form-control-label">MODELO:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input id="modeloFRM" maxlength="50" type="text" value="" disabled class="form-control form-control-success tx-center">
                                    </div>
                                    <label class="col-sm-12 col-lg-2 form-control-label">ÁREA:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input id="areaFRM" maxlength="50" type="text" value="" disabled class="form-control form-control-success tx-center">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-lg-2 form-control-label">SERIE:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input id="serieFRM" maxlength="50" type="text" value="" disabled class="form-control form-control-success tx-center">
                                    </div>
                                    <label class="col-sm-12 col-lg-2 form-control-label pd-r-5">Tipo Mantención:</label>
                                    <div class="col-sm-12 col-lg-4">
                                        <input id="frmTMantencion" maxlength="50" type="text" value="" disabled class="form-control form-control-success tx-center">
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div class="alert alert-primary" role="alert">
                                ¡<b>IMPORTANTE:</b> Serán considerados todos los checklist visibles, sin embargo tener en cuenta que si no se selecciona este queda <b>N/A</b>!
                            </div>
                            <form class="form-horizontal">
                                <table class="table">
                                    <tbody id="tbody">
                                    </tbody>
                                </table>
                            </form>
                            <hr>
                            <form class="form-horizontal">
                                <h4 class="tx-black mg-b-25" id="titleSeccionEquipo">Equipos:</h4>
                                <div class="primerContenido">

                                </div>
                            </form>
                            <hr>
                            <div class="content-componentes d-none table-responsive" id="content-C">
                                <div class="card">
                                    <div class="card-header">
                                        Componentes
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-responsive table-striped">
                                            <thead>
                                                <tr>
                                                    <td>Tipo</td>
                                                    <td>Nombre/Modelo</td>
                                                </tr>
                                            </thead>
                                            <tbody id="listado_componentes">
                                            </tbody>
                                        </table>
                                        <nav id="registros-pagina" class="d-none mg-t-30">
                                            <ul class="pagination justify-content-center pagination-sm"></ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="content-observaciones">
                                <h4 class="tx-black mg-b-25">Observaciones:</h4>
                                <div class="editable tx-16 bd pd-30 tx-inverse" id="observacionesText"></div>
                            </div>
                            <hr>
                            <div class="content-firma">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-lg-2 form-control-label">Fecha Inicio:</label>
                                        <div class="col-sm-12 col-lg-4">
                                            <input maxlength="50" type="text" format="yyyy-mm-dd" id="fechaInicio" class="form-control form-control-success tx-center">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-lg-2 form-control-label">Técnico 1:</label>
                                        <div class="col-sm-12 col-lg-4">
                                            <input maxlength="50" type="text" id="frmTecnico1" disabled class="form-control form-control-success tx-center">
                                        </div>
                                        <label class="col-sm-12 col-lg-2 form-control-label">Técnico 2:</label>
                                        <div class="col-sm-12 col-lg-4">
                                            <input maxlength="50" type="text" id="frmTecnico2" disabled class="form-control form-control-success tx-center">
                                        </div>
                                    </div>
                                    <div class="form-group row mg-t-55 d-none">
                                        <div class="col-sm-12 col-lg-4 tx-center">
                                            <hr>
                                            <span class="tx-center tx-black">Firma Técnico</span>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 tx-center">
                                            <hr>
                                            <span class="tx-center tx-black">V°B° Supervisor QR Cleaner Ingeniería</span>
                                        </div>
                                        <div class="col-sm-12 col-lg-4 tx-center">
                                            <hr>
                                            <span class="tx-center tx-black">V°B° Responsable Clínica</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer tx-center">
                            <button type="button" class="btn btn-primary fa-pointer tx-11 tx-uppercase tx-center pd-y-12 pd-x-25 tx-mont tx-medium" id="btnGuardar">Finalizar OT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
      echo $mtrID;
      echo '<br>';
      echo $man_id;
    ?>
</div>
<div id="mdlCheck" class="modal fade">
  <div class="modal-dialog" role="document">
      <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <i class="fas fa-exclamation-triangle tx-100 tx-warning lh-1 mg-t-20 d-inline-block"></i>
              <h4 class="tx-black  tx-semibold mg-b-20" id="titleEliminar">Antes de finalizar la OT, revise que tenga seleccionado todos los check list.</h4>
              <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                  Cerrar</button>
          </div>
      </div>
  </div>
</div>
<div id="mdlNominal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fas fa-exclamation-triangle tx-100 tx-warning lh-1 mg-t-20 d-inline-block"></i>
                <h4 class="tx-black  tx-semibold mg-b-20" id="titleEliminar">Por favor revise valores en nominales al parecer esta superando el máximo indicado, ¿Es correcta la información ingresada?</h4>
                <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close" id="btnCorrecto">
                    Sí, es correcta</button>
                <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                    Revisaré nuevamente</button>
            </div>
        </div>
    </div>
</div>
<div id="mdlTemperatura" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fas fa-exclamation-triangle tx-100 tx-warning lh-1 mg-t-20 d-inline-block"></i>
                <h4 class="tx-black  tx-semibold mg-b-20" id="titleEliminar">Por favor para finalizar la OT, revise valores en chequeo temperatura</h4>
                <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                    OK </button>
            </div>
        </div>
    </div>
</div>
<div id="mdlEPP" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fas fa-exclamation-triangle tx-100 tx-warning lh-1 mg-t-20 d-inline-block"></i>
                <h4 class="tx-black  tx-semibold mg-b-20" id="titleEliminar">Favor confirmar, ¿Cuenta con sus elementos de protección personal?</h4>
                <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close" id="btnConfirmar">
                    SI</button>
                <button type="button" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close" id="btnNegar">
                    NO</button>
            </div>
        </div>
    </div>
</div>
<div id="mdlAuth" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fas fa-exclamation-triangle tx-100 tx-warning lh-1 mg-t-20 d-inline-block"></i>
                <h4 class="tx-black  tx-semibold mg-b-20" id="titleEliminar">Favor confirmar, ¿Cuenta con permiso de trabajo y se ha coordinado con el servicio para su autorización?</h4>
                <button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close" id="btnConfirmaAuth">
                    SI</button>
                <button type="button" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close" id="btnNegar">
                    NO</button>
            </div>
        </div>
    </div>
</div>
<script src="<?= lib_url(); ?>jquery/jquery.js"></script>
<script src="<?= lib_url(); ?>popper.js/popper.js"></script>
<script src="<?= lib_url(); ?>bootstrap/bootstrap.js"></script>
<script src="<?= lib_url(); ?>perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="<?= lib_url(); ?>moment/moment.js"></script>
<script src="<?= lib_url(); ?>jquery-ui/jquery-ui.js"></script>
<script src="<?= lib_url(); ?>jquery-switchbutton/jquery.switchButton.js"></script>
<script src="<?= lib_url(); ?>peity/jquery.peity.js"></script>
<script src="<?= lib_url(); ?>jquery-toggles/toggles.min.js"></script>
<script src="<?= lib_url(); ?>ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="<?= lib_url(); ?>medium-editor/medium-editor.js"></script>
<script src="<?= lib_url(); ?>material-toast/mdtoast.js"></script>

<script src="<?= js_url(); ?>bracket.js"></script>
<script>
  'use strict'  
  let base_url = '<?= base_url(); ?>'
  moment.lang('es', {
      months: 'Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre'.split('_'),
      monthsShort: 'Enero._Feb._Mar_Abr._May_Jun_Jul._Ago_Sept._Oct._Nov._Dec.'.split('_'),
      weekdays: 'Domingo_Lunes_Martes_Miercoles_Jueves_Viernes_Sabado'.split('_'),
      weekdaysShort: 'Dom._Lun._Mar._Mier._Jue._Vier._Sab.'.split('_'),
      weekdaysMin: 'Do_Lu_Ma_Mi_Ju_Vi_Sa'.split('_')
  });
  let editor = new MediumEditor('.editable', {
      placeholder: {
          text: 'SE REALIZA MANTENCIÓN',
          hideOnClick: true
      },
      toolbar: {
          align: 'center',
      }
  });
  async function crear_ot(man_id){
    const result = await fetch('https://apiqrc.acbingenieria.cl/crear_ot',{
      method:'POST',
      headers:{'Content-Type':'application/json'},
      body:JSON.stringify({man_id:man_id})
    })
    const data = await result.json();
    return data
  }
  async function getDataEquipo(mtr_id){
    const result = await fetch('https://apiqrc.acbingenieria.cl/list_equipo_maestra_by_id',{
      method:'POST',
      headers:{'Content-Type':'application/json'},
      body:JSON.stringify({mtr_id:mtr_id})
    })
    const data = await result.json();
    return data
  }
  function ot_guarda_checklist_defecto(equ_id) {
      $.ajax({
          type: 'POST',
          url: 'https://qrc.acbingenieria.cl/OTController/ot_guarda_checklist_defecto',
          data: {
              man_id: $("#idMAN").val(),
              equ_id: equ_id,
              ot_id: $("#idOT").val()
          },
          success: data => {
              let json = JSON.parse(data);
              checklist(json[0].equ_nombre);
          }
      })
  }
  function checklist(e) {
      $.ajax({
          type: 'POST',
          url: 'https://qrc.acbingenieria.cl/MaestraController/lista_checklist_ot',
          data: {
              // equ_nombre: `${e}`,
              equ_nombre: e,
              man_id: $("#idMAN").val(),
              ot_id: $("#idOT").val()
          },
          success: data => {
              let json = JSON.parse(data);
              let thead, tbody = ``
              json.map(d => {
                  let ot_id = $("#idOT").val();
                  if (d.mand_activo == 0) {
                      tbody += `<tr>
                      <th>${d.chk_nombre}</th>
                          <td>
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" onclick="saveCheckList(${d.man_id},${d.chk_id},1,${ot_id})" id="${d.chk_id}">
                                  <label class="form-check-label" for="${d.chk_id}">
                                  </label>
                              </div>
                          </td>
                      </tr>`
                  } else {
                      tbody += `<tr>
                      <th>${d.chk_nombre}</th>
                          <td>
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" checked onclick="saveCheckList(${d.man_id},${d.chk_id},0,${ot_id})" id="${d.chk_id}">
                                  <label class="form-check-label" for="${d.chk_id}">
                                  </label>
                              </div>
                          </td>
                      </tr>`
                  }
              })
              $("#tbody").html(tbody);
          }
      })
  }
  function valida_checked() {
      let checkedF = 0;
      [...document.querySelectorAll('#tbody > tr > td > div > input')].map(d => {
          // checkedF.push(d.checked)                
          if (d.checked == false) {
              checkedF++
          }
      })
      if (checkedF > 0) {
          $("#mdlCheck").modal();
          return false;
      }
      return true
  }
  function valida_nominales() {
      let v1 = ($("#nom1").val() * 100) / 100;
      let v2 = ($("#nom2").val() * 100) / 100;
      let v3 = ($("#nom3").val() * 100) / 100;

      if ($("#nom11").val() > v1 || $("#nom12").val() > v1 || $("#nom13").val() > v1) {
          $("#mdlNominal").modal();
          return false;
      }
      if ($("#nom21").val() > v2 || $("#nom22").val() > v2 || $("#nom23").val() > v2) {
          $("#mdlNominal").modal();
          return false;
      }
      if ($("#nom31").val() > v3 || $("#nom32").val() > v3 || $("#nom33").val() > v3) {
          $("#mdlNominal").modal();
          return false;
      }
      if ($("#frio").val() == '') {
          $("#mdlTemperatura").modal();
          return false;
      }
      if ($("#calor").val() == '') {
          $("#mdlTemperatura").modal();
          return false;
      }
      return true
  }
  
  const saveCheckList = function(man_id, chk_id, mand_activo, ot_id) {
    $.ajax({
        type: 'POST',
        url: 'https://qrc.acbingenieria.cl/OTController/mantencion_checklist',
        data: {
            man_id: man_id,
            chk_id: chk_id,
            mand_activo: mand_activo,
            ot_id: ot_id
        },
        success: data => {
            let json = JSON.parse(data);
            checklist(json[0].equ_nombre);
        }
    })
  }
  $("#mdlEPP").modal();
  $("#btnConfirmar").click(function() {
      $("#mdlAuth").modal();
      $("#btnConfirmaAuth").click(async function() {
        const resultOT = await crear_ot($("#idMAN").val())
        $("#idOT").val(resultOT[0].ot_id)
        $("#frmOtCorrelativo").val(resultOT[0].ot_correlativo)
        $("#periodoFRM").val(moment(resultOT[0].ot_fecharegistro).format("MMMM YYYY").toUpperCase())
        $("#fechaInicio").val(moment(resultOT[0].ot_fecharegistro).format('DD-MM-YYYY'));
        const dataMaestra = await getDataEquipo($("#idMTR").val())
        dataMaestra.map(d => {
          $("#equipoFRM").val(d.equ_nombre.toUpperCase().trim())
          $("#activoFRM").val(d.mtr_activo.toUpperCase().trim())
          $("#ubicacionFRM").val(d.mtr_ubicacionf.toUpperCase().trim())
          $("#descripcionFRM").val(d.mtr_descripcion.toUpperCase().trim())
          $("#clienteFRM").val(d.mtr_clinica.toUpperCase().trim())
          $("#marcaFRM").val(d.mtr_marca.toUpperCase().trim())
          $("#modeloFRM").val(d.mtr_modela.toUpperCase().trim())
          $("#serieFRM").val(d.mtr_serie.toUpperCase().trim())
          ot_guarda_checklist_defecto(d.equ_id[0])
          $("#frmTMantencion").val('MANTENCIÓN PREVENTIVA')
          
          carga_contenido(d.equ_nombre,d.mtr_motor1,d.mtr_motor2,d.mtr_motor3,d.mtr_motor4)
        })
      })
  })
  $("#btnNegar").click(function() {
      location.replace(base_url + 'qrscanner')
  })
  function carga_contenido(equ_nombre, m1, m2, m3, m4) {
      if (m1 > 0) {
          m1 = m1;
      }
      if (m2 > 0) {
          m2 = m2;
      }
      if (m3 > 0) {
          m3 = m3;
      }
      if (equ_nombre === 'Mini Split' || equ_nombre === 'Multi-Split' || equ_nombre === 'Vrv' || equ_nombre === 'Compacto' || equ_nombre === 'Ventana' || equ_nombre === 'Split Ducto') {
          $(".primerContenido").html(`<div class="row">
                                  <div class="col-sm-12 col-lg-4">
                                      <input value="MEDICIONES DE CONSUMO VENT. EXTERIOR" maxlength="50" type="text" value="" disabled class="form-control form-control-success">
                                  </div>
                                  <div class="col-sm-12 col-lg-1 mg-l-20">
                                      <div class="form-check">
                                          <input class="form-check-input" id="t1" type="checkbox" value="">
                                          <label class="form-check-label">
                                              TRIF
                                          </label>
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input" id="m1" type="checkbox" value="">
                                          <label class="form-check-label">
                                              MONO
                                          </label>
                                      </div>
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <small class="tx-center tx-black">R</small>
                                      <input id="nom11" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <small class="tx-center tx-black">S</small>
                                      <input id="nom12" type="number" class="form-control form-control-success  form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <small class="tx-center tx-black">T</small>
                                      <input id="nom13" type="number" class="form-control form-control-success  form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-3 tx-center">
                                      <small class="tx-center tx-black">Nom.</small>
                                      <input id="nom1" value="${parseFloat(m1).toFixed(2)}" disabled type="number" class="form-control form-control-success tx-center  form-control-font">
                                  </div>
                              </div>
                              <div class="row mg-t-30">
                                  <div class="col-sm-12 col-lg-4">
                                      <input value="MEDICIONES DE CONSUMO VENT. INTERIOR" maxlength="50" type="text" value="" disabled class="form-control form-control-success">
                                  </div>
                                  <div class="col-sm-12 col-lg-1 mg-l-20">
                                      <div class="form-check">
                                          <input class="form-check-input" id="t2" type="checkbox" value="">
                                          <label class="form-check-label">
                                              TRIF
                                          </label>
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input" id="m2" type="checkbox" value="">
                                          <label class="form-check-label">
                                              MONO
                                          </label>
                                      </div>
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="nom21" type="number" class="form-control form-control-success  form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="nom22" type="number" class="form-control form-control-success  form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="nom23" type="number" class="form-control form-control-success  form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-3 tx-center">
                                      <input id="nom2" value="${parseFloat(m2).toFixed(2)}" disabled type="number" class="form-control form-control-success tx-center  form-control-font">
                                  </div>
                              </div>
                              <div class="row mg-t-30">
                                  <div class="col-sm-12 col-lg-4">
                                      <input value="MEDICIONES DE CONSUMO COMPRESOR" maxlength="50" type="text" value="" disabled class="form-control form-control-success">
                                  </div>
                                  <div class="col-sm-12 col-lg-1 mg-l-20">
                                      <div class="form-check">
                                          <input class="form-check-input" id="t3" type="checkbox" value="">
                                          <label class="form-check-label">
                                              TRIF
                                          </label>
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input" id="m3" type="checkbox" value="">
                                          <label class="form-check-label">
                                              MONO
                                          </label>
                                      </div>
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="nom31" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="nom32" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="nom33" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-3 tx-center">
                                      <input id="nom3" value="${parseFloat(m3).toFixed(2)}" disabled type="number" class="form-control form-control-success tx-center form-control-font">
                                  </div>
                              </div>
                              <div class="row mg-t-30">
                                  <div class="col-sm-12 col-lg-4">
                                      <input value="PRESION DE REFRIGERANTE (si procede)" maxlength="50" type="text" value="" disabled class="form-control form-control-success">
                                  </div>
                                  <div class="col-sm-12 col-lg-1 mg-l-20">
                                      <small class="tx-center tx-black">Baja</small>
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">                                            
                                      <input id="baja" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <small class="tx-center tx-black">Alta</small>
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="alta" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-3 tx-center">
                                      <small class="tx-center tx-black"></small>
                                  </div>
                              </div>
                              <div class="row mg-t-30">
                                  <div class="col-sm-12 col-lg-4">
                                      <input value="CHEQUEO DE TEMPERATURAS DE INYECCIÓN" maxlength="50" type="text" value="" disabled class="form-control form-control-success">
                                  </div>
                                  <div class="col-sm-12 col-lg-1 mg-10">

                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <small class="tx-center tx-black">Frio/Calor</small>
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="frio" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="calor" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-3 tx-center">
                                      <small class="tx-center tx-black"></small>
                                  </div>
                              </div>`)
      } else {
          $(".primerContenido").html(`<div class="row">
                                  <div class="col-sm-12 col-lg-4">
                                      <input value="MEDICIONES DE CONSUMO ELECTRICO MOTOR 1" maxlength="50" type="text" value="" disabled class="form-control form-control-success">
                                  </div>
                                  <div class="col-sm-12 col-lg-1 mg-l-20">
                                      <div class="form-check">
                                          <input class="form-check-input" id="t1" type="checkbox" value="">
                                          <label class="form-check-label">
                                              TRIF
                                          </label>
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input" id="m1" type="checkbox" value="">
                                          <label class="form-check-label">
                                              MONO
                                          </label>
                                      </div>
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <small class="tx-center tx-black">R</small>
                                      <input id="nom11" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <small class="tx-center tx-black">S</small>
                                      <input id="nom12" type="number" class="form-control form-control-success  form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <small class="tx-center tx-black">T</small>
                                      <input id="nom13" type="number" class="form-control form-control-success  form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-3 tx-center">
                                      <small class="tx-center tx-black">Nom.</small>
                                      <input id="nom1" value="${parseFloat(m1).toFixed(2)}" disabled type="text" class="form-control form-control-success tx-center  form-control-font">
                                  </div>
                              </div>
                              <div class="row mg-t-30">
                                  <div class="col-sm-12 col-lg-4">
                                      <input value="MEDICIONES DE CONSUMO ELECTRICO MOTOR 2" maxlength="50" type="text" value="" disabled class="form-control form-control-success">
                                  </div>
                                  <div class="col-sm-12 col-lg-1 mg-l-20">
                                  <div class="form-check">
                                          <input class="form-check-input" id="t2" type="checkbox" value="">
                                          <label class="form-check-label">
                                              TRIF
                                          </label>
                                      </div>
                                      <div class="form-check">
                                          <input class="form-check-input" id="m2" type="checkbox" value="">
                                          <label class="form-check-label">
                                              MONO
                                          </label>
                                      </div>
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="nom21" type="number" class="form-control form-control-success  form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="nom22" type="number" class="form-control form-control-success  form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="nom23" type="number" class="form-control form-control-success  form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-3 tx-center">
                                      <input id="nom2" value="${parseFloat(m2).toFixed(2)}" disabled type="text" class="form-control form-control-success tx-center  form-control-font">
                                  </div>
                              </div>
                              <div class="row mg-t-30">
                                  <div class="col-sm-12 col-lg-4">
                                      <input value="MEDICIONES DE VELOCIDAD DEL AIRE (mts/seg)" maxlength="50" type="text" value="" disabled class="form-control form-control-success">
                                  </div>
                                  <div class="col-sm-12 col-lg-1 mg-l-20">
                                      
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="a1" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="mm1" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="b1" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-3 tx-center">
                                      <small class="tx-center tx-black">A/M/B</small>
                                  </div>
                              </div>
                              <div class="row mg-t-30">
                                  <div class="col-sm-12 col-lg-4">
                                      <input value="TEMPERATURA CARCASA MOTOR (Fancoil)" maxlength="50" type="text" value="" disabled class="form-control form-control-success">
                                  </div>
                                  <div class="col-sm-12 col-lg-1 mg-l-20">
                                      
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">                                            
                                      <input id="carcasa" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      
                                  </div>
                                  <div class="col-3 col-lg-3 tx-center">
                                      
                                  </div>
                              </div>
                              <div class="row mg-t-30">
                                  <div class="col-sm-12 col-lg-4">
                                      <input value="CHEQUEO DE TEMPERATURAS DE INYECCIÓN" maxlength="50" type="text" value="" disabled class="form-control form-control-success">
                                  </div>
                                  <div class="col-sm-12 col-lg-1 mg-10">

                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <small class="tx-center tx-black">Frio/Calor</small>
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="frio" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-1 tx-center">
                                      <input id="calor" type="number" class="form-control form-control-success form-control-font">
                                  </div>
                                  <div class="col-3 col-lg-3 tx-center">
                                      <small class="tx-center tx-black"></small>
                                  </div>
                              </div>`)
      }
  }
  function guardar_ot_detalle(equ_nombre) {
      if (equ_nombre === 'Mini Split' || equ_nombre === 'Multi-Split' || equ_nombre === 'Vrv' || equ_nombre === 'Compacto' || equ_nombre === 'Ventana' || equ_nombre === 'Split Ducto') {
          $.ajax({
              type: 'POST',
              url: 'https://qrc.acbingenieria.cl/OTController/ot_detalle',
              data: {
                  ot_id: $("#idOT").val(),
                  man_id: $("#idman").val(),
                  nom11: $("#nom11").val(),
                  nom12: $("#nom12").val(),
                  nom13: $("#nom13").val(),
                  nom21: $("#nom21").val(),
                  nom22: $("#nom22").val(),
                  nom23: $("#nom23").val(),
                  nom31: $("#nom31").val(),
                  nom32: $("#nom32").val(),
                  nom33: $("#nom33").val(),
                  t1: $("#t1").is(':checked'),
                  m1: $("#m1").is(':checked'),
                  t2: $("#t2").is(':checked'),
                  m2: $("#m2").is(':checked'),
                  t3: $("#t3").is(':checked'),
                  m3: $("#m3").is(':checked'),
                  baja: $("#baja").val(),
                  alta: $("#alta").val(),
                  frio: $("#frio").val(),
                  calor: $("#calor").val(),
                  carcasa: 0,
                  observacion: editor.getContent().replace('<p>', '').replace('</p>', ''),
                  fecha: $("#fechaInicio").val(),
                  a1: 0,
                  mm1: 0,
                  b1: 0
              },
              success: data => {
                  mdtoast(`HA FINALIZADO LA OT CON EXITO`, {
                      duration: 5000,
                      type: mdtoast.SUCCESS,
                  });
                  $.ajax({
                      type: "POST",
                      url: "https://apiqrc.acbingenieria.cl/OTPDF",
                      data: {
                          ot_id: $("#idOT").val()
                      },
                      success: (data) => {
                          if (data == "TERMINO") {
                              setTimeout(function() {
                                  location.replace(base_url + 'listado_mantenciones')
                              }, 2000)
                          }
                      },
                  });
              }

          })
      } else {
          $.ajax({
              type: 'POST',
              url: 'https://qrc.acbingenieria.cl/OTController/ot_detalle',
              data: {
                  ot_id: $("#idOT").val(),
                  man_id: $("#idMAN").val(),
                  nom11: parseFloat($("#nom11").val()),
                  nom12: parseFloat($("#nom12").val()),
                  nom13: parseFloat($("#nom13").val()),
                  nom21: parseFloat($("#nom21").val()),
                  nom22: parseFloat($("#nom22").val()),
                  nom23: parseFloat($("#nom23").val()),
                  nom31: 0,
                  nom32: 0,
                  nom33: 0,
                  t1: $("#t1").is(':checked'),
                  m1: $("#m1").is(':checked'),
                  t2: $("#t2").is(':checked'),
                  m2: $("#m2").is(':checked'),
                  t3: 0,
                  m3: 0,
                  baja: 0,
                  alta: 0,
                  frio: $("#frio").val(),
                  calor: $("#calor").val(),
                  carcasa: $("#carcasa").val(),
                  observacion: editor.getContent().replace('<p>', '').replace('</p>', ''),
                  fecha: $("#fechaInicio").val(),
                  a1: $("#a1").val(),
                  mm1: $("#mm1").val(),
                  b1: $("#b1").val()
              },
              success: data => {
                  mdtoast(`HA FINALIZADO LA OT CON EXITO`, {
                      duration: 5000,
                      type: mdtoast.SUCCESS,
                  });
                  $.ajax({
                      type: "POST",
                      url: "https://apiqrc.acbingenieria.cl/OTPDF",
                      data: {
                          ot_id: $("#idOT").val()
                      },
                      success: (data) => {
                          if (data == "TERMINO") {
                              setTimeout(function() {
                                  location.replace(base_url + 'listado_mantenciones')
                              }, 2000)
                          }
                      },
                  });
                  // setTimeout(function() {
                  //     location.replace(base_url + 'listado_mantenciones')
                  // }, 2000)
              }
          })
      }
  }
  $("#btnGuardar").click(function() {
      //if (valida_checked()) {
      if (valida_nominales()) {
          if ($("#nom11").val() == '') {
              $("#nom11").val(0)
          };
          if ($("#nom12").val() == '') {
              $("#nom12").val(0)
          };
          if ($("#nom13").val() == '') {
              $("#nom13").val(0)
          };

          if ($("#nom21").val() == '') {
              $("#nom21").val(0)
          };
          if ($("#nom22").val() == '') {
              $("#nom22").val(0)
          };
          if ($("#nom23").val() == '') {
              $("#nom23").val(0)
          };
          if ($("#nom31").val() == '') {
              $("#nom31").val(0)
          };
          if ($("#nom32").val() == '') {
              $("#nom32").val(0)
          };
          if ($("#nom33").val() == '') {
              $("#nom33").val(0)
          };
          if ($("#baja").val() == '') {
              $("#baja").val(0)
          };
          if ($("#alta").val() == '') {
              $("#alta").val(0)
          };
          if ($("#frio").val() == '') {
              $("#frio").val(0)
          };
          if ($("#carcasa").val() == '') {
              $("#carcasa").val(0)
          };
          if ($("#a1").val() == '') {
              $("#a1").val(0)
          };
          if ($("#mm1").val() == '') {
              $("#mm1").val(0)
          };
          if ($("#b1").val() == '') {
              $("#b1").val(0)
          };
          var x = editor.getContent().replace('<p>', '').replace('</p>', '');
          guardar_ot_detalle($("#equipoFRM").val())
      } else {
          $("#btnCorrecto").click(function() {
              guardar_ot_detalle($("#equipoFRM").val())
          })
      }
      //}
  })
</script>
