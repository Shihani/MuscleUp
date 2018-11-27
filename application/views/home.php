
<?php $page = 'home'; include 'header.php' ?>

    <header class="masthead_home" style="background-image: url('<?= base_url('asset/images/home.jpg')?>');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="m-0 display-4">Welcome <small>to the</small></h1>
                    <h1 style="font-weight: bolder; font-size: 80px;"> Muslce Up Fitness Center </h1>
                    <?php if(!$this->session->userdata('loggedIn')):?>
                    <a href="<?=base_url('index.php/home/sign_up')?>" class="btn btn-outline-light" style="border-radius: 40px; font-weight: bold; margin-top: 20px; font-size: 20px;"> Be a Member </a>
                    <?php endif; ?>
                </div>
                <div class="container">
                    <h5 align="center">~ The place your fitness dreams come true ~</h5>
                </div>
            </div>
        </div>
    </header>

    <section class="showcase" style="padding-bottom: 40px;">
        <h2 align="center" style="padding-top: 30px; padding-bottom: 20px;"> Our Services </h2>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?=base_url('asset/images/cardio.jpg')?>); border-radius: 50px;"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2 style="color: #004594">Cardio Programs</h2>
                    <p class="lead mb-0" style="color:#7692A5;">Our cardio programs are the best cardio programs you could ever find. These programs are build according to the newly found fitness techniques and those are highly evaluated by our customers. Just come and see the difference.</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url(<?=base_url('asset/images/bodybuilding.jpg')?>);border-radius: 50px;"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2 style="color: #004594">Body Building</h2>
                    <p class="lead mb-0" style="color:#7692A5;">The area we are second to none. Great trainers, great guidance, brand new equipments, great environment all the things will help you to achieve your goal with no time.</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?=base_url('asset/images/yoga.jpg')?>);border-radius: 50px;"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2 style="color: #004594">Yoga Program</h2>
                    <p class="lead mb-0" style="color:#7692A5;">Rated as the best yoga program in the city. Yeah you will know it from the first day.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container-hero">
        <div class="container" style="padding-bottom: 30px;">
            <div>
                <h2 align="center" style="padding-top: 30px; padding-bottom: 40px;"> Our Online Services </h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100" style="border: none;">
                        <a href="<?=base_url('index.php/home/forum')?>" align="center"><i class="far fa-question-circle fa-10x"></i></a>
                        <div class="card-body" align="center">
                            <h4 class="card-title">
                                <a href="<?=base_url('index.php/home/forum')?>">Forum</a>
                            </h4>
                            <p class="card-text">Post your questions and clear your doubts. Our MuscleUp community will help you to solve your problems</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100" style="border: none;">
                        <a href="<?=base_url('index.php/home/articles')?>" align="center"><i class="fab fa-accusoft fa-10x"></i></a>
                        <div class="card-body" align="center">
                            <h4 class="card-title">
                                <a href="<?=base_url('index.php/home/articles')?>">Health Tips & Articles</a>
                            </h4>
                            <p class="card-text">Get in touch with amazing and valuable health facts and articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100" style="border: none;">
                        <a href="#" align="center"><i class="fab fa-teamspeak fa-10x"></i></a>
                        <div class="card-body" align="center">
                            <h4 class="card-title">
                                <a href="#">Instructor's Service</a>
                            </h4>
                            <p class="card-text">Get the help of highly experienced and trained instructors via online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">Our Experienced Trainers</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="<?=base_url('asset/images/kasun.jpg')?>" alt="">
                        <h5 style="color: darkblue">Kasun Pubudu</h5>
                        <p style="color: red;">Body Building Trainer</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="<?=base_url('asset/images/nadeesha.jpg')?>" alt="">
                        <h5 style="color: darkblue">Nadeesha Perera</h5>
                        <p style="color: red;">Yoga Instructor</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="<?=base_url('asset/images/ramesh.jpg')?>" alt="">
                        <h5 style="color: darkblue">Ramesh Lakshan</h5>
                        <p style="color: red;">Fitness Instructor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'?>