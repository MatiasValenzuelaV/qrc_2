$(document).ready(function () {
	function listado_equipos(nombre = "") {
		$.ajax({
			type: "POST",
			url: base_url + "listado_equipos",
			data: { equ_nombre: nombre },
			success: (data) => {
				let json = JSON.parse(data);
				let html = ``;
				let count = 1;
				let total = 0;
				let checklist,
					insumos,
					editar,
					estado,
					eliminar = ``;
				if (json[0].codesql == 1) {
					total = json[0].equ_total;
					json.map((d) => {
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
                            <td class="tx-center">${checklist}</td>
                            <td class="tx-center">${insumos}</td>
                            <td class="tx-center">${editar}</td>
                            <td class="tx-center">${estado}</td>
                            <td class="tx-center">${eliminar}</td>
                        </tr>`;
						count++;
					});					
					if (total > 10) {
						$("#registros-pagina").removeClass("d-none");
						paginacion(total, "tbodyEquipos");
						$("#tbodyEquipos").html(html);
					} else {
						$("#registros-pagina").addClass("d-none");
						$("#tbodyEquipos").html(html);
					}
				} else {
					html += `<tr><td class="text-center" colspan="7">${json[0].msgsql}</td></tr>`;
					$("#registros-pagina").addClass("d-none");
					$("#tbodyEquipos").html(html);
				}
			},
		});
	}
	listado_equipos($("#frmEquipos").val());
	$("#frmEquipos").bind("input propertychange", function () {
		listado_equipos($(this).val());
	});
	$("#btnNuevo").click(function () {
		$("#fn_error").addClass("d-none");
		$("#mdlEquipos").modal();
		$("#titleEquipos").html("Nuevo Tipo equipo");
		$("#txtId").val(0);
		$("#txtEqunombre").val("");
		$("#txtEqunombre").focus();
	});
	function guarda_equipos(equ_id, equ_nombre) {
		if ($("#txtEqunombre").val() == "") {
			$("#fn_error").removeClass("d-none", "d-none");
			$("#fn_error").html(
				`<i class="fas fa-exclamation-triangle fa-warning"></i> Antes de guardar, favor ingrese un nombre para el equipo.`
			);
			$("#txtEqunombre").focus();
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
	}
	$("#btnSetEquipo").click(function () {
		guarda_equipos($("#txtEquid").val(), $("#txtEqunombre").val());
	});
	function listadoEquiposChecklist(equ_id, equ_nombre) {
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
					$("#tbodyEquiposC").html(html);
					if (total > 10) {
						$("#registros-pagina2").removeClass("d-none");
						// paginacion2(total, "tbodyEquiposC", 10, "registros-pagina2");
					}
				} else {
					html += `<tr><td class="text-center" colspan="2">${json[0].msgsql}</td></tr>`;
					$("#registros-pagina2").addClass("d-none");
					$("#tbodyEquiposC").html(html);
				}
			},
		});
	}
	checklist = function (equ_id, equ_nombre) {
		$("#mdlCheckListEquipos").modal();
		$("#txtEquidC").val(equ_id);
		$("#titleChecklistEquipos").html(
			`Check list asociados a equipo: <u>${equ_nombre}</u>`
		);
		listadoEquiposChecklist(equ_id, equ_nombre);
	};
});
