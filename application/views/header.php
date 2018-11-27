<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url('asset/images/logo_white.jpg') ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url("asset/css/style.css")?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <title> Muscleup.lk </title>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url('index.php/home'); ?>">
        <img src="<?php echo base_url() ?>asset/images/Gym Logo.jpg" width="30" height="30" class="rounded-circle" alt="image">
         Muscle Up
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?php if($page=='home'){echo " active";}?>" href="<?php echo base_url('index.php/home'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='services'){echo " active";}?>" href="<?php echo base_url('index.php/home/services') ?>">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='articles'){echo " active";}?>" href="<?php echo base_url('index.php/home/articles') ?>">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='forum'){echo " active";}?>" href="#">Forum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='gallery'){echo " active";}?>" href="<?php echo base_url('index.php/home/get_photos') ?>">Gallery</a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link <?php if($page=='login'){echo " active";}?>" href="<?php echo base_url("index.php/home/login") ?>">
                    <?php
                    if($this->session->userdata('username')==false) {
                        echo "Login";
                    }
                    ?>
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <?php
            if($this->session->userdata('username')) {
                echo "<li class=\"nav-item dropdown\">";
                echo "<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n";
                echo $this->session->userdata('username');
                echo "</a>\n";
                echo "<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">\n";
                echo "<a class=\"dropdown-item\" href=\"#\">Profile</a>\n";
                echo "<a class=\"dropdown-item\" href=\"" . base_url('index.php/login/user_logout');
                echo "\">Logout</a>\n";
                echo " </div>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
</nav>