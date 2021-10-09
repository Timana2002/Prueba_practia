<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PRUEBA PRACTICA</title>
</head>
<body style="background-color: #D7E6F4;">

<div class="container" style="background-color: white; margin-top: 60px; border-radius: 10px;">
  <table class="table">
    <thead style="text-align: center;">
      <th>Nombre</th>
      <th>Referencia</th>
      <th>Precio</th>
      <th>Peso</th>
      <th>Categoria</th>
      <th>Stock</th>
      <th>Fecha de creación</th>
      <th>Ultima venta</th>
      <th>Acción</th>
    </thead>
    <tbody>
 
      <?php foreach($this->model->listar() as $c): ?>

        <tr style="text-align: center;">
          <td><?php echo $c->nombre_producto; ?></td>
          <td><?php echo $c->referencia_producto; ?></td>
          <td><?php echo $c->precio_producto; ?></td>
          <td><?php echo $c->peso_producto; ?></td>
          <td><?php echo $c->categoria_producto; ?></td>
          <td><?php echo $c->stock_producto; ?></td>
          <td><?php echo $c->fecha_creacion_producto; ?></td>
          <td><?php echo $c->fecha_ultima_venta_producto; ?></td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <a href="?c=eliminar&id=<?php echo $c->id_producto; ?>" class="btn btn-danger">Eliminar</a>
              <a href="?c=actualizar&id=<?php echo $c->id_producto; ?>" class="btn btn-warning">Editar</a>     
            </div>
          </td>
        </tr>

        <?php endforeach; ?>
    

  </tbody>
  </table>

  <div class="row">
    <div class="col-3">
    <a href="?c=register" class="btn btn-success">Registrar Producto</a>

    </div>
  </div>
  
  
</div>

</body>
</html>