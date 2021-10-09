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

<div class="container" style="background-color: white; margin-top: 60px; border-radius: 10px; width: 500px;">

    <div class="container" style="margin-top: 20px;">
    <h4>Registrar Producto</h4>
        <form action="?c=update" method="POST">          

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre de producto</span>
                <input type="hidden" class="form-control" value="<?php echo $up->id_producto; ?>" name="idproducto" required>
                <input type="text" class="form-control" value="<?php echo $up->nombre_producto; ?>" name="nombre" required>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Referencia</span>
                <input type="text" class="form-control" value="<?php echo $up->referencia_producto; ?>" name="referencia" required>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Precio</span>
                <input type="number" class="form-control" value="<?php echo $up->precio_producto; ?>" name="precio" required>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Peso</span>
                <input type="number" class="form-control" value="<?php echo $up->peso_producto; ?>" name="peso" required>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Categoría</span>
                <input type="text" class="form-control" value="<?php echo $up->categoria_producto; ?>" name="categoria" required>
                </div>

                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Stock</span>
                <input type="number" class="form-control" value="<?php echo $up->stock_producto; ?>" name="stock" required>
                </div>
                
                <button class="btn btn-success">Guardar</button>
                <a href="../PRUEBA%20PRACTICA/" class="btn btn-danger">Atrás</a>

        
        </form>

    </div>  
  
  
</div>

</body>
</html>