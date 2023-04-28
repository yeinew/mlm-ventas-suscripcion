<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academy | Dashboard</title>

    <!-- VINCULOS CSS -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/css/plugins/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="vistas/css/plugins/OverlayScrollbars.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    <!-- VINCULOS JS -->

    <!-- JQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js" integrity="sha512-iKjO6yEjGjK1fI+K5zJLpF5R5x5Kjwsa+I3qJ3TZl/wyX9I+2zfiKtWDeLkzHTJ+ahItEGKjw16nWfHJRYy7FA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Latest Compiled Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- AdminLTE App -->
    <script src="vistas/js/plugins/adminlte.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="vistas/js/plugins/jquery.overlayScrollbars.min.js"></script>


</head>


<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <?php
        include "paginas/modulos/header.php";
        include "paginas/modulos/menu.php";

        // Páginas del sitio


        if (isset($_GET["pagina"])) {

            if ($_GET["pagina"] == "inicio" || $_GET["pagina"] == "perfil" || $_GET["pagina"] == "usuarios") {

                include "paginas/" . $_GET["pagina"] . ".php";
            }

            if ($_GET["pagina"] == "blockchain-criptomonedas" || $_GET["pagina"] == "neuromarketing-liderazgo" || $_GET["pagina"] == "trading-senales") {


                include "paginas/academia.php";
            } else {

                include "paginas/inicio.php";
            }
        }

        include "paginas/modulos/footer.php"

        ?>
    </div>
</body>

</html>