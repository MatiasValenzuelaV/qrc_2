<?php $this->load->view('layouts/head', $title); ?>
<?php $this->load->view('layouts/leftpanel'); ?>
<?php $this->load->view('layouts/header'); ?>

<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="<?= base_url(); ?>">Inicio</a>
            <span class="breadcrumb-item active">Mantenciones</span>
            <span class="breadcrumb-item active">Scanner QR</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card bd-0">
                        <div class="card-header bg-primary  d-flex align-items-center justify-content-between pd-y-5 tx-uppercase">
                            <h7 class="mg-b-0 tx-14 tx-white tx-normal mg-5">Scanner TESTING</h7>
                            <div class="card-option tx-24">
                                <!-- <button type="button" class="btn btn-black btn-sm" id="btnNuevo"><i class="fas fa-plus-square"></i> Nuevo</button> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-md-center mg-b-20">
                                <div class="col-lg-6 col-sm-12">
                                    <!-- <div style="width: 500px" id="reader"></div> -->
                                    <div id="reader" width="600px" height="600px"></div>
                                </div>
                                <!-- <div class="col-12">
                                    <img src="<?= asset_url(); ?>img/qr-codes2.png" alt="log" class="img-fluid" height="100%" width="100%">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="mdlSeleccionarMantencion" class="modal fade">
    <div class="modal-dialog modal-dialog-vertical-center modal-xl" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Mantenciones asociadas...</h6>
                <button type="button" style="cursor:pointer" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <div class="row mg-b-5">
                    <input type="text" class="d-none" id="idMaestraEquipo">
                    <input type="text" class="d-none" id="nombreMaestraEquipo">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="form-control-label tx-18">Selecciona fecha mantención: </label>
                            <select name="fechaMantencion" class="tx-18" id="selectMantencionesRegistradas"></select>
                        </div>
                    </div>                   
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" id="btnSeleccionarMantencion">Seleccionar</button>
                <button type="button" class="btn btn-secondary fa-pointer tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layouts/js'); ?>
<script src="<?= js_url(); ?>html5-qrcode.min.js"></script>
<script>
    'use strict'
    const html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", {
            fps: 10,
            qrbox: 250
        });
    html5QrcodeScanner.render(onScanSuccess);

    async function valida_mantenciones(mtr_id){
      const result = await fetch('https://apiqrc.acbingenieria.cl/valida_mantenciones_disponibles',{
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body:JSON.stringify({mtr_id:mtr_id})

      })
      const data = await result.json();
      return data
    }    
    async function onScanSuccess(qrCodeMessage) {
        let splitMessage = qrCodeMessage.split(',')
        let idQR = splitMessage[0].trim();
        let equipo = splitMessage[1].trim();
        const datos = await valida_mantenciones(idQR)
        let sqlcode = datos[0].sqlcode
        let html = ``;
        if(sqlcode == 1){
          $("#mdlSeleccionarMantencion").modal()
          $("#idMaestraEquipo").val(idQR)
          $("#nombreMaestraEquipo").val(equipo)
          datos.map(d => {
            html += `<option id="${d.man_id}">${moment(d.man_fecha).utc(0).format('YYYY-MM-DD')}</option>`
          })
          $("#selectMantencionesRegistradas").html(html)
        }else{
          $("#reader__dashboard_section_csr > span:nth-child(2) > button:nth-child(2)").click()
          mdtoast(`${datos[0].sqlmsg}`, {
              duration: 4000,
              type: mdtoast.WARNING,
          });          
        }       
    }

    $("#btnSeleccionarMantencion").click(()=>{
        let man_id = $("#selectMantencionesRegistradas option:selected").attr('id')
        let mtr_id = $("#idMaestraEquipo").val()
        let equ_nombre = $("#nombreMaestraEquipo").val()
        location.replace(base_url + 'nueva_ot/'+mtr_id+'/'+man_id)        
    })
</script>