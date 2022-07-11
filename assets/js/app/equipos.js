"use strict";
const listado_equipos = async (nombre) => {
	$.ajax({
		type: "POST",
		url: base_url + "listado_equipos",
		data: { equ_nombre: nombre },
		success: (data) => {
			let json = JSON.parse(data);
			let html = ``;
			let count = 1;
			let checklist = ``;
			let insumos = ``;
			let editar = ``;
			let estado = ``;
			let eliminar = ``;
			let total = 0;
			if (json[0].codesql == 1) {
				json.map((d) => {
					total = d.equ_total;
					checklist = `<i class="fas fa-tasks fa-pointer" onclick="checklist(${d.equ_id},'${d.equ_nombre}')"></i>`;
					insumos = `<i class="fas fa-receipt fa-pointer" onclick="insumos(${d.equ_id},'${d.equ_nombre}')"></i>`;
					editar = `<i class="fas fa-edit fa-pointer" onclick="editar(${d.equ_id},'${d.equ_nombre}')"></i>`;
					if (d.equ_activo == 1) {
						estado = `<i class="fas fa-toggle-on fa-pointer fa-enabled" onclick="estado(${d.equ_id},0)"></i>`;
					} else {
						estado = `<i class="fas fa-toggle-off fa-pointer fa-disabled" onclick="estado(${d.equ_id},1)"></i>`;
					}
					eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.equ_id},'${d.equ_nombre}')"></i>`;
					html += `<tr>
			                <td class="tx-bold">${count}</td>
			                <td>${d.equ_nombre}</td>
			                <td class="text-center">${checklist}</td>
			                <td class="text-center">${insumos}</td>
			                <td class="text-center">${editar}</td>
			                <td class="text-center">${estado}</td>
			                <td class="text-center">${eliminar}</td>
			            </tr>`;
					count++;
				});

				if (total > 10) {
					$("#tbodyEquipos").html(html);
					$("#registros-pagina").removeClass("d-none");
					paginacion(total, "tbodyEquipos");
				} else {
					$("#tbodyEquipos").html(
						`<tr><td class="tx-center" colspan="7">No se han encontrado registros, por favor seleccione otros parametros de búsqueda o intente nuevamente.</td></tr>`
					);
					$("#tbodyEquipos").html(html);
				}
			} else {
				html += `<tr><td class="text-center" colspan="7">${json[0].msgsql}</td></tr>`;
				$("#registros-pagina").addClass("d-none");
				$("#tbodyEquipos").html(html);
			}
		},
	});
};
listado_equipos($("#frmEquipos").val());
$("#frmEquipos").bind("input propertychange", async function () {
	await listado_equipos($(this).val());
});
const estado = async (equ_id, equ_activo) => {
	await $.ajax({
		type: "POST",
		url: base_url + "activa_equipos",
		data: { equ_id: equ_id, equ_activo: equ_activo },
		succes: async (data) => {
			return data;
		},
	});
	await listado_equipos($("#frmEquipos").val());
};
const eliminar = (equ_id, equ_nombre) => {
	$("#mdlEliminar").modal();
	$("#titleEliminar").html(
		`<small>Esta seguro de eliminar el equipo: <b>${equ_nombre}</b></small>`
	);
	$("#idEliminar").val(equ_id);
};
$("#btnEliminar").click(async function () {
	await $.ajax({
		type: "POST",
		url: base_url + "elimina_equipos",
		data: { equ_id: $("#idEliminar").val() },
		success: (data) => {
			let json = JSON.parse(data);
			if (json[0].codesql == 1) {
				alertify.notify(`${json[0].msgsql}`, "success", 5);
			} else {
				alertify.notify(`${json[0].msgsql}`, "warning", 5);
			}
		},
	});
	await listado_equipos($("#frmEquipos").val());
});

