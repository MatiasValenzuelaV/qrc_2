<?php
if (!$this->session->userdata('usu_id')) {
    header("Location: " . base_url());
}
?>
<body>
    <div class="br-logo"><a href="<?= base_url() ?>"><span>[</span>
            <img src="<?= asset_url(); ?>img/QRC-LOGO.jpg" alt="log" class="img-fluid" height="65%" width="68%">
            <span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 tx-info op-7 mg-t-20"><b>Menú Principal</b></label>
        <div class="br-sideleft-menu">
            <a href="<?= base_url(); ?>inicio" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon fas fa-home tx-20"></i>
                    <span class="menu-item-label">Inicio</span>
                </div>
            </a>
            <a href="#" class="br-menu-link show-sub">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon fas fa-user-cog tx-20"></i>
                    <span class="menu-item-label">Administrar acceso</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
            </a>
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="<?= base_url(); ?>usuarios" class="nav-link">Usuarios</a></li>
                <!-- <li class="nav-item"><a href="<?= base_url(); ?>perfiles" class="nav-link">Perfiles</a></li> -->
            </ul>
            <a href="#" class="br-menu-link show-sub">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon fas fa-brain tx-20"></i>
                    <span class="menu-item-label">Mantenedores</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="<?= base_url(); ?>cargos" class="nav-link">Cargos</a></li>
                <li class="nav-item"><a href="<?= base_url(); ?>personal" class="nav-link">Personal</a></li>
                <li class="nav-item"><a href="<?= base_url(); ?>equipos" class="nav-link">Equipos</a></li>
                <li class="nav-item"><a href="<?= base_url(); ?>checklist" class="nav-link">Check List</a></li>
                <li class="nav-item"><a href="<?= base_url(); ?>insumos" class="nav-link">Componentes</a></li>
            </ul>
            <a href="<?= base_url(); ?>listado_ot" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon fas fa-receipt tx-20"></i>
                    <span class="menu-item-label">Gestión Maestra</span>
                </div>
            </a>
            <a href="#" class="br-menu-link show-sub">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon fas fa-clipboard-list tx-20"></i>
                    <span class="menu-item-label">Gestion Mantencion</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
            </a>
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="<?= base_url(); ?>mantenciones" class="nav-link">Nueva Mantención</a></li>
                <li class="nav-item"><a href="<?= base_url(); ?>listado_mantenciones" class="nav-link">Mantenciones registradas</a></li>
            </ul>
            <a href="<?= base_url(); ?>scanner" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon fas fa-qrcode tx-20"></i>
                    <span class="menu-item-label">Scanner Testing</span>
                </div>
            </a>
            <!-- <a href="<?= base_url(); ?>ot" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon fas fa-clipboard-list tx-20"></i>
                    <span class="menu-item-label">OT</span>
                </div>
            </a> -->

            <!-- <a href="<?= base_url(); ?>ot" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon fas fa-clipboard-list tx-20"></i>
                    <span class="menu-item-label">Ordenes de Trabajo</span>
                </div>
            </a> -->
        </div>
        <br>
    </div>