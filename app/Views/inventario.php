<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Inventario</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Peliplay</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="<?php echo base_url(); ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inventario</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid pt-2 pb-2 ">
        <h1>inventario</h1>
    </div>

    <div class="container-fluid p-2">
        <table class="table table table-striped table-hover caption-top">
            <caption>Lista de peliculas</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">nombre</th>
                    <th scope="col">stock</th>
                    <th scope="col">$venta</th>
                    <th scope="col">$arriendo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($peliculas); $i++) {?>
                <tr>
                    <th scope="row"> <?php echo ($i); ?> </th>
                    <th scope="row"> <?php echo ($peliculas[$i]->pelicula_id); ?> </th>
                    <th scope="row"> <?php echo ($peliculas[$i]->nombre); ?> </th>
                    <th scope="row"> <?php echo ($peliculas[$i]->stock); ?> </th>
                    <th scope="row"> <?php echo ($peliculas[$i]->valor_venta); ?> </th>
                    <th scope="row"> <?php echo ($peliculas[$i]->valor_arriendo); ?> </th>
                    <th>
                        <div class="btn-group container-fluid" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success">Modificar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>                            
                        </div>
                    </th>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>


    <footer class="bg-dark text-center text-lg-start text-light fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-dark" href="#"></a>
        </div>
        <!-- Copyright -->
    </footer>




    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>