const guarda_equipos = (equ_id, equ_nombre) => {
	if ($("#txtEqunombre").val() == "") {
		$("#fn_error").removeClass("d-none", "d-none");
		$("#fn_error").html(
			`<i class="fas fa-exclamation-triangle fa-warning"></i> Antes de guardar, favor ingrese un nombre para el equipo.`
		);
	} else {
		$.ajax({
			type: "POST",
			url: base_url + "guarda_equipos",
			data: { equ_id: equ_id, equ_nombre: equ_nombre },
			success: (data) => {
				let json = JSON.parse(data);
				if (json[0].codesql != 0) {
					alertify.notify(`${json[0].msgsql}`, "success", 5);
					listado_equipos($("#frmEquipos").val());
					$("#mdlEquipos").modal("hide");
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
	$("#mdlEquipos").modal();
	$("#titleEquipos").html("Nuevo Equipo");
	$("#txtEquid").val(0);
	$("#txtEqunombre").val("");
	$("#txtEqunombre").focus();
});

const editar = (equ_id, equ_nombre) => {
	$("#fn_error").addClass("d-none");
	$("#mdlEquipos").modal();
	$("#titleEquipos").html("Editar Equipo");
	$("#txtEquid").val(equ_id);
	$("#txtEqunombre").val(equ_nombre);
};

$("#btnSetEquipo").click(function () {
	guarda_equipos($("#txtEquid").val(), $("#txtEqunombre").val());
});

const listadoEquiposChecklist = async (equ_id, equ_nombre) => {
	$.ajax({
		type: "POST",
		url: base_url + "listado_equipos_checklist",
		data: { equ_id: equ_id },
		success: (data) => {
			let json = JSON.parse(data);
			let html = ``;
			let estadoC = ``;
			let count = 1;
			let total = 0;
			let total_asignado = 0;
			if (json[0].codesql == 1) {
				json.map((d) => {
					total = d.chk_total;
					total_asignado = d.chk_total_asignado;
					if (d.equchk_id != null) {
						estadoC = `<i class="fas fa-toggle-on fa-pointer fa-enabled" onclick="estadoC(${equ_id},${d.chk_id},${d.equchk_id},'${equ_nombre}')"></i>`;
					} else {
						estadoC = `<i class="fas fa-toggle-off fa-pointer fa-disabled" onclick="estadoC(${equ_id},${d.chk_id},0,'${equ_nombre}')"></i>`;
					}
					html += `<tr>
			                <td class="tx-bold">${count}</td>
			                <td class="tx-bold">${d.chk_nombre}</td>
			                <td class="tx-bold text-center">${estadoC}</td>
			            </tr>`;
					count++;
				});
				$("#titleChecklistEquipos").html(
					`Check list asociados a equipo: <u>${equ_nombre}</u> ${total_asignado}/${total}`
				);
				if (total > 10) {
					$("#registros-pagina2").removeClass("d-none");
					// paginacion(total, "tbodyEquiposC");
				}
			} else {
				html += `<tr><td class="text-center" colspan="2">${json[0].msgsql}</td></tr>`;
				$("#registros-pagina2").addClass("d-none");
			}
			$("#tbodyEquiposC").html(html);
		},
	});
};
const checklist = async (equ_id, equ_nombre) => {
	$("#mdlCheckListEquipos").modal();
	$("#txtEquidC").val(equ_id);
	$("#titleChecklistEquipos").html(
		`Check list asociados a equipo: <u>${equ_nombre}</u>`
	);
	await listadoEquiposChecklist(equ_id, equ_nombre);
};

const estadoC = async (equ_id, chk_id, equchk_id, equ_nombre) => {
	await $.ajax({
		type: "POST",
		url: base_url + "activa_equipos_checklist",
		data: { chk_id: chk_id, equ_id: equ_id, equchk_id: equchk_id },
		success: async (data) => {
			console.log(data);
		},
	});
	await listadoEquiposChecklist(equ_id, equ_nombre);
};

const listadoEquiposInsumos = async (equ_id, equ_nombre) => {
	$.ajax({
		type: "POST",
		url: base_url + "listado_equipos_insumos",
		data: { equ_id: equ_id },
		success: (data) => {
			let json = JSON.parse(data);
			let html = ``;
			let estadoC = ``;
			let count = 1;
			let total = 0;
			let total_asignado = 0;
			let int_ext = ``;
			if (json[0].codesql == 1) {
				json.map((d) => {
					total = d.ins_total;
					total_asignado = d.ins_total_asignado;
					if (d.equins_id != null) {
						estadoC = `<i class="fas fa-toggle-on fa-pointer fa-enabled" onclick="estadoI(${equ_id},${d.ins_id},${d.equins_id},'${equ_nombre}')"></i>`;
					} else {
						estadoC = `<i class="fas fa-toggle-off fa-pointer fa-disabled" onclick="estadoI(${equ_id},${d.ins_id},0,'${equ_nombre}')"></i>`;
					}
					if (d.ins_interior == 1 && d.ins_exterior == 0) {
						int_ext = "INTERIOR";
					} else if (d.ins_exterior == 1 && d.ins_interior == 0) {
						int_ext = "EXTERIOR";
					} else {
						int_ext = "INTERIOR/EXTERIOR";
					}
					html += `<tr>
			                <td class="tx-bold">${count}</td>
			                <td class="tx-bold">${d.ins_nombre}</td>
			                <td class="tx-bold">${int_ext}</td>
			                <td class="tx-bold text-center">${estadoC}</td>
			            </tr>`;
					count++;
				});
				$("#tbodyEquiposI").html(html);
				$("#titleInsumosEquipos").html(
					`Check list asociados a equipo: <u>${equ_nombre}</u> ${total_asignado}/${total}`
				);
				if (total > 10) {
					$("#registros-pagina3").removeClass("d-none");
					$("#tbodyEquiposI").html(html);
					// paginacion(total, "tbodyEquiposI");
				} else {
					$("#tbodyEquiposI").html(html);
				}
			} else {
				html += `<tr><td class="text-center" colspan="2">${json[0].msgsql}</td></tr>`;
				$("#tbodyEquiposI").html(html);
				$("#registros-pagina3").addClass("d-none");
			}
		},
	});
};
const insumos = async (equ_id, equ_nombre) => {
	$("#mdlInsumosEquipos").modal();
	$("#txtEquidI").val(equ_id);
	$("#titleInsumosEquipos").html(
		`Insumos asociados a equipo: <u>${equ_nombre}</u>`
	);
	await listadoEquiposInsumos(equ_id, equ_nombre);
};

const estadoI = async (equ_id, ins_id, equins_id, equ_nombre) => {
	await $.ajax({
		type: "POST",
		url: base_url + "activa_equipos_insumos",
		data: { ins_id: ins_id, equ_id: equ_id, equins_id: equins_id },
		success: async (data) => {
			console.log(data);
		},
	});
	await listadoEquiposInsumos(equ_id, equ_nombre);
};
