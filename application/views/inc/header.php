<!doctype html>
<html>
<head>
    <title>Laptop Sys</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div id="wrapper">
        <div id="menu">
            <?php if ($this->session->userdata('user_id') == false):?>

                <h1>Laptop Uitleensysteem</h1>

                <nav>
                        <a href="<?=site_url('dashboard/login')?>">Login</a> |
                        <a href="<?=site_url('admin/login')?>">Admin Login</a> |
                        <a href="<?=site_url('home/register')?>">Registreren</a>
                </nav>

            <?php elseif($this->session->userdata('is_admin') == true):?>

                <h1>Admin Panel</h1>

                <nav>
                    <a href="<?=site_url('admin/home')?>">Manage Users</a> | <a href="<?=site_url('admin/laptops')?>">Laptops</a> | <a href="<?=site_url('admin/logout')?>">Uitloggen</a>
                </nav>

            <?php else:?>

                <h1>User Dashboard</h1>

                <nav>
                    <a href="<?=site_url('dashboard/home')?>">Dashboard</a> | 
                    <a href="<?=site_url('dashboard/account')?>">Mijn Account</a> | 
                    <a href="<?=site_url('laptop/laptops')?>">Laptops</a> |
                    <a href="<?=site_url('dashboard/logout')?>">Uitloggen</a>
                </nav>


            <?php endif; ?>
        </div>
