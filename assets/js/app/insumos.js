"use strict";
$(".toggle").toggles({
	on: false,
	height: 26,
	text: {
		on: "✓",
		off: "X",
	},
});
const listado_checklist = async (nombre) => {
	$.ajax({
		type: "POST",
		url: base_url + "listado_insumos",
		data: {
			ins_nombre: nombre,
		},
		success: (data) => {
			let json = JSON.parse(data);
			let html = ``;
			let count = 1;
			let editar = ``;
			let estado = ``;
			let eliminar = ``;
			let lugar = ``;
			let total = 0;
			if (json[0].codesql == 1) {
				json.map((d) => {
					total = d.ins_total;
					editar = `<i class="fas fa-edit fa-pointer" onclick="editar(${d.ins_id},'${d.ins_nombre}',${d.ins_interior},${d.ins_exterior})"></i>`;
					if (d.ins_activo == 1) {
						estado = `<i class="fas fa-toggle-on fa-pointer fa-enabled" onclick="estado(${d.ins_id},0)"></i>`;
					} else {
						estado = `<i class="fas fa-toggle-off fa-pointer fa-disabled" onclick="estado(${d.ins_id},1)"></i>`;
					}
					eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.ins_id},'${d.ins_nombre}')"></i>`;
					if (d.ins_interior == 1 && d.ins_exterior == 1) {
						lugar = `INTERIOR-EXTERIOR`;
					} else if (d.ins_interior == 1) {
						lugar = `INTERIOR`;
					} else {
						lugar = `EXTERIOR`;
					}
					html += `<tr>
			                <td class="tx-bold">${count}</td>
			                <td>${d.ins_nombre}</td>
			                <td>${lugar}</td>
			                <td class="text-center">${editar}</td>
			                <td class="text-center">${eliminar}</td>
			            </tr>`;
					count++;
				});
				$("#tbodyInsumo").html(html);
				if (total > 10) {
					$("#registros-pagina").removeClass("d-none");
					paginacion(total, "tbodyInsumo");
				}
			} else {
				html += `<tr><td class="text-center" colspan="7">${json[0].msgsql}</td></tr>`;
				$("#tbodyInsumo").html(html);
				$("#registros-pagina").addClass("d-none");
			}
		},
	});
};
listado_checklist($("#frmInsumo").val());
$("#frmInsumo").bind("input propertychange", async function () {
	await listado_checklist($(this).val());
});
const estado = async (ins_id, ins_activo) => {
	await $.ajax({
		type: "POST",
		url: base_url + "activa_insumos",
		data: { ins_id: ins_id, ins_activo: ins_activo },
		succes: async (data) => {
			return data;
		},
	});
	await listado_checklist($("#frmInsumo").val());
};
// const eliminar = (chk_id, chk_nombre) => {
// 	$("#mdlEliminar").modal();
// 	$("#titleEliminar").html(
// 		`<small>Esta seguro de eliminar el check list: <b>${chk_nombre}</b></small>`
// 	);
// 	$("#idEliminar").val(chk_id);
// };
// $("#btnEliminar").click(async function () {
// 	await $.ajax({
// 		type: "POST",
// 		url: base_url + "elimina_checklist",
// 		data: { chk_id: $("#idEliminar").val() },
// 		success: (data) => {
// 			let json = JSON.parse(data);
// 			if (json[0].codesql == 1) {
// 				alertify.notify(`${json[0].msgsql}`, "success", 5);
// 			} else {
// 				alertify.notify(`${json[0].msgsql}`, "warning", 5);
// 			}
// 		},
// 	});
// 	await listado_checklist($("#frmchecklist").val());
// });

const guarda_checklist = (ins_id, ins_nombre) => {
	if ($("#txtInsnombre").val() == "") {
		$("#fn_error").removeClass("d-none", "d-none");
		$("#fn_error").html(
			`<i class="fas fa-exclamation-triangle fa-warning"></i> Antes de guardar, favor ingrese un nombre de componente.`
		);
	} else {
		$.ajax({
			type: "POST",
			url: base_url + "guarda_insumos",
			data: {
				ins_id: ins_id,
				ins_nombre: ins_nombre,
				ins_interior: $(".toggle.t-i").data("toggles").active,
				ins_exterior: $(".toggle.t-e").data("toggles").active,
			},
			success: (data) => {
				let json = JSON.parse(data);
				if (json[0].codesql != 0) {
					alertify.notify(`${json[0].msgsql}`, "success", 5);
					listado_checklist($("#frmInsumo").val());
					$("#mdlInsumos").modal("hide");
				} else {
					$("#fn_error").removeClass("d-none", "d-none");
					$("#fn_error").html(
						`<i class="fas fa-exclamation-triangle fa-warning"></i> ${json[0].msgsql}`
					);
				}
			},
		});
	}
};

$("#btnNuevo").click(function () {
	$("#fn_error").addClass("d-none");
	$("#mdlInsumos").modal();
	$("#titleInsumos").html("Nuevo Componente");
	$("#txtInsid").val(0);
	$("#txtInsnombre").val("");
	$("#txtInsnombre").focus();
	$(".toggle.t-i").data("toggles").toggle(false);
	$(".toggle.t-e").data("toggles").toggle(false);
});

const editar = (chk_id, chk_nombre, interior, exterior) => {
	$("#fn_error").addClass("d-none");
	$("#mdlInsumos").modal();
	$("#titleInsumos").html("Editar Componente");
	$("#txtInsid").val(chk_id);
	$("#txtInsnombre").val(chk_nombre);
	if (interior == 1) {
		$(".toggle.t-i").data("toggles").toggle(true);
	}
	if (exterior == 1) {
		$(".toggle.t-e").data("toggles").toggle(true);
	}
};

$("#btnSetInsumo").click(function () {
	guarda_checklist($("#txtInsid").val(), $("#txtInsnombre").val());
});
