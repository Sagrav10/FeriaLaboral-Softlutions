<?php

session_start();

// Importación de clases

include_once('../rutas.php');

include_once($_SERVER['DOCUMENT_ROOT'] . '/' . CARPETA_RAIZ . RUTA_PERSISTENCIA . 'Conexion.php');

// Conexión con la base de datos

$c = Conexion::getInstancia();
$conexion = $c->conectarBD();



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Feria de oportunidades</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "css/material-dashboard.css"  ?>" rel="stylesheet" />

    <!-- JQuerry -->
    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
</head>

<body>
    <div class="wrapper ">



        <div class="content">
            <div class="container-fluid">
                <!-- CONTENIDO PAGINA -->

                <br><br>

                <div>
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <p class="card-category">Registrate
                                    </p>
                                    <h4 class="card-title">Registrate en la plataforma de la feria de oportunidades!
                                    </h4>

                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-lg-7">


                                            <form id="formRegistroEstudiante" method="POST"
                                                action="/Softlutions/Presentacion/procedimientos/registrarEstudiante.php">
                                                <br>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">

                                                            </label>
                                                            <input type="text" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating"></label>
                                                            <input type="text" class="form-control" disabled>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating"></label>
                                                            <input type="text" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating"></label>
                                                            <input type="text" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">

                                                            </label>
                                                            <input type="text" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">Semestre
                                                            </label>
                                                            <input type="text" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">
                                                                    Perfil profesional</label>
                                                                <textarea class="form-control" maxlength="950"
                                                                    name="perfilProfesionalArea"
                                                                    id="perfilProfesionalArea" rows="6"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">
                                                                    Certificaciones</label>
                                                                <textarea class="form-control" maxlength="950" rows="6"
                                                                    name="certificacionesArea"
                                                                    id="certificacionesArea"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <br><br>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="bmd-label-floating" style="padding-top: 15px;">
                                                            Disponibilidad de viaje:
                                                        </label>

                                                    </div>
                                                    <div class="col-md-3">

                                                        <select class="form-control" id="disponibilidadViaje"
                                                            name="disponibilidadViaje">
                                                            <option value="No" selected>No</option>
                                                            <option value="Si">Si</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br><br>

                                                <div class="alert alert-info" style="height: 50px;">
                                                    <h6> Estudios</h6>
                                                </div>

                                                <div id="divListaEstudios">


                                                </div>

                                                <br><br>

                                                <input class="btn btn-warning" type="button" value="Agregar estudio"
                                                    onclick="agregarCampoListaEstudio()">
                                                <input class="btn btn-warning" type="button" value="Borrar estudio"
                                                    onclick="eliminarCampoListaEstudio()">


                                                <br><br><br>


                                                <div class="alert alert-info" style="height: 50px;">
                                                    <h6> Experiencia laboral</h6>
                                                </div>


                                                <div id="divListaExperiencia">



                                                </div>

                                                <br><br>

                                                <input class="btn btn-warning" type="button" value="Agregar campo"
                                                    onclick="agregarCampoExperiencia()">
                                                <input class="btn btn-warning" type="button" value="Borrar campo"
                                                    onclick="eliminarCampoExperiencia()">



                                                <br><br><br>

                                                <div class="alert alert-info" style="height: 50px;">
                                                    <h6> Idiomas</h6>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">
                                                                Idioma</label>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="bmd-label-floating">
                                                                Nivel</label>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="divListaIdiomas">


                                                </div>

                                                <br><br>

                                                <input class="btn btn-warning" type="button" value="Agregar idioma"
                                                    onclick="agregarCampoListaIdioma()">
                                                <input class="btn btn-warning" type="button" value="Borrar idioma"
                                                    onclick="eliminarCampoListaIdioma()">



                                                <br><br><br>


                                                <div class="alert alert-info" style="height: 50px;">
                                                    <h6> Referencias personales</h6>
                                                </div>


                                                <div id="divListaReferencias">


                                                </div>

                                                <br><br>

                                                <input class="btn btn-warning" type="button" value="Agregar campo"
                                                    onclick="agregarCampoReferencia()">
                                                <input class="btn btn-warning" type="button" value="Borrar campo"
                                                    onclick="eliminarCampoReferencia()">


                                                <br><br><br>

                                                <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-6">
                                                        <input type="button" class="btn btn-primary pull-center"
                                                            value="Crear hoja de vida" onclick="enviarFormulario()">
                                                    </div>

                                                </div>
                                                <br><br>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>




                        </div>
                    </div>






                    <!-- CONTENIDO PAGINA -->
                </div>
            </div>

            <!-- Footer -->
            <?php
            include "./components/footer.php";
            ?>
            <!-- Footer -->

        </div>
    </div>


    <!--   Core JS Files   -->
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/core/jquery.min.js"  ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/core/popper.min.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/core/bootstrap-material-design.min.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/perfect-scrollbar.jquery.min.js" ?>">
    </script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/moment.min.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/sweetalert2.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/jquery.validate.min.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/jquery.bootstrap-wizard.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/bootstrap-selectpicker.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/bootstrap-datetimepicker.min.js" ?>">
    </script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/jquery.dataTables.min.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/bootstrap-tagsinput.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/jasny-bootstrap.min.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/fullcalendar.min.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/jquery-jvectormap.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/nouislider.min.js" ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/arrive.min.js" ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/chartist.min.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/plugins/bootstrap-notify.js" ?>"></script>
    <script src="<?php echo "/" . CARPETA_RAIZ . RUTA_ASSETS . "js/material-dashboard.js?v=2.1.2" ?> type="
        text/javascript"> </script>
    <script>
    function agregarCampoListaIdioma() {

        $("<div>").load("./campos/listaIdioma.php",
            function() {
                $("#divListaIdiomas").append($(this).html());
            });
    }

    function eliminarCampoListaIdioma() {

        if ($('#divListaIdiomas div.divListId').length > 1) {
            $('#divListaIdiomas div.divListId:last').remove();
        } else {
            $('#divListaIdiomas div.divListId:last').remove();
            agregarCampoListaIdioma();
        }
    }

    function agregarCampoListaEstudio() {

        $("<div>").load("./campos/listaEstudio.php",
            function() {
                $("#divListaEstudios").append($(this).html());
            });
    }

    function eliminarCampoListaEstudio() {

        if ($('#divListaEstudios div.divListId').length > 1) {
            $('#divListaEstudios div.divListId:last').remove();
        } else {
            $('#divListaEstudios div.divListId:last').remove();
            agregarCampoListaEstudio();
        }

    }

    function agregarCampoExperiencia() {

        $("<div>").load("./campos/listaExperiencia.php",
            function() {
                $("#divListaExperiencia").append($(this).html());
            });
    }

    function eliminarCampoExperiencia() {

        if ($('#divListaExperiencia div.divListId').length > 0) {
            $('#divListaExperiencia div.divListId:last').remove();
        }

    }


    function agregarCampoReferencia() {

        $("<div>").load("./campos/listaReferencias.php",
            function() {
                $("#divListaReferencias").append($(this).html());
            });
    }

    function eliminarCampoReferencia() {

        if ($('#divListaReferencias div.divListId').length > 1) {
            $('#divListaReferencias div.divListId:last').remove();
        } else {
            $('#divListaReferencias div.divListId:last').remove();
            agregarCampoReferencia();
        }

    }

    function maximoAño(elementoCambio) {

        var today = new Date();
        var yyyy = today.getFullYear();

        elementoCambio.setAttribute("max", yyyy);
    }



    function verificarNivelEstudio(object) {




        if (object.value != "Bachiller") {

            object.disabled = true;

            $("<div>").load("./campos/listaEstudio.php?op=a",
                function() {
                    comp = object.parentNode.parentNode.parentNode.parentNode;
                    var jComp = $(comp);
                    jComp.append($(this).html());

                });

        }


    }

    function enviarFormulario() {
        var formulario = document.getElementById("formRegistroEstudiante");

        formulario.submit();
    }
    </script>

    <script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $(".sidebar");

            $sidebar_img_container = $sidebar.find(".sidebar-background");

            $full_page = $(".full-page");

            $sidebar_responsive = $("body > .navbar-collapse");

            window_width = $(window).width();

            fixed_plugin_open = $(
                ".sidebar .sidebar-wrapper .nav li.active a p"
            ).html();

            if (window_width > 767 && fixed_plugin_open == "Dashboard") {
                if ($(".fixed-plugin .dropdown").hasClass("show-dropdown")) {
                    $(".fixed-plugin .dropdown").addClass("open");
                }
            }

            $(".fixed-plugin a").click(function(event) {
                if ($(this).hasClass("switch-trigger")) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $(".fixed-plugin .active-color span").click(function() {
                $full_page_background = $(".full-page-background");

                $(this).siblings().removeClass("active");
                $(this).addClass("active");

                var new_color = $(this).data("color");

                if ($sidebar.length != 0) {
                    $sidebar.attr("data-color", new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr("filter-color", new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr("data-color", new_color);
                }
            });

            $(".fixed-plugin .background-color .badge").click(function() {
                $(this).siblings().removeClass("active");
                $(this).addClass("active");

                var new_color = $(this).data("background-color");

                if ($sidebar.length != 0) {
                    $sidebar.attr("data-background-color", new_color);
                }
            });

            $(".fixed-plugin .img-holder").click(function() {
                $full_page_background = $(".full-page-background");

                $(this).parent("li").siblings().removeClass("active");
                $(this).parent("li").addClass("active");

                var new_image = $(this).find("img").attr("src");

                if (
                    $sidebar_img_container.length != 0 &&
                    $(".switch-sidebar-image input:checked").length != 0
                ) {
                    $sidebar_img_container.fadeOut("fast", function() {
                        $sidebar_img_container.css(
                            "background-image",
                            'url("' + new_image + '")'
                        );
                        $sidebar_img_container.fadeIn("fast");
                    });
                }

                if (
                    $full_page_background.length != 0 &&
                    $(".switch-sidebar-image input:checked").length != 0
                ) {
                    var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                        .find("img")
                        .data("src");

                    $full_page_background.fadeOut("fast", function() {
                        $full_page_background.css(
                            "background-image",
                            'url("' + new_image_full_page + '")'
                        );
                        $full_page_background.fadeIn("fast");
                    });
                }

                if ($(".switch-sidebar-image input:checked").length == 0) {
                    var new_image = $(".fixed-plugin li.active .img-holder")
                        .find("img")
                        .attr("src");
                    var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                        .find("img")
                        .data("src");

                    $sidebar_img_container.css(
                        "background-image",
                        'url("' + new_image + '")'
                    );
                    $full_page_background.css(
                        "background-image",
                        'url("' + new_image_full_page + '")'
                    );
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css(
                        "background-image",
                        'url("' + new_image + '")'
                    );
                }
            });

            $(".switch-sidebar-image input").change(function() {
                $full_page_background = $(".full-page-background");

                $input = $(this);

                if ($input.is(":checked")) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn("fast");
                        $sidebar.attr("data-image", "#");
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn("fast");
                        $full_page.attr("data-image", "#");
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr("data-image");
                        $sidebar_img_container.fadeOut("fast");
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr("data-image", "#");
                        $full_page_background.fadeOut("fast");
                    }

                    background_image = false;
                }
            });

            $(".switch-sidebar-mini input").change(function() {
                $body = $("body");

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $("body").removeClass("sidebar-mini");
                    md.misc.sidebar_mini_active = false;

                    $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar();
                } else {
                    $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar(
                        "destroy"
                    );

                    setTimeout(function() {
                        $("body").addClass("sidebar-mini");

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // We simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event("resize"));
                }, 180);

                // We stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#records-limit').change(function() {
            $('form').submit();
        })
    });
    </script>


</body>

</html>