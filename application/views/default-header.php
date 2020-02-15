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
        </section>
    </nav>
<?php }?>