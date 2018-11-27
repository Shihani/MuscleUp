<?php $page = 'articles'; include 'header.php';?>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <h1 class="my-4">Health Tips and Articles</h1>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-7">
                <img class="img-fluid" src="<?php echo base_url('asset/images/Health and Tips.jpg')?>" alt="">
            </div>

            <div class="col-md-5 mx-0">
                <h5>TIPS AND TRICKS FOR ULTIMATE FITNESS</h5>
                <h2 class="my-3">DEFINE YOURSELF</h2>
                <h5>BUILD IT!</h5>
                <h6 style="color: #666666">Increase your weights, not your reps, for ultimate muscle building.</h6>
                <hr>
                <h5>FEELING SLEEPY?</h5>
                <h6 style="color: #666666">Take a walk instead of a nap to fight fatigue.</h6>
                <hr>
                <h5>PROTEIN POWER</h5>
                <h6 style="color: #666666">Fitness check: have you had enough protein today? Shoot for 1 - 1.5 grams per pound of body weight if you’re building muscle.</h6>
                <hr>
                <h5>BABY STEPS</h5>
                <h6 style="color: #666666">Great changes don’t happen overnight.  Prevent injuries and build muscle the right way by increasing resistance by no more than 10% per week.</h6>
                <hr>
                <h5>REVERSE PSYCHOLOGY</h5>
                <h6 style="color: #666666">Try counting reps backward.  The low numbers at the end of the set will keep you going.</h6>
                <hr>
                <h5>SPICE IT UP</h5>
                <h6 style="color: #666666">Did you know that hot peppers can help relieve pain?  Try Capsaicin cream for sore muscles.</h6>
                <hr>
                <h5>ACCOUNTABILITY</h5>
                <h6 style="color: #666666">1. Set a major goal today.  2. Tell someone about it to keep yourself honest.  3. Do the work and reach your goal.</h6>
                <hr>
                <h5>BE A WEAKNESS BUSTER</h5>
                <h6 style="color: #666666">Hate an exercise?  It’s probably because you need to strengthen that area.  Do it more often.  Don’t avoid the weakness.</h6>
                <hr>
                <h5>DISCIPLINE</h5>
                <h6 style="color: #666666">Learn to eat for fuel, not for pleasure.</h6>
                <hr>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <h3 class="my-4">Articles</h3>

        <div class="row">

            <?php foreach ($articles as $article) {?>

            <div class="col-md-3 col-sm-6 mb-4">
                <a href="<?php echo base_url('index.php/Article/view_full_article')?><?php echo "?id=".$article->id?>">
                    <img class="img-fluid" src="<?php echo $article->image?>" alt="Image cannot be found">
                    <h5><?php echo $article->title?></h5>
                </a>
            </div>

            <?php }?>

        </div>
        <!-- /.row -->
        <div class="text-center">
            <a class="btn btn-outline-danger" href="<?php echo base_url('index.php/Article/articles')?>">Go to Articles</a>
        </div>

    </div>
    <!-- /.container -->



<?php include 'footer.php' ?>