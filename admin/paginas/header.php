<?php
include  __DIR__ .'./../../config/config.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard  | <?= $_SESSION['usuarioUSer']; ?></title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>


    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://kit.fontawesome.com/729540066d.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="sidebar-toggle text-light mr-3">
            <span class="navbar-toggler-icon"></span>
        </a>
        <a class="navbar-brand" href="#">Dashboard</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                       <!--  <img class="rounded-circle" src="imagem/icon.png" width="20" height="20"> --> &nbsp;<span class="d-none d-sm-inline"><?php echo $_SESSION['usuarioUSer'] ?></span>
                   </a>
                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                    <a class="dropdown-item" href="sair.php"><i class="fas fa-power-off"></i> Sair</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex">
    <nav class="sidebar">
        <ul class="list-unstyled">
            <li><a href="index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>


            <li>
                <a href="#submenu1" data-toggle="collapse">
                   <i class="fas fa-user"></i> Usuários
               </a>


               <ul id="submenu1" class="list-unstyled collapse">
                <li><a href="users"><i class="fas fa-angle-double-right"></i> Ver Usuários</a></li>


            </ul>



        </li>

           <li>
                <a href="#submenu2" data-toggle="collapse">
                   <i class="fas fa-user"></i> Clientes
               </a>


               <ul id="submenu2" class="list-unstyled collapse">
                <li><a href="cliente"><i class="fas fa-angle-double-right"></i> Ver clientes</a></li>
                 <li><a href="cc"><i class="fas fa-angle-double-right"></i> Ver cc</a></li>


            </ul>



        </li>



        <li>
            <a href="#submenu3" data-toggle="collapse">
               <i class="fa-solid fa-gear"></i> Config
           </a>


           <ul id="submenu3" class="list-unstyled collapse">
            <li><a href="produtos"><i class="fas fa-angle-double-right"></i> SMTP </a></li>

            <li><a href="pix"><i class="fas fa-angle-double-right"></i> PIX</a></li>


        </ul>



    </li>







    <li><a href="sair.php"><i class="fas fa-power-off"></i> Sair</a></li>
</ul>
</nav>






