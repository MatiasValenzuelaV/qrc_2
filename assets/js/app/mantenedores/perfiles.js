listado_perfiles();
function listado_perfiles() {
	$.ajax({
		type: "POST",
		data: { prf_id: $("#frmPerfil").val() },
		url: base_url + "PerfilController/lista_perfil",
		success: (data) => {
			let json = JSON.parse(data);
			let html = ``;
			let count = 1;
			let total = 0;
			let editar,
				eliminar,
				acceso = "";
			if (json[0].codesql > 0) {
				total = json[0].prf_total;
				json.map((d) => {
					editar = `<i class="fas fa-edit fa-pointer" onclick="editar(${d.prf_id},'${d.prf_nombre}')"></i>`;
					eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.prf_id},'${d.prf_nombre}')"></i>`;
					acceso = `<i class="fas fa-sitemap fa-pointer" onclick="acceso(${d.prf_id},'${d.prf_nombre}')"></i>`;
					html += `<tr>
                    <td class="tx-center tx-bold">${count}</td>
                    <td>${d.prf_nombre}</td>
                    <td class="tx-center tx-15">${acceso}</td>
                    <td class="tx-center tx-15">${editar}</td>
                    <td class="tx-center tx-15">${eliminar}</td>
                </tr>`;
					count++;
				});
				if (total > 10) {
					$("#registros-pagina").removeClass("d-none");
					paginacion(total, "tbody");
					$("#tbody").html(html);
				} else {
					$("#registros-pagina").addClass("d-none");
					$("#tbody").html(html);
				}
			} else {
				html += `<tr><td class="tx-center" colspan="4">${json[0].msgsql}</td></tr>`;
				$("#registros-pagina").addClass("d-none");
				$("#tbody").html(html);
			}
		},
	});
}
$("#frmPerfil").change(function () {
	listado_perfiles();
});
$("#btnNuevo").click(function () {
	$("#mdlPerfiles").modal();
	$("#mdlNuevoTitle").html("Nuevo Perfil");
	$("#mPrfID").val(0);
	$("#mPrfNombre").val("");
	$("#fn_error").addClass("d-none", "d-none");
});
$("#btnGuardar").click(function () {
	if ($("#mPrfNombre").val() == "") {
		$("#fn_error").removeClass("d-none", "d-none");
		$("#fn_error").html(
			`<i class="fas fa-exclamation-triangle fa-warning"></i> Antes de guardar, favor ingrese un nombre para el perfil.`
		);
		$("#mPrfNombre").focus();
	}
});
editar = function (prf_id, prf_nombre) {
	$("#mdlPerfiles").modal();
	$("#mdlNuevoTitle").html("Editar Perfil");
	$("#mPrfID").val(prf_id);
	$("#mPrfNombre").val(prf_nombre);
	$("#fn_error").addClass("d-none", "d-none");
};

function lista_perfil_menu(prf_id) {
	$.ajax({
		type: "POST",
		data: { prf_id: prf_id },
		url: base_url + "PerfilController/lista_perfil_menu",
		success: (data) => {
			let json = JSON.parse(data);
			let html,
				seleccionado = ``;
			json.map((d) => {
				if (d.codesql == 1) {
					if (d.men_padre == 1) {
						men_nombre = d.men_nombre;
						men_class = "";
						men_c = `tx-bold`;
						if (d.men_padresingle == 1) {
							if (d.men_seleccionado == 1) {
								seleccionado = `<i class="fas fa-check-square" onclick="selecciona(${d.men_id},0)"></i>`;
							} else {
								seleccionado = `<i class="fas fa-square" onclick="selecciona(${d.men_id},1)"></i>`;
							}
						} else {
							seleccionado = ``;
						}
					} else {
						men_nombre = d.men_nombre;
						men_class = "padding-left: 8%!important;";
						men_c = ``;
						if (d.men_seleccionado == 1) {
							seleccionado = `<i class="fas fa-check-square" onclick="selecciona(${d.men_id},0)"></i>`;
						} else {
							seleccionado = `<i class="fas fa-square" onclick="selecciona(${d.men_id},1)"></i>`;
						}
					}

					html += `<tr>
            <td class="${men_c}" style="${men_class}">${men_nombre}</td>
            <td class="tx-center">${seleccionado}</td>
          </tr>`;
				}
			});
			if (html != "") {
				$("#tbodyMenu").html(html);
			}
		},
	});
}
acceso = function (prf_id, prf_nombre) {
	$("#mdlAcceso").modal();
	$("#mdlTitle").html("Asignación de opciones del menú");
	$("#maID").val(prf_id);
	$("#maPrfNombre").val(prf_nombre);
	$("#fn_error").addClass("d-none", "d-none");
	lista_perfil_menu(prf_id);
};

$("#btnGuardar").click(() => {
	$.ajax({
		type: "POST",
		url: base_url + "PerfilController/guarda_perfil",
		data: { prf_id: $("#mPrfID").val(), prf_nombre: $("#mPrfNombre").val() },
		success: (data) => {
			let json = JSON.parse(data);
			if (json[0].codesql != 0) {
				mdtoast(`${json[0].msgsql}`, {
					duration: 5000,
					type: mdtoast.SUCCESS,
				});
				$("#mdlPerfiles").modal("hide");
			}
			listado_perfiles();
		},
	});
});

selecciona = function (men_id, pmen_activo) {
	$.ajax({
		type: "POST",
		url: base_url + "PerfilController/guarda_perfil_menu",
		data: {
			men_id: men_id,
			pmen_activo: pmen_activo,
			prf_id: $("#maID").val(),
		},
		success: (data) => {
			let json = JSON.parse(data);
			if (json[0].codesql == 1) {
				lista_perfil_menu($("#maID").val());
			}
		},
	});
};

eliminar = (prf_id, prf_nombre) => {
	$("#mdlEliminar").modal();
	$("#titleEliminar").html(
		`<small>Esta seguro de eliminar el perfil: <b>${prf_nombre}</b></small>`
	);
	$("#idEliminar").val(prf_id);
};
