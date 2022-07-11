<?php
if ($this->session->userdata('usu_id')) {
    header("Location: " . base_url().'/inicio');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <title>QRC Ingeniería - Sistema mantención</title>
    <link href="<?= asset_url(); ?>fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?= asset_url(); ?>fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?= asset_url(); ?>fontawesome/css/solid.css" rel="stylesheet">
    <link href="<?= lib_url(); ?>Ionicons/css/ionicons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= css_url(); ?>bracket.css">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-400 wd-xs-450 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> QR Cleaner Ingeniería <span class="tx-normal">]</span></div>
            <div class="tx-center mg-b-60"></div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-user tx-16 lh-0 op-6"></i></span>
                    <input type="text" class="form-control" placeholder="Nombre de usuario">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-key tx-16 lh-0 op-6"></i></span>
                    <input type="password" class="form-control" placeholder="Clave de usuario">
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-block">Ingresar</button>
            <!-- <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div> -->
        </div>
    </div>
    <script src="<?= lib_url(); ?>jquery/jquery.js"></script>
    <script src="<?= lib_url(); ?>popper.js/popper.js"></script>
    <script src="<?= lib_url(); ?>bootstrap/bootstrap.js"></script>

</body>

</html>