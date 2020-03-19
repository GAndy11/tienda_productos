<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Encabezado</title>
        <script src="./assets/js/jquery-3.4.1.min.js" charset="utf-8"></script>
        <script src="./assets/css/bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
        <script src="./assets/js/main.js" charset="utf-8"></script>
        <link rel="stylesheet" href="./assets/css/bootstrap-4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/main.css">
    </head>
    <body>
<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="?controller=producto&action=index">Los Halcones</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="?controller=producto&action=index">Tienda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Administración
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="?controller=producto&action=GestionProductos">Gestión Productos</a>
                  <a class="dropdown-item" href="#">Gestión Categorias</a>
                </div>
              </li>
              <form class="form-inline my-2 my-lg-0 float-right">

                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Carrito de compras</button>
              </form>
          </div>
        </nav>
    </div>
</div>
<br>
