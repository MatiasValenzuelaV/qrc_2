<script src="<?= lib_url(); ?>jquery/jquery.js"></script>
<script src="<?= lib_url(); ?>popper.js/popper.js"></script>
<script src="<?= lib_url(); ?>bootstrap/bootstrap.js"></script>
<script src="<?= lib_url(); ?>perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="<?= lib_url(); ?>moment/moment.js"></script>
<script src="<?= lib_url(); ?>jquery-ui/jquery-ui.js"></script>
<script src="<?= lib_url(); ?>jquery-switchbutton/jquery.switchButton.js"></script>
<script src="<?= lib_url(); ?>peity/jquery.peity.js"></script>
<script src="<?= js_url(); ?>alertify.min.js"></script>
<script src="<?= js_url(); ?>qrcode.min.js"></script>
<script src="<?= lib_url(); ?>jquery-toggles/toggles.min.js"></script>
<script src="<?= js_url(); ?>xlsx.full.min.js"></script>
<script src="<?= lib_url(); ?>material-toast/mdtoast.js"></script>
<script src="<?= lib_url(); ?>medium-editor/medium-editor.js"></script>
<script src="<?= js_url(); ?>moment-with-locales.min.js"></script>
<script src="<?= js_url(); ?>bracket.js"></script>
<script src="<?= lib_url(); ?>material-toast/mdtoast.js"></script>
<script>
let base_url = '<?= base_url(); ?>'

function getPageList(totalPages, page, maxLength) {
    if (maxLength < 6) throw "maxLength must be at least 3";

    function range(start, end) {
        return Array.from(Array(end - start + 1), (_, i) => i + start);
    }

    var sideWidth = maxLength < 9 ? 1 : 2;
    var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
    var rightWidth = (maxLength - sideWidth * 2 - 2) >> 1;
    if (totalPages <= maxLength) {
        // no breaks in list
        return range(1, totalPages);
    }
    if (page <= maxLength - sideWidth - 1 - rightWidth) {
        // no break on left of page
        return range(1, maxLength - sideWidth - 1)
            .concat([0])
            .concat(range(totalPages - sideWidth + 1, totalPages));
    }
    if (page >= totalPages - sideWidth - 1 - rightWidth) {
        // no break on right of page
        return range(1, sideWidth)
            .concat([0])
            .concat(
                range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages)
            );
    }
    // Breaks on both sides
    return range(1, sideWidth)
        .concat([0])
        .concat(range(page - leftWidth, page + rightWidth))
        .concat([0])
        .concat(range(totalPages - sideWidth + 1, totalPages));
}

function paginacion(total, id, limite = 10) {
    $(function() {
        // Total de registros
        var numberOfItems = total;
        var limitPerPage = limite;
        var totalPages = Math.ceil(numberOfItems / limitPerPage);
        var paginationSize = 6;
        var currentPage;

        function showPage(whichPage) {
            if (whichPage < 1 || whichPage > totalPages) return false;
            currentPage = whichPage;
            $(`#${id} tr`)
                .hide()
                .slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage)
                .show();
            // Replace the navigation items (not prev/next):
            $(".pagination li").slice(1, -1).remove();
            getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                $("<li>")
                    .addClass(
                        "page-item " +
                        (item ? "current-page " : "") +
                        (item === currentPage ? "active " : "")
                    )
                    .append(
                        $("<a>")
                        .addClass("page-link text-center")
                        .attr({
                            href: "javascript:void(0)"
                        })
                        .text(item || "...")
                    )
                    .insertBefore("#next-page");
            });
            return true;
        }

        // Include the prev/next buttons:
        $(".pagination").append(
            $("<li>").addClass("page-item").attr({
                id: "previous-page"
            }).append(
                $("<a>")
                .addClass("page-link text-center")
                .attr({
                    href: "javascript:void(0)"
                })
                .html('<i class="fas fa-arrow-left"></i>')
            ),
            $("<li>").addClass("page-item").attr({
                id: "next-page"
            }).append(
                $("<a>")
                .addClass("page-link text-center")
                .attr({
                    href: "javascript:void(0)"
                })
                .html('<i class="fas fa-arrow-right"></i>')
            )
        );
        // Show the page links
        $(`#${id}`).show();
        showPage(1);

        // Use event delegation, as these items are recreated later
        $(
            document
        ).on("click", ".pagination li.current-page:not(.active)", function() {
            return showPage(+$(this).text());
        });
        $("#next-page").on("click", function() {
            return showPage(currentPage + 1);
        });

        $("#previous-page").on("click", function() {
            return showPage(currentPage - 1);
        });
        $(".pagination").on("click");
    });
}
/* Inicialización en español para la extensión 'UI date picker' para jQuery. */
/* Traducido por Vester (xvester@gmail.com). */
(function(factory) {
    if (typeof define === "function" && define.amd) {

        // AMD. Register as an anonymous module.
        define(["../widgets/datepicker"], factory);
    } else {

        // Browser globals
        factory(jQuery.datepicker);
    }
}(function(datepicker) {

    datepicker.regional.es = {
        closeText: "Cerrar",
        prevText: "&#x3C;Ant",
        nextText: "Sig&#x3E;",
        currentText: "Hoy",
        monthNames: ["enero", "febrero", "marzo", "abril", "mayo", "junio",
            "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
        ],
        monthNamesShort: ["ene", "feb", "mar", "abr", "may", "jun",
            "jul", "ago", "sep", "oct", "nov", "dic"
        ],
        dayNames: ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"],
        dayNamesShort: ["dom", "lun", "mar", "mié", "jue", "vie", "sáb"],
        dayNamesMin: ["D", "L", "M", "X", "J", "V", "S"],
        weekHeader: "Sm",
        dateFormat: "dd-mm-yy",
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ""
    };
    datepicker.setDefaults(datepicker.regional.es);

    return datepicker.regional.es;

}));
</script>
<script>
// crea_menu();

