<?php
if (!$this->session->userdata('usu_id')) {
    header("Location: " . base_url());
}
?>

<body>
    <div class="br-logo"><a href="<?= base_url() ?>"><span>[</span>
            <img src="<?= asset_url(); ?>img/logoqrcn.svg" alt="log" class="img-fluid" height="80%" width="80%">
            <span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 tx-info op-7 mg-t-20"><b>Menú Principal</b></label>
        <div class="br-sideleft-menu" id="MenuContent">
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
                <?php if ($this->session->userdata('prf_id') == 1) { ?>
                    <li class="nav-item"><a href="<?= base_url(); ?>perfiles" class="nav-link">Perfiles</a></li>
                <?php } ?>
            </ul>
            <a href="#" class="br-menu-link show-sub">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon fas fa-brain tx-20"></i>
                    <span class="menu-item-label">Mantenedores</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
            </a>
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
                    <span class="menu-item-label">Mantenciones</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
            </a>
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="<?= base_url(); ?>mantenciones" class="nav-link">Nueva Mantención</a></li>
                <li class="nav-item"><a href="<?= base_url(); ?>listado_mantenciones" class="nav-link">Mantenciones registradas</a></li>
            </ul>
            <?php if ($this->session->userdata('usu_id') == 9 || $this->session->userdata('usu_id') == 31) { ?>
                <a href="#" class="br-menu-link show-sub">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon fas fa-clipboard-list tx-20"></i>
                        <span class="menu-item-label">Reportes</span>
                        <i class="menu-item-arrow fa fa-angle-down"></i>
                    </div>
                </a>
                <ul class="br-menu-sub nav flex-column">
                    <li class="nav-item"><a href="<?= base_url(); ?>velocidad_aire" class="nav-link">Velocidades de aire</a></li>
                    <li class="nav-item"><a href="<?= base_url(); ?>equipos_baja" class="nav-link">Equipos dados de baja</a></li>
                </ul>
            <?php } ?>
            <a href="<?= base_url(); ?>scanner" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon fas fa-qrcode tx-20"></i>
                    <span class="menu-item-label">Scanner Testing</span>
                </div>
            </a>
        </div>
        <br>
    </div>