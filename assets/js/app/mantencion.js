$(document).ready(function () {
  var fechaJSFull;
  var fechaJS = new Date();
  fechaJS.setDate(fechaJS.getDate());

  var fechaJSMes = fechaJS.getMonth() + 1;
  var fechaJSDia = fechaJS.getDate();
  $(".fc-datepicker").datepicker({
    format: "YYYY-MM-DD",
    size: "default",
    footer: true,
    modal: true,
    header: true,
    value: moment().format("YYYY-MM-DD"),
  });
  $(".fc-datepicker").val(moment().format("YYYY-MM-DD"));

  listado_tecnicos();
  listado_ayudantes();
  function listado_tecnicos() {
    $.ajax({
      type: "POST",
      url: base_url + "MaestraController/listado_tecnicos",
      data: { car_id: 2 },
      success: (data) => {
        let html = ``;
        let json = JSON.parse(data);
        json.map((d) => {
          html += `<option value="${d.per_id}">${d.per_nombre}</option>`;
        });
        $("#frmTecnico1").html(html);
      },
    });
  }
  function listado_ayudantes() {
    $.ajax({
      type: "POST",
      url: base_url + "MaestraController/listado_tecnicos",
      data: { car_id: 3 },
      success: (data) => {
        let html = ``;
        let json = JSON.parse(data);
        json.map((d) => {
          html += `<option value="${d.per_id}">${d.per_nombre}</option>`;
        });
        $("#frmTecnico2").html(html);
      },
    });
  }
});
