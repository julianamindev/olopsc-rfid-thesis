<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OLOPSC RFID System: Login</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/core/core.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/daygrid/daygrid.css">

</head>
<body>

<?php if($page !="login"){?>

<nav class="nav-shadow fixed-top">
        <section class="top-nav navbar navbar-expand-lg navbar-light bg-light py-2 px-5">
            <div class="d-flex p-3" style="align-items: center;">
                <img src="<?php echo base_url();?>assets/img/olopsc logo.png" alt="" style="height: 35px;width: auto;">
                <p class="navbar-brand text-primary mb-0 ml-3" href="#">OLOPSC RFID System</p>
            </div>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-flex align-items-center display-none">
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex align-items-center nav-active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle d-flex align-items-center " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div style="height: 28px; width: 28px; margin-right: 8px;border-radius: 50%;"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#aboutUs">About</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>account">Account Settings</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>logout">Sign out</a>
                    </div>
                    </li>
                </ul>
            </div>
        </section>
    </nav>
<?php }?>