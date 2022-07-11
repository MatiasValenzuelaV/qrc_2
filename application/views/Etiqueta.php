<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>QR Cleaner Ingeniería</title>

    <!-- vendor css -->
    <link href="<?= lib_url(); ?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?= asset_url(); ?>fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?= asset_url(); ?>fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?= asset_url(); ?>fontawesome/css/solid.css" rel="stylesheet">
    <link href="<?= lib_url(); ?>Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="<?= lib_url(); ?>perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?= lib_url(); ?>jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="<?= lib_url(); ?>jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="<?= lib_url(); ?>material-toast/mdtoast.css" rel="stylesheet">
    <link href="<?= lib_url(); ?>medium-editor/medium-editor.css" rel="stylesheet">
    <link href="<?= lib_url(); ?>medium-editor/default.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= css_url() ?>alertify.min.css">
    <link rel="stylesheet" href="<?= css_url() ?>themes/bootstrap.min.css">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?= css_url(); ?>bracket.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?= css_url(); ?>custom.css">
    <style>
        body {
            background-color: white;
        }
    </style>
    <style>
        #QRMAESTRA>img {
            display: initial !important;

        }
        .container {
            display:flex;
            margin:50px

        }
    </style>
</head>

<body>
    <div class="container" style="float:left">
        <div class="row pd-10 col-12" style="border: solid 1px black">
            <div class="col-lg-8 col-sm-12">
                <div class="row">
                    <div class="col-6">
                        <small class="tx-black tx-14">N° DE ACTIVO: </small>
                    </div>
                    <div class="col-6">
                        <small class="tx-black tx-14" id="eActivo"></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <small class="tx-black tx-14">DESCRIPCIÓN: </small>
                    </div>
                    <div class="col-6">
                        <small class="tx-black tx-14" id="eDescripcion"></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <small class="tx-black tx-14">MARCA: </small>
                    </div>
                    <div class="col-6">
                        <small class="tx-black tx-14" id="eMarca"></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <small class="tx-black tx-14">MODELO: </small>
                    </div>
                    <div class="col-6">
                        <small class="tx-black tx-14" id="eModelo"></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <small class="tx-black tx-14">N° SERIE: </small>
                    </div>
                    <div class="col-6">
                        <small class="tx-black tx-14" id="eSerie"></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <small class="tx-black tx-14">FRECUENCIA MANTENCIÓN: </small>
                    </div>
                    <div class="col-6">
                        <small class="tx-black tx-14" id="eMantencion"></small>
                    </div>
                </div>
                <div class="row" style="display: flex; justify-content: space-around">
                    <div class="col-6">
                        <small class="tx-black tx-14">RESPONSABLE CLÍNICA:</small>
                    </div>
                    <div class="col-6">
                        <small class="tx-black tx-14" id="responsable1">FERNANDO CAVIA</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <small class="tx-black tx-14">FONO: </small>
                    </div>
                    <div class="col-6">
                        <small class="tx-black tx-14" id="celular1">+56 9 58493687</small>
                    </div>
                </div>
                <div class="row" style="display: flex; justify-content: space-around">
                    <div class="col-6">
                        <small class="tx-black tx-14">RESPONSABLE CLÍNICA:</small>
                    </div>
                    <div class="col-6">
                        <small class="tx-black tx-14" id="responsable2"></small>
                    </div>
                </div>
                <div class="row mg-b-10">
                    <div class="col-6">
                        <small class="tx-black tx-14">FONO: </small>
                    </div>
                    <div class="col-6">
                        <small class="tx-black tx-14" id="celular2"></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 tx-center ht-100" style="border: solid 1px black">
                        <small class="tx-black tx-14">ÚLTIMA MANTENCIÓN: </small>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5 tx-center" style="border: solid 1px black">
                        <small class="tx-black tx-14">PRÓXIMA MANTENCIÓN: </small>
                    </div>
                </div>




                <!-- <div class="col-10">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Torre: </label>
                                            <input class="form-control" type="text" disabled name="mdlTorre" id="mdlTorre">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-12">
                                        <div class="justify-content-md-center" id="QRMAESTRA"></div>
                                    </div>
                                </div> -->

            </div>
            <div class="col-lg-4 tx-center mg-t-20" id="logoEmpresa">
                <img src="https://qrc.acbingenieria.cl/assets/img/logoqrc.png" id="imgLogoSet" alt="log" class="img-fluid mg-b-20" height="60%" width="60%">
                <div class="justify-content-md-center tx-center" id="QRMAESTRA"></div>
                <!-- <div class="col-10">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Torre: </label>
                                            <input class="form-control" type="text" disabled name="mdlTorre" id="mdlTorre">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-12">
                                        <div class="justify-content-md-center" id="QRMAESTRA"></div>
                                    </div>
                                </div> -->

            </div>
        </div>
    </div>
</body>
<?php $this->load->view('layouts/js'); ?>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>

