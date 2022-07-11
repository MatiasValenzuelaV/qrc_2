$(document).ready(function () {
  carga_combo_perfiles("slcPerfil");
  function carga_combo_perfiles(selector) {
    $.ajax({
      type: "POST",
      url: base_url + "carga_combo_perfiles",
      success: (data) => {
        let json = JSON.parse(data);
        let html = ``;
        json.map((d) => {
          html += `<option value="${d.prf_codigo}">${d.prf_nombre}</option>`;
        });
        $(`#${selector}`).html(html);
      },
    });
  }
  listado_usuarios($("#slcPerfil").val(), $("#frmUsuario").val());
  function listado_usuarios(prf_codigo, per_nombre, usu_paginacion = 0) {
    $.ajax({
      type: "POST",
      url: base_url + "listado_usuarios",
      data: {
        prf_codigo: prf_codigo,
        per_nombre: per_nombre,
        usu_paginacion: usu_paginacion,
      },
      success: (data) => {
        let json = JSON.parse(data);
        let html = ``;
        let count = 1;
        let estado = ``;
        let eliminar = ``;
        let editar = ``;
        let clave = ``;
        if (json[0].codesql == 1) {
          json.map((d) => {
            editar = `<i class="fas fa-edit fa-pointer" onclick="editar(${d.usu_codigo})"></i>`;
            if (d.usu_activo == 1) {
              estado = `<i class="fas fa-toggle-on fa-pointer fa-enabled" onclick="estado(${d.usu_codigo},0)"></i>`;
            } else {
              estado = `<i class="fas fa-toggle-off fa-pointer fa-disabled" onclick="estado(${d.usu_codigo},1)"></i>`;
            }
            eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.usu_codigo},'${d.per_nombre}')"></i>`;
            clave = `<i class='fas fa-unlock-alt fa-pointer' onclick='cambioClave(${d.usu_codigo})'></i>`;
            html += `<tr>
                            <td class="tx-bold">${count}</td>
                            <td>${d.per_nombre}</td>
                            <td>${d.usu_usuario}</td>
                            <td>${d.prf_nombre}</td>
                            <td class="text-center">${d.imp_nombre}</td>
                            <td class="text-center">${d.usu_equipo}</td>
                            <td class="text-center">${clave}</td>
                            <td class="text-center">${editar}</td>
                            <td class="text-center">${estado}</td>
                            <td class="text-center">${eliminar}</td>
                        </tr>`;
            count++;
          });
          $("#table-registros").html(html);
        } else {
          html += `<tr><td class="text-center" colspan="10">${json[0].msgsql}</td></tr>`;
          $("#table-registros").html(html);
          $("#registros-pagina").addClass("d-none");
        }
      },
    });
  }
  carga_combo_impresoras();
  function carga_combo_impresoras() {
    $.ajax({
      type: "POST",
      url: base_url + "carga_combo_impresoras",
      success: (data) => {
        let json = JSON.parse(data);
        let html = ``;
        if (json[0].codesql == 1) {
          json.map((d) => {
            html += `<option value="${d.imp_codigo}">${d.imp_nombre}</option>`;
          });
          $("#mdlImpresora").html(html);
        }
      },
    });
  }
  carga_combo_perfiles("mdlPerfil");
  carga_combo_impresoras();
  $("#frmUsuario").bind("input propertychange", function () {
    listado_usuarios($("#slcPerfil").val(), $(this).val());
  });
  $("#slcPerfil").change(function () {
    listado_usuarios($(this).val(), $("#frmUsuario").val());
  });
  editar = function (usu_codigo) {
    $("#titleUsuarios").html("Editar Usuario");
    $("#mdlUsuarios").modal();
    $("#frmClave").addClass("d-none");
    $("#dtlPersonal").attr("disabled", "disabled");
    $.ajax({
      type: "POST",
      url: base_url + "carga_datos_usuario",
      data: { usu_codigo: usu_codigo },
      success: (data) => {
        let json = JSON.parse(data);
        if (json[0].codesql == 1) {
          $("#mdlID").val(usu_codigo);
          $("#mdlIDPersona").val(json[0].per_codigo);
          $("#mdlRut").val(json[0].per_rut);
          $("#dtlPersonal").val(json[0].per_nombre);
          $("#mdlUsuario").val(json[0].usu_usuario);
          $("#mdlPerfil").val(json[0].prf_codigo);
          $("#mdlImpresora").val(json[0].imp_codigo);
          $("#mdlEquipo").val(json[0].usu_equipo);
        } else {
          $("#mdlUsuarios").modal("hide");
        }
      },
    });
  };
  listado_personales();
  function listado_personales(
    per_rut = "",
    per_nombre = "",
    cco_codigo = 0,
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
        json.map((d) => {
          html += `<option value="${d.per_nombre}" data-codigo="${d.per_codigo}">${d.per_rut}</option>`;
        });
        $("#personal").html(html);
      },
    });
  }
  function limpia_campos() {
    $("#mdlID").val(0);
    $("#mdlRut").val("");
    $("#mdlNombre").val("");
    $("#mdlUsuario").val("");
    $("#mdlPerfil").val(0);
    $("#mdlImpresora").val(0);
    $("#dtlPersonal").val("");
    $("#mdlPassword").val("");
    $("#mdlIDPersona").val("");
    $("#mdlEquipo").val("");
  }
  $("#btnNuevo").click(function (e) {
    e.preventDefault();
    limpia_campos();
    $("#titleUsuarios").html("Nuevo Usuario");
    $("#mdlUsuarios").modal();
    $("#frmClave").removeClass("d-none");
    $("#fn_error").addClass("d-none");
    $("#dtlPersonal").removeAttr("disabled", "disabled");
  });
  $("#mdlRut").bind("input propertychange", function () {
    if ($(this).val() == "") {
      $("#dtlPersonal").val("");
      $("#mdlIDPersona").val("");
    }
  });
  $("input#mdlRut").rut({ formatOn: "keyup" });
  $("input#mdlRut")
    .rut({ validateOn: "change focusout" })
    .on("rutInvalido", function (e) {
      if (!$("input#mdlRut").val() == "") {
        $("#fn_error").removeClass("d-none");
        $("#fn_error").html(
          "<i class='fas fa-exclamation-triangle fa-warning'></i> El rut digitado es inválido, revise la información y vuelva a intentarlo."
        );
        $("#dtlPersonal").val("");
        $("#mdlIDPersona").val("");
      }
    })
    .on("rutValido", function (e) {
      $("#fn_error").addClass("d-none");
      if (!$("input#mdlRut").val() == "") {
        $.ajax({
          type: "POST",
          url: base_url + "verifica_rut",
          data: { per_rut: $("input#mdlRut").val() },
          success: (data) => {
            let json = JSON.parse(data);
            console.log(json);
            if (json[0].codesql == 1) {
              $("#fn_error").addClass("d-none");
              $("#mdlIDPersona").val(json[0].per_codigo);
              $("#mdlNombre").val(json[0].per_nombre);
              $("#dtlPersonal").val(json[0].per_nombre);
            } else {
              $("#fn_error").removeClass("d-none");
              $("#fn_error").html(
                "<i class='fas fa-exclamation-triangle fa-warning'></i> " +
                  json[0].msgsql
              );
            }
          },
        });
      }
    });
  $("#dtlPersonal").change(function () {
    $("#fn_error").addClass("d-none");
    $("#mdlRut").val(
      $("#personal option[value='" + $("#dtlPersonal").val() + "']").text()
    );
    $("#mdlIDPersona").val(
      $("#personal option[value='" + $("#dtlPersonal").val() + "']").attr(
        "data-codigo"
      )
    );
  });
  function validate_data() {
    if ($("#mdlIDPersona").val() == "") {
      $("#fn_error").removeClass("d-none");
      $("#fn_error").html(
        "<i class='fas fa-exclamation-triangle fa-warning'></i> Antes de guardar asegurese de seleccionar un nombre del personal."
      );
      $("#mdlIDPersona").focus();
      return false;
    }

    if ($("#mdlPerfil").val() == "") {
      $("#fn_error").removeClass("d-none");
      $("#fn_error").html(
        "<i class='fas fa-exclamation-triangle fa-warning'></i> Antes de guardar asegúrese de seleccionar el perfil que tendrá el usuario."
      );
      return false;
    }

    if ($("#mdlUsuario").val() == "") {
      $("#fn_error").removeClass("d-none");
      $("#fn_error").html(
        "<i class='fas fa-exclamation-triangle fa-warning'></i> Antes de guardar asegúrese de ingresar el nombre usuario con el que accederá al sistema."
      );
      return false;
    }
    if ($("#mdlID").val() == 0) {
      if (!$("#mdlPassword").hasClass("d-none")) {
        if ($("#mdlPassword").val() == "") {
          $("#fn_error").removeClass("d-none");
          $("#fn_error").html(
            "<i class='fas fa-exclamation-triangle fa-warning'></i> Antes de guardar asegúrese de ingresar la clave de usuario."
          );
          return false;
        } else {
          if ($("#mdlPasswordC").val() == "") {
            $("#fn_error").removeClass("d-none");
            $("#fn_error").html(
              "<i class='fas fa-exclamation-triangle fa-warning'></i> Antes de guardar asegúrese de ingresar la confirmación de la clave de usuario."
            );
            return false;
          } else {
            if ($("#mdlPasswordC").val() != $("#mdlPassword").val()) {
              $("#fn_error").removeClass("d-none");
              $("#fn_error").html(
                "<i class='fas fa-exclamation-triangle fa-warning'></i> Las claves no coinciden, asegurese de que sean las mismas."
              );
              return false;
            }
          }
        }
      }
    }

    return true;
  }
  $("#btnGuardar").click(function (e) {
    e.preventDefault();
    if (validate_data()) {
      $.ajax({
        type: "POST",
        url: base_url + "guarda_usuario",
        data: {
          per_codigo: $("#mdlIDPersona").val(),
          prf_codigo: $("#mdlPerfil").val(),
          usu_codigo: $("#mdlID").val(),
          usu_usuario: $("#mdlUsuario").val(),
          usu_clave: $("#mdlPassword").val(),
          imp_codigo: $("#mdlImpresora").val(),
          usu_equipo: $("#mdlEquipo").val(),
        },
        success: (data) => {
          let json = JSON.parse(data);
          if (json[0].codesql == 1) {
            alertify.notify(`${json[0].msgsql}`, "success", 5);
            $("#mdlUsuarios").modal("hide");
          } else {
            $("#fn_error").removeClass("d-none");
            $("#fn_error").html(
              "<i class='fas fa-exclamation-triangle fa-warning'></i> " +
                json[0].msgsql
            );
          }
          listado_usuarios($("#slcPerfil").val(), $("#frmUsuario").val());
        },
      });
    } else {
    }
  });
  eliminar = function (usu_codigo, personal) {
    $("#mdlEliminar").modal();
    $("#idEliminar").val(usu_codigo);
    $("#titleEliminar").html(
      `<small>Esta seguro de eliminar el usuario: <br><b>${personal}</b></small>`
    );
  };
  $("#btnEliminar").click(function () {
    $.ajax({
      type: "POST",
      url: base_url + "elimina_usuario",
      data: { usu_codigo: $("#idEliminar").val() },
      success: (data) => {
        let json = JSON.parse(data);
        if (json[0].codesql == 1) {
          alertify.notify(`${json[0].msgsql}`, "success", 5);
        } else {
          alertify.notify(`${json[0].msgsql}`, "warning", 5);
        }
        listado_usuarios($("#slcPerfil").val(), $("#frmUsuario").val());
      },
    });
  });
  estado = function (id, activo) {
    $.ajax({
      type: "POST",
      url: base_url + "activa_usuario",
      data: { usu_codigo: id, usu_activo: activo },
      success: (data) => {
        listado_usuarios($("#slcPerfil").val(), $("#frmUsuario").val());
      },
    });
  };
  cambioClave = function (usu_codigo) {
    $("#fns_error").addClass("d-none");
    $("#mdlCambioclaveId").val(usu_codigo);
    $("#mdlCambioClaveUsuario").modal();
    $("#mdlClave").val("");
    $("#mdlClaveConfirma").val("");
  };
  function validate_data_password() {
    if ($("#mdlClave").val() == "") {
      $("#fns_error").removeClass("d-none");
      $("#fns_error").html(
        "<i class='fas fa-exclamation-triangle fa-warning'></i> Antes de cambiar asegúrese de ingresar la nueva clave de usuario."
      );
      return false;
    } else {
      if ($("#mdlClaveConfirma").val() == "") {
        $("#fns_error").removeClass("d-none");
        $("#fns_error").html(
          "<i class='fas fa-exclamation-triangle fa-warning'></i> Antes de cambiar asegúrese de ingresar la confirmación de la nueva clave de usuario."
        );
        return false;
      } else {
        if ($("#mdlClaveConfirma").val() != $("#mdlClave").val()) {
          $("#fns_error").removeClass("d-none");
          $("#fns_error").html(
            "<i class='fas fa-exclamation-triangle fa-warning'></i> Las claves no coinciden, asegurese de que sean las mismas."
          );
          return false;
        }
      }
    }

    return true;
  }
  $("#bntCambiar").click(function () {
    if (validate_data_password()) {
      $.ajax({
        type: "POST",
        url: base_url + "cambia_clave_usuario",
        data: {
          usu_codigo: $("#mdlCambioclaveId").val(),
          usu_clave: $("#mdlClave").val(),
        },
        success: (data) => {
          let json = JSON.parse(data);
          if (json[0].codesql == 1) {
            alertify.notify(`${json[0].msgsql}`, "success", 5);
            $("#mdlCambioClaveUsuario").modal("hide");
          }
        },
      });
    }
  });
});
