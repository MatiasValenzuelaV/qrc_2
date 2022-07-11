$(document).ready(function () {
  $("#frmUsuario").focus();

  $("#btnLogin").click(function (e) {
    e.preventDefault();
    login();
  });
  $("#frmUsuario").bind("keypress", function (e) {
    if (e.keyCode == 13) {
      login();
    }
  });
  $("#frmClave").bind("keypress", function (e) {
    if (e.keyCode == 13) {
      login();
    }
  });

  function valida_vacios() {
    if ($("#frmUsuario").val() == "") {
      $("#frmUsuario").focus();
      mdtoast(`Favor ingrese su nombre de usuario`, {
        duration: 3000,
        type: mdtoast.WARNING,
      });
      return true;
    }
    if ($("#frmClave").val() == "") {
      $("#frmClave").focus();
      mdtoast(`Favor ingrese su contraseña de usuario`, {
        duration: 3000,
        type: mdtoast.WARNING,
      });
      return true;
    }
    return false;
  }
  function login() {
    if (!valida_vacios()) {
      $.ajax({
        type: "POST",
        url: "https://qrc.acbingenieria.cl/LoginController/login",
        data: {
          usu_nombre: $("#frmUsuario").val(),
          usu_clave: $("#frmClave").val(),
        },
        success: (data) => {          
          if (data.length > 0) {
            let json = JSON.parse(data);
            mdtoast(json[0].msgsql, { duration: 3000, type: mdtoast.ERROR });
          } else {
            window.location.href = "https://qrc.acbingenieria.cl/inicio";
          }
        },
      });
    }
  }
});