</html>
<script>
    function generateQR(id, text) {
        let qr = new QRCode(document.getElementById(`${id}`), {
            text: text,
            width: 150,
            height: 150,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H,
        });
    }
    // listado();
    setDescriptionEtiqueta()
    function setDescriptionEtiqueta() {
        $.ajax({
            type:'POST',
            url: 'https://apiqrc.acbingenieria.cl/description_etiqueta',
            data:{mtr_id: <?= $eti_id; ?>},
            success: (data) =>{
                const {mtr_id,mtr_activo,mtr_descripcion,mtr_marca,mtr_modela,mtr_serie,mtr_mantencion,RESPONSABLE1,NUMERO1,RESPONSABLE2,NUMERO2,equ_nombre,mtr_clinica} = data[0]
                $("#eActivo").html(mtr_activo.toUpperCase());
                $("#eDescripcion").html(mtr_descripcion.toUpperCase());
                $("#eMarca").html(mtr_marca.toUpperCase());
                $("#eModelo").html(mtr_modela.toUpperCase());
                $("#eSerie").html(mtr_serie.toUpperCase());
                $("#eMantencion").html(mtr_mantencion.toUpperCase());
                $("#responsable1").html(RESPONSABLE1.toUpperCase());
                $("#celular1").html(NUMERO1.toUpperCase());
                $("#responsable2").html(RESPONSABLE2.toUpperCase());
                $("#celular2").html(NUMERO2.toUpperCase());
                mtr_clinica.toLowerCase() === 'cas' || mtr_clinica.toLowerCase() === 'mo'
                    ? document.getElementById('imgLogoSet').src = 'https://qrc.acbingenieria.cl/assets/img/logoqrc.png'
                    : document.getElementById('imgLogoSet').src = 'https://qrc.acbingenieria.cl/assets/img/logoqrc.png'
                mtr_clinica.toLowerCase() === 'cas' || mtr_clinica.toLowerCase() === 'mo'
                    ? document.getElementById('imgLogoSet').setAttribute('height','60%')
                    : document.getElementById('imgLogoSet').setAttribute('height','60%')
                mtr_clinica.toLowerCase() === 'cas' || mtr_clinica.toLowerCase() === 'mo'
                    ? document.getElementById('imgLogoSet').setAttribute('width','60%')
                    : document.getElementById('imgLogoSet').setAttribute('width','60%')
                generateQR("QRMAESTRA", `${mtr_id},${equ_nombre}`);

            }
        })
    }

    function listado() {
        $.ajax({
            type: "POST",
            url: base_url + "OTController/fn_listado_maestra",
            data: {
                mtr_id: <?= $eti_id; ?>,
                mtr_torre: '',
                mtr_edificio: '',
                mtr_descripcion: '',
                mtr_lugar: '',
                mtr_ubicacionf: '',
                mtr_criticidad: 0,
                mtr_clinica: '',
                mtr_turno: '',
                equ_nombre: '',
                mtr_activo: '',
                mtr_marca: '',
                mtr_modelo: '',
                mtr_serie: '',
            },
            success: (data) => {
                let json = JSON.parse(data);
                let html = ``;
                let count = 1;
                let total = 0;
                let acti = ``;
                let detalle = ``;
                let j = json[0];
                console.log(j.mtr_activo);
                $("#eActivo").html(j.mtr_activo.toUpperCase());
                $("#eDescripcion").html(j.mtr_descripcion.toUpperCase());
                $("#eMarca").html(j.mtr_marca.toUpperCase());
                $("#eModelo").html(j.mtr_modelo.toUpperCase());
                $("#eSerie").html(j.mtr_serie.toUpperCase());
                $("#eMantencion").html(j.mtr_mantencion.toUpperCase());
                $("#responsable1").html(j.per_nombre.toUpperCase());
                $("#celular1").html(j.per_celular.toUpperCase());
                j.mtr_cliente.toLowerCase() === 'cas' || j.mtr_cliente.toLowerCase() === 'mo'
                    ? document.getElementById('imgLogoSet').src = 'https://qrc.acbingenieria.cl/assets/img/logoqrc.png'
                    : document.getElementById('imgLogoSet').src = 'https://qrc.acbingenieria.cl/assets/img/logoqrc.png'
                j.mtr_cliente.toLowerCase() === 'cas' || j.mtr_cliente.toLowerCase() === 'mo'
                    ? document.getElementById('imgLogoSet').setAttribute('height','500px')
                    : document.getElementById('imgLogoSet').setAttribute('height','500px')
                j.mtr_cliente.toLowerCase() === 'cas' || j.mtr_cliente.toLowerCase() === 'mo'
                    ? document.getElementById('imgLogoSet').setAttribute('width','500px')
                    : document.getElementById('imgLogoSet').setAttribute('width','500px')
                generateQR("QRMAESTRA", `${j.mtr_id},${j.equ_nombre}`);
            },
        });
    }
</script>