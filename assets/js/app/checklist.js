"use strict";
const listado_checklist = async (nombre) => {
	$.ajax({
		type: "POST",
		url: base_url + "listado_checklist",
		data: { chk_nombre: nombre },
		success: (data) => {
			let json = JSON.parse(data);
			let html = ``;
			let count = 1;
			let editar = ``;
			let estado = ``;
			let eliminar = ``;
			let total = 0;
			if (json[0].codesql == 1) {
				json.map((d) => {
					total = d.chk_total;
					editar = `<i class="fas fa-edit fa-pointer" onclick="editar(${d.chk_id},'${d.chk_nombre}')"></i>`;
					if (d.chk_activo == 1) {
						estado = `<i class="fas fa-toggle-on fa-pointer fa-enabled" onclick="estado(${d.chk_id},0)"></i>`;
					} else {
						estado = `<i class="fas fa-toggle-off fa-pointer fa-disabled" onclick="estado(${d.chk_id},1)"></i>`;
					}
					eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.chk_id},'${d.chk_nombre}')"></i>`;
					html += `<tr>
			                <td class="tx-bold">${count}</td>
			                <td>${d.chk_nombre}</td>
			                <td class="text-center">${editar}</td>
			                <td class="text-center">${estado}</td>
			                <td class="text-center">${eliminar}</td>
			            </tr>`;
					count++;
				});
				$("#tbodyCheckList").html(html);
				if (total > 10) {
					$("#registros-pagina").removeClass("d-none");
					paginacion(total, "tbodyCheckList");
				}
			} else {
				html += `<tr><td class="text-center" colspan="7">${json[0].msgsql}</td></tr>`;
				$("#tbodyCheckList").html(html);
				$("#registros-pagina").addClass("d-none");
			}
		},
	});
};
listado_checklist($("#frmChecklist").val());
$("#frmChecklist").bind("input propertychange", async function () {
	await listado_checklist($(this).val());
});
const estado = async (chk_id, equ_activo) => {
	await $.ajax({
		type: "POST",
		url: base_url + "activa_checklist",
		data: { chk_id: chk_id, equ_activo: equ_activo },
		succes: async (data) => {
			return data;
		},
	});
	await listado_checklist($("#frmchecklist").val());
};
const eliminar = (chk_id, chk_nombre) => {
	$("#mdlEliminar").modal();
	$("#titleEliminar").html(
		`<small>Esta seguro de eliminar el check list: <b>${chk_nombre}</b></small>`
	);
	$("#idEliminar").val(chk_id);
};
$("#btnEliminar").click(async function () {
	await $.ajax({
		type: "POST",
		url: base_url + "elimina_checklist",
		data: { chk_id: $("#idEliminar").val() },
		success: (data) => {
			let json = JSON.parse(data);
			if (json[0].codesql == 1) {
				alertify.notify(`${json[0].msgsql}`, "success", 5);
			} else {
				alertify.notify(`${json[0].msgsql}`, "warning", 5);
			}
		},
	});
	await listado_checklist($("#frmchecklist").val());
});

const guarda_checklist = (chk_id, chk_nombre) => {
	if ($("#txtCheckListnombre").val() == "") {
		$("#fn_error").removeClass("d-none", "d-none");
		$("#fn_error").html(
			`<i class="fas fa-exclamation-triangle fa-warning"></i> Antes de guardar, favor ingrese un nombre para el check list.`
		);
	} else {
		$.ajax({
			type: "POST",
			url: base_url + "CheckListController/fn_guarda_checklist",
			data: { chk_id: chk_id, chk_nombre: chk_nombre },
			success: (data) => {
				let json = JSON.parse(data);
				if (json[0].codesql != 0) {
					alertify.notify(`${json[0].msgsql}`, "success", 5);
					listado_checklist($("#frmchecklist").val());
					$("#mdlCheckList").modal("hide");
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
	$("#mdlCheckList").modal();
	$("#titleCheckList").html("Nuevo Check List");
	$("#txtCheckListid").val(0);
	$("#txtCheckListnombre").val("");
	$("#txtCheckListnombre").focus();
});

const editar = (chk_id, chk_nombre) => {
	$("#fn_error").addClass("d-none");
	$("#mdlCheckList").modal();
	$("#titleCheckList").html("Editar check list");
	$("#txtCheckListid").val(chk_id);
	$("#txtCheckListnombre").val(chk_nombre);
};

$("#btnSetCheckList").click(function () {
	guarda_checklist($("#txtCheckListid").val(), $("#txtCheckListnombre").val());
});
