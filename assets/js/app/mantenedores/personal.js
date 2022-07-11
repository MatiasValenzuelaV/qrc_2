"use strict";

const personal = async (per_nombre, per_rut) => {
  $.ajax({
    type: "POST",
    url: base_url + "PersonalController/fn_lista_personal",
    data: { per_nombre: per_nombre, per_rut: per_rut },
    success: (data) => {
      let json = JSON.parse(data);
      let html = ``;
      let count = 1;
      let per_total = 0;
      let editar = ``;
      let estado = ``;
      let eliminar = ``;
      let firma = ``;
      if (json[0].codesql == 1) {
        json.map((d) => {
          editar = `<i class="fas fa-edit fa-pointer" onclick="editar(${d.per_id},'${d.per_nombre}','${d.per_rut}',${d.car_id},'${d.per_correo}')"></i>`;
          if (d.per_activo == 1) {
            estado = `<i class="fas fa-toggle-on fa-pointer fa-enabled" onclick="estado(${d.per_id},0)"></i>`;
          } else {
            estado = `<i class="fas fa-toggle-off fa-pointer fa-disabled" onclick="estado(${d.per_id},1)"></i>`;
          }
          if (d.per_firma != "") {
            firma = `<i class="fab fa-draft2digital fa-pointer" onclick="firma(${d.per_id},'${d.per_firma}')"></i>`;
          } else {
            firma = ``;
          }
          eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.per_id},'${d.per_nombre}')"></i>`;
          per_total = d.per_total;
          html += `<tr>
                        <td>${count}</td>
                        <td>${d.per_rut}</td>
                        <td>${d.per_nombre}</td>
                        <td>${d.per_correo}</td>
                        <td>${d.car_nombre}</td>
                        <td class="tx-center">${editar}</td>
                        <td class="tx-center">${firma}</td>
                        <td class="tx-center">${eliminar}</td>
                    </tr>`;

          count++;
        });
        if (per_total > 10) {
          $("#tbodyPersonal").html(html);
          $("#registros-pagina").removeClass("d-none");
          paginacion(per_total, "tbodyPersonal");
        } else {
          $("#tbodyPersonal").html(html);
          $("#registros-pagina").addClass("d-none");
        }
      } else {
        html += `<tr><td colspan="7" class="text-center">No se han encontrado registros, cambie los párametros de búsqueda o intente nuevamente.</td></tr>`;
        $("#tbodyPersonal").html(html);
      }
    },
  });
};
function carga_cargos() {
  $.ajax({
    type: "POST",
    url: base_url + "CargoController/fn_lista_cargos",
    data: { car_nombre: "" },
    success: (data) => {
      let json = JSON.parse(data);
      let html = `<option value="0">SELECCIONE UN CARGO</option>`;
      json.map((d) => {
        html += `<option value="${d.car_id}">${d.car_nombre}</option>`;
      });
      $("#slcCargo").html(html);
    },
  });
}
carga_cargos();

personal($("#frmNombre").val(), $("#frmRut").val());

