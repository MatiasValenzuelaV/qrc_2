$(document).ready(function () {
  $("#btnNuevo").click(function (e) {
    $("#mdlUsuarios").modal();
    $("#mdlNuevoTitle").html("Información del usuario");
    $("#mfrmID").val(0);
    $("#mfrmIDPersonal").val(0);
    $("#mfrmRut").val("");
    $("#dtlPersonal").val("");
    $("#mfrmPerfil").val(0);
    $("#mfrmUsuario").val("");
    $("#mfrmClave").val("");
    $("#mfrmClaveCon").val("");
    $("#dtlPersonal").removeAttr("disabled", "disabled");
    $("#frmClave").removeClass("d-none");
    $("#frmClaveCon").removeClass("d-none");
  });

  function listado_personal() {
    fetch(`${base_url}UsuarioController/fn_listado_personal`)
      .then((d) => {
        return d.json();
      })
      .then((data) => {
        let html = ``;
        data.map((x) => {
          html += `<option value="${x.per_nombre}" data-codigo="${x.per_id}">${x.per_rut}</option>`;
        });
        $("#personal").html(html);
      });
  }
  listado_personal();
  $("#dtlPersonal").change(function () {
    $("#fn_error").addClass("d-none");
    $("#mfrmRut").val(
      $("#personal option[value='" + $("#dtlPersonal").val() + "']").text()
    );
    $("#mfrmIDPersonal").val(
      $("#personal option[value='" + $("#dtlPersonal").val() + "']").attr(
        "data-codigo"
      )
    );
  });
  function valida_vacios() {
    if ($("#dtlPersonal").val() == "") {
      mdtoast(`Antes de guardar asegurese de asignar un personal.`, {
        duration: 2000,
        type: mdtoast.WARNING,
      });
      $("#dtlPersonal").focus();
      return false;
    }
    if ($("#mfrmPerfil").val() == 0) {
      mdtoast(
        `Antes de guardar asegurese de seleccionar un perfil para el usuario.`,
        {
          duration: 2000,
          type: mdtoast.WARNING,
        }
      );
      $("#mfrmPerfil").focus().select();
      return false;
    }
    if ($("#mfrmUsuario").val() == 0) {
      mdtoast(`Antes de guardar asegurese de ingresar un nombre de usuario.`, {
        duration: 2000,
        type: mdtoast.WARNING,
      });
      $("#mfrmUsuario").focus();
      return false;
    }
    if ($("#mfrmClave").val() == 0) {
      mdtoast(`Antes de guardar asegurese de ingresar una clave de ingreso.`, {
        duration: 2000,
        type: mdtoast.WARNING,
      });
      $("#mfrmClave").focus();
      return false;
    }
    if ($("#mfrmClaveCon").val() == 0) {
      mdtoast(`Antes de guardar asegurese de confirmar la clave ingresada.`, {
        duration: 2000,
        type: mdtoast.WARNING,
      });
      $("#mfrmClaveCon").focus();
      return false;
    }
    if ($("#mfrmClave").val() != $("#mfrmClaveCon").val()) {
      mdtoast(`Las claves no coinciden, asegurese de que sean las mismas.`, {
        duration: 2000,
        type: mdtoast.WARNING,
      });
      $("#mfrmClaveCon").focus();
      $("#mfrmClave").focus();
      return false;
    }
    return true;
  }
  $("#btnGuardar").click(() => {
    if (valida_vacios()) {
      let data = {
        usu_id: $("#mfrmID").val(),
        per_id: $("#mfrmIDPersonal").val(),
        prf_id: $("#mfrmPerfil").val(),
        usu_nombre: $("#mfrmUsuario").val(),
        usu_clave: $("#mfrmClave").val(),
      };
      $.ajax({
        type: "POST",
        url: base_url + "UsuarioController/fn_nuevo_usuario",
        data: data,
        success: (data) => {
          let datos = JSON.parse(data);
          if (datos[0].codesql == 1) {
            mdtoast(`${datos[0].msgsql}`, {
              duration: 2000,
              type: mdtoast.SUCCESS,
            });
            $("#mdlUsuarios").modal("hide");
          }
          if (datos[0].codesql == 0) {
            mdtoast(`${datos[0].msgsql}`, {
              duration: 2000,
              type: mdtoast.WARNING,
            });
          }
          if (datos[0].codesql == -1) {
            mdtoast(`${datos[0].msgsql}`, {
              duration: 2000,
              type: mdtoast.ERROR,
            });
          }
          listado_usuarios();
        },
      });
    }
  });
  listado_usuarios();
  function listado_usuarios(
    prf_id = $("#frmPerfil").val(),
    per_nombre = $("#frmPersonal").val()
  ) {
    $.ajax({
      type: "POST",
      url: base_url + "UsuarioController/fn_listado_usuarios",
      data: {
        prf_id: prf_id,
        per_nombre: per_nombre,
      },
      success: (data) => {
        let json = JSON.parse(data);
        let html = ``;
        let count = 1;
        let editar,
          clave,
          eliminar = ``;
        if (json[0].codesql > 0) {
          json.map((d) => {
            clave = `<i class="fas fa-unlock-alt fa-pointer" onclick="CambioClave(${d.usu_id});"></i>`;
            editar = `<i class="fas fa-edit fa-pointer" onclick="editar(${d.usu_id},${d.per_id},'${d.per_nombre}','${d.per_rut}',${d.prf_id},'${d.usu_nombre}')"></i>`;
            eliminar = `<i class="fas fa-trash fa-pointer" onclick="eliminar(${d.usu_id},'${d.per_nombre}');"></i>`;
            html += `<tr>
							  <td class="tx-center tx-bold">${count}</td>
							  <td>${d.per_nombre}</td>
							  <td>${d.usu_nombre}</td>
							  <td>${d.prf_nombre}</td>
							  <td class="tx-center">${clave}</td>
							  <td class="tx-center">${editar}</td>
							  <td class="tx-center">${eliminar}</td>
						  </tr>`;
            count++;
          });
        } else {
          html += `<tr><td colspan="7" class="tx-center">No se han encontrado registros...</td></tr>`;
        }
        $("#tbody").html(html);
      },
    });
  }
  editar = function (id, idPersonal, personal, rut, perfil, usuario) {
    $("#mdlUsuarios").modal();
    $("#mdlNuevoTitle").html("Información del usuario");
    $("#mfrmID").val(id);
    $("#mfrmIDPersonal").val(idPersonal);
    $("#mfrmRut").val(rut);
    $("#dtlPersonal").val(personal);
    $("#mfrmPerfil").val(perfil);
    $("#mfrmUsuario").val(usuario);
    $("#mfrmClave").val("1");
    $("#mfrmClaveCon").val("1");
    $("#dtlPersonal").addClass("disabled", "disabled");
    $("#frmClave").addClass("d-none");
    $("#frmClaveCon").addClass("d-none");
  };
  $("#frmPerfil").change(function () {
    listado_usuarios();
  });
  $("#frmPersonal").bind("input propertychange", function () {
    listado_usuarios();
  });

  eliminar = function (per_id, per_nombre) {
    $("#mdlEliminar").modal();
    $("#titleEliminar").html(
      `<small>Esta seguro de eliminar el usuario de: <b>${per_nombre}</b></small>`
    );
    $("#idEliminar").val(per_id);
  };
  $("#btnEliminar").click(function () {
    $.ajax({
      type: "POST",
      url: base_url + "UsuarioController/fn_elimina_usuario",
      data: { usu_id: $("#idEliminar").val() },
      success: (data) => {
        let json = JSON.parse(data);
        if (json[0].codesql == 1) {
          mdtoast(`${json[0].msgsql}`, {
            duration: 2000,
            type: mdtoast.SUCCESS,
          });
        } else {
          mdtoast(`${json[0].msgsql}`, {
            duration: 2000,
            type: mdtoast.ERROR,
          });
        }
        listado_usuarios();
      },
    });
  });
  listadoPerfiles();
  function listadoPerfiles() {
    $.ajax({
      type: "POST",
      data: { prf_id: 0 },
      url: base_url + "PerfilController/lista_perfil",
      success: (data) => {
        let json = JSON.parse(data);
        let html = `<option value="0">SELECCIONE UN PERFIL</option>`;
        json.map((d) => {
          html += `<option value="${d.prf_id}">${d.prf_nombre}</option>`;
        });
        $("#frmPerfil").html(html);
        $("#mfrmPerfil").html(html);
      },
    });
  }
});
