<?php $page = "my_profile"; include 'header.php' ?>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3><i class="fas fa-user-circle"></i> My Profile <small style="color: red"><?php echo $this->session->userdata['username']?></small></h3>
            </div>
        </div>
    </div>
</header>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="<?php echo base_url('index.php/home/my_profile')?>" class="list-group-item list-group-item-action <?php if($panel=='my_profile'){echo " active";}?>"><i class="fas fa-user-circle"></i> My Profile </a>
                    <a href="<?php echo base_url('index.php/user_profile/my_payments')?>" class="list-group-item list-group-item-action <?php if($panel=='my_payment'){echo " active";}?>"><i class="fas fa-money-check-alt"></i> My Payments </a>
                    <a href="<?php echo base_url('index.php/user_profile/my_schedule')?>" class="list-group-item list-group-item-action <?php if($panel=='my_schedule'){echo " active";}?>"><i class="fas fa-book"></i> My Schedule </a>
                    <a href="<?php echo base_url('index.php/user_profile/my_enquiries')?>" class="list-group-item list-group-item-action <?php if($panel=='my_enquiries'){echo " active";}?>"><i class="fas fa-question-circle"></i> My Enquiries </a>
                </div>
            </div>