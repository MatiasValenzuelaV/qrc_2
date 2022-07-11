<?php
if ($this->session->userdata('usu_id')) {
    header("Location: " . base_url().'inicio');
}
?>
<?php $this->load->view('layouts/head', $title); ?>
<body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-400 wd-xs-450 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> QR Cleaner Ingeniería <span class="tx-normal">]</span></div>
            <div class="tx-center mg-b-60"></div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon ion-person tx-20 lh-0 op-6"></i></span>
                    <input type="text" id="frmUsuario" class="form-control" placeholder="Nombre de usuario">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-key tx-16 lh-0 op-6"></i></span>
                    <input type="password" id="frmClave" class="form-control" placeholder="Clave de usuario">
                </div>
            </div>
            <button type="button" id="btnLogin" class="btn btn-info btn-block fa-pointer">Ingresar</button>

            <div class="mg-t-60 tx-center">

            </div>
        </div>
    </div>

    <script src="<?= js_url(); ?>jquery/jquery.js"></script>
    <script src="<?= js_url(); ?>popper.js/popper.js"></script>
    <script src="<?= js_url(); ?>bootstrap/bootstrap.js"></script>
    <script src="<?= js_url(); ?>app/login.js"></script>
    <script src="<?= lib_url(); ?>material-toast/mdtoast.js"></script>

</body>

</html>