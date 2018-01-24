<!doctype html>
<html>
<head>
    <title>Laptop Sys</title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>" >
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="/assets/js/bootstrap.min.js"></script>
<body>
    <div class="container">
        <div id="wrapper">
            <div id="menu">
                <?php if ($this->session->userdata('is_logged_in') == false):?>

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
        </div>
