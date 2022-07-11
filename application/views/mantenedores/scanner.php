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


<?php $this->load->view('layouts/js'); ?>
<script src="<?= js_url(); ?>app/mantenedores/cargos.js"></script>
<script src="<?= js_url(); ?>html5-qrcode.min.js"></script>
<script>
    'use strict'
    const html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", {
            fps: 10
            // qrbox: 250
        });
    html5QrcodeScanner.render(onScanSuccess);


    function onScanSuccess(qrCodeMessage) {
        let splitMessage = qrCodeMessage.split(',')
        let idQR = splitMessage[0];
        let equipo = splitMessage[1];
        $.ajax({
            type: 'POST',
            url: base_url + 'OTController/valida_mantencion_registrada',
            data: {
                mtr_id: idQR
            },
            success: data => {
                let json = JSON.parse(data);
                if (json[0].sqlcode == 1) {
                    $.ajax({
                        type: 'POST',
                        url: base_url + 'Scanner/qrSession',
                        data: {
                            idQR: idQR,
                            equipo: equipo,
                        },
                        success: data => {
                            location.replace(base_url + 'ot')
                        }
                    })
                } else {
                    $("#reader__dashboard_section_csr > span:nth-child(2) > button:nth-child(2)").click()
                    mdtoast(`${json[0].sqlmsg}`, {
                        duration: 4000,
                        type: mdtoast.WARNING,
                    });

                }
            }
        })
    }
</script>