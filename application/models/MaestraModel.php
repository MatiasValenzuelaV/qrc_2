<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MaestraModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function guardar_maestra(
        $mtr_id,
        $mtr_torre,
        $mtr_edificio,
        $mtr_activo,
        $equ_nombre,
        $mtr_descripcion,
        $mtr_lugar,
        $mtr_ubicacionf,
        $mtr_criticida,
        $mtr_marca,
        $mtr_modelo,
        $mtr_serie,
        $mtr_mantencion,
        $mtr_clinica,
        $mtr_turno,
        $mtr_motor1,
        $mtr_motor2,
        $mtr_motor3,
        $mtr_motor4
    ) {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_maestra" . "$" . "guardar_maestra ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?",
            array(
                "mtr_id" => $mtr_id,
                "mtr_torre"   => $mtr_torre,
                "mtr_edificio"   => $mtr_edificio,
                "mtr_activo"   => $mtr_activo,
                "equ_nombre"   => $equ_nombre,
                "mtr_descripcion"   => $mtr_descripcion,
                "mtr_lugar"   => $mtr_lugar,
                "mtr_ubicacionf"   => $mtr_ubicacionf,
                "mtr_criticida"   => $mtr_criticida,
                "mtr_marca"   => $mtr_marca,
                "mtr_modelo"   => $mtr_modelo,
                "mtr_serie"   => $mtr_serie,
                "mtr_mantencion"   => $mtr_mantencion,
                "mtr_clinica"   => $mtr_clinica,
                "mtr_turno"   => $mtr_turno,
                "mtr_motor1"   => $mtr_motor1,
                "mtr_motor2"   => $mtr_motor2,
                "mtr_motor3"   => $mtr_motor3,
                "mtr_motor4"   => $mtr_motor4
            )
        )->result();
        $db->close();
        return $result;
    }
    public function listado_equipos_by_idmaestra($mtr_id){
        $db = $this->load->database('default',TRUE);
        $result = $db->query('SP_LISTADO_EQUIPO_BY_IDMAESTRA ?',array($mtr_id))->result();
        $db->close();
        return $result;
    }
    public function lista_maestra($mtr_id, $torre, $edificio, $descripcion, $lugar, $ubicacionf, $criticidad, $clinica, $turno, $equ_nombre, $mtr_activo, $mtr_marca, $mtr_modelo, $mtr_serie)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_maestra" . "$" . "lista_maestra ?,?,?,?,?,?,?,?,?,?,?,?,?,?",
            array(
                "mtr_id" => $mtr_id,
                "mtr_torre" => $torre,
                "mtr_edificio" => $edificio,
                "mtr_descripcion" => $descripcion,
                "mtr_lugar" => $lugar,
                "mtr_ubicacionf" => $ubicacionf,
                "mtr_criticidad" => $criticidad,
                "mtr_clinica" => $clinica,
                "mtr_turno" => $turno,
                "equ_nombre" => $equ_nombre,
                "mtr_activo" => $mtr_activo,
                "mtr_marca" => $mtr_marca,
                "mtr_modelo" => $mtr_modelo,
                "mtr_serie" => $mtr_serie
            )
        )->result();
        $db->close();
        return $result;
    }
    public function fn_equipos_baja($mtr_id, $torre, $edificio, $descripcion, $lugar, $ubicacionf, $criticidad, $clinica, $turno, $equ_nombre, $mtr_activo, $mtr_marca, $mtr_modelo, $mtr_serie)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "reporte_equipos_baja ?,?,?,?,?,?,?,?,?,?,?,?,?,?",
            array(
                "mtr_id" => $mtr_id,
                "mtr_torre" => $torre,
                "mtr_edificio" => $edificio,
                "mtr_descripcion" => $descripcion,
                "mtr_lugar" => $lugar,
                "mtr_ubicacionf" => $ubicacionf,
                "mtr_criticidad" => $criticidad,
                "mtr_clinica" => $clinica,
                "mtr_turno" => $turno,
                "equ_nombre" => $equ_nombre,
                "mtr_activo" => $mtr_activo,
                "mtr_marca" => $mtr_marca,
                "mtr_modelo" => $mtr_modelo,
                "mtr_serie" => $mtr_serie
            )
        )->result();
        $db->close();
        return $result;
    }

    public function lista_cabera_ot($id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query("qrc_mantencion" . "$" . "consultada_cabecera ?", array("id" => $id))->result();
        $db->close();
        return $result;
    }
    public function lista_cabera_ot_edit($id,$fecha)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query("qrc_mantencion" . "$" . "consulta_cabecera_edit ?,?", array("id" => $id,"fecha" => $fecha))->result();
        $db->close();
        return $result;
    }

    public function lista_checklist_ot($equ_nombre,$man_id,$ot_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query("qrc_mantencion" . "$" . "consulta_checklist ?,?,?", array($equ_nombre,$man_id,$ot_id))->result();
        $db->close();
        return $result;
    }
    public function listado_tecnicos($car_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query("qrc_mantencion" . "$" . "listado_tecnicos ?", array("car_id" => $car_id))->result();
        $db->close();
        return $result;
    }

    public function maestra_mantencion($mtr_criticidad, $mtr_clinica, $mtr_turno, $mtr_mantencion, $mtr_equipo, $mtr_activo, $mtr_serie, $mtr_modelo,$mtr_marca,$mtr_edificio,$mtr_descripcion,$mtr_lugar,$mtr_ubicacionf)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_maestra" . "$" . "lista_maestra_mant ?,?,?,?,?,?,?,?,?,?,?,?,?",
            array("mtr_criticidad" => $mtr_criticidad, "mtr_clinica" => $mtr_clinica, "mtr_turno" => $mtr_turno, "mtr_mantencion" => $mtr_mantencion, "mtr_equipo" => $mtr_equipo, $mtr_activo, $mtr_serie, $mtr_modelo,$mtr_marca,$mtr_edificio,$mtr_descripcion,$mtr_lugar,$mtr_ubicacionf)
        )->result();
        $db->close();
        return $result;
    }

    public function guarda_mantencion($man_fecha, $man_tipo, $man_tecnico1, $man_tecnico2, $mtr_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query(
            "qrc_mantencion" . "$" . "guarda_mantencion ?,?,?,?,?",
            array("man_fecha" => $man_fecha, "man_tipo" => $man_tipo, "man_tecnico1" => $man_tecnico1, "man_tecnico2" => $man_tecnico2, "mtr_id" => $mtr_id)
        )->result();
        $db->close();
        return $result;
    }
    public function listado_mantenciones($periodo, $estado, $clinica, $equipo, $periodoM,$mtr_marca,$mtr_modelo,$mtr_activo,$mtr_serie,$mtr_descripcion,$mtr_lugar,$mtr_ubicacionf)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('qrc_mantencion$listado_mantenciones ?,?,?,?,?,?,?,?,?,?,?,?', 
            array($periodo, $estado, $clinica, $equipo,$periodoM,$mtr_marca,$mtr_modelo,$mtr_activo,$mtr_serie,$mtr_descripcion,$mtr_lugar,$mtr_ubicacionf))->result();
        $db->close();
        return $result;
    }
    public function guarda_cabecera_ot($man_id, $ot_correlativo)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('qrc_ot$guarda_cabecera ?,?', array($man_id, $ot_correlativo))->result();
        $db->close();
        return $result;
    }
    public function componentes_listado_correctiva()
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('qrc_componentes_correctiva$listado')->result();
        $db->close();
        return $result;
    }
    public function reporte_velocidad_aire($equ_nombre)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('reporte_velocidades_aire ?',array($equ_nombre))->result();
        $db->close();
        return $result;
    }
}

/* End of file MaestraModel.php */
/* Location: ./application/models/MaestraModel.php */