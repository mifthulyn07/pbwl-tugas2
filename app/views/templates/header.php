<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $data["judul"]; ?></title>
     <link href="<?php echo BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
</head>

<body style="background-color:#082032; color:white;">
     <div class="container" style="max-width:1000px;">

          <!-- HEADER -->

          <header style="color:white; padding:30px; text-align:center;">
               <h1>PRACTICUM MVC</h1>
               <h5>-Task assigned as course of study-</h5>
               <p>By: Miftahul Ulyana Hutabarat - 0702192031</p>
          </header>

          <!-- NAV -->

          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #334756">
               <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FF4C29">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                         <div class="navbar-nav">
                              <a class="nav-link active" aria-current="page" href="<?php echo BASEURL; ?>/golongan">Golongan</a>
                              <a class="nav-link" href="<?php echo BASEURL; ?>/users">Users</a>
                              <a class="nav-link" href="<?php echo BASEURL; ?>/pelanggan">Pelanggan</a>
                              <a class="nav-link" href="<?php echo BASEURL; ?>/login">Logout</a>
                         </div>
                    </div>
               </div>
          </nav>