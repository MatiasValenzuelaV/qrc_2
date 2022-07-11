"use strict";

$("#btnImportar").click(function () {
	$("#fn_importar").modal();
	document.getElementById("mfrmArchivo").value = "";
	$("#titleImportar").html("Insertar registros maestra de forma masiva.");
	$(".custom-file > span")[0].innerHTML = "Seleccione un archivo...";
	$("#btnCerrar").html("CERRAR");
});
async function guardarMaestra(
	mtr_id,
	mtr_torre,
	mtr_edificio,
	mtr_activo,
	equ_nombre,
	mtr_descripcion,
	mtr_lugar,
	mtr_ubicacionf,
	mtr_criticida,
	mtr_marca,
	mtr_modelo,
	mtr_serie,
	mtr_mantencion,
	mtr_clinica,
	mtr_turno,
	mtr_motor1,
	mtr_motor2,
	mtr_motor3,
	mtr_motor4
) {
	$("#btnImportData").html(
		'<tr><td colspan="10" class="tx-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>CARGANDO</td></tr>'
	);
	$.ajax({
		type: "POST",
		url: base_url + "OTController/fn_guardar_maestra",
		data: {
			mtr_id: mtr_id,
			mtr_torre: mtr_torre,
			mtr_edificio: mtr_edificio,
			mtr_activo: mtr_activo,
			equ_nombre: equ_nombre,
			mtr_descripcion: mtr_descripcion,
			mtr_lugar: mtr_lugar,
			mtr_ubicacionf: mtr_ubicacionf,
			mtr_criticida: mtr_criticida,
			mtr_marca: mtr_marca,
			mtr_modelo: mtr_modelo,
			mtr_serie: mtr_serie,
			mtr_mantencion: mtr_mantencion,
			mtr_clinica: mtr_clinica,
			mtr_turno: mtr_turno,
			mtr_motor1: mtr_motor1,
			mtr_motor2: mtr_motor2,
			mtr_motor3: mtr_motor3,
			mtr_motor4: mtr_motor4,
		},
		success: (data) => {
			let json = JSON.parse(data);
			if (json[0].codesql == 1) {
				alertify.notify(`${json[0].sqlmsg}`, "success", 5);
			}
			listado_maestra(
				$("#frmTorre").val(),
				$("#frmEdificio").val(),
				$("#frmDescripcion").val(),
				$("#frmLugar").val(),
				$("#frmUbiciacion").val(),
				$("#frmCriticidad").val(),
				$("#frmClinica").val(),
				$("#frmTurno").val(),
				$("#frmEquipo").val(),
				$("#frmActivo").val(),
				$("#frmMarca").val(),
				$("#frmModelo").val(),
				$("#frmSerie").val()
			);
		},
	});
}
$("#btnImportData").click(async function (e) {
	e.preventDefault();
	let selectedFile = document.querySelector("#mfrmArchivo").files[0];
	if (selectedFile == undefined) {
		var myToast = mdtoast(
			"Antes de realizar una importación de datos masivo por favor seleccionar el archivo a importar.",
			{
				duration: 3000,
				init: true,
				type: mdtoast.WARNING,
			}
		);
		myToast.show();
	} else {
		await return_dataEXCELTOJSON(selectedFile);
	}
});
const return_dataEXCELTOJSON = async (selectedFile) => {
	let reader = new FileReader();
	reader.onload = function (event) {
		let data = event.target.result;
		let workbook = XLSX.read(data, {
			type: "binary",
		});
		let array = [];
		workbook.SheetNames.forEach(async function (sheetName) {
			let arrayMasivo = [];
			let XL_row_object = XLSX.utils.sheet_to_row_object_array(
				workbook.Sheets[sheetName]
			);
			let json_object = JSON.stringify(XL_row_object);
			let json = jQuery.parseJSON(json_object);
			array.push(json);
			let j = JSON.stringify(json);
			$.ajax({
				type: "POST",
				url: "https://apiqrc.acbingenieria.cl/importar",
				data: { data: j },
				success: (d) => {
					if (d == "TERMINADO") {
						setTimeout(
							listado_maestra(
								$("#frmTorre").val(),
								$("#frmEdificio").val(),
								$("#frmDescripcion").val(),
								$("#frmLugar").val(),
								$("#frmUbiciacion").val(),
								$("#frmCriticidad").val(),
								$("#frmClinica").val(),
								$("#frmTurno").val(),
								$("#frmEquipo").val(),
								$("#frmActivo").val(),
								$("#frmMarca").val(),
								$("#frmModelo").val(),
								$("#frmSerie").val()
							),
							10000
						);
					}
				},
			});
		});
	};
	reader.onerror = function (event) {
		console.error("File could not be read! Code " + event.target.error.code);
	};
	reader.readAsBinaryString(selectedFile);
	$("#fn_importar").modal("hide");
	$("#registros-pagina").addClass("d-none");
	$("#tbodyOT").html(
		'<tr><td colspan="14" class="tx-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>CARGANDO</td></tr>'
	);
	setTimeout(
		listado_maestra(
			$("#frmTorre").val(),
			$("#frmEdificio").val(),
			$("#frmDescripcion").val(),
			$("#frmLugar").val(),
			$("#frmUbiciacion").val(),
			$("#frmCriticidad").val(),
			$("#frmClinica").val(),
			$("#frmTurno").val(),
			$("#frmEquipo").val(),
			$("#frmActivo").val(),
			$("#frmMarca").val(),
			$("#frmModelo").val(),
			$("#frmSerie").val()
		),
		10000
	);
};
function listado_maestra(
	torre,
	edificio,
	descripcion,
	lugar,
	ubicacionf,
	criticidad,
	clinica,
	turno,
	equ,
	activo,
	marca,
	modelo,
	serie
) {
	$("#tbodyOT").html(
		'<tr><td colspan="16" class="tx-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>CARGANDO</td></tr>'
	);
	$.ajax({
		type: "POST",
		url: base_url + "OTController/fn_listado_maestra",
		data: {
			mtr_id: 0,
			mtr_torre: torre,
			mtr_edificio: edificio,
			mtr_descripcion: descripcion,
			mtr_lugar: lugar,
			mtr_ubicacionf: ubicacionf,
			mtr_criticidad: criticidad,
			mtr_clinica: clinica,
			mtr_turno: turno,
			equ_nombre: equ,
			mtr_activo: activo,
			mtr_marca: marca,
			mtr_modelo: modelo,
			mtr_serie: serie,
		},
		success: (data) => {
			let json = JSON.parse(data);
			let html = ``;
			let count = 1;
			let total = 0;
			let acti = ``;
			let detalle,
				eliminar = ``;
			if (json[0].codesql == 1) {
				json.map((d) => {
					total = d.mtr_total;
					if (d.mtr_activo == "") {
						acti = "S/R";
					} else {
						acti = d.mtr_activo;
					}
					eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.mtr_id},'${d.equ_nombre}')"></i>`;
					detalle = `<i class="fas fa-info-circle fa-pointer" onclick="detalle(${d.mtr_id},'${d.mtr_torre}','${d.mtr_edificio}','${acti}','${d.equ_nombre}','${d.mtr_descripcion}','${d.mtr_lugar}','${d.mtr_ubicacionf}','${d.mtr_criticidad}','${d.mtr_marca}','${d.mtr_modelo}','${d.mtr_serie}','${d.mtr_cliente}','${d.mtr_turno}','${d.mtr_mantencion}','${d.mtr_motor1}','${d.mtr_motor2}','${d.mtr_motor3}','${d.mtr_motor4}','${d.per_nombre}','${d.per_celular}')"></i>`;
					html += `<tr>
						<td class="tx-bold">${count}</td>
						<td>${d.mtr_torre}</td>
						<td>${d.mtr_edificio}</td>
						<td>${acti}</td>
						<td>${d.equ_nombre}</td>
						<td>${d.mtr_descripcion}</td>
						<td>${d.mtr_lugar}</td>
						<td>${d.mtr_ubicacionf}</td>						
						<td class="text-center">${d.mtr_criticidad}</td>						
						<td>${d.mtr_marca}</td>
						<td>${d.mtr_modelo}</td>
						<td>${d.mtr_serie}</td>
						<td class="tx-center">${d.mtr_cliente}</td>						
						<td class="tx-center">${d.mtr_turno}</td>						
						<td class="tx-center">${detalle}</td>
						<td class="tx-center">${eliminar}</td>
					</tr>`;
					count++;
				});
				if (total > 10) {
					$("#tbodyOT").html(html);
					$("#registros-pagina").removeClass("d-none");
					paginacion(total, "tbodyOT");
					$("#btnExportar").removeClass("d-none");
				} else {
					$("#tbodyOT").html(html);
					$("#registros-pagina").addClass("d-none");
				}
			} else {
				html += `<tr><td colspan="16" class="text-center">No se han encontrado registros, cambie los párametros de búsqueda o intente nuevamente.</td></tr>`;
				$("#btnExportar").addClass("d-none");
				$("#tbodyOT").html(html);
				$("#registros-pagina").addClass("d-none");
			}
		},
	});
}
function generateQR(id, text) {
	let qr = new QRCode(document.getElementById(`${id}`), {
		text: text,
		width: 150,
		height: 150,
		size: 500,
		colorDark: "#000000",
		colorLight: "#ffffff",
		correctLevel: QRCode.CorrectLevel.H,
	});
}
function testing() {
	let largoTd = document.querySelectorAll("tbody > tr").length;
	let count = 1;
	[...document.querySelectorAll("#tbodyOT > tr")].map((d) => {
		let id = document.querySelector(`tr:nth-child(${count}) > td:nth-child(9)`);
		let nombre = document.querySelector(
			`tr:nth-child(${count}) > td:nth-child(2)`
		);
		let serie = document.querySelector(
			`tr:nth-child(${count}) > td:nth-child(5)`
		);
		id = id.id;
		nombre = nombre.innerHTML;
		serie = serie.innerHTML;
		generateQR(id, `${nombre},${serie}`);
		count++;
	});
}

