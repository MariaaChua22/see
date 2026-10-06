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
            <h4 class="sidebar-title">POS SYSTEM</h4>
        <hr>
            <nav class="nav flex-column">
                <a class="nav-link <?= $currentPage === '' ? 'active' : '' ?>"
                    href="<?= base_url('/') ?>">
                    Home
                </a>

                <a class="nav-link <?= $currentPage === 'about' ? 'active' : '' ?>"
                    href="<?= base_url('about') ?>">
                    About
                </a>

                <a class="nav-link <?= $currentPage === 'customers' ? 'active' : '' ?>"
                    href="<?= base_url('customers') ?>">
                    Customer Accounts
                </a>

                <a class="nav-link <?= $currentPage === 'users' ? 'active' : '' ?>"
                    href="<?= base_url('users') ?>">
                    User Accounts
                </a>
            </nav>

        </aside>

        <!-- Custom content-area class connects to style.css -->
        <main class="content-area col-md-9 col-lg-10 p-4 p-md-5 d-flex flex-column">