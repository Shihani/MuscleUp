<?php $page = 'articles'; include 'header.php'?>

<!-- Page Content -->
<div class="container">

    <h1 class="my-4"> Articles </h1>

    <!-- Sanctuary One -->
    <?php foreach ($articles as $article) {?>
        <div class="row">
            <div class="col-md-5">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo $article->image;?>" alt="Image not found">
                </a>
            </div>
            <div class="col-md-7">
                <h3><?php echo $article->title;?></h3>
                <small><p><?php echo $article->timestamp;?></p></small>
                <a class="btn btn-primary" href="<?php echo base_url('index.php/Article/view_full_article')?><?php echo "?id=$article->id"?>">Read More</a>
            </div>
        </div>
        <!-- /.row -->
        <br><br>
        <hr>
        <br>

    <?php }?>
</div>
<!-- /.container -->

<?php include 'footer.php'?>