function crea_menu() {
    $.ajax({
        url: base_url + 'PerfilController/carga_menu',
        success: data => {
            let json = JSON.parse(data);
            let htmlMenu = `<a href="<?= base_url(); ?>inicio" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon fas fa-home tx-20"></i>
                        <span class="menu-item-label">Inicio</span>
                    </div>
                </a>`;
            let sw = false;
            let sw_submenu = false;
            let htmlPadre, opcion = ``;
            json.map(d => {
                console.log(d);
                if (d.men_padre == 0) {
                    sw_submenu = true;
                    if (!sw) {
                        sw = true;
                        htmlPadre = d.men2_nombre;
                        opcion = `<a href="#" class="br-menu-link show-sub">
                        <div class="br-menu-item">
                            <i class="menu-item-icon icon fas fa-user-cog tx-20"></i>
                            <span class="menu-item-label">Administrar acceso</span>
                            <i class="menu-item-arrow fa fa-angle-down"></i>
                        </div>
                        </a>
                        <ul class="br-menu-sub nav flex-column">
                        <li class="nav-item"><a href="<?= base_url(); ?>usuarios" class="nav-link">Usuarios</a></li>`
                    } else {
                        if (htmlPadre == d.men2_nombre) {
                            opcion +=
                                `<li class="nav-item"><a href="<?= base_url(); ?>usuarios" class="nav-link">Usuarios</a></li>`
                        } else {
                            opcion = opcion + "</ul>";
                            htmlMenu = htmlMenu + "<li>" + opcion + "</li>";
                            opcion = "";

                            htmlPadre = d.men2_nombre;
                            opcion =
                                `<a href="#" class="br-menu-link show-sub">
                                <div class="br-menu-item">
                                    <i class="menu-item-icon icon fas fa-user-cog tx-20"></i>
                                    <span class="menu-item-label">Administrar acceso</span>
                                    <i class="menu-item-arrow fa fa-angle-down"></i>
                                </div>
                            </a>
                            <ul class="br-menu-sub nav flex-column">
                            <li class="nav-item"><a href="<?= base_url(); ?>usuarios" class="nav-link">Usuarios</a></li>`

                        }
                    }
                } else {
                    if (sw_submenu) {
                        opcion += `</ul>`;
                        htmlMenu += `<li>${opcion}</li>`;
                        opcion = ``;
                        sw_submenu = false;
                    }
                }
            })

            if (sw_submenu) {
                opcion += `</ul>`;
                htmlMenu += `${opcion}`;
                opcion = ``;
            }
            $("#MenuContent").html(htmlMenu)
        }
    })
}
</script>
</body>

</html>