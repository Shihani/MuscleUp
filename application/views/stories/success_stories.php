<?php $page = 'success_stories'; include 'header_stories.php';?>

    <header class="masthead" style="background-image: url('<?= base_url('asset/images/success_stories.jpg')?>');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-left">
                    <h1 class="m-0 display-4">Our Success Stories</h1>
                </div>
                <div class="container">
                    <h2>Listen to the stories of our happy customers,</h2>
                    <h5>who experienced our high quality service...</h5>
                </div>
            </div>
        </div>
    </header>

    <div class="container">

        <div class="row">
            <div class="col-lg-12" style="margin-bottom: 10px;">
                <h3 class="my-4"> Let's listen to what's our customers have to say ... </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center mb-4">
                <img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url('asset/images/customers/ravindu.jpg');?>" style="margin-bottom: 10px; width: 250px; height: 250px;" alt="">
                <h3 style="display: inline;">Ravindu Liyanage</h3><h6 style="color: red; display: inline;"> Age 23</h6>
                <p style="color: darkgray;"><cite>"This is the place you are looking for..."</cite></p>
                <a style="color: cornflowerblue" href="<?php echo base_url('index.php/user_stories/ravindu')?>">Read More</a>
            </div>
            <div class="col-lg-4 col-sm-6 text-center mb-4">
                <img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url('asset/images/customers/amaya.jpg');?>" style="margin-bottom: 10px; width: 250px; height: 250px;" alt="">
                <h3 style="display: inline;">Amaya Dilrukshi</h3><h6 style="color: red; display: inline;"> Age 25</h6>
                <p style="color: darkgray;"><cite>"A Dream come true..."</cite></p>
                <a style="color: cornflowerblue" href="<?php echo base_url('index.php/user_stories/amaya')?>">Read More</a>
            </div>
            <div class="col-lg-4 col-sm-6 text-center mb-4">
                <img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url('asset/images/customers/ruwan.jpg');?>" style="margin-bottom: 10px; width: 250px; height: 250px;" alt="">
                <h3 style="display: inline;">Ruwan Perera</h3><h6 style="color: red; display: inline;"> Age 40</h6>
                <p style="color: darkgray;"><cite>"You won't be disappointed..."</cite></p>
                <a style="color: cornflowerblue" href="<?php echo base_url('index.php/user_stories/ruwan')?>">Read More</a>
            </div>
            <div class="col-lg-4 col-sm-6 text-center mb-4">
                <img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url('asset/images/customers/maheshi.jpg');?>" style="margin-bottom: 10px; width: 250px; height: 250px;" alt="">
                <h3 style="display: inline;">Maheshi Sadalika</h3><h6 style="color: red; display: inline;"> Age 38</h6>
                <p style="color: darkgray;"><cite>"Great place with great people..."</cite></p>
                <a style="color: cornflowerblue" href="<?php echo base_url('index.php/user_stories/maheshi')?>">Read More</a>
            </div>
            <div class="col-lg-4 col-sm-6 text-center mb-4">
                <img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url('asset/images/customers/dilan.jpg');?>" style="margin-bottom: 10px; width: 250px; height: 250px;"" alt="">
                <h3 style="display: inline;">Dilan Navod</h3><h6 style="color: red; display: inline;"> Age 28</h6>
                <p style="color: darkgray;"><cite>"Best gym in the city..."</cite></p>
                <a style="color: cornflowerblue" href="<?php echo base_url('index.php/user_stories/dilan')?>">Read More</a>
            </div>
            <div class="col-lg-4 col-sm-6 text-center mb-4">
                <img class="rounded-circle img-fluid d-block mx-auto" src="<?= base_url('asset/images/customers/sameera.jpg');?>" style="margin-bottom: 10px; width: 250px; height: 250px;" alt="">
                <h3 style="display: inline;">Sameera Dulanga</h3><h6 style="color: red; display: inline;"> Age 25</h6>
                <p style="color: darkgray;"><cite>"Service is awesome..."</cite></p>
                <a style="color: cornflowerblue" href="<?php echo base_url('index.php/user_stories/sameera')?>">Read More</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

<?php include 'footer_stories.php' ?>