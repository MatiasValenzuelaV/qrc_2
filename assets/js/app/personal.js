"use strict";
listado_personales(
	$("#frmRut").val(),
	$("#frmPersonal").val(),
	$("#frmCCostos").val(),
	$("#frmCodCCostos").val()
);
function listado_personales(
	per_rut = "",
	per_nombre = "",
	cco_codigo = 0,
	cco_codigo_interno = "",
	per_paginacion = 0
) {
	$.ajax({
		type: "POST",
		url: base_url + "listado_personales",
		data: {
			per_rut: per_rut,
			per_nombre: per_nombre,
			cco_codigo: cco_codigo,
			per_paginacion: per_paginacion,
		},
		success: (data) => {
			let json = JSON.parse(data);
			let html = ``;
			let count = 1;
			let estado = ``;
			let editar = ``;
			let eliminar = ``;
			if (json[0].codesql == 1) {
				json.map((d) => {
					editar = `<i class="fas fa-edit fa-pointer" onclick="editar(${d.per_codigo})"></i>`;
					if (d.per_activo == 1) {
						estado = `<i class="fas fa-toggle-on fa-pointer fa-enabled" onclick="estado(${d.per_codigo},0)"></i>`;
					} else {
						estado = `<i class="fas fa-toggle-off fa-pointer fa-disabled" onclick="estado(${d.per_codigo},1)"></i>`;
					}
					eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.per_codigo},'${d.per_nombre}')"></i>`;
					html += `<tr>
                        <td class="tx-bold">${count}</td>
                        <td>${d.per_rut}</td>
                        <td>${d.per_nombre}</td>
                        <td>${d.cco_nombre}</td>
                        <td>${d.cco_codigo_interno}</td>
                        <td class="text-center">${editar}</td>
                        <td class="text-center">${estado}</td>
                        <td class="text-center">${eliminar}</td>
                    </tr>`;
					count++;
				});
				$("#tbodyPersonal").html(html);
			} else {
				html += `<tr><td class="text-center" colspan="8">${json[0].msgsql}</td></tr>`;
				$("#tbodyPersonal").html(html);
				$("#registros-pagina").addClass("d-none");
			}
		},
	});
}
$("#frmPersonal").bind("input propertychange", function () {
	listado_personales(
		$("#frmRut").val(),
		$(this).val(),
		$("#frmCCostos").val(),
		$("#frmCodCCostos").val(),
		0
	);
});
$("#frmCCostos").change(function () {
	listado_personales(
		$("#frmRut").val(),
		$("#frmPersonal").val(),
		$(this).val(),
		$("#frmCodCCostos").val(),
		0
	);
});
$("#frmRut").bind("input propertychange", function () {
	listado_personales(
		$(this).val(),
		$("#frmPersonal").val(),
		$("#frmCCostos").val(),
		$("#frmCodCCostos").val(),
		0
	);
});
carga_centro_costos();
function carga_centro_costos() {
	$.ajax({
		type: "POST",
		url: base_url + "carga_combo_centro_costos",
		success: (data) => {
			let json = JSON.parse(data);
			let html = ``;
			json.map((d) => {
				html += `<option value="${d.cco_codigo}">${d.cco_nombre}</option>`;
			});
			$("#frmCCostos").html(html);
		},
	});
}
