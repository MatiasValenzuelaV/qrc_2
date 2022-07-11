<?php $this->load->view('layouts/head', $title); ?>
<?php $this->load->view('layouts/leftpanel'); ?>
<?php $this->load->view('layouts/header'); ?>
<style>
    #reader__dashboard_section_csr>div>button:after {
        content: ''
    }
</style>
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="<?= base_url(); ?>">Inicio</a>
            <span class="breadcrumb-item active">Mantenedores</span>
            <span class="breadcrumb-item active">Cargos</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card bd-0">
                        <div class="card-header bg-primary  d-flex align-items-center justify-content-between pd-y-5 tx-uppercase">
                            <h7 class="mg-b-0 tx-14 tx-white tx-normal">Scanner TESTING</h7>
                            <div class="card-option tx-24">
                                <button type="button" class="btn btn-black btn-sm" id="btnNuevo"><i class="fas fa-plus-square"></i> Nuevo</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <!-- <div style="width: 500px" id="reader"></div> -->
                                    <div id="reader"></div>
                                </div>
                            </div>
                            <div class="row" style="background-color:red" id="msg">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('layouts/js'); ?>
<!-- <script src="<?= js_url(); ?>app/mantenedores/cargos.js"></script> -->
<script src="<?= js_url(); ?>html5-qrcode.min.js"></script>
<script>
    'use strict'

    function onScanSuccess(qrCodeMessage) {
        let splitMessage = qrCodeMessage.split(',')
        let activo = splitMessage[0];
        let equipo = splitMessage[1];
        let serie = splitMessage[2];
        $("#msg").html(`${activo},${equipo},${serie}`)
        
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", {
            fps: 10,
            qrbox: 250
        });
    html5QrcodeScanner.render(onScanSuccess);
</script>