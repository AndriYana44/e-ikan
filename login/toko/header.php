<?php
require_once "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Top bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <i class="fa fa-compass"></i>
                    <a href="#" class="nav-link-cus">Dashboard / </a>
                </div>
                <div class="col-sm-6">
                    <div class="link float-end">
                        <a href="#" class="nav-link-cus">Tentang CBDdiscus</a>
                        <a href="#" class="nav-link-cus">Forum Diskusi</a>
                        <a href="#" class="nav-link-cus">artikel</a>
                        <a href="#" class="nav-link-cus">Nama Toko</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar End -->

    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.html">
                            <img src="img/logo/logocbd.png" width="60" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 float-center">
                    <div class="topnav">
                        <a href="#news">Discus</a>
                        <a href="#contact">Pakan</a>
                        <a href="#about">Acesories</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="search">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-danger" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Bar End -->