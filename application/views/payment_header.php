<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Muscleup.lk </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url('asset/images/logo_white.jpg') ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url("asset/css/style.css")?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Stripe JavaScript library -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        //set your publishable key
        Stripe.setPublishableKey('pk_test_0GJwqWo0RQrWKizQ4KlmarpN');

        //callback to handle the response from stripe
        function stripeResponseHandler(status, response) {
            if (response.error) {
                //enable the submit button
                $('#payBtn').removeAttr("disabled");
                //display the errors on the form
                // $('#payment-errors').attr('hidden', 'false');
                $('#payment-errors').addClass('alert alert-danger');
                $("#payment-errors").html(response.error.message);
            } else {
                var form$ = $("#paymentFrm");
                //get token id
                var token = response['id'];
                //insert the token into the form
                form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                //submit form to the server
                form$.get(0).submit();
            }
        }
        $(document).ready(function() {
            //on form submit
            $("#paymentFrm").submit(function(event) {
                //disable the submit button to prevent repeated clicks
                $('#payBtn').attr("disabled", "disabled");

                //create single-use token to charge the user
                Stripe.createToken({
                    number: $('#card_num').val(),
                    cvc: $('#card-cvc').val(),
                    exp_month: $('#card-expiry-month').val(),
                    exp_year: $('#card-expiry-year').val()
                }, stripeResponseHandler);

                //submit from callback
                return false;
            });
        });
    </script>



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
            <?php if($this->session->userdata('flag')!='a'): ?>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='home'){echo " active";}?>" href="<?php echo base_url('index.php/home'); ?>"> Home <span class="sr-only">(current)</span></a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=='dashboard'){echo " active";}?>" href="<?php echo base_url('index.php/admin'); ?>"> Dashboard <span class="sr-only">(current)</span></a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='articles'){echo " active";}?>" href="<?php echo base_url('index.php/home/articles') ?>">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='forum'){echo " active";}?>" href="<?php echo base_url('index.php/home/forum') ?>">Forum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page=='success_stories'){echo " active";}?>" href="<?php echo base_url('index.php/home/success_stories') ?>">Success Stories</a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-right" style="margin-right: 10px;">
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