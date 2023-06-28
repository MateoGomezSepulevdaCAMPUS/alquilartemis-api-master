<?php
$routes = explode("/",$_SERVER["REQUEST_URI"]);
$routes = array_filter($routes);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio Alquilartemis</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Views/Assets/Plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Views/Assets/Plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Views/Assets/Plugins/adminlte/css/adminlte.min.css">
     <!-- DataTables -->
     <link rel="stylesheet" href="views/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="views/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="views/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- jQuery -->
  <script src="views/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="views/assets/plugins/adminlte/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->

  <!-- DataTables  & Plugins -->
  <script src="Views/Assets/Plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="Views/Assets/Plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="Views/Assets/Plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="Views/Assets/Plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="Views/Assets/Plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="Views/Assets/Plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="Views/Assets/Plugins/jszip/jszip.min.js"></script>
  <script src="Views/Assets/Plugins/pdfmake/pdfmake.min.js"></script>
  <script src="Views/Assets/Plugins/pdfmake/vfs_fonts.js"></script>
  <script src="Views/Assets/Plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="Views/Assets/Plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="Views/Assets/Plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?= require_once("Views/modules/navbar.php");?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?= require_once("Views/modules/sidebar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
  <?php
      if(!empty($routes[4])){
        
        if ($routes[4] == "personas" ||
              $routes[4] == "constructoras" ||
              $routes[4] == "productos" ||
              $routes[4] == "clientes" ||
              $routes[4] == "empleados" ||
              $routes[4] == "cotizaciones" ||
              $routes[4] == "cotizacionProductos" ||
              $routes[4] == "obras" ||
              $routes[4] == "alquiler" ||
              $routes[4] == "alquilerDetalle" ||
              $routes[4] == "devoluciones" ||
              $routes[4] == "devolucionDetalle" ||
              $routes[4] == "inventario") {
                include "Views/pages/".$routes[4]."/".$routes[4].".php";
        }
      }else{
         require_once "Views/pages/personas/personas.php";
      }
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?= require_once("Views/modules/footer.php");?>

<!-- ./wrapper -->
</body>
</html>
