"use strict";
listadoImpresoras($("#frmImpresora").val());
function listadoImpresoras(imp_nombre = "") {
	$.ajax({
		type: "POST",
		url: base_url + "listado_impresoras",
		data: { imp_nombre: imp_nombre },
		success: data => {
			let json = JSON.parse(data);
			let html = ``;
			let count = 1;
			let editar = ``;
            let eliminar = ``;
            let total = 0;
			if (json[0].codesql == 1) {
				json.map(d => {
                    total = d.imp_total;
					editar = `<i class="fas fa-edit fa-pointer" onclick="editar(${d.imp_codigo},'${d.imp_nombre}')"></i>`;
					eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.imp_codigo},'${d.imp_nombre}')"></i>`;
					html += `<tr>
                        <td class="tx-bold">${count}</td>
                        <td>${d.imp_nombre}</td>
                        <td class="text-center">${editar}</td>
                        <td class="text-center">${eliminar}</td>
                    </tr>`;
					count++;
				});
                $("#tbodyImpresora").html(html);
                if (total > 10) {
                    $("#registros-pagina").removeClass("d-none");
                    paginacion(total, "tbodyImpresora");
                }
			} else {
				html += `<tr><td class="text-center" colspan="4">${json[0].msgsql}</td></tr>`;
				$("#tbodyImpresora").html(html);
				$("#registros-pagina").addClass("d-none");
			}
		}
	});
}
$("#frmImpresora").bind("input propertychange", function() {
	listadoImpresoras($(this).val());
});
$("#btnNuevo").click(function() {
	$("#titleImpresora").html("Nueva Impresora");
	$("#mdlImpresoras").modal();
	$("#txtId").val(0);
	$("#txtImpresora").val("");
	$("#fn_error").addClass("d-none");
});
function editar(imp_codigo, imp_nombre) {
	$("#titleImpresora").html("Editar Impresora");
	$("#mdlImpresoras").modal();
	$("#txtId").val(imp_codigo);
	$("#txtImpresora").val(imp_nombre);
}
function eliminar(imp_codigo, imp_nombre) {
	$("#mdlEliminar").modal();
	$("#idEliminar").val(imp_codigo);
	$("#codeEliminar").val(0);
	$("#contEliminar").html(
		`<i class="fas fa-exclamation-triangle tx-100 tx-warning lh-1 mg-t-20 d-inline-block"></i>
        <h4 class="tx-black  tx-semibold mg-b-20" id="titleEliminar">
            <small>Esta seguro de eliminar la impresora: <br><b>${imp_nombre}</b></small>
        </h4>`
	);
}
$("#btnEliminar").click(function() {
	$.ajax({
		type: "POST",
		url: base_url + "elimina_impresora",
		data: {
			imp_codigo: $("#idEliminar").val(),
			imp_codigo_eliminar: $("#codeEliminar").val()
		},
		success: data => {
			let json = JSON.parse(data);
			if (json[0].codesql > 0) {
				if (json[0].codesql == 1) {
					$("#codeEliminar").val(0);
					alertify.notify(`${json[0].msgsql}`, "success", 5);
					$("#mdlEliminar").modal("hide");
				} else {
					if ($("#codeEliminar").val() == 0) {
						$("#codeEliminar").val(1);
						$("#contEliminar").html(
							`<i class="fas fa-times tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                            <h4 class="tx-black  tx-semibold mg-b-20" id="titleEliminar">
                                ${json[0].msgsql}
                            </h4>`
						);
					} else {
						alertify.notify(`${json[0].msgsql}`, "success", 5);
						$("#mdlEliminar").modal("hide");
					}
				}
			} else {
				alertify.notify(`${json[0].msgsql}`, "warning", 5);
			}
			listadoImpresoras($("#frmImpresora").val());
		}
	});
});
$("#btnGuardarImpresora").click(function() {
	if ($("#txtImpresora").val() == "") {
		$("#fn_error").removeClass("d-none");
		$("#fn_error").html(
			"<i class='fas fa-exclamation-triangle fa-warning'></i> Antes de guardar asegúrese de ingresar el nombre para la impresora."
		);
	} else {
		$("#fn_error").addClass("d-none");
		$.ajax({
			type: "POST",
			url: base_url + "guarda_impresora",
			data: {
				imp_codigo: $("#txtId").val(),
				imp_nombre: $("#txtImpresora").val()
			},
			success: data => {
				let json = JSON.parse(data);
				if (json[0].codesql == 1) {
					alertify.notify(`${json[0].msgsql}`, "success", 5);
					$("#mdlImpresoras").modal("hide");
				} else {
					$("#fn_error").removeClass("d-none");
					$("#fn_error").html(
						"<i class='fas fa-exclamation-triangle fa-warning'></i> " +
							json[0].msgsql
					);
				}
				listadoImpresoras($("#frmImpresora").val());
			}
		});
	}
});
