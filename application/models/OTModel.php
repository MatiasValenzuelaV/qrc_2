<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OTModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function correlativo()
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('qrc_ot$correlativo')->result();
        $db->close();
        return $result;
    }
    public function ot_id($man_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('qrc_ot$id_max ?', array($man_id))->result();
        $db->close();
        return $result;
    }
    public function data_edit($man_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('qrc_ot$data_edit ?', array($man_id))->result();
        $db->close();
        return $result;
    }
    public function ot_guarda_checklist_defecto($man_id, $equ_id, $ot_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('qrc_ot$guarda_checklist_defecto ?,?,?', array($man_id, $equ_id, $ot_id))->result();
        $db->close();
        return $result;
    }
    public function valida_mantencion_registrada($mtr_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('qrc_ot$valida_mantencion ?', array($mtr_id))->result();
        $db->close();
        return $result;
    }
    public function pdf_ot_detalle($ot_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('pdf_ot$cabecera  ?', array($ot_id))->result();
        $db->close();
        return $result;
    }
    public function pdf_ot_detalle_mtr_id($mtr_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('pdf_ot$cabecera_detalle  ?', array($mtr_id))->result();
        $db->close();
        return $result;
    }
    public function pdf_ot_checklist($ot_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('pdf_ot$check_list  ?', array($ot_id))->result();
        $db->close();
        return $result;
    }
    public function qrc_detalle($ot_id, $man_id, $nom11, $nom12, $nom13, $nom21, $nom22, $nom23, $nom31, $nom32, $nom33, $t1, $m1, $t2, $m2, $t3, $m3, $baja, $alta, $frio, $calor, $carcasa, $observacion, $fecha, $a1, $mm1, $b1)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('qrc_ot$inserta_detalle ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?', array($ot_id, $man_id, $nom11, $nom12, $nom13, $nom21, $nom22, $nom23, $nom31, $nom32, $nom33, $t1, $m1, $t2, $m2, $t3, $m3, $baja, $alta, $frio, $calor, $carcasa, $observacion, $fecha, $a1, $mm1, $b1))->result();
        $db->close();
        return $result;
    }
    public function mantencion_checklist($man_id, $chk_id, $mand_activo, $ot_id)
    {
        $db = $this->load->database('default', TRUE);
        $result = $db->query('qrc_mantencion$guarda_checklist  ?,?,?,?', array($man_id, $chk_id, $mand_activo, $ot_id))->result();
        $db->close();
        return $result;
    }

    public function listado_equipos_nombres()
    {
        $db = $this->load->database('default',TRUE);
        $result = $db->query('SP_LISTADO_EQUIPOS_MODAL')->result();
        $db->close();
        return $result;
    }
    public function add_equipo_maestra($mtr_id,$mtr_torre,$mtr_edificio,$mtr_activo,$equ_id,$mtr_descripcion,$mtr_lugar,$mtr_ubicacionf,$mtr_criticidad,$mtr_marca,$mtr_modelo,$mtr_serie,$mtr_mantencion,$mtr_clinica,$mtr_turno,$mtr_motor1,$mtr_motor2,$mtr_motor3,$mtr_motor4)
    {
        $db = $this->load->database('default',TRUE);
        $result = $db->query('SP_ADD_EQUIPO_MAESTRA ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?', array($mtr_id,$mtr_torre,$mtr_edificio,$mtr_activo,$equ_id,$mtr_descripcion,$mtr_lugar,$mtr_ubicacionf,$mtr_criticidad,$mtr_marca,$mtr_modelo,$mtr_serie,$mtr_mantencion,$mtr_clinica,$mtr_turno,$mtr_motor1,$mtr_motor2,$mtr_motor3,$mtr_motor4))->result();
        $db->close();
        return $result;
    }
    public function description_etiqueta($mtr_id){
        $db = $this->load->database('default',TRUE);
        $result = $db->query('SP_DESCRIPTON_ETIQUETA ?', array($mtr_id))->result();
        $db->close();
        return $result;
    }
    public function update_description_etiqueta($mtr_id,$r1,$r2,$n1,$n2){
        $db = $this->load->database('default',TRUE);
        $result = $db->query('SP_UPDATE_DESCRIPTION_ETIQUETA ?,?,?,?,?', array($mtr_id,$r1,$r2,$n1,$n2))->result();
        $db->close();
        return $result;
    }
}
