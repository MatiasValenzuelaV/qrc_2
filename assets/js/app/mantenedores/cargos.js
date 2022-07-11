$(document).ready(function () {
	function listar_cargos(car_nombre = "") {
		$.ajax({
			type: "POST",
			url: base_url + "CargoController/fn_lista_cargos",
			data: { car_nombre: car_nombre },
			success: (data) => {
				let json = JSON.parse(data);
				let html,
					editar,
					eliminar = ``;
				let count = 1;
				let total = 0;
				if (json[0].codesql == 1) {
					total = json[0].car_total;
					json.map((d) => {
						editar = `<i class="fas fa-edit fa-pointer" onclick="editar(${d.car_id},'${d.car_nombre}')"></i>`;
						eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.car_id},'${d.car_nombre}')"></i>`;
						html += `<tr>
							<td class="tx-bold tx-center">${count}</td>
							<td>${d.car_nombre}</td>
							<td class="tx-center">${editar}</td>
							<td class="tx-center">${eliminar}</td>
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
	listar_cargos($("#frmCargo").val());
	$("#frmCargo").bind("input propertychange", function () {
		listar_cargos($("#frmCargo").val());
	});
	$("#btnNuevo").click(function () {
		$("#mdlNuevo").modal();
		$("#titleNuevo").html("Nuevo Cargo");
		$("#txtCargo").val("");
		$("#txtId").val(0);
	});
	$("#btnGuardar").click(function () {
		if ($("#txtCargo").val() == "") {
			$("#fn_error").removeClass("d-none", "d-none");
			$("#fn_error").html(
				`<i class="fas fa-exclamation-triangle fa-warning"></i> Antes de guardar, favor ingrese un nombre para el cargo.`
			);
			$("#txtCargo").focus();
		} else {
			$.ajax({
				type: "POST",
				url: base_url + "CargoController/fn_guarda_cargo",
				data: { car_id: $("#txtId").val(), car_nombre: $("#txtCargo").val() },
				success: (data) => {
					let json = JSON.parse(data);
					if (json[0].codesql != 0) {
						mdtoast(`${json[0].msgsql}`, {
							duration: 3000,
							type: mdtoast.SUCCESS,
						});
						listar_cargos($("#frmCargo").val());
						$("#mdlNuevo").modal("hide");
					} else {
						$("#fn_error").removeClass("d-none", "d-none");
						$("#fn_error").html(
							`<i class="fas fa-exclamation-triangle fa-warning"></i> ${json[0].msgsql}`
						);
						$("#txtCargo").focus();
					}
				},
			});
		}
	});
	editar = (car_id, car_nombre) => {
		$("#fn_error").addClass("d-none");
		$("#mdlNuevo").modal();
		$("#titleNuevo").html("Editar Cargo");
		$("#txtId").val(car_id);
		$("#txtCargo").val(car_nombre);
	};
	eliminar = (car_id, car_nombre) => {
		$("#mdlEliminar").modal();
		$("#titleEliminar").html(
			`<small>Esta seguro de eliminar el cargo: <b>${car_nombre}</b></small>`
		);
		$("#idEliminar").val(car_id);
	};
	$("#btnEliminar").click(async function () {
		await $.ajax({
			type: "POST",
			url: base_url + "CargoController/fn_elimina_cargo",
			data: { car_id: $("#idEliminar").val() },
			success: (data) => {
				let json = JSON.parse(data);
				if (json[0].codesql == 1) {
					mdtoast(`${json[0].msgsql}`, {
						duration: 3000,
						type: mdtoast.SUCCESS,
					});
				} else {
					mdtoast(`${json[0].msgsql}`, {
						duration: 3000,
						type: mdtoast.WARNING,
					});
				}
				listar_cargos($("#frmCargo").val());
			},
		});
	});
});
