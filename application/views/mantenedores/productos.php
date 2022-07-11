<?php $this->load->view('layouts/head', $title); ?>

<body>
    <?php $this->load->view('layouts/leftPanel'); ?>
    <?php $this->load->view('layouts/headPanel'); ?>
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="index.html"><?= $bc; ?></a>
                <span class="breadcrumb-item active"><?= $sbc; ?></span>
            </nav>
        </div>
        <div class="br-pagebody">

        </div>
    </div>
    <?php $this->load->view('layouts/js'); ?>
    <script src="<?= js_url(); ?>app/impresoras.js"></script>
</body>

</html>