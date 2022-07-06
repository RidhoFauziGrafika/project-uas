<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <!-- Tailwind -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/output.css') ?>">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/Faskes-Icon.png') ?>" type="image/x-icon">
    <title><?= $title ?></title>
</head>

<body class="text-[#23292B] box-border leading-relaxed">
    <nav class="navbar fixed z-[100] w-full flex flex-col lg:flex-row items-center justify-between bg-white bg-opacity-95 py-[14px] px-10 lg:px-[72px] shadow-lg">
        <div class="flex items-center justify-between w-full lg:w-fit pb-3 lg:pb-0 border-mobile">
            <a class="flex items-center" href="<?= base_url('/') ?>">
                <img src="<?php echo base_url('assets/img/Faskes-Icon.png') ?>" class="w-6 h-6 mr-2" alt="">
                <h1 class="text-2xl font-bold">Faskes</h1>
            </a>
            <button id="menu-mobile" class="flex items-center lg:hidden">
                <i id="menu-icon" class='bx bx-menu-alt-right text-3xl' style='color:#23292b'></i>
            </button>
        </div>
        <ul class="flex lg:flex flex-col lg:flex-row lg:items-center justify-between font-medium lg:text-center w-full lg:w-[600px] py-3 lg:py-0 hidden collapse">
            <li class="inline-block lg:px-3 py-3 lg:py-0 transition ease-in-out hover:font-bold"><a href="<?php echo base_url('/') ?>">Beranda</a></li>
            <li class="inline-block lg:px-3 py-3 lg:py-0 transition ease-in-out hover:font-bold"><a href="<?php echo base_url('rumahsakit/index') ?>">Rumah Sakit</a></li>
            <li class="inline-block lg:px-3 py-3 lg:py-0 transition ease-in-out hover:font-bold"><a href="<?php echo base_url('klinikgigi/index') ?>">Klinik Gigi</a></li>
            <li class="inline-block lg:px-3 py-3 lg:py-0 transition ease-in-out hover:font-bold"><a href="<?php echo base_url('klinikumum/index') ?>">Klinik Umum</a></li>
            <li class="inline-block lg:px-3 py-3 lg:py-0 transition ease-in-out hover:font-bold"><a href="<?php echo base_url('puskesmas/index') ?>">Puskesmas</a></li>
            <li class="inline-block lg:px-3 py-3 lg:py-0 transition ease-in-out hover:font-bold"><a href="<?php echo base_url('apotik/index') ?>">Apotik</a></li>
        </ul>
        <button class="collapse hidden lg:block">
            <a class="block bg-[#005FED] rounded-md text-white py-[7px] px-[13px] transition ease-in-out hover:bg-[#0054D2] focus:bg-[#0049B7] focus:ring-4 active:ring-[rgba(0, 95, 237, 0.5)]" href="<?= $this->session->userdata('username') ? base_url('user/indexbe') : base_url('auth'); $this->session->userdata('username') ? $logged_in = true : $logged_in = false ?>"><?= $result = $logged_in ? "Admin" : "Login" ?></a>
        </button>
    </nav>