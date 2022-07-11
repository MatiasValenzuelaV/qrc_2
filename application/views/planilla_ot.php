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
            font-size: 28px !important;
        }

        .tx-14 {
            font-size: 20px !important;
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
        #contentCheck > div {
            margin:auto
        }
        table#contentCheckTable{
            table-layout:fixed;
            width:100%
        }
        table#contentCheckTable > tbody > tr > td {
            width:103px;
            height:68px;
        }

        #contentCheck > div {
            height:60px
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4" style="float:left">
                <img src="https://qrc.acbingenieria.cl/assets/img/logoqrcn.svg" style="-webkit-filter: grayscale(100%);filter: grayscale(100%);" alt="log" class="img-fluid" height="60%" width="60%">
            </div>
            <div class="col-4 tx-center mg-t-35">
                <h3 class="tx-bold tx-40 tx-black">ORDEN DE TRABAJO</h3>
            </div>
            <div class="col-2 tx-right">
                <h5 class="tx-12 tx-bold tx-black">

                </h5>
            </div>
            <div class="col-2 tx-left d-none" id="contentNumOT">
                <h5 class="tx-36 tx-bold tx-black tx-center" id="numOT" style="border:solid 2px">
                    N° 84
                </h5>
            </div> 
        </div>
        <div class="row tx-black mg-t-20" style="border:solid 2px">
            <div class="row col-5 mg-20">
                <div class="col-4">
                    <h5 class="tx-18 tx-bold">Equipo:</h5>
                </div>
                <div class="col-8 tx-center" style="border:solid 1px">
                    <h5 class="tx-18 tx-center tx-bold" id="EQU">Unidad Manejadora de Aire</h5>
                </div>
                <div class="col-4">
                    <h5 class="tx-18 tx-bold">Ubicación:</h5>
                </div>
                <div class="col-8 tx-center" style="border:solid 1px">
                    <h5 class="tx-18 tx-center tx-bold" id="UBI">Sector Anillo P6°Clinica</h5>
                </div>
                <div class="col-4">
                    <h5 class="tx-18 tx-bold">Descripción:</h5>
                </div>
                <div class="col-8 tx-center" style="border:solid 1px">
                    <h5 class="tx-18 tx-center tx-bold" id="DES">Uma 02 Pabellón N°13</h5>
                </div>
                <div class="col-4">
                    <h5 class="tx-18 tx-bold">Marca:</h5>
                </div>
                <div class="col-8 tx-center" style="border:solid 1px">
                    <h5 class="tx-18 tx-center tx-bold" id="MAR">INTERCAL</h5>
                </div>
                <div class="col-4">
                    <h5 class="tx-18 tx-bold">Modelo:</h5>
                </div>
                <div class="col-8 tx-center" style="border:solid 1px">
                    <h5 class="tx-18 tx-center tx-bold" id="MOD">MA03-28-21-23-0-H</h5>
                </div>
                <div class="col-4">
                    <h5 class="tx-18 tx-bold">Serie:</h5>
                </div>
                <div class="col-8 tx-center" style="border:solid 1px">
                    <h5 class="tx-18 tx-center tx-bold" id="SER">10860.1.1.1</h5>
                </div>
            </div>
            <div class="row col-5 mg-20">
                <div class="col-4">
                    <h5 class="tx-18 tx-bold">N° De Activo:</h5>
                </div>
                <div class="col-8 tx-center" style="border:solid 1px">
                    <h5 class="tx-18 tx-center tx-bold" id="ACT">50-2813-1</h5>
                </div>

                <div class="col-4">
                    <h5 class="tx-18 tx-bold"></h5>
                </div>
                <div class="col-8 tx-center">
                    <h5 class="tx-18 tx-center tx-bold">&nbsp&nbsp&nbsp</h5>
                </div>

                <div class="col-4">
                    <h5 class="tx-18 tx-bold">Cliente:</h5>
                </div>
                <div class="col-8 tx-center" style="border:solid 1px">
                    <h5 class="tx-18 tx-center tx-bold" id="CLI">CAS</h5>
                </div>

                <div class="col-4">
                    <h5 class="tx-18 tx-bold">Periodo Ejecución</h5>
                </div>
                <div class="col-8 tx-center" style="border:solid 1px;padding-bottom:3px">
                    <h5 class="tx-18 tx-center tx-bold" id="mes">Abril, 2021</h5>
                </div>

                <div class="col-4">
                    <h5 class="tx-18 tx-bold">Area</h5>
                </div>
                <div class="col-8 tx-center" style="border:solid 1px">
                    <h5 class="tx-18 tx-center tx-bold"></h5>
                </div>

                <div class="col-4">
                    <h5 class="tx-18 tx-bold">Mantención preventiva</h5>
                </div>
                <div class="col-8 tx-center" style="border:solid 1px">
                    <h5 class="tx-20 tx-center tx-bold"><i class="fas fa-check"></i></h5>
                </div>
            </div>
        </div>
        <div class="row tx-black mg-t-20" style="border:solid 2px">
            <div class="row col-5 mg-t-60" id="contentCheck">
                <div class="col-12 tx-16 tx-black"></div>
                <div class="col-12 tx-16 tx-black">LIMPIEZA DE FILTROS</div>
                <div class="col-12 tx-16 tx-black">LIMPIEZA SERPENTIN AGUA CALIENTE</div>
                <div class="col-12 tx-16 tx-black">LIMPIEZA</div>
                <div class="col-12">SSS</div>
            </div>
            <!-- <div class="row col-6">
                <div class="col-1 tx-bold tx-14">Vrv</div>
                <div class="col-1 tx-bold tx-14">Fan Coil</div>
                <div class="col-1 tx-bold tx-14">VEX</div>
                <div class="col-1 tx-bold tx-14">Compacto</div>
                <div class="col-1 tx-bold tx-14">Split</div>
                <div class="col-1 tx-bold tx-14">Ventana</div>
                <div class="col-1 tx-bold tx-14">UMA</div>
                <div class="col-1 tx-bold tx-14">Mini Split</div>
                <div class="col-1 tx-bold tx-14">Chiller</div>
            </div> -->
            <div class="row col-7">
                <table class="table" id="contentCheckTable">
                    <thead class="">
                        <tr>
                            <th class="tx-center tx-16" style="height:62.5px">Vrv</th>
                            <th class="tx-center tx-16" style="height:62.5px">Fan Coil</th>
                            <th class="tx-center tx-16" style="height:62.5px">VEX</th>
                            <th class="tx-center tx-16" style="height:62.5px">Compacto</th>
                            <th class="tx-center tx-16" style="height:62.5px">Split</th>
                            <th class="tx-center tx-16" style="height:62.5px">Ventana</th>
                            <th class="tx-center tx-16" style="height:62.5px">UMA</th>
                            <th class="tx-center tx-16" style="height:62.5px">M. Split</th>
                            <th class="tx-center tx-16" style="height:62.5px">Chiller</th>
                            <th class="tx-center tx-16" style="height:62.5px">Cortina</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tx-center a-td tx-18" id="vrv41" style="border:solid 1px;width:62.5px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan41" style="border:solid 1px;width:62.5px"></td>
                            <td class="tx-center a-td tx-18" id="vex41"></td>
                            <td class="tx-center a-td tx-18" id="com41" style="border:solid 1px;width:62.5px"></td>
                            <td class="tx-center a-td tx-18" id="split41" style="border:solid 1px;width:62.5px"></td>
                            <td class="tx-center a-td tx-18" id="ven41" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="uma41" style="border:solid 1px" id="uma41"></td>
                            <td class="tx-center a-td tx-18" id="msplit41" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="chiller41"></td>
                            <td class="tx-center a-td tx-18" id="cortina41"></td>
                        </tr>
                        <tr>
                            <td class="tx-center a-td tx-18" id="vrv42"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan42" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="vex42"></td>
                            <td class="tx-center a-td tx-18" id="com42"></td>
                            <td class="tx-center a-td tx-18" id="split42"></td>
                            <td class="tx-center a-td tx-18" id="ven42"></td>
                            <td class="tx-center a-td tx-18" id="uma42" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit42"></td>
                            <td class="tx-center a-td tx-18" id="chiller42"></td>
                            <td class="tx-center a-td tx-18" id="cortina42"></td>
                        </tr>
                        <tr>
                            <td id="vrv43"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan43" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="vex43"></td>
                            <td class="tx-center a-td tx-18" id="com43"></td>
                            <td class="tx-center a-td tx-18" id="split43"></td>
                            <td class="tx-center a-td tx-18" id="ven43"></td>
                            <td class="tx-center a-td tx-18" id="uma43" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit43"></td>
                            <td class="tx-center a-td tx-18" id="chiller43"></td>
                            <td class="tx-center a-td tx-18" id="cortina43"></td>
                        </tr>
                        <tr>
                            <td id="vrv44"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan44"></td>
                            <td class="tx-center a-td tx-18" id="vex44" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="com44" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split44"></td>
                            <td class="tx-center a-td tx-18" id="ven44"></td>
                            <td class="tx-center a-td tx-18" id="uma44" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit44"></td>
                            <td class="tx-center a-td tx-18" id="chiller44"></td>
                            <td class="tx-center a-td tx-18" id="cortina44" style="border:solid 1px"></td>
                        </tr>
                        <tr>
                            <td id="vrv45"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan45"></td>
                            <td class="tx-center a-td tx-18" id="vex45" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="com45" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split45"></td>
                            <td class="tx-center a-td tx-18" id="ven45"></td>
                            <td class="tx-center a-td tx-18" id="uma45" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit45"></td>
                            <td class="tx-center a-td tx-18" id="chiller45"></td>
                            <td class="tx-center a-td tx-18" id="cortina45" style="border:solid 1px"></td>
                        </tr>
                        <tr>
                            <td id="vrv46" class="tx-center a-td tx-18"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan46"></td>
                            <td class="tx-center a-td tx-18" id="vex46" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="com46" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split46"></td>
                            <td class="tx-center a-td tx-18" id="ven46"></td>
                            <td class="tx-center a-td tx-18" id="uma46" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit46"></td>
                            <td class="tx-center a-td tx-18" id="chiller46"></td>
                            <td class="tx-center a-td tx-18" id="cortina46" style="border:solid 1px"></td>
                        </tr>
                        <tr>
                            <td id="vrv47" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan47" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="vex47" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="com47"></td>
                            <td class="tx-center a-td tx-18" id="split47"></td>
                            <td class="tx-center a-td tx-18" id="ven47"></td>
                            <td class="tx-center a-td tx-18" id="uma47"></td>
                            <td class="tx-center a-td tx-18" id="msplit47"></td>
                            <td class="tx-center a-td tx-18" id="chiller47"></td>
                            <td class="tx-center a-td tx-18" id="cortina47" style="border:solid 1px"></td>
                        </tr>
                        <tr>
                            <td id="vrv48" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan48" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="vex48"></td>
                            <td class="tx-center a-td tx-18" id="com48" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split48" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="ven48"></td>
                            <td class="tx-center a-td tx-18" id="uma48" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit48" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="chiller48"></td>
                            <td class="tx-center a-td tx-18" id="cortina48"></td>
                        </tr>
                        <tr>
                            <td id="vrv49" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan49" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="vex49"></td>
                            <td class="tx-center a-td tx-18" id="com49" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split49" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="ven49"></td>
                            <td class="tx-center a-td tx-18" id="uma49" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit49"></td>
                            <td class="tx-center a-td tx-18" id="chiller49"></td>
                            <td class="tx-center a-td tx-18" id="cortina49"></td>
                        </tr>
                        <tr>
                            <td id="vrv50" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan50" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="vex50"></td>
                            <td class="tx-center a-td tx-18" id="com50" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split50" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="ven50" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="uma50" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit50" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="chiller50"></td>
                            <td class="tx-center a-td tx-18" id="cortina50"></td>
                        </tr>
                        <tr>
                            <td id="vrv51" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan51"></td>
                            <td class="tx-center a-td tx-18" id="vex51"></td>
                            <td class="tx-center a-td tx-18" id="com51" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split51" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="ven51" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="uma51"></td>
                            <td class="tx-center a-td tx-18" id="msplit51" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="chiller51" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="cortina51"></td>
                        </tr>
                        <tr>
                            <td id="vrv52" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan52"></td>
                            <td class="tx-center a-td tx-18" id="vex52"></td>
                            <td class="tx-center a-td tx-18" id="com52" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split52" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="ven52" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="uma52"></td>
                            <td class="tx-center a-td tx-18" id="msplit52" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="chiller52" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="cortina52"></td>
                        </tr>
                        <tr>
                            <td id="vrv53" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan53"></td>
                            <td class="tx-center a-td tx-18" id="vex53" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="com53" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split53" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="ven53" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="uma53"></td>
                            <td class="tx-center a-td tx-18" id="msplit53" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="chiller53" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="cortina53" style="border:solid 1px"></td>
                        </tr>
                        <tr>
                            <td id="vrv54" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan54" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="vex54" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="com54" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split54" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="ven54" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="uma54" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit54" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="chiller54" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="cortina54" style="border:solid 1px"></td>
                        </tr>
                        <tr>
                            <td id="vrv55" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan55" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="vex55" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="com55" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split55" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="ven55" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="uma55" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit55" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="chiller55" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="cortina55" style="border:solid 1px"></td>
                        </tr>
                        <tr>
                            <td id="vrv56" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan56" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="vex56" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="com56" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split56" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="ven56" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="uma56" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit56" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="chiller56" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="cortina56" style="border:solid 1px"></td>
                        </tr>
                        <tr>
                            <td id="vrv57" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan57" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="vex57" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="com57" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split57" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="ven57" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="uma57" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit57" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="chiller57" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="cortina57" style="border:solid 1px"></td>
                        </tr>
                        <tr>
                            <td id="vrv58" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold a-td tx-18" id="fan58" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="vex58" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="com58" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="split58" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="ven58" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="uma58" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="msplit58" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="chiller58" style="border:solid 1px"></td>
                            <td class="tx-center a-td tx-18" id="cortina58" style="border:solid 1px"></td>
                        </tr>
                        <tr>
                            <td id="vrv59" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td class="tx-center tx-bold tx-18" id="fan59" style="border:solid 1px"></td>
                            <td id="vex59" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td id="com59" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td id="split59" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td id="ven59" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td id="uma59" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td id="msplit59" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td id="chiller59" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                            <td id="cortina59" class="tx-center a-td tx-18" style="border:solid 1px"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row tx-black" style="border-bottom:solid 2px;border-left:solid 2px;border-right:solid 2px">
            <div class="row col-12">
                <div class="col-8">
                    <h5 class="mg-l-30 mg-t-10 tx-17 tx-bold">EQUIPOS</h5>
                </div>
                <div class="col-2 tx-17">
                    Presión
                </div>
                <div class="col-2 tx-17">
                    Temperatura
                </div>
            </div>
            <div class="row col-12 mg-b-30">
                <div class="col-7 mg-b-10" style="border-top:solid 2px;border-bottom:solid 2px;border-right:solid 2px">
                    <div class="row">
                        <div class="col-3 tx-center" style="border-right:solid 2px">
                            <h5 class="tx-center mg-t-100 tx-18">CHILLER</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17 mg-b-30">CHEQUEO DE PRESION Y TEMPERATURA AGUA</h5>
                            <div class="">&nbsp&nbsp&nbsp</div>
                            <h5 class="tx-17">MEDICIONES DE CONSUMO VENT. CONDENSADOR 1</h5>
                            <h5 class="tx-17">MEDICIONES DE CONSUMO VENT. CONDENSADOR 2</h5>
                            <h5 class="tx-17">MEDICIONES DE CONSUMO COMPRESOR 1</h5>
                            <h5 class="tx-17">MEDICIONES DE CONSUMO COMPRESOR 2</h5>
                            <h5 class="tx-17">MEDICIONES DE CONSUMO BOMBA DE AGUA</h5>
                            <h5 class="tx-17">PRESION DE REGRIGERANTE COMPRESOR 1 (si procede)</h5>
                            <h5 class="tx-17">PRESION DE REGRIGERANTE COMPRESOR 2 (si procede)</h5>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mg-b-30">&nbsp&nbsp&nbsp</div>
                                    <h5 class="tx-17 tx-center">Trif</h5>
                                    <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                                    <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                                    <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                                    <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                                    <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                                </div>
                                <div class="col-6">
                                    <div class="mg-b-30">&nbsp&nbsp&nbsp</div>
                                    <h5 class="tx-17 tx-center">Mono</h5>
                                    <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                                    <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                                    <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                                    <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                                    <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-3">
                            <h5 class="tx-17 tx-center">Entrada</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17 tx-center">R</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17 tx-center">Baja</h5>
                            <h5 class="tx-17 tx-center">Baja</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="tx-17 tx-center">Salida</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17 tx-center">S</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="tx-17 tx-center">Entrada</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17 tx-center">T</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17 tx-center">Alta</h5>
                            <h5 class="tx-17 tx-center">Alta</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="tx-17 tx-center">Salida</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17 tx-center">Nom.</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17" style="border:solid 1px">&nbsp</h5>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="tx-17 tx-center">PSI/°C</h5>
                            <div class="mg-b-50">&nbsp&nbsp&nbsp</div>
                            <h5 class="tx-17 tx-center" style="padding-top:2px">Amp</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:2px">Amp</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:2px">Amp</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:2px">Amp</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:2px">Amp</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:2px">PSI/°</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:2px">PSI/°</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-5">
                    <h5 class="mg-l-30 mg-t-10 tx-17 tx-bold"></h5>
                </div>
                <div class="col-1 tx-center tx-17">
                    Trif
                </div>
                <div class="col-1 tx-center tx-17">
                    Mono
                </div>
                <div class="col-1 tx-center tx-17">
                    R
                </div>
                <div class="col-1 tx-center tx-17">
                    S
                </div>
                <div class="col-1 tx-center tx-17">
                    T
                </div>
                <div class="col-1 tx-center tx-17">
                    Nom
                </div>
            </div>
            <div class="row col-12 mg-b-30">
                <div class="col-7 mg-b-10" style="border-top:solid 2px;border-bottom:solid 2px;border-right:solid 2px">
                    <div class="row">
                        <div class="col-1" style="border-bottom:solid 2px;border-right:solid 2px" id="1329">
                        </div>
                        <div class="col-2" style="border-bottom:solid 2px;border-right:solid 2px">
                            <h5 class="tx-17">M.Split</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17">MEDICIONES DE CONSUMO VENT.EXTERIOR</h5>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="tx-18 tx-bold tx-center" id="1t1" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;">&nbsp</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="tx-18 tx-bold tx-center" id="1m1" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;">&nbsp</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="border-bottom:solid 2px;border-right:solid 2px" id="1328">
                        </div>
                        <div class="col-2" style="border-bottom:solid 2px;border-right:solid 2px">
                            <h5 class="tx-17">Split</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17">MEDICIONES DE CONSUMO VENT.INTERIOR</h5>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="tx-18 tx-bold tx-center" id="1t2" style="border:solid 1px;">&nbsp</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="tx-18 tx-bold tx-center" id="1m2" style="border:solid 1px;">&nbsp</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="border-bottom:solid 2px;border-right:solid 2px" id="1335">
                        </div>
                        <div class="col-2" style="border-bottom:solid 2px;border-right:solid 2px">
                            <h5 class="tx-17">Comp</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17">MEDICIONES DE CONSUMO COMPRESOR</h5>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="tx-18 tx-bold tx-center" id="1t3" style="border:solid 1px;">&nbsp</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="tx-18 tx-bold tx-center" id="1m3" style="border:solid 1px;">&nbsp</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="border-bottom:solid 2px;border-right:solid 2px" id="1332">
                        </div>
                        <div class="col-2" style="border-bottom:solid 2px;border-right:solid 2px">
                            <h5 class="tx-17">Ventana</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17">PRESION DE REFRIGERANTE (si procede)</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="border-bottom:solid 2px;border-right:solid 2px" id="1331">
                        </div>
                        <div class="col-2" style="border-bottom:solid 2px;border-right:solid 2px">
                            <h5 class="tx-17">Vrv</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17"></h5>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-1" style="border-right:solid 2px" id="13399">
                        </div>
                        <div class="col-2" style="border-right:solid 2px">
                            <h5 class="tx-17">Vrv UI</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17">CHEQUEO DE TEMPERATURAS DE INYECCIÓN</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-3">
                            <h5 class="tx-18 tx-bold tx-center" id="1nom11" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1nom21" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1nom31" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17 tx-bold tx-center" style="padding-top:3px">Baja</h5>
                            <h5 class="tx-17 tx-bold tx-center" style="padding-top:4px">Frío</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1frio" style="border:solid 1px">&nbsp</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="tx-18 tx-bold tx-center" id="1nom12" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1nom22" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1nom32" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1baja" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17 tx-bold tx-center">Calor</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1calor" style="border:solid 1px">&nbsp</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="tx-18 tx-bold tx-center" id="1nom13" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1nom23" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1nom33" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-17 tx-bold tx-center" style="padding-top:5px">Alta</h5>
                            <h5 class="tx-17 tx-bold tx-center">&nbsp&nbsp</h5>
                            <h5 class="tx-17 tx-bold tx-center" style="padding-top:6px">Cº</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="tx-18 tx-bold tx-center" id="1motor1" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1motor2" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1motor3" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center" id="1alta" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center">&nbsp&nbsp</h5>
                            <h5 class="tx-18 tx-bold tx-center">&nbsp&nbsp</h5>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="tx-17 tx-center" style="padding-top:1px">Amp</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:8px">Amp</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:8px">Amp</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:8px">PSI/°G</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-5">
                    <h5 class="mg-l-30 mg-t-10 tx-17 tx-bold"></h5>
                </div>
                <div class="col-1 tx-center tx-17">
                    Trif
                </div>
                <div class="col-1 tx-center tx-17">
                    Mono
                </div>
                <div class="col-1 tx-center tx-17">
                    R
                </div>
                <div class="col-1 tx-center tx-17">
                    S
                </div>
                <div class="col-1 tx-center tx-17">
                    T
                </div>
                <div class="col-1 tx-center tx-17">
                    Nom
                </div>
            </div>
            <div class="row col-12">
                <div class="col-7 mg-b-10" style="border-top:solid 2px;border-bottom:solid 2px;border-right:solid 2px">
                    <div class="row">
                        <div class="col-1" style="border-bottom:solid 2px;border-right:solid 2px" id="1338">
                        </div>
                        <div class="col-2" style="border-bottom:solid 2px;border-right:solid 2px">
                            <h5 class="tx-17">Uma</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17">MEDICIONES DE CONSUMO ELECTRICO MOTOR 1<h5>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="tx-18 tx-center tx-bold" id="2t1" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;">&nbsp</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="tx-18 tx-center tx-bold" id="2m1" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;">&nbsp</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="border-bottom:solid 2px;border-right:solid 2px">
                        </div>
                        <div class="col-2" style="border-bottom:solid 2px;border-right:solid 2px">
                            <h5 class="tx-17"></h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17">MEDICIONES DE CONSUMO ELECTRICO MOTOR 2</h5>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="tx-17 tx-center tx-bold" id="2t2" style="border:solid 1px">&nbsp</h5>
                                </div>
                                <div class="col-6">
                                    <h5 class="tx-17 tx-center tx-bold" id="2m2" style="border:solid 1px">&nbsp</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="border-bottom:solid 2px;border-right:solid 2px" id="1327">
                        </div>
                        <div class="col-2" style="border-bottom:solid 2px;border-right:solid 2px">
                            <h5 class="tx-17">Fan Coil</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17">MEDICIONES DE VELOCIDAD DEL AIRE (mts/seg)</h5>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-1" style="border-bottom:solid 2px;border-right:solid 2px" id="1333">
                        </div>
                        <div class="col-2" style="border-bottom:solid 2px;border-right:solid 2px">
                            <h5 class="tx-17">Vex / Vin</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17">TEMPERATURA CARCASA MOTOR (Fancoil)</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1" style="border-bottom:solid 2px;border-right:solid 2px" id="1334">
                        </div>
                        <div class="col-2" style="border-bottom:solid 2px;border-right:solid 2px">
                            <h5 class="tx-17">Cortina de aire</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="tx-17">CHEQUEO DE TEMPERATURAS DE INYECCIÓN</h5>
                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-3">
                            <h5 class="tx-18 tx-center" id="2nom11" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-center" id="2nom21" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-center" id="a1" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-center" id="carcasa" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-center" id="2frio" style="border:solid 1px">&nbsp</h5>
                            <!-- <h5 class="tx-13 tx-center">Baja</h5>
                            <h5 class="tx-13 tx-center">Frío</h5>
                            <h5 class="tx-13" style="border:solid 1px">&nbsp</h5> -->
                        </div>
                        <div class="col-3">
                            <h5 class="tx-18 tx-center" id="2nom12" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-center" id="2nom22" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-center" id="mm1" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-center">&nbsp&nbsp&nbsp</h5>
                            <h5 class="tx-18 tx-center" id="2calor" style="border:solid 1px">&nbsp</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="tx-18 tx-center" id="2nom13" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-center" id="2nom23" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-center" id="b1" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-center">&nbsp&nbsp&nbsp</h5>
                            <h5 class="tx-16 tx-center" style="padding-top:5px">Frío/Calor</h5>
                        </div>
                        <div class="col-3">
                            <h5 class="tx-18 tx-center" id="2motor1" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-18 tx-center" id="2motor2" style="border:solid 1px">&nbsp</h5>
                            <h5 class="tx-16 tx-center" style="padding-top:5px">A/M/B</h5>
                            <h5 class="tx-18 tx-center">&nbsp&nbsp</h5>
                            <h5 class="tx-18 tx-center">&nbsp&nbsp</h5>
                            <h5 class="tx-18 tx-center">&nbsp&nbsp</h5>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="tx-17 tx-center">Amp</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:12px">Amp</h5>
                            <h5 class="tx-17 tx-center">&nbsp&nbsp</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:12px">°C</h5>
                            <h5 class="tx-17 tx-center" style="padding-top:5px">°C</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row tx-black" style="border-bottom:solid 2px;border-left:solid 2px;border-right:solid 2px">
            <div class="mg-t-20"></div>
        </div>
        <div class="row tx-black" style="border-bottom:solid 2px;border-left:solid 2px;border-right:solid 2px">
            <h5 class="mg-l-30 tx-18">Observaciones:</h5>
            <div class="col-12 mg-20">
                <div class="tx-center">
                    <h4>SE REALIZA MANTENCIÓN PREVENTIVA</h4>
                </div>
            </div>
        </div>
        <div class="row tx-black" style="border-bottom:solid 2px;border-left:solid 2px;border-right:solid 2px">
            <div class="row col-12">
                <div class="col-2">
                    <div class="mg-t-20">
                        <h5 class="tx-18">Fecha Inicio:</h5>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mg-t-20">
                        <h5 class="tx-18 tx-center tx-bold" style="border-bottom:solid 2px" id="fechaMan">04-02-2021</h5>
                    </div>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-2">
                    <div class="mg-t-20">
                        <h5 class="tx-18">Técnico 1:</h5>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mg-t-20">
                        <h5 class="tx-18 tx-center tx-bold" style="border-bottom:solid 2px" id="tecnico">MIGUEL ANGEL DELGADO GOMEZ</h5>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mg-t-20">
                        <h5 class="tx-18">Técnico 2:</h5>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mg-t-20">
                        <h5 class="tx-18 tx-center tx-bold" style="border-bottom:solid 2px" id="ayudante">YOHANSSON HENRRITO ALVARES</h5>
                    </div>
                </div>
            </div>
            <div class="row col-12 mg-t-50">
                <div class="col-4">
                    <div class="mg-t-20">
                        <h5 class="tx-18 tx-center tx-bold" style="border-bottom:solid 2px" id="imgFIRMAT"></h5>
                        <h5 class="tx-center tx-18">Firma Técnico</h5>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mg-t-20">
                        <h5 class="tx-18 tx-center tx-bold" style="border-bottom:solid 2px" id="imgFIRMAS"></h5>
                        <h5 class="tx-center tx-18">V° B° Supervisor QR Cleaner Ingeniería</h5>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mg-t-20">
                        <h5 class="tx-18 tx-center tx-bold" style="border-bottom:solid 2px" id="imgFIRMAC"></h5>
                        <h5 class="tx-center tx-18">V° B° Responsable Clínica</h5>
                    </div>
                </div>
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
    listado();

    function listado() {
        $.ajax({
            type: "POST",
            url: base_url + "OTController/pdf_ot_detalle",
            data: {
                ot_id: <?= $ot_id; ?>
            },
            success: (data) => {
                let json = JSON.parse(data);
                let t1, t2, m1, m2, mess = ``;
                let nom1, nom2
                if(json[0].equ_nombre == 'Fan Coil'){
                    $("#contentNumOT").removeClass('d-none')
                    $("#numOT").html(`Nº ${json[0].mtr_num}`);
                }else{
                    $("#contentNumOT").addClass('d-none')
                    $("#numOT").html('');
                }
                $("#EQU").html(json[0].equ_nombre);
                $("#UBI").html(json[0].mtr_ubicacionf)
                $("#DES").html(json[0].mtr_descripcion)
                $("#MAR").html(json[0].mtr_marca)
                $("#MOD").html(json[0].mtr_modela)
                $("#SER").html(json[0].mtr_serie)
                $("#ACT").html(json[0].mtr_activo)
                $("#CLI").html(json[0].mtr_clinica)
                value_checklist(json[0].equ_nombre)
                console.log({nombre:json[0].equ_nombre})
                if (json[0].equ_nombre === 'Fan Coil' || json[0].equ_nombre === 'Ventilador Extractor De Aire' || json[0].equ_nombre === 'Ventilador Inyecctor De Aire' || json[0].equ_nombre === 'Cortina De Aire' || json[0].equ_nombre === 'Unidad Manejadora de Aire') {
                    if (json[0].t1 > 0) {
                        $("#2t1").html('<i class="fas fa-check"></i>');
                    }
                    if (json[0].t2 > 0) {
                        $("#2t2").html('<i class="fas fa-check"></i>');
                    }
                    if (json[0].m1 > 0) {
                        $("#2m1").html('<i class="fas fa-check"></i>');
                    }
                    if (json[0].m2 > 0) {
                        $("#2m2").html('<i class="fas fa-check"></i>');
                    }
                    if (json[0].carcasa > 0) {
                        $("#carcasa").html(parseFloat(json[0].carcasa));
                    }
                    if (json[0].frio > 0) {
                        $("#2frio").html(parseFloat(json[0].frio));
                    }
                    if (json[0].calor > 0) {
                        $("#2calor").html(parseFloat(json[0].calor));
                    }
                    if (parseFloat(json[0].mtr_motor1) > 0) {
                        $("#2motor1").html(parseFloat(json[0].mtr_motor1).toFixed(2));
                    }
                    if (parseFloat(json[0].mtr_motor2) > 0) {
                        $("#2motor2").html(parseFloat(json[0].mtr_motor2).toFixed(2));
                    }
                    if (parseFloat(json[0].a1) > 0) {
                        $("#a1").html(parseFloat(json[0].a1));
                    }
                    if (parseFloat(json[0].mm1) > 0) {
                        $("#mm1").html(parseFloat(json[0].mm1));
                    }
                    if (parseFloat(json[0].b1) > 0) {
                        $("#b1").html(parseFloat(json[0].b1));
                    }
                    if (parseFloat(json[0].nom11) > 0) {
                        $("#2nom11").html(parseFloat(json[0].nom11).toFixed(2));
                    }
                    if (parseFloat(json[0].nom12) > 0) {
                        $("#2nom12").html(parseFloat(json[0].nom12).toFixed(2));
                    }
                    if (parseFloat(json[0].nom13) > 0) {
                        $("#2nom13").html(parseFloat(json[0].nom13).toFixed(2));
                    }
                    if (parseFloat(json[0].nom21) > 0) {
                        $("#2nom21").html(parseFloat(json[0].nom21).toFixed(2));
                    }
                    if (parseFloat(json[0].nom22) > 0) {
                        $("#2nom22").html(parseFloat(json[0].nom22).toFixed(2));
                    }
                    if (parseFloat(json[0].nom23) > 0) {
                        $("#2nom23").html(parseFloat(json[0].nom23).toFixed(2));
                    }
                } else {
                    if (json[0].t1 > 0) {
                        $("#1t1").html('<i class="fas fa-check"></i>');
                    }
                    if (json[0].t2 > 0) {
                        $("#1t2").html('<i class="fas fa-check"></i>');
                    }
                    if (json[0].t3 > 0) {
                        $("#1t3").html('<i class="fas fa-check"></i>');
                    }
                    if (json[0].m1 > 0) {
                        $("#1m1").html('<i class="fas fa-check"></i>');
                    }
                    if (json[0].m2 > 0) {
                        $("#1m2").html('<i class="fas fa-check"></i>');
                    }
                    if (json[0].m3 > 0) {
                        $("#1m3").html('<i class="fas fa-check"></i>');
                    }
                    if (json[0].frio > 0) {
                        $("#1frio").html(parseFloat(json[0].frio));
                    }
                    if (json[0].calor > 0) {
                        $("#1calor").html(parseFloat(json[0].calor));
                    }
                    if (json[0].baja > 0) {
                        $("#1baja").html(parseFloat(json[0].baja));
                    }
                    if (json[0].alta > 0) {
                        $("#1alta").html(parseFloat(json[0].alta));
                    }
                    if (parseFloat(json[0].mtr_motor1) > 0) {
                        $("#1motor1").html(parseFloat(json[0].mtr_motor1).toFixed(2));
                    }
                    if (parseFloat(json[0].mtr_motor2) > 0) {
                        $("#1motor2").html(parseFloat(json[0].mtr_motor2).toFixed(2));
                    }
                    if (parseFloat(json[0].mtr_motor3) > 0) {
                        $("#1motor3").html(parseFloat(json[0].mtr_motor3).toFixed(2));
                    }

                    if (parseFloat(json[0].nom11) > 0) {
                        $("#1nom11").html(parseFloat(json[0].nom11).toFixed(2));
                    }
                    if (parseFloat(json[0].nom12) > 0) {
                        $("#1nom12").html(parseFloat(json[0].nom12).toFixed(2));
                    }
                    if (parseFloat(json[0].nom13) > 0) {
                        $("#1nom13").html(parseFloat(json[0].nom13).toFixed(2));
                    }
                    if (parseFloat(json[0].nom21) > 0) {
                        $("#1nom21").html(parseFloat(json[0].nom21).toFixed(2));
                    }
                    if (parseFloat(json[0].nom22) > 0) {
                        $("#1nom22").html(parseFloat(json[0].nom22).toFixed(2));
                    }
                    if (parseFloat(json[0].nom23) > 0) {
                        $("#1nom23").html(parseFloat(json[0].nom23).toFixed(2));
                    }
                    if (parseFloat(json[0].nom31) > 0) {
                        $("#1nom31").html(parseFloat(json[0].nom31).toFixed(2));
                    }
                    if (parseFloat(json[0].nom32) > 0) {
                        $("#1nom32").html(parseFloat(json[0].nom32).toFixed(2));
                    }
                    if (parseFloat(json[0].nom33) > 0) {
                        $("#1nom33").html(parseFloat(json[0].nom33).toFixed(2));
                    }
                }
                $("#tecnico").html(json[0].tecnico);
                $("#ayudante").html(json[0].ayudante);
                $("#fechaMan").html(moment(json[0].fecha).format('DD-MM-YYYY'));
                if (moment(json[0].man_fecha).format("MMMM") === 'March') {
                    mess = 'Marzo, 2021'
                }
                if (moment(json[0].man_fecha).format("MMMM") === 'April') {
                    mess = 'Abril, 2021'
                }
                if (moment(json[0].man_fecha).format("MMMM") === 'May') {
                    mess = 'Mayo, 2021'
                }
                if (moment(json[0].man_fecha).format("MMMM") === 'June') {
                    mess = 'Junio, 2021'
                }
                if (moment(json[0].man_fecha).format("MMMM") === 'July') {
                    mess = 'Julio, 2021'
                }
                if (moment(json[0].man_fecha).format("MMMM") === 'August') {
                    mess = 'Agosto, 2021'
                }
                if (moment(json[0].man_fecha).format("MMMM") === 'September') {
                    mess = 'Septiembre, 2021'
                }
                if (moment(json[0].man_fecha).format("MMMM") === 'October') {
                    mess = 'Octubre, 2021'
                }
                if (moment(json[0].man_fecha).format("MMMM") === 'November') {
                    mess = 'Noviembre, 2021'
                }
                if (moment(json[0].man_fecha).format("MMMM") === 'December') {
                    mess = 'Diciembre, 2021'
                }
                console.log(moment(json[0].man_fecha).format("MMMM"))
                $("#mes").html(mess);
                if (json[0].equ_nombre === 'Ventilador Extractor De Aire' || json[0].equ_nombre === 'Ventilador Inyecctor De Aire') {
                    $(`#1333`).html('<h5 class="tx-18 tx-center tx-bold"><i class="fas fa-check"></i></h5>')
                } else {
                    $(`#${json[0].equ_id}`).html('<h5 class="tx-18 tx-center tx-bold"><i class="fas fa-check"></i></h5>')
                }
                $("#imgFIRMAT").html(`<img src="https://qrc.acbingenieria.cl/assets/firmas/${json[0].tecnico_firma}" class="mg-b-5" alt="log" class="img-fluid" height="380px" width="480px">`)
                $("#imgFIRMAS").html(`<img src="https://qrc.acbingenieria.cl/assets/firmas/${json[0].firma_s}" class="mg-b-5" alt="log" class="img-fluid" height="380px" width="480px">`)
                $("#imgFIRMAC").html(`<img src="https://qrc.acbingenieria.cl/assets/firmas/white-img.png" class="mg-b-5" alt="log" class="img-fluid" height="380px" width="480px">`)
            },
        });
    }
    check_listado();

    function check_listado() {
        $.ajax({
            type: 'POST',
            url: base_url + 'CheckListController/fn_lista_checklist',
            data: {
                chk_nombre: ''
            },
            success: data => {
                console.log(data);
                let json = JSON.parse(data);
                let html = ``;
                json.map(d => {
                    html += `<div class="col-12 tx-18 tx-black">${d.chk_nombre}</div>`
                })
                $("#contentCheck").html(html);
            }
        })
    }


    function value_checklist(e) {
        $.ajax({
            type: 'POST',
            url: base_url + "OTController/pdf_ot_checklist",
            data: {
                ot_id: <?= $ot_id; ?>
            },
            success: data => {
                let json = JSON.parse(data);
                let value = '';
                json.map(d => {
                    console.log(e);
                    if (d.mand_activo == 0) {
                        value = 'N/A'
                    } else {
                        value = '<i class="fas fa-check"></i>';
                    }
                    if (e === 'Fan Coil') {
                        $(`#fan${d.chk_id}`).html(value);
                    }
                    if (e === 'Unidad Manejadora de Aire') {
                        $(`#uma${d.chk_id}`).html(value);
                    }
                    if (e === 'Cortina De Aire' || e === 'Cortina') {
                        $(`#cortina${d.chk_id}`).html(value);
                    }
                    if (e === 'Vrv') {
                        $(`#vrv${d.chk_id}`).html(value);
                    }
                    if (e === 'Ventilador Extractor De Aire' || e === 'Ventilador Inyecctor De Aire') {
                        $(`#vex${d.chk_id}`).html(value);
                    }
                    if (e === 'Split Ducto') {
                        $(`#split${d.chk_id}`).html(value);
                    }
                    if (e === 'Mini Split' || e === 'Multi-Split') {
                        $(`#msplit${d.chk_id}`).html(value);
                    }
                    if (e === 'Compacto') {
                        $(`#com${d.chk_id}`).html(value);
                    }
                    if (e === 'Ventana') {
                        $(`#ven${d.chk_id}`).html(value);
                    }
                })
            }
        })
    }
</script>