$("#frmNombre").bind("input propertychange", function () {
  personal($(this).val(), $("#frmRut").val());
});
$("#frmRut").bind("input propertychange", function () {
  personal($("#frmNombre").val(), $(this).val());
});
$("#btnNuevo").click(function () {
  $("#mdlPersonal").modal();
  $("#titlePersonal").html("Nuevo Personal");
  $("#txtPerId").val(0);
  $("#txtPersonal").val("");
  $("#txtRut").val("");
  $("#txtCorreo").val("");
  $("#slcCargo").val(0);
});
function valida_vacios() {
  if ($("#txtRut").val() == "") {
    $("#fn_error").removeClass("d-none", "d-none");
    $("#fn_error").html(
      `<i class="fas fa-exclamation-triangle fa-warning"></i> Antes de guardar, favor ingrese un rut para el personal.`
    );
    $("#txtRut").focus();
    return true;
  }
  if ($("#txtPersonal").val() == "") {
    $("#fn_error").removeClass("d-none", "d-none");
    $("#fn_error").html(
      `<i class="fas fa-exclamation-triangle fa-warning"></i> Antes de guardar, favor ingrese un nombre para el personal.`
    );
    $("#txtPersonal").focus();
    return true;
  }
  return false;
}
$("#btnGuardar").click(function () {
  if (valida_vacios() != true) {
    $("#fn_error").addClass("d-none", "d-none");
    let rut = $("#txtRut").val();
    rut = rut.replace(".", "").replace(".", "").replace(".", "");
    console.log(rut);
    // let firma = document.querySelector("#txtFileImgPersonal").files[0].name;
    console.log(firma);
    // firma.val("C://");
    $.ajax({
      type: "POST",
      url: base_url + "PersonalController/fn_guarda_personal",
      data: {
        per_id: $("#txtPerId").val(),
        per_nombre: $("#txtPersonal").val(),
        per_rut: rut,
        per_correo: $("#txtCorreo").val(),
        car_id: $("#slcCargo").val(),
      },
      success: (data) => {
        let json = JSON.parse(data);
        if (json[0].codesql != 0) {
          mdtoast(`${json[0].msgsql}`, {
            duration: 5000,
            type: mdtoast.SUCCESS,
          });
          personal($("#frmNombre").val(), $("#frmRut").val());
          $("#mdlPersonal").modal("hide");
        } else {
          $("#fn_error").removeClass("d-none", "d-none");
          $("#fn_error").html(
            `<i class="fas fa-exclamation-triangle fa-warning"></i> ${json[0].msgsql}`
          );
        }
      },
    });
  }
});

const editar = (per_id, per_nombre, per_rut, car_id, per_correo) => {
  $("#fn_error").addClass("d-none");
  $("#mdlPersonal").modal();
  $("#titlePersonal").html("Editar Personal");
  $("#txtPerId").val(per_id);
  $("#txtPersonal").val(per_nombre);
  $("#txtRut").val(per_rut);
  $("#txtCorreo").val(per_correo);
  $("#slcCargo").val(car_id);
};

const firma = (per_id, per_firma) => {
  $("#mdlFirma").modal();
  $("#idPersonalF").val(per_id);
  $("#firmaPersonal").attr(
    "src",
    `https://qrc.acbingenieria.cl/assets/firmas/${per_firma}`
  );
};
// const estado = async (per_id, per_activo) => {
// 	await $.ajax({
// 		type: "POST",
// 		url: base_url + "PersonalController/fn_activa_personal",
// 		data: { per_id: per_id, per_activo: per_activo },
// 		succes: async (data) => {
// 			return data;
// 		},
// 	});
// 	await personal($("#frmNombre").val(), $("#frmRut").val());
// };
const eliminar = (per_id, per_nombre) => {
  $("#mdlEliminar").modal();
  $("#titleEliminar").html(
    `<small>Esta seguro de eliminar el personal: <b>${per_nombre}</b></small>`
  );
  $("#idEliminar").val(per_id);
};
$("#btnEliminar").click(async function () {
  await $.ajax({
    type: "POST",
    url: base_url + "PersonalController/fn_elimina_personal",
    data: { per_id: $("#idEliminar").val() },
    success: (data) => {
      let json = JSON.parse(data);
      if (json[0].codesql == 1) {
        alertify.notify(`${json[0].msgsql}`, "success", 5);
      } else {
        alertify.notify(`${json[0].msgsql}`, "warning", 5);
      }
    },
  });
  await personal($("#frmNombre").val(), $("#frmRut").val());
});
listadoPerfiles();
function listadoPerfiles() {
  $.ajax({
    type: "POST",
    data: { prf_id: 0 },
    url: base_url + "PerfilController/lista_perfil",
    success: (data) => {
      let json = JSON.parse(data);
      console.log(json);
    },
  });
}
