$(document).ready(function() {
	listar_perfiles($("#frmPerfil").val());
	function listar_perfiles(nombre) {
		$.ajax({
			type: "POST",
			url: base_url + "fn_listado_perfiles",
			data: { prf_nombre: nombre, prf_paginacion: 0 },
			success: data => {
				let json = JSON.parse(data);
				let html = ``;
				let count = 1;
				let acceso = ``;
				let editar = ``;
				let estado = ``;
				let eliminar = ``;
				let total = 0;
				if (json[0].codesql == 1) {
					json.map(d => {
						total = d.prf_total;
						acceso = `<i class="fas fa-sitemap fa-pointer" onclick="acceso(${d.prf_codigo},'${d.prf_nombre}')"></i>`;
						editar = `<i class="fas fa-edit fa-pointer" onclick="editar(${d.prf_codigo},'${d.prf_nombre}')"></i>`;
						if (d.prf_activo == 1) {
							estado = `<i class="fas fa-toggle-on fa-pointer fa-enabled" onclick="estado(${d.prf_codigo},0)"></i>`;
						} else {
							estado = `<i class="fas fa-toggle-off fa-pointer fa-disabled" onclick="estado(${d.prf_codigo},1)"></i>`;
						}
						eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.prf_codigo},'${d.prf_nombre}')"></i>`;
						html += `<tr>
                            <td class="tx-bold">${count}</td>
                            <td>${d.prf_nombre}</td>
                            <td class="text-center">${acceso}</td>
                            <td class="text-center">${editar}</td>
                            <td class="text-center">${estado}</td>
                            <td class="text-center">${eliminar}</td>
                        </tr>`;
						count++;
					});
					$("#tbodyPerfil").html(html);
					if (total > 10) {
						$("#registros-pagina").removeClass("d-none");
						paginacion(total, "tbodyPerfil");
					}
				} else {
					html += `<tr><td class="text-center" colspan="6">${json[0].msgsql}</td></tr>`;
					$("#tbodyPerfil").html(html);
					$("#registros-pagina").addClass("d-none");
				}
			}
		});
	}
	$("#frmPerfil").bind("input propertychange", function() {
		listar_perfiles($(this).val());
	});
	$("#btnNuevo").click(function() {
		$("#fn_error").addClass("d-none");
		$("#mdlPerfil").modal();
		$("#titlePerfil").html("Nuevo Perfil");
		$("#txtId").val(0);
		$("#txtPerfil").val("");
	});
	editar = function(id, nombre) {
		$("#fn_error").addClass("d-none");
		$("#mdlPerfil").modal();
		$("#titlePerfil").html("Editar Perfil");
		$("#txtPerfil").val(nombre);
		$("#txtId").val(id);
	};
	$("#btnGuardarPerfil").click(function() {
		if ($("#txtPerfil").val() != "") {
			$.ajax({
				type: "POST",
				url: base_url + "fn_guarda_perfil",
				data: {
					prf_codigo: $("#txtId").val(),
					prf_nombre: $("#txtPerfil").val()
				},
				success: data => {
					let json = JSON.parse(data);
					if (json[0].codesql != 0) {
						alertify.notify(`${json[0].msgsql}`, "success", 5);
						listar_perfiles($("#frmPerfil").val());
						$("#mdlPerfil").modal("hide");
					} else {
						$("#fn_error").removeClass("d-none", "d-none");
						$("#fn_error").html(
							`<i class="fas fa-exclamation-triangle fa-warning"></i> ${json[0].msgsql}`
						);
					}
				}
			});
		} else {
			$("#fn_error").removeClass("d-none", "d-none");
			$("#fn_error").html(
				`<i class="fas fa-exclamation-triangle fa-warning"></i> Antes de guardar, favor ingrese un nombre para el perfil.`
			);
		}
	});

	eliminar = function(id, nombre) {
		$("#mdlEliminar").modal();
		$("#titleEliminar").html(
			`<small>Esta seguro de eliminar el perfil:<b>${nombre}</b></small>`
		);
		$("#idEliminar").val(id);
	};
	$("#btnEliminar").click(function() {
		$.ajax({
			type: "POST",
			url: base_url + "fn_elimina_perfil",
			data: { prf_codigo: $("#idEliminar").val() },
			success: data => {
				let json = JSON.parse(data);
				if (json[0].codesql == 1) {
					alertify.notify(`${json[0].msgsql}`, "success", 5);
					listar_perfiles($("#frmPerfil").val());
				} else {
					alertify.notify(`${json[0].msgsql}`, "warning", 5);
					listar_perfiles($("#frmPerfil").val());
				}
			}
		});
	});

	estado = function(id, activo) {
		$.ajax({
			type: "POST",
			url: base_url + "fn_activa_perfil",
			data: { prf_codigo: id, prf_activo: activo },
			success: data => {
				let json = JSON.parse(data);
				console.log(json);
				listar_perfiles($("#frmPerfil").val());
			}
		});
	};
});
