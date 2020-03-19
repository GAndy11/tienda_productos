<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Lista de Productos</h3>
        </div>
    </div>
    <div class="row">
        <?php if($productos){ ?>
            <?php while($pro = $productos->fetch_object()): ?>
                <div class="card card-producto" style="width: 18rem;">
                    <img class="card-img-top" src="./assets/imagenes/avion.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?=$pro->nombre;?></h5>
                        <p class="card-text">Precio: $<?=$pro->precio;?></p>
                        <a href="?controller=producto&action=DetalleProducto&idProducto=<?=$pro->id;?>" class="btn btn-primary">Ver Producto</a>
                    </div>
                </div>
            <?php endwhile; ?>

        <?php } else { ?>
            <div class="alert alert-primary alert-dismissible fade show box-mensaje" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
               <?= $mensaje;?>
           </div>
        <?php } ?>
    </div>
</div>