listado_maestra(
	$("#frmTorre").val(),
	$("#frmEdificio").val(),
	$("#frmDescripcion").val(),
	$("#frmLugar").val(),
	$("#frmUbiciacion").val(),
	$("#frmCriticidad").val(),
	$("#frmClinica").val(),
	$("#frmTurno").val(),
	$("#frmEquipo").val(),
	$("#frmActivo").val(),
	$("#frmMarca").val(),
	$("#frmModelo").val(),
	$("#frmSerie").val()
);
const detalle = (
	id,
	torre,
	edificio,
	acti,
	equipo,
	descr,
	lugar,
	ubicacion,
	criticidad,
	marca,
	modelo,
	serie,
	cliente,
	turno,
	mantencion,
	m1,
	m2,
	m3,
	m4,
	per_nombre,
	per_celular
) => {
	console.log(
		id,
		torre,
		edificio,
		acti,
		equipo,
		descr,
		lugar,
		ubicacion,
		criticidad,
		marca,
		modelo,
		serie,
		cliente,
		turno,
		mantencion,
		m1,
		m2,
		m3,
		m4,
		per_nombre,
		per_celular
	);
	$("#detalle").addClass("tab-pane fade show active");
	$("#etiqueta").removeClass("show active");
	$("#detalle-tab").addClass("nav-link active");
	$("#etiqueta-tab").removeClass("active");
	$("#mdlDetalle").modal();
	$("#mdltitle").html(`Detalle Equipo: <u>${equipo}</u>`);
	$("#mdlTorre").val(torre.toUpperCase());
	$("#mdlEdificio").val(edificio);
	$("#mdlActivo").val(acti);
	$("#mdlDescripción").val(descr);
	$("#mdlLugar").val(lugar);
	$("#mdlUbicacion").val(ubicacion);
	$("#mdlCriticidad").val(criticidad);
	$("#mdlMarca").val(marca);
	$("#mdlModelo").val(modelo);
	$("#mdlSerie").val(serie);
	$("#mdlCliente").val(cliente);
	$("#mdlTurno").val(turno);
	$("#mdlMantencion").val(mantencion);
	$("#mdlM1").val(Number(m1).toFixed(2));
	$("#mdlM2").val(Number(m2).toFixed(2));
	$("#mdlM3").val(Number(m3).toFixed(2));
	$("#mdlM4").val(Number(m4).toFixed(2));
	$("#txtIDMaestra").val(id);
	listado_equipos_by_idmaestra(0);
	// $("#eActivo").html(acti.toUpperCase());
	// $("#eDescripcion").html(descr.toUpperCase());
	// $("#eMarca").html(marca.toUpperCase());
	// $("#eModelo").html(modelo.toUpperCase());
	// $("#eSerie").html(serie.toUpperCase());
	// $("#eMantencion").html(mantencion.toUpperCase());
	// $("#QRMAESTRA").html(``);
	// $("#responsable1").html(`${per_nombre.toUpperCase()}`);
	// $("#celular1").html(`${per_celular.toUpperCase()}`);
	// cliente.toLowerCase() === "cas" || cliente.toLowerCase() === "mo"
	// 	? (document.getElementById("imgLogoSet").src =
	// 			"https://fondosmil.com/fondo/17541.jpg")
	// 	: (document.getElementById("imgLogoSet").src =
	// 			"https://qrc.acbingenieria.cl/assets/img/QRC-LOGO.jpg");
	// cliente.toLowerCase() === "cas" || cliente.toLowerCase() === "mo"
	// 	? document.getElementById("imgLogoSet").setAttribute("height", "76px")
	// 	: document.getElementById("imgLogoSet").setAttribute("height", "76px");
	// cliente.toLowerCase() === "cas" || cliente.toLowerCase() === "mo"
	// 	? document.getElementById("imgLogoSet").setAttribute("width", "76px")
	// 	: document.getElementById("imgLogoSet").setAttribute("width", "152px");
	// generateQR("QRMAESTRA", `${id},${equipo}`);
};
$("#btnBuscar").click(function () {
	listado_maestra(
		$("#frmTorre").val(),
		$("#frmEdificio").val(),
		$("#frmDescripcion").val(),
		$("#frmLugar").val(),
		$("#frmUbiciacion").val(),
		$("#frmCriticidad").val(),
		$("#frmClinica").val(),
		$("#frmTurno").val(),
		$("#frmEquipo").val(),
		$("#frmActivo").val(),
		$("#frmMarca").val(),
		$("#frmModelo").val(),
		$("#frmSerie").val()
	);
});
$("#btnExportar").click(function () {
	$.ajax({
		type: "POST",
		url: base_url + "OTController/session_data_excel",
		data: {
			mtr_torre: $("#frmTorre").val(),
			mtr_edificio: $("#frmEdificio").val(),
			mtr_descripcion: $("#frmDescripcion").val(),
			mtr_lugar: $("#frmLugar").val(),
			mtr_ubicacionf: $("#frmUbiciacion").val(),
			mtr_criticidad: $("#frmCriticidad").val(),
			mtr_clinica: $("#frmClinica").val(),
			mtr_turno: $("#frmTurno").val(),
			equ_nombre: $("#frmEquipo").val(),
			mtr_activo: $("#frmActivo").val(),
			mtr_marca: $("#frmMarca").val(),
			mtr_modelo: $("#frmModelo").val(),
			mtr_serie: $("#frmSerie").val(),
		},
		success: (data) => {
			window.open(base_url + "OTController/export_excel", "_blank");
		},
	});
});
$("#btnEtiquetaPDF").click(function () {
	$("#btnEtiquetaPDF").html('<i class="fas fa-spinner fa-spin"></i>');
	$.ajax({
		type: "POST",
		url: "https://apiqrc.acbingenieria.cl/",
		data: { eti_id: $("#txtIDMaestra").val() },
		success: (data) => {
			if (data == "TERMINO") {
				$("#btnEtiquetaPDF").html('<i class="fas fa-file-pdf"></i> PDF');
				console.log(
					base_url + "assets/pdf/" + $("#txtIDMaestra").val() + ".pdf"
				);
				var link = document.createElement("a");
				link.href =
					base_url + "assets/pdf/" + $("#txtIDMaestra").val() + ".pdf";
				link.download = $("#txtIDMaestra").val() + ".pdf";
				link.dispatchEvent(new MouseEvent("click"));
				// window.location.href = base_url + "assets/pdf/" + $("#txtIDMaestra").val() + ".pdf";
				// window.open(
				//   base_url + "assets/pdf/" + $("#txtIDMaestra").val() + ".pdf"
				// );
			}
		},
	});
});

