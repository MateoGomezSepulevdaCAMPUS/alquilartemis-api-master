<?php
require_once "list.php";

if(isset($_POST['guardar'])){

    $ch = curl_init();

    $url = 'http://localhost/alquilartemis-api-master/Alquilartemis/Backend/Controllers/Productos.php?op=insert';

    // Datos que se envian en la solicitud de POST
    $data = array(
        'nombre' => $nombre = $_POST['nombre']
    );

    // configurar opccion de Curl
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Realizar la solicitud POST
    $response = curl_exec($ch);
    if (curl_errno($ch)) echo curl_error($ch); 
    else $decoded=json_decode($response,true);
    
    echo "<script>alert('Los datos fueron guardados satisfactoriamente');</script>";
}

?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  AgregaR
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="col d-flex flex-wrap" id="notas" method="POST">
              <div class="m-2 col-8">
                <label for="exampleInputPassword1" class="form-label">Nombre Producto</label>
                <input type="text" class="form-control" id="nombre"  name="nombre">
              </div>
              <div class=" col-12 m-2">
                <button type="submit" class="btn btn-primary" name="guardar" id="guardar">Submit</button> 
              </div>
            </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
