<?php
$url = "http://localhost/alquilartemis-api-master/Alquilartemis/Backend/Controllers/Personas.php?op=GetAll";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
$output = json_decode(curl_exec($curl));
// print_r($output);
?>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th>Sexo</th>
                    <th>Direccion</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach($output as $out)
                      {
                      ?>
                  <tr>
                    <td><?php echo $out->id_persona; ?></td>
                    <td><?php echo $out->nombre; ?></td>
                    <td><?php echo $out->edad; ?></td>
                    <td><?php echo $out->telefono; ?></td>
                    <td><?php echo $out->sexo; ?></td>
                    <td><?php echo $out->direccion; ?></td>
                  </tr>
                  <?php
                    }
                    ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
             <!-- Button trigger modal -->
                    

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>