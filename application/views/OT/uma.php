<!-- <link href="<?= asset_url(); ?>css/ot.css" rel="stylesheet">
<body>
  <div class="header-ot">
    <div class="left">
      <img src="https://qrc.acbingenieria.cl/assets/img/logoqrcn.svg" class="img-fluid" alt="logo-qrc">
    </div>
    <div class="center">
      <h2>ORDEN DE TRABAJO</h2>
    </div>
  </div>
</body>
</html> -->
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
        margin: 50px;
    }
    </style>
    <style>
    #QRMAESTRA>img {
        display: initial !important;

    }

    .table th,
    .table td {
        border-top: 0px;
        /* width: 100px; */
    }

    .style-tr {
        border-style: solid;
        width: 10%;
    }

    .a-td {
        width: 80px;
        height: 47px;
    }

    .tx-18 {
        font-size: 25px !important;
        padding-top: 5px !important;
    }

    .tx-14 {
        font-size: 20px !important;
    }

    .tx-999 {
        font-size: 18px !important;
    }

    .tx-12 {
        font-size: 14px !important;
    }

    .tx-13 {
        font-size: 15px !important;
    }

    .tx-17 {
        font-size: 23px !important;
    }

    .tx-16 {
        font-size: 20px !important;
    }

    #contentCheck>div {
        margin: auto
    }

    table#contentCheckTable {
        table-layout: fixed;
        width: 100%
    }

    table#contentCheckTable>tbody>tr>td {
        width: 103px;
        height: 68px;
    }

    #contentCheck>div {
        height: 60px
    }

    .hf-41 {
        height: 41px;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4" style="float:left">
                <img src="https://qrc.acbingenieria.cl/assets/img/logoqrcn.svg"
                    style="-webkit-filter: grayscale(100%);filter: grayscale(100%);" alt="log" class="img-fluid"
                    height="60%" width="60%">
            </div>
            <div class="col-4 tx-center mg-t-35">
                <h3 class="tx-bold tx-40 tx-black">ORDEN DE TRABAJO</h3>
            </div>
            <div class="col-2 tx-right">
                <h5 class="tx-12 tx-bold tx-black">

                </h5>
            </div>
        </div>
        <div class="row tx-black mg-t-50">
            <div class="row col-7">
                <div class="col-3 hf-41">
                    <h5 class="tx-18 tx-medium">Equipo</h5>
                </div>
                <div class="col-7 hf-41 tx-center bd-x-1 bd-y-1" style="border-style:solid">
                    <h5 class="tx-18 tx-center tx-medium" id="EQU"></h5>
                </div>
                <div class="col-3 hf-41">
                    <h5 class="tx-18 tx-medium">Ubicación</h5>
                </div>
                <div class="col-7 hf-41 tx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="UBI"></h5>
                </div>
                <div class="col-3 hf-41">
                    <h5 class="tx-18 tx-medium">Descripción</h5>
                </div>
                <div class="col-7 hf-41 tx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="DES"></h5>
                </div>
                <div class="col-3 hf-41">
                    <h5 class="tx-18 tx-medium">Marca</h5>
                </div>
                <div class="col-7 hf-41 tx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="MAR"></h5>
                </div>
                <div class="col-3 hf-41">
                    <h5 class="tx-18 tx-medium">Modelo</h5>
                </div>
                <div class="col-7 tx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="MOD"></h5>
                </div>
                <div class="col-3 hf-41">
                    <h5 class="tx-18 tx-medium">Serie</h5>
                </div>
                <div class="col-7 hf-41 tx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="SER"></h5>
                </div>
            </div>
            <div class="row col-5">

                <div class="col-5 hf-41">
                    <h5 class="tx-18 tx-medium">N° de Activo Fijo</h5>
                </div>
                <div class="col-7 hf-41 tx-center bd-x-1 bd-y-1" style="border-style:solid">
                    <h5 class="tx-18 tx-center tx-medium" id="ACT"></h5>
                </div>

                <div class="col-5 hf-41" style=">
          <h5 class=" tx-18 tx-medium">
                    </h5>
                </div>
                <div class="col-7 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium">&nbsp&nbsp&nbsp&nbsp</h5>
                </div>

                <div class="col-5 hf-41">
                    <h5 class="tx-18 tx-medium">N° OT</h5>
                </div>
                <div class="col-7 tx-center bd-x-1 bd-b-1 bd-t-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;border-top:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="NOT"></h5>
                </div>

                <div class="col-5 hf-41">
                    <h5 class="tx-18 tx-medium">Edificio</h5>
                </div>
                <div class="col-7 hf-41 tx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="EDI"></h5>
                </div>

                <div class="col-5 hf-41">
                    <h5 class="tx-18 tx-medium">Período de Ejecución</h5>
                </div>
                <div class="col-7 hf-41 tx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="MES"></h5>
                </div>

                <div class="col-5 hf-41">
                    <h5 class="tx-18 tx-medium">Área</h5>
                </div>
                <div class="col-7 hf-41 tx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium">Mantención</h5>
                </div>
            </div>
        </div>
        <!-- CHECK -->
        <div class="row tx-black mg-t-100 mg-b-70">
            <div class="row col-7">
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Limpieza serpentín de Agua Caliente</h5>
                </div>
                <div class="col-3 hf-41 tx-center bd-x-1 bd-y-1" style="border-style:solid">
                    <h5 class="tx-18 tx-center tx-medium" id="fan42"><i class="fas fa-check"></i></h5>
                </div>

                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Limpieza serpentín de Agua Fria</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan43"><i class="fas fa-check"></i></h5>
                </div>

                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Chequeo de correas</h5>
                </div>
                <div class="col-3 hf-41 tx-center bd-x-1 bd-y-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan41"><i class="fas fa-check"></i></h5>
                </div>

                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Alineación de poleas</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan42"><i class="fas fa-check"></i></h5>
                </div>

                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Cambio de correas</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan43"><i class="fas fa-check"></i></h5>
                </div>
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Chequeo y limpieza de termostato</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan47"><i class="fas fa-check"></i></h5>
                </div>
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Limpieza de difusores (rejilla de retorno si aplica)</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan48"><i class="fas fa-check"></i></h5>
                </div>
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Limpieza de sistema de condensado y desagüe</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan49"><i class="fas fa-check"></i></h5>
                </div>
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Reapriete de bornera de motores</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan57"><i class="fas fa-check"></i></h5>
                </div>
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Chequeo de válvulas</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan58"><i class="fas fa-check"></i></h5>
                </div>
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Chequeo de llaves de corte Agua Fría y Caliente</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan58"><i class="fas fa-check"></i></h5>
                </div>
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Revisión auditiva de rodamientos y vibraciones</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan58"><i class="fas fa-check"></i></h5>
                </div>
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Limpieza de motor eléctrico</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan58"><i class="fas fa-check"></i></h5>
                </div>
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Limpieza general del equipo</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan58"><i class="fas fa-check"></i></h5>
                </div>
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Lubricación de rodamientos</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan58"><i class="fas fa-check"></i></h5>
                </div>
                <div class="col-7 hf-41">
                    <h5 class="tx-18 tx-medium">Inspección de juntas, lonas y aislación</h5>
                </div>
                <div class="col-3 hf-41 tx-centertx-center bd-x-1 bd-b-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;">
                    <h5 class="tx-18 tx-center tx-medium" id="fan58"><i class="fas fa-check"></i></h5>
                </div>
            </div>
            <div class="row col-5">
                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>

                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>

                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>

                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>

                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>

                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>

                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>

                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>

                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>
                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>
                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>
                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 tx-center bd-x-1 bd-b-1 bd-t-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;border-top:1px solid;border-bottom">
                    <h5 class="tx-18 tx-center tx-medium">Chequeo de Temperaturas (°C)</h5>
                </div>

                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center tx-medium bd-x-1 bd-b-1 bd-t-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid">
                    <div class="row">
                        <div class="col-6 tx-center tx-medium tx-18 hf-41" style="border-right:solid 1px;">Frío</div>
                        <div class="col-6 tx-center tx-medium tx-18 hf-41" id="frio"></div>
                    </div>
                </div>
                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center tx-medium bd-x-1 bd-b-1 bd-t-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid">
                    <div class="row">
                        <div class="col-6 tx-center tx-medium tx-18 hf-41" style="border-right:solid 1px;">Calor</div>
                        <div class="col-6 tx-center tx-medium tx-18 hf-41" id="calor"></div>
                    </div>
                </div>

                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-8 hf-41 tx-center">
                    <h5 class="tx-18 tx-center tx-medium"></h5>
                </div>

                <div class="col-1 hf-41">
                    <h5 class="tx-18 tx-medium"></h5>
                </div>
                <div class="col-11 hf-41 tx-center tx-medium bd-x-1 bd-b-1 bd-t-1"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;border-top:1px solid">
                    <div class="row">
                        <div class="col-8 tx-center tx-medium tx-18 hf-41" style="border-right:solid 1px;">Medición de
                            Velocidad de Aire (m/s)</div>
                        <div class="col-4 tx-center tx-medium tx-18 hf-41" id="a1"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SEGUNDA ITEMS -->
        <div class="row tx-black mg-t-100 mg-b-70">
            <div class="row col-4">
                <div class="col-8 hf-41 tx-center bd-x-1 bd-b-1 bd-t-1"></div>
                <div class="col-8 hf-41 tx-center bd-x-1 bd-b-1 bd-t-1"></div>
                <div class="col-6 hf-41 tx-center bd-x-1 bd-b-1 bd-t-1"></div>
            </div>
            <div class="row col-8">
                <div class="col-1 tx-center hf-41"></div>
                <div class="col-1 tx-center hf-41"></div>
                <div class="col-1 tx-center hf-41"></div>
                <div class="col-9 tx-center hf-41"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;border-top:1px solid;border-bottom">
                    <h5 class="tx-18 tx-center tx-medium">Medición de Consumos Eléctricos (A)</h5>
                </div>
                <div class="col-1 tx-center tx-medium tx-18 hf-41"></div>
                <div class="col-1 tx-center tx-medium tx-18 hf-41">Trif</div>
                <div class="col-1 tx-center tx-medium tx-18 hf-41">Mono</div>
                <div class="col-9 tx-center hf-41"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;border-bottom">
                    <div class="row">
                        <div class="col-3 tx-center tx-medium tx-18 hf-41" style="border-right:solid 1px;">R</div>
                        <div class="col-3 tx-center tx-medium tx-18 hf-41" style="border-right:solid 1px;">S</div>
                        <div class="col-3 tx-center tx-medium tx-18 hf-41" style="border-right:solid 1px;">T</div>
                        <div class="col-3 tx-center tx-medium tx-18 hf-41">Nominal</div>
                    </div>
                </div>
                <div class="col-1 tx-center tx-medium tx-999 hf-41">Motor 1</div>
                <div class="col-1 tx-center tx-medium tx-18 hf-41" id="tri1" style="border:solid 1px"></div>
                <div class="col-1 tx-center tx-medium tx-18 hf-41" id="mono1"
                    style="border-top:solid 1px;border-bottom:solid 1px">
                </div>
                <div class="col-9 tx-center hf-41"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;border-bottom">
                    <div class="row">
                        <div class="col-3 tx-center tx-medium tx-18 hf-41" id="nom1" style="border-right:solid 1px;">
                        </div>
                        <div class="col-3 tx-center tx-medium tx-18 hf-41" id="nom2" style="border-right:solid 1px;">
                        </div>
                        <div class="col-3 tx-center tx-medium tx-18 hf-41" id="nom3" style="border-right:solid 1px;">
                        </div>
                        <div class="col-3 tx-center tx-medium tx-18 hf-41" id="nominal1"></div>
                    </div>
                </div>
                <div class="col-1 tx-center tx-medium tx-999 hf-41">Motor 2</div>
                <div class="col-1 tx-center tx-medium tx-18 hf-41" id="t2" style="border:solid 1px"></div>
                <div class="col-1 tx-center tx-medium tx-18 hf-41" id="m2"
                    style="border-top:solid 1px;border-bottom:solid 1px">
                </div>
                <div class="col-9 tx-center hf-41"
                    style="border-left:solid 1px;border-right:solid 1px;border-bottom:1px solid;border-bottom">
                    <div class="row">
                        <div class="col-3 tx-center tx-medium tx-18 hf-41" id="nom4" style="border-right:solid 1px;">
                        </div>
                        <div class="col-3 tx-center tx-medium tx-18 hf-41" id="nom5" style="border-right:solid 1px;">
                        </div>
                        <div class="col-3 tx-center tx-medium tx-18 hf-41" id="nom6" style="border-right:solid 1px;">
                        </div>
                        <div class="col-3 tx-center tx-medium tx-18 hf-41" id="nominal2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- OBSERVACIÓN -->
        <div class="row tx-black mg-t-100 mg-b-70">
            <div class="row col-12">
                <div class="col-12 hf-41" style="border: solid 1px;">
                    <h5 class="tx-18 tx-bold">Observaciones: <span class="tx-medium" style="padding-left:85px">Se
                            realiza
                            mantención preventiva</span></h5>
                </div>
                <div class="col-12"
                    style="border-left: solid 1px;border-bottom: solid 1px; border-right:solid 1px;height:120px"></div>
            </div>
        </div>
        <!-- FECHA MANTENCION -->
        <div class="row tx-black mg-t-50">
            <div class="row col-3">
                <div class="col-12 hf-41" style="border-bottom:1px solid">
                    <h5 class="tx-18 tx-medium" style="padding-bottom:10px">Fecha Mantención:
                        <span id="FECHA" style="padding-left:30px"></span>
                    </h5>
                </div>
            </div>
        </div>
        <!-- TÉCNICOS -->
        <div class="row tx-black mg-t-50">
            <div class="row col-3">
                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium">Técnico 1</h5>
                </div>
                <div class="col-8 hf-41 tx-center bd-x-1 bd-y-1" style="border-style:solid">
                    <h5 class="tx-18 tx-center tx-medium" id="TEC1"></h5>
                </div>
                <div class="col-4 hf-41">
                    <h5 class="tx-18 tx-medium">Técnico 2</h5>
                </div>
                <div class="col-8 hf-41 tx-center bd-x-1 "
                    style="border-style:solid;border-bottom:1px solid; border-top: 0px">
                    <h5 class="tx-18 tx-center tx-medium" id="TEC2"></h5>
                </div>
            </div>
        </div>
        <!-- FIRMAS -->
        <div class="row tx-black" style="margin-top:100px">
            <div class="col-4">
                <div class="mg-t-20">
                    <h5 class="tx-18 tx-center tx-bold" style="border-bottom:solid 1px" id="imgFIRMAT"></h5>
                    <h5 class="tx-center tx-18">Firma Técnico</h5>
                </div>
            </div>
            <div class="col-4">
                <div class="mg-t-20">
                    <h5 class="tx-18 tx-center tx-bold" style="border-bottom:solid 1px" id="imgFIRMAS"></h5>
                    <h5 class="tx-center tx-18">V° B° Supervisor QR Cleaner Ingeniería</h5>
                </div>
            </div>
            <div class="col-4">
                <div class="mg-t-20">
                    <h5 class="tx-18 tx-center tx-bold" style="border-bottom:solid 1px" id="imgFIRMAC"></h5>
                    <h5 class="tx-center tx-18">V° B° Responsable Clínica</h5>
                </div>
            </div>
        </div>
    </div>
</body>
<?php $this->load->view('layouts/js'); ?>
<script>
let idOT = <?= $ot; ?>;
GetDataOT(idOT);
GetChecklist(idOT);

function GetDataOT(idOT) {
    $.ajax({
        type: 'POST',
        url: base_url + "OTController/pdf_ot_detalle",
        data: {
            ot_id: idOT
        },
        success: data => {
            let json = JSON.parse(data);
            console.log(json)
            const {
                equ_nombre,
                mtr_ubicacionf,
                mtr_descripcion,
                mtr_marca,
                mtr_modela,
                mtr_serie,
                mtr_activo,
                ot_id,
                man_fecha,
                mtr_num,
                mtr_edificio,
                fecha,
                tecnico,
                ayudante,
                tecnico_firma,
                firma_s,
                calor,
                frio,
                a1,
                b1,
                mm1,
                mtr_motor1,
                mtr_motor2,
                mtr_motor3,
                mtr_motor4,
                nom11,
                nom12,
                nom13,
                nom21,
                nom22,
                nom23,
                nom31,
                nom32,
                nom33,
                t1,
                m1,
                t2,
                m2
            } = json[0];

            $("#EQU").html(equ_nombre);
            $("#UBI").html(mtr_ubicacionf);
            $("#DES").html(mtr_descripcion);
            $("#MAR").html(mtr_marca);
            $("#MOD").html(mtr_modela);
            $("#SER").html(mtr_serie);
            $("#ACT").html(mtr_activo);
            $("#NOT").html(ot_id);
            $("#CORR").html(mtr_num);
            $("#EDI").html(mtr_edificio);
            $("#MES").html(GetEjecucion(man_fecha));
            $("#FECHA").html(moment(fecha).format('DD-MM-YYYY'));
            $("#TEC1").html(tecnico);
            $("#TEC2").html(ayudante);
            $("#calor").html(parseFloat(calor));
            $("#frio").html(parseFloat(frio));
            $("#aireM").html(parseFloat(mm1));
            $("#aireB").html(parseFloat(b1));
            if (m1 > 0) {
                $("#mono1").html('<i class="fas fa-check"></i>');
            }
            if (t1 > 0) {
                $("#tri1").html('<i class="fas fa-check"></i>');
            }
            if (m2 > 0) {
                $("#m2").html('<i class="fas fa-check"></i>');
            }
            if (t2 > 0) {
                $("#t2").html('<i class="fas fa-check"></i>');
            }
            //AIRE
            if (a1 > 0) {
                $("#a1").html(parseFloat(a1));
            }

            // MOTORES A|M|B
            // 1
            if (parseFloat(nom11) > 0) {
                $("#nom1").html(parseFloat(nom11))
            };
            if (parseFloat(nom12) > 0) {
                $("#nom2").html(parseFloat(nom12))
            };
            if (parseFloat(nom13) > 0) {
                $("#nom3").html(parseFloat(nom13))
            };
            // 2
            if (parseFloat(nom21) > 0) {
                $("#nom4").html(parseFloat(nom21))
            };
            if (parseFloat(nom22) > 0) {
                $("#nom5").html(parseFloat(nom22))
            };
            if (parseFloat(nom23) > 0) {
                $("#nom6").html(parseFloat(nom23))
            };
            // 3
            if (parseFloat(nom31) > 0) {
                $("#nom7").html(parseFloat(nom31))
            };
            if (parseFloat(nom32) > 0) {
                $("#nom8").html(parseFloat(nom32))
            };
            if (parseFloat(nom33) > 0) {
                $("#nom9").html(parseFloat(nom33))
            };

            // NOMINAL
            if (parseFloat(mtr_motor1) > 0) {
                $("#nominal1").html(parseFloat(mtr_motor1))
            };
            if (parseFloat(mtr_motor2) > 0) {
                $("#nominal2").html(parseFloat(mtr_motor2))
            };
            if (parseFloat(mtr_motor3) > 0) {
                $("#nominal3").html(parseFloat(mtr_motor3))
            };

            // FIRMAS
            $("#imgFIRMAT").html(
                `<img src="https://qrc.acbingenieria.cl/assets/firmas/${tecnico_firma}" class="mg-b-5" alt="log" class="img-fluid" height="300px" width="400px">`
            )
            $("#imgFIRMAS").html(
                `<img src="https://qrc.acbingenieria.cl/assets/firmas/${firma_s}" class="mg-b-5" alt="log" class="img-fluid" height="300px" width="400px">`
            )
            $("#imgFIRMAC").html(
                `<img src="https://qrc.acbingenieria.cl/assets/firmas/white-img.png" class="mg-b-5" alt="log" class="img-fluid" height="300px" width="400px">`
            )
        }
    })
}

function GetChecklist(idOT) {
    $.ajax({
        type: 'POST',
        url: base_url + "OTController/pdf_ot_checklist",
        data: {
            ot_id: idOT
        },
        success: data => {
            let json = JSON.parse(data);
            json.map(d => {
                if (d.mand_activo == 0) {
                    value = 'N/A'
                } else {
                    value = '<i class="fas fa-check"></i>';
                }
                // $(`#fan${d.chk_id}`).html(value);
            })
        }
    })
}

function GetEjecucion(man_fecha) {
    let mess = '';
    if (moment(man_fecha).format("MMMM") === 'January') {
        mess = 'Enero, ' + moment(man_fecha).format("YYYY");
    }
    if (moment(man_fecha).format("MMMM") === 'February') {
        mess = 'Febrero, ' + moment(man_fecha).format("YYYY");
    }
    if (moment(man_fecha).format("MMMM") === 'March') {
        mess = 'Marzo, ' + moment(man_fecha).format("YYYY");
    }
    if (moment(man_fecha).format("MMMM") === 'April') {
        mess = 'Abril, ' + moment(man_fecha).format("YYYY");
    }
    if (moment(man_fecha).format("MMMM") === 'May') {
        mess = 'Mayo, ' + moment(man_fecha).format("YYYY");
    }
    if (moment(man_fecha).format("MMMM") === 'June') {
        mess = 'Junio, ' + moment(man_fecha).format("YYYY");
    }
    if (moment(man_fecha).format("MMMM") === 'July') {
        mess = 'Julio, ' + moment(man_fecha).format("YYYY");
    }
    if (moment(man_fecha).format("MMMM") === 'August') {
        mess = 'Agosto, ' + moment(man_fecha).format("YYYY");
    }
    if (moment(man_fecha).format("MMMM") === 'September') {
        mess = 'Septiembre, ' + moment(man_fecha).format("YYYY");
    }
    if (moment(man_fecha).format("MMMM") === 'October') {
        mess = 'Octubre, ' + moment(man_fecha).format("YYYY");
    }
    if (moment(man_fecha).format("MMMM") === 'November') {
        mess = 'Noviembre, ' + moment(man_fecha).format("YYYY");
    }
    if (moment(man_fecha).format("MMMM") === 'December') {
        mess = 'Diciembre, ' + moment(man_fecha).format("YYYY");
    }
    return mess;
}
</script>