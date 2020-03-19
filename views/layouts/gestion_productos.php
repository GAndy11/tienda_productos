<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Crear Producto</h3>
            <br>
        </div>
        <div class="col-md-12">
            <div class="alert alert-primary alert-dismissible fade show box-mensaje" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
               <?= $mensaje;?>
           </div>
            <form action="?controller=producto&action=GuardarProducto" method="POST">
                <div class="form-group">
                    <label for="nombre_producto">Nombre Producto</label>
                    <input type="text" class="form-control" name="nombre_producto" id="nombre_producto" placeholder="Ingrese el nombre del producto">
                </div>

                <div class="form-group">
                    <label for="descripcion_producto">Descripción</label>
                    <textarea class="form-control" name="descripcion_producto" id="descripcion_producto" rows="3" placeholder="Ingrese la descripción del producto"></textarea>
                </div>

                <div class="form-group">
                    <label for="precio_producto">Precio</label>
                    <input type="text" class="form-control" name="precio_producto" id="precio_producto" placeholder="Ingrese la descripción del producto">
                </div>

                <div class="form-group">
                    <label for="imagen_producto">Imagen</label>
                    <input type="file" class="form-control-file" name="imagen_producto" id="imagen_producto" placeholder="Ingrese la descripción del producto" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="row">
        <div class="col-md-12">
            <h3>Todos los productos</h3>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Imagen</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Precio</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    <?php if($productos){ ?>
                        <?php while($pro = $productos->fetch_object()): ?>
                            <tr>
                              <th scope="row"><?=$pro->id;?></th>
                              <td>
                                  <div class="" style="width:100px;">
                                      <img class="card-img-top" src="./assets/imagenes/avion.jpg" alt="Card image cap" width="50" height="50">
                                  </div>
                              </td>
                              <td><?=$pro->nombre;?></td>
                              <td><?=$pro->precio;?></td>
                              <td><a href="#">Eliminar</a> </td>
                              <td><a href="#">Editar</a> </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
