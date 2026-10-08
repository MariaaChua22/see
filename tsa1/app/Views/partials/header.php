<?php
$currentPage = uri_string();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title) ?></title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>

<body>
<div class="container-fluid">
    <div class="row min-vh-100">

        <!-- Custom sidebar class connects to style.css -->
        <aside class="sidebar col-md-3 col-lg-2 p-3">
            <h4 class="sidebar-title">TASK MANAGEMENT</h4>
        <hr>
           <nav class="nav flex-column">
                <a class="nav-link <?= $currentPage === '' ? 'active' : '' ?>"
                    href="<?= base_url('/') ?>">
                    Tasks for Today
                </a>

                <a class="nav-link <?= $currentPage === 'tasks' ? 'active' : '' ?>"
                    href="<?= base_url('tasks') ?>">
                    All Tasks
                </a>

                <a class="nav-link <?= $currentPage === 'profile' ? 'active' : '' ?>"
                    href="<?= base_url('profile') ?>">
                    Profile
                </a>

                <a class="nav-link <?= $currentPage === 'about' ? 'active' : '' ?>"
                    href="<?= base_url('about') ?>">
                    About
                </a>
            </nav>

        </aside>

        <!-- Custom content-area class connects to style.css -->
        <main class="content-area col-md-9 col-lg-10 p-4 p-md-5 d-flex flex-column">