$("#btnSetEquipo").click(() => {
	guardarMaestra(
		$("#txtIDMaestra").val(),
		$("#mdlTorre").val(),
		$("#mdlEdificio").val(),
		$("#mdlActivo").val(),
		$("#inputNombreEquipos").val(),
		// document.querySelector("#mdltitle > u").innerText,
		$("#mdlDescripción").val(),
		$("#mdlLugar").val(),
		$("#mdlUbicacion").val(),
		$("#mdlCriticidad").val(),
		$("#mdlMarca").val(),
		$("#mdlModelo").val(),
		$("#mdlSerie").val(),
		$("#mdlMantencion").val(),
		$("#mdlCliente").val(),
		$("#mdlTurno").val(),
		$("#mdlM1").val(),
		$("#mdlM2").val(),
		$("#mdlM3").val(),
		$("#mdlM4").val()
	);
	$("#mdlDetalle").modal("hide");
});
const eliminar = (mtr_id, equ_nombre) => {
	$("#mdlEliminar").modal();
	$("#titleEliminar").html(
		`<small>Esta seguro de eliminar el equipo: <b>${equ_nombre}</b> del listado maestra.</small>`
	);
	$("#idEliminar").val(mtr_id);
};
$("#btnEliminar").click(async () => {
	await $.ajax({
		type: "POST",
		url: "https://apiqrc.acbingenieria.cl/eliminar_equipo_maestra",
		data: { mtr_id: $("#idEliminar").val() },
		success: (data) => {
			// let json = JSON.parse(data);
			// if (json[0].codesql == 1) {
			// 	alertify.notify(`${json[0].msgsql}`, "success", 5);
			// } else {
			// 	alertify.notify(`${json[0].msgsql}`, "warning", 5);
			// }
		},
	});
	await listado_maestra(
		$("#frmTorre").val(),
		$("#frmEdificio").val(),
		$("#frmDescripcion").val(),
		$("#frmLugar").val(),
		$("#frmUbiciacion").val(),
		$("#frmCriticidad").val(),
		$("#frmClinica").val(),
		$("#frmTurno").val(),
		$("#frmEquipo").val(),
		$("#frmActivo").val(),
		$("#frmMarca").val(),
		$("#frmModelo").val(),
		$("#frmSerie").val()
	);
});
