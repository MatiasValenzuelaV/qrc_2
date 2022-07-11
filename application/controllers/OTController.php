<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class OTController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('MaestraModel');
		$this->load->Model('OTModel');
	}
	public function index()
	{
		$data["title"] = 'QRC Ingeniería - OT';
		$data["bc"] = 'Orden de trabajo';
		$this->load->view('ot', $data);
	}

	public function plantillaOt($id,$ot)
	{
		$data['ot'] = $ot;
		switch ($id) {
			case '1':
				$this->load->view('OT/fancoil',$data);
				break;
			case '2':
				$this->load->view('OT/uma',$data);
				break;
			case '3':
				$this->load->view('OT/vex',$data);
				break;
			case '4':
				$this->load->view('OT/split',$data);
				break;
			case '5':
				$this->load->view('OT/compacto',$data);
				break;
			case '6':
				$this->load->view('OT/congelador',$data);
				break;
			case '7':
				$this->load->view('OT/vitrina',$data);
				break;
			case '8':
				$this->load->view('OT/refrigerador',$data);
				break;
			case '9':
				$this->load->view('OT/purificador',$data);
				break;
			case '10':
				$this->load->view('OT/cortina',$data);
				break;
			case '999':
				$this->load->view('OT/fancoilE',$data);
				break;
			
			default:
				# code...
				break;
		}
	}

	public function nueva_ot($mtrID = 0,$man_id)
	{
		$data["title"] = 'QRC Ingeniería - OT';
		$data["bc"] = 'Orden de trabajo';
		$data["mtrID"] = $mtrID;
		$data["man_id"] = $man_id;
		$this->load->view('nueva_ot', $data);
	}
	public function otEdit($ot_id)
	{
		$data["title"] = 'QRC Ingeniería - OT';
		$data["bc"] = 'Orden de trabajo';
		$data["ot_id"] = $ot_id;
		$this->load->view('otEdit', $data);
	}
	public function listado_ot()
	{
		$data["title"] = 'QRC Ingeniería - Listado OT';
		$data["bc"] = 'Listado OT';
		$this->load->view('listado_ot', $data);
	}
	public function fn_guardar_maestra()
	{
		$data = $this->MaestraModel->guardar_maestra(
			$this->input->post('mtr_id'),
			$this->input->post('mtr_torre'),
			$this->input->post('mtr_edificio'),
			$this->input->post('mtr_activo'),
			$this->input->post('equ_nombre'),
			$this->input->post('mtr_descripcion'),
			$this->input->post('mtr_lugar'),
			$this->input->post('mtr_ubicacionf'),
			$this->input->post('mtr_criticida'),
			$this->input->post('mtr_marca'),
			$this->input->post('mtr_modelo'),
			$this->input->post('mtr_serie'),
			$this->input->post('mtr_mantencion'),
			$this->input->post('mtr_clinica'),
			$this->input->post('mtr_turno'),
			$this->input->post('mtr_motor1'),
			$this->input->post('mtr_motor2'),
			$this->input->post('mtr_motor3'),
			$this->input->post('mtr_motor4'),
		);
		echo json_encode($data);
	}
	public function listado_equipos_by_idmaestra(){
		$data = $this->MaestraModel->listado_equipos_by_idmaestra(
			$this->input->post('mtr_id')
		);
		echo json_encode($data);
	}
	public function fn_listado_maestra()
	{
		$data = $this->MaestraModel->lista_maestra(
			$this->input->post('mtr_id'),
			$this->input->post('mtr_torre'),
			$this->input->post('mtr_edificio'),
			$this->input->post('mtr_descripcion'),
			$this->input->post('mtr_lugar'),
			$this->input->post('mtr_ubicacionf'),
			$this->input->post('mtr_criticidad'),
			$this->input->post('mtr_clinica'),
			$this->input->post('mtr_turno'),
			$this->input->post('equ_nombre'),
			$this->input->post('mtr_activo'),
			$this->input->post('mtr_marca'),
			$this->input->post('mtr_modelo'),
			$this->input->post('mtr_serie'),
		);
		echo json_encode($data);
	}
	public function fn_equipos_baja()
	{
		$data = $this->MaestraModel->fn_equipos_baja(
			$this->input->post('mtr_id'),
			$this->input->post('mtr_torre'),
			$this->input->post('mtr_edificio'),
			$this->input->post('mtr_descripcion'),
			$this->input->post('mtr_lugar'),
			$this->input->post('mtr_ubicacionf'),
			$this->input->post('mtr_criticidad'),
			$this->input->post('mtr_clinica'),
			$this->input->post('mtr_turno'),
			$this->input->post('equ_nombre'),
			$this->input->post('mtr_activo'),
			$this->input->post('mtr_marca'),
			$this->input->post('mtr_modelo'),
			$this->input->post('mtr_serie'),
		);
		echo json_encode($data);
	}
	public function ot_detalle()
	{
		$data = $this->OTModel->qrc_detalle(
			$this->input->post('ot_id'),
			$this->input->post('man_id'),
			$this->input->post('nom11'),
			$this->input->post('nom12'),
			$this->input->post('nom13'),
			$this->input->post('nom21'),
			$this->input->post('nom22'),
			$this->input->post('nom23'),
			$this->input->post('nom31'),
			$this->input->post('nom32'),
			$this->input->post('nom33'),
			$this->input->post('t1'),
			$this->input->post('m1'),
			$this->input->post('t2'),
			$this->input->post('m2'),
			$this->input->post('t3'),
			$this->input->post('m3'),
			$this->input->post('baja'),
			$this->input->post('alta'),
			$this->input->post('frio'),
			$this->input->post('calor'),
			$this->input->post('carcasa'),
			$this->input->post('observacion'),
			$this->input->post('fecha'),
			$this->input->post('a1'),
			$this->input->post('mm1'),
			$this->input->post('b1'),
		);
		echo json_encode($data);
	}
	public function session_data_excel()
	{
		$dataArray = array(
			'mtr_torre' => $this->input->post('mtr_torre'),
			'mtr_edificio' => $this->input->post('mtr_edificio'),
			'mtr_descripcion' => $this->input->post('mtr_descripcion'),
			'mtr_lugar' => $this->input->post('mtr_lugar'),
			'mtr_ubicacionf' => $this->input->post('mtr_ubicacionf'),
			'mtr_criticidad' => $this->input->post('mtr_criticidad'),
			'mtr_clinica' => $this->input->post('mtr_clinica'),
			'mtr_turno' => $this->input->post('mtr_turno'),
			'equ_nombre' => $this->input->post('equ_nombre'),
			'mtr_activo' => $this->input->post('mtr_activo'),
			'mtr_marca' => $this->input->post('mtr_marca'),
			'mtr_modelo' => $this->input->post('mtr_modelo'),
			'mtr_serie' => $this->input->post('mtr_serie'),
		);
		$this->session->set_userdata($dataArray);
	}
	public function session_data_excel_equipos_baja()
	{
		$dataArray = array(
			'mtr_torre' => $this->input->post('mtr_torre'),
			'mtr_edificio' => $this->input->post('mtr_edificio'),
			'mtr_descripcion' => $this->input->post('mtr_descripcion'),
			'mtr_lugar' => $this->input->post('mtr_lugar'),
			'mtr_ubicacionf' => $this->input->post('mtr_ubicacionf'),
			'mtr_criticidad' => $this->input->post('mtr_criticidad'),
			'mtr_clinica' => $this->input->post('mtr_clinica'),
			'mtr_turno' => $this->input->post('mtr_turno'),
			'equ_nombre' => $this->input->post('equ_nombre'),
			'mtr_activo' => $this->input->post('mtr_activo'),
			'mtr_marca' => $this->input->post('mtr_marca'),
			'mtr_modelo' => $this->input->post('mtr_modelo'),
			'mtr_serie' => $this->input->post('mtr_serie'),
		);
		$this->session->set_userdata($dataArray);
	}
	public function export_excel()
	{
		$d2 = new Datetime("now");
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$styleArray2 = [
			'font' => ['bold' => true, 'color' => ['rgb' => 'ffffff'], 'size' => 15],
			'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				]
			],
			'fill' => [
				'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
				'startColor' => ['argb' => 'FF4F81BD']
			]
		];
		$styleArray = [
			'font' => ['bold' => true],
			'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
				]
			]
		];
		$styleArraySimple = [
			'font' => ['bold' => false],
			'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
				]
			]
		];

		$sheet->mergeCells('A1:S1');
		$sheet->setCellValue('A1', 'GESTIÓN MAESTRA EQUIPOS')->getStyle('A1:S1')->applyFromArray($styleArray2);
		$sheet->setCellValue('A2', '#')->getStyle('A2')->applyFromArray($styleArray);
		$sheet->setCellValue('B2', 'Torre')->getStyle('B2')->applyFromArray($styleArray);
		$sheet->setCellValue('C2', 'Edificio')->getStyle('C2')->applyFromArray($styleArray);
		$sheet->setCellValue('D2', 'Activo')->getStyle('D2')->applyFromArray($styleArray);
		$sheet->setCellValue('E2', 'Tipo de equipo')->getStyle('E2')->applyFromArray($styleArray);
		$sheet->setCellValue('F2', 'Descripción del equipo')->getStyle('F2')->applyFromArray($styleArray);
		$sheet->setCellValue('G2', 'Donde se utiliza')->getStyle('G2')->applyFromArray($styleArray);
		$sheet->setCellValue('H2', 'Ubicación fisica del equipo')->getStyle('H2')->applyFromArray($styleArray);
		$sheet->setCellValue('I2', 'Criticidad')->getStyle('I2')->applyFromArray($styleArray);
		$sheet->setCellValue('J2', 'Marca')->getStyle('J2')->applyFromArray($styleArray);
		$sheet->setCellValue('K2', 'Modelo')->getStyle('K2')->applyFromArray($styleArray);
		$sheet->setCellValue('L2', 'Serie')->getStyle('L2')->applyFromArray($styleArray);
		$sheet->setCellValue('M2', 'Periodo Mantenimiento')->getStyle('M2')->applyFromArray($styleArray);
		$sheet->setCellValue('N2', 'Clinica')->getStyle('N2')->applyFromArray($styleArray);
		$sheet->setCellValue('O2', 'Turno')->getStyle('O2')->applyFromArray($styleArray);
		$sheet->setCellValue('P2', 'Motor 1')->getStyle('P2')->applyFromArray($styleArray);
		$sheet->setCellValue('Q2', 'Motor 2')->getStyle('Q2')->applyFromArray($styleArray);
		$sheet->setCellValue('R2', 'Motor 3')->getStyle('R2')->applyFromArray($styleArray);
		$sheet->setCellValue('S2', 'Motor 4')->getStyle('S2')->applyFromArray($styleArray);
		$sheet->setAutoFilter('A2:S2');
		$data1 = $this->MaestraModel->lista_maestra(
			0,
			$this->session->userdata('mtr_torre'),
			$this->session->userdata('mtr_edificio'),
			$this->session->userdata('mtr_descripcion'),
			$this->session->userdata('mtr_lugar'),
			$this->session->userdata('mtr_ubicacionf'),
			$this->session->userdata('mtr_criticidad'),
			$this->session->userdata('mtr_clinica'),
			$this->session->userdata('mtr_turno'),
			$this->session->userdata('equ_nombre'),
			$this->session->userdata('mtr_activo'),
			$this->session->userdata('mtr_marca'),
			$this->session->userdata('mtr_modelo'),
			$this->session->userdata('mtr_serie'),
		);
		$cdetallado = 3;
		$contt = 1;
		foreach ($data1 as $key => $value) {
			$sheet->setCellValue('A' . $cdetallado, $contt)->getStyle('A' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('B' . $cdetallado, $value->mtr_torre)->getStyle('B' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('C' . $cdetallado, $value->mtr_edificio)->getStyle('C' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('D' . $cdetallado, $value->mtr_activo)->getStyle('D' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('E' . $cdetallado, $value->equ_nombre)->getStyle('E' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('F' . $cdetallado, $value->mtr_descripcion)->getStyle('F' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('G' . $cdetallado, $value->mtr_lugar)->getStyle('G' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('H' . $cdetallado, $value->mtr_ubicacionf)->getStyle('H' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('I' . $cdetallado, $value->mtr_criticidad)->getStyle('I' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('J' . $cdetallado, $value->mtr_marca)->getStyle('J' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('K' . $cdetallado, $value->mtr_modelo)->getStyle('K' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('L' . $cdetallado, $value->mtr_serie)->getStyle('L' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('M' . $cdetallado, $value->mtr_mantencion)->getStyle('M' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('N' . $cdetallado, $value->mtr_cliente)->getStyle('N' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('O' . $cdetallado, $value->mtr_turno)->getStyle('O' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('P' . $cdetallado, $value->mtr_motor1)->getStyle('P' . $cdetallado)->applyFromArray($styleArraySimple)->getNumberFormat()
				->setFormatCode('0.00');
			$sheet->setCellValue('Q' . $cdetallado, $value->mtr_motor2)->getStyle('Q' . $cdetallado)->applyFromArray($styleArraySimple)->getNumberFormat()
				->setFormatCode('0.00');
			$sheet->setCellValue('R' . $cdetallado, $value->mtr_motor3)->getStyle('R' . $cdetallado)->applyFromArray($styleArraySimple)->getNumberFormat()
				->setFormatCode('0.00');
			$sheet->setCellValue('S' . $cdetallado, $value->mtr_motor4)->getStyle('S' . $cdetallado)->applyFromArray($styleArraySimple)->getNumberFormat()
				->setFormatCode('0.00');
			$cdetallado++;
			$contt++;
		}

		foreach (range('A', 'S') as $columnID) {
			$sheet->getColumnDimension($columnID)
				->setAutoSize(true);
		}

		$writer = new Xlsx($spreadsheet);

		$filename = 'MAESTRA-' . $d2->getTimestamp() . '';

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');
	}
	public function export_excel_equipos_baja()
	{
		$d2 = new Datetime("now");
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$styleArray2 = [
			'font' => ['bold' => true, 'color' => ['rgb' => 'ffffff'], 'size' => 15],
			'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				]
			],
			'fill' => [
				'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
				'startColor' => ['argb' => 'FF4F81BD']
			]
		];
		$styleArray = [
			'font' => ['bold' => true],
			'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
				]
			]
		];
		$styleArraySimple = [
			'font' => ['bold' => false],
			'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
				]
			]
		];

		$sheet->mergeCells('A1:T1');
		$sheet->setCellValue('A1', 'EQUIPOS DADOS DE BAJA')->getStyle('A1:S1')->applyFromArray($styleArray2);
		$sheet->setCellValue('A2', '#')->getStyle('A2')->applyFromArray($styleArray);
		$sheet->setCellValue('B2', 'Torre')->getStyle('B2')->applyFromArray($styleArray);
		$sheet->setCellValue('C2', 'Edificio')->getStyle('C2')->applyFromArray($styleArray);
		$sheet->setCellValue('D2', 'Activo')->getStyle('D2')->applyFromArray($styleArray);
		$sheet->setCellValue('E2', 'Tipo de equipo')->getStyle('E2')->applyFromArray($styleArray);
		$sheet->setCellValue('F2', 'Descripción del equipo')->getStyle('F2')->applyFromArray($styleArray);
		$sheet->setCellValue('G2', 'Donde se utiliza')->getStyle('G2')->applyFromArray($styleArray);
		$sheet->setCellValue('H2', 'Ubicación fisica del equipo')->getStyle('H2')->applyFromArray($styleArray);
		$sheet->setCellValue('I2', 'Criticidad')->getStyle('I2')->applyFromArray($styleArray);
		$sheet->setCellValue('J2', 'Marca')->getStyle('J2')->applyFromArray($styleArray);
		$sheet->setCellValue('K2', 'Modelo')->getStyle('K2')->applyFromArray($styleArray);
		$sheet->setCellValue('L2', 'Serie')->getStyle('L2')->applyFromArray($styleArray);
		$sheet->setCellValue('M2', 'Periodo Mantenimiento')->getStyle('M2')->applyFromArray($styleArray);
		$sheet->setCellValue('N2', 'Clinica')->getStyle('N2')->applyFromArray($styleArray);
		$sheet->setCellValue('O2', 'Turno')->getStyle('O2')->applyFromArray($styleArray);
		$sheet->setCellValue('P2', 'Motor 1')->getStyle('P2')->applyFromArray($styleArray);
		$sheet->setCellValue('Q2', 'Motor 2')->getStyle('Q2')->applyFromArray($styleArray);
		$sheet->setCellValue('R2', 'Motor 3')->getStyle('R2')->applyFromArray($styleArray);
		$sheet->setCellValue('S2', 'Motor 4')->getStyle('S2')->applyFromArray($styleArray);
		$sheet->setCellValue('T2', 'Fecha')->getStyle('T2')->applyFromArray($styleArray);
		$sheet->setAutoFilter('A2:T2');
		$data1 = $this->MaestraModel->fn_equipos_baja(
			0,
			$this->session->userdata('mtr_torre'),
			$this->session->userdata('mtr_edificio'),
			$this->session->userdata('mtr_descripcion'),
			$this->session->userdata('mtr_lugar'),
			$this->session->userdata('mtr_ubicacionf'),
			$this->session->userdata('mtr_criticidad'),
			$this->session->userdata('mtr_clinica'),
			$this->session->userdata('mtr_turno'),
			$this->session->userdata('equ_nombre'),
			$this->session->userdata('mtr_activo'),
			$this->session->userdata('mtr_marca'),
			$this->session->userdata('mtr_modelo'),
			$this->session->userdata('mtr_serie'),
		);
		$cdetallado = 3;
		$contt = 1;
		foreach ($data1 as $key => $value) {
			$sheet->setCellValue('A' . $cdetallado, $contt)->getStyle('A' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('B' . $cdetallado, $value->mtr_torre)->getStyle('B' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('C' . $cdetallado, $value->mtr_edificio)->getStyle('C' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('D' . $cdetallado, $value->mtr_activo)->getStyle('D' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('E' . $cdetallado, $value->equ_nombre)->getStyle('E' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('F' . $cdetallado, $value->mtr_descripcion)->getStyle('F' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('G' . $cdetallado, $value->mtr_lugar)->getStyle('G' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('H' . $cdetallado, $value->mtr_ubicacionf)->getStyle('H' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('I' . $cdetallado, $value->mtr_criticidad)->getStyle('I' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('J' . $cdetallado, $value->mtr_marca)->getStyle('J' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('K' . $cdetallado, $value->mtr_modelo)->getStyle('K' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('L' . $cdetallado, $value->mtr_serie)->getStyle('L' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('M' . $cdetallado, $value->mtr_mantencion)->getStyle('M' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('N' . $cdetallado, $value->mtr_cliente)->getStyle('N' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('O' . $cdetallado, $value->mtr_turno)->getStyle('O' . $cdetallado)->applyFromArray($styleArraySimple);
			$sheet->setCellValue('P' . $cdetallado, $value->mtr_motor1)->getStyle('P' . $cdetallado)->applyFromArray($styleArraySimple)->getNumberFormat()
				->setFormatCode('0.00');
			$sheet->setCellValue('Q' . $cdetallado, $value->mtr_motor2)->getStyle('Q' . $cdetallado)->applyFromArray($styleArraySimple)->getNumberFormat()
				->setFormatCode('0.00');
			$sheet->setCellValue('R' . $cdetallado, $value->mtr_motor3)->getStyle('R' . $cdetallado)->applyFromArray($styleArraySimple)->getNumberFormat()
				->setFormatCode('0.00');
			$sheet->setCellValue('S' . $cdetallado, $value->mtr_motor4)->getStyle('S' . $cdetallado)->applyFromArray($styleArraySimple)->getNumberFormat()
				->setFormatCode('0.00');
			$sheet->setCellValue('T' . $cdetallado, $value->mtr_createdat)->getStyle('T' . $cdetallado)->applyFromArray($styleArraySimple);
			$cdetallado++;
			$contt++;
		}

		foreach (range('A', 'T') as $columnID) {
			$sheet->getColumnDimension($columnID)
				->setAutoSize(true);
		}

		$writer = new Xlsx($spreadsheet);

		$filename = 'EquiposBaja-' . $d2->getTimestamp() . '';

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');
	}
	// public function nueva_ot()
	// {
	// 	$this->load->view('nueva_ot');
	// }
	public function correlativo_ot()
	{
		$data = $this->OTModel->correlativo();
		echo json_encode($data);
	}
	public function ot_id()
	{
		$data = $this->OTModel->ot_id(
			$this->input->post('man_id')
		);
		echo json_encode($data);
	}
	public function data_edit()
	{
		$data = $this->OTModel->data_edit(
			$this->input->post('man_id')
		);
		echo json_encode($data);
	}
	public function ot_guarda_checklist_defecto()
	{
		$data = $this->OTModel->ot_guarda_checklist_defecto(
			$this->input->post('man_id'),
			$this->input->post('equ_id'),
			$this->input->post('ot_id'),
		);
		echo json_encode($data);
	}
	public function valida_mantencion_registrada()
	{
		$data = $this->OTModel->valida_mantencion_registrada(
			$this->input->post('mtr_id')
		);
		echo json_encode($data);
	}
	public function pdf_ot_detalle()
	{
		$data = $this->OTModel->pdf_ot_detalle(
			$this->input->post('ot_id')
		);
		echo json_encode($data);
	}
	public function pdf_ot_detalle_mtr_id()
	{
		$data = $this->OTModel->pdf_ot_detalle_mtr_id(
			$this->input->post('mtr_id')
		);
		echo json_encode($data);
	}
	public function pdf_ot_checklist()
	{
		$data = $this->OTModel->pdf_ot_checklist(
			$this->input->post('ot_id')
		);
		echo json_encode($data);
	}
	public function mantencion_checklist()
	{
		$data = $this->OTModel->mantencion_checklist(
			$this->input->post('man_id'),
			$this->input->post('chk_id'),
			$this->input->post('mand_activo'),
			$this->input->post('ot_id'),
		);
		echo json_encode($data);
	}

	public function plantilla_ot($ot_id)
	{
		$data["ot_id"] = $ot_id;
		$this->load->view('planilla_ot', $data);
	}
	public function plantilla_otU($ot_id)
	{
		$data["ot_id"] = $ot_id;
		$this->load->view('planilla_otU', $data);
	}
	public function listado_equipos_nombres()
	{
		$data = $this->OTModel->listado_equipos_nombres();
		echo json_encode($data);
	}
	public function add_equipo_maestra()
	{
		$data = $this->OTModel->add_equipo_maestra(
			0,
			$this->input->post('mtr_torre'),
			$this->input->post('mtr_edificio'),
			$this->input->post('mtr_activo'),
			$this->input->post('equ_id'),
			$this->input->post('mtr_descripcion'),
			$this->input->post('mtr_lugar'),
			$this->input->post('mtr_ubicacionf'),
			$this->input->post('mtr_criticidad'),
			$this->input->post('mtr_marca'),
			$this->input->post('mtr_modela'),
			$this->input->post('mtr_serie'),
			$this->input->post('mtr_mantencion'),
			$this->input->post('mtr_clinica'),
			$this->input->post('mtr_turno'),
			$this->input->post('mtr_motor1'),
			$this->input->post('mtr_motor2'),
			$this->input->post('mtr_motor3'),
			$this->input->post('mtr_motor4'),
		);
		echo json_encode($data);
	}
	public function description_etiqueta(){
		$data = $this->OTModel->description_etiqueta($this->input->post('mtr_id'));
		echo json_encode($data);
	}
	public function update_description_etiqueta(){
		$data = $this->OTModel->update_description_etiqueta(
			$this->input->post('mtr_id'),
			$this->input->post('r1'),
			$this->input->post('r2'),
			$this->input->post('n1'),
			$this->input->post('n2'),
		);
		echo json_encode($data);
	}
}