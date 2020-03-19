<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Detalle del producto</h3>
        </div>
    </div>
    <div class="row">
        <?php if($detalleProducto){ ?>
            <?php while($det = $detalleProducto->fetch_object()): ?>
                <div class="box-detalle card1">
                    <img class="card-img-top" src="./assets/imagenes/avion.jpg" alt="Card image cap">

                    <h3><?=$det->nombre;?></h3>
                    <h2>Precio: $<?=$det->precio;?></h2>
                    <hr>
                    <p><?=$det->descripcion;?></p>
                    <a href="#">Agregar al carrito</a>